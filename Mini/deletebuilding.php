<?php
include "db_conn.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    

    $delete_department_sql = "DELETE FROM `department` WHERE rid = $id";
    $delete_department_result = mysqli_query($conn, $delete_department_sql);

    if($delete_department_result || mysqli_affected_rows($conn) == 0) {
        $delete_room_sql = "DELETE FROM `room` WHERE id = $id";
        $delete_room_result = mysqli_query($conn, $delete_room_sql);

        if($delete_room_result) {
            echo "It can lost all data from the dapartment table assosiated with this";
        } else {
            echo "Failed to delete record from parent table";
        }
    } else {
        echo "Failed to delete associated records from child table";
    }
}
?>
