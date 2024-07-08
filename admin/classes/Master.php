<?php
require_once('../config.php');
Class Master extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	
	public function save_response(){
		extract($_POST);
	
		// Process and save the image
		$image_name = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		$image_path = "uploads/" . $image_name; // Define the path where the image will be saved
	
		move_uploaded_file($image_tmp, $image_path); // Move the uploaded image to the specified path
	
		// Save the response message and image path to the database
		$ins_resp = $this->conn->query("INSERT INTO responses SET response_message = '{$response_message}', images = '{$image_path}' ");
	
		if(!$ins_resp){
			return 2; // Return an error code if insertion fails
			exit;
		}
	
		$resp_id = $this->conn->insert_id;
	
		foreach($question as $k => $v){
			$data = "response_id = {$resp_id}, ";
			$data .= "question = '$question[$k]'";
	
			// Insert each question along with the response ID
			$ins[] = $this->conn->query("INSERT INTO questions SET $data");
		}
	
		if(isset($ins) && count($ins) == count($question)){
			$this->settings->set_flashdata("success", "Data successfully saved");
			return 1; // Return success code if all questions are saved successfully
		} else {
			return 2; // Return error code if there are issues with saving questions
			exit;
		}
	}
	public function delete_response(){
		extract($_POST);
		 $del = $this->conn->query("DELETE FROM `questions` where id = $id");
		 if($del){
			$this->settings->set_flashdata("success"," Data successfully deleted");
		 	return 1;
		 }else{
		 	$this->conn->error;
		 }
	}

	public function get_response(){
		extract($_POST);
		$message = str_replace(array("?"), '', $message);
		$not_question = array("what", "what is","who","who is", "where");
		if(in_array($message,$not_question)){
			$resp['status'] = "success";
			$resp['message'] = $this->settings->info('no_result');
			return json_encode($resp);
			exit;
		}
		$sql = "SELECT r.response_message,r.images,q.id from `questions` q inner join `responses` r on q.response_id = r.id where q.question Like '%{$message}%' ";
		$qry = $this->conn->query($sql);

		if($qry->num_rows > 0){
			$result = $qry->fetch_array();
			// var_dump($result);
			$resp["imageid"] =  $result['images'];
			$resp['status'] = "success";
			$resp['message'] = $result['response_message'];
			$resp['sql'] = $sql;
			$this->conn->query("INSERT INTO `frequent_asks` set question_id = '{$result['id']}' ");
			return json_encode($resp);
		}else{
			$resp['status'] = "success";
			$resp['message'] = $this->settings->info('no_result');
			$chk = $this->conn->query("SELECT * FROM `unanswered` where `question` = '{$message}' ");
			if($chk->num_rows > 0){
				$this->conn->query("UPDATE `unanswered` set no_asks = no_asks + 1 ");
			}else{
				$this->conn->query("INSERT INTO `unanswered` set question = '{$message}' ");
			}
			return json_encode($resp);
		}

	



	}
	public function delete_unanswer(){
		extract($_POST);
		 $del = $this->conn->query("DELETE FROM `unanswered` where id = $id");
		 if($del){
			$this->settings->set_flashdata("success"," Data successfully deleted");
		 	return 1;
		 }else{
		 	$this->conn->error;
		 }
	}
}

$Master = new Master();
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
$sysset = new SystemSettings();
switch ($action) {
	case 'save_response':
		echo $Master->save_response();
	break;
	case 'delete_response':
		echo $Master->delete_response();
	break;
	case 'get_response':
		echo $Master->get_response();
	break;
	case 'delete_unanswer':
		echo $Master->delete_unanswer();
	break;
	default:
		// echo $sysset->index();
		break;
}