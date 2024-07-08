<?php
include "db_conn.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_department_sql = "DELETE FROM `department` WHERE rid IN (SELECT id FROM `room` WHERE bid = $id)";
    $delete_department_result = mysqli_query($conn, $delete_department_sql);

    if($delete_department_result || mysqli_affected_rows($conn) == 0) {
        $delete_room_sql = "DELETE FROM `room` WHERE bid = $id";
        $delete_room_result = mysqli_query($conn, $delete_room_sql);

        if($delete_room_result) {
            
            $delete_buildings_sql = "DELETE FROM `buildings` WHERE id = $id";
            $delete_buildings_result = mysqli_query($conn, $delete_buildings_sql);

            if($delete_buildings_result) {
                echo "Building and associated records deleted successfully.";
            } else {
                echo "Failed to delete building: " . mysqli_error($conn);
            }
        } else {
            echo "Failed to delete record from parent table";
        }
    } else {
        echo "Failed to delete associated records from child table";
    }
}
?>
