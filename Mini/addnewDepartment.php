<?php
include "db_conn.php";

$errors = array(); 

if (isset($_POST["submit"])) {
    $rid = $_POST['rid'];
    $brid = $_POST['brid'];
    $departmentname = $_POST['departmentname'];
    $floors = $_POST['floors'];
    $descriptionss = $_POST['descriptionss'];
    if (!is_numeric($rid)) {
        $errors[] = "Rid should be a numeric value.";
    }

    if (!is_numeric($brid)) {
        $errors[] = "Brid should be a numeric value.";
    }

    $sql_check_rid = "SELECT id FROM room WHERE id = ?";
    $stmt_check_rid = mysqli_prepare($conn, $sql_check_rid);
    mysqli_stmt_bind_param($stmt_check_rid, "s", $rid);
    mysqli_stmt_execute($stmt_check_rid);
    mysqli_stmt_store_result($stmt_check_rid);
    $rid_exists = mysqli_stmt_num_rows($stmt_check_rid) > 0;

    if (!$rid_exists) {
        $errors[] = "Invalid rid. Please enter a valid room ID.";
    }

    
    $sql_check_brid = "SELECT id FROM buildings WHERE id = ?";
    $stmt_check_brid = mysqli_prepare($conn, $sql_check_brid);
    mysqli_stmt_bind_param($stmt_check_brid, "s", $brid);
    mysqli_stmt_execute($stmt_check_brid);
    mysqli_stmt_store_result($stmt_check_brid);
    $brid_exists = mysqli_stmt_num_rows($stmt_check_brid) > 0;

    if (!$brid_exists) {
        $errors[] = "Invalid brid. Please enter a valid building ID.";
    }
    if (empty($errors)) {
        $img_name = $_FILES['image']['name'];
        $img_tmp = $_FILES['image']['tmp_name'];
        $img_des = "upimage/" . $img_name;

        if (move_uploaded_file($img_tmp, $img_des)) {
            $sql = "INSERT INTO `department`(`id`, `rid`, `brid`, `departmentname`, `floors`, `imgdepartment`, `descriptionOfDepartment`) 
                    VALUES (NULL, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ssssss", $rid, $brid, $departmentname, $floors, $img_des, $descriptionss);
                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                    header("Location: new_DepartmentAdmin.php?msg=New record created successfully");
                    exit();
                } else {
                    echo "Failed to execute query.";
                }
            } else {
                echo "Failed to prepare statement.";
            }
        } else {
            echo "<div class='error-message-container'><center><h2 class='error-message'>Please Upload an Image.</h2></center></div>";
        }
    } else {
        foreach ($errors as $error) {
            echo "<div class='error-message-container'><center><h2 class='error-message'>$error</h2></center></div>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCSM campus</title>
    <link rel="stylesheet" href="admin.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

    .error-message-container {
        background-color:red; 
        border: 1px solid #f5c6cb; 
        padding: 10px;
        margin-bottom: 20px; 
        border-radius: 5px;
    }

    .error-message {
        color: #721c24; 
        font-size: 20px;
        
    }

</style>
</head>
<body style="background-color:lightgray;">


<div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
    <div>
            <div class="nombre-pagina">
                <img id="cloud" src="upimage/ucsm.png" alt="UCSM" style="width: 50px">
                <span>Dashboard</span>
            </div>
            
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a  href="adminpage.php">
                        <ion-icon name="business-outline"></ion-icon>
                        <span>Buildings</span>
                    </a>
                </li>
                <li>
                    <a  href="new_buildingAdmin.php">
                        <ion-icon name="school-outline"></ion-icon> 
                        <span>Rooms</span>
                    </a>
                </li>
                <li>
                    <a id="inbox" href="new_DepartmentAdmin.php">
                        <ion-icon name="desktop-outline"></ion-icon>
                        <span>Departments</span>
                    </a>
                </li>
                
                
            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Drak Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="usuario">
                <a href="login_form.html"> <ion-icon name="log-out" style="font-size: 30px; padding-top: 10px;"></ion-icon></a>

                <div class="info-usuario" style="padding-left: 20px;">
                    <div class="nombre-email">
                       <a href="login_form.html" style="text-decoration:none"><span style="font-size: 30px; padding-bottom: 20px;">Logout</span></a> 
                    </div>
                </div>
            </div>
            
        </div>

    </div>
<main>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Information</h3>

        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Rid:</label>
                        <input type="text" class="form-control" name="rid" placeholder="" required>
                    </div>

                    <div class="col">
                        <label class="form-label">Brid:</label>
                        <input type ="text" class="form-control" name="brid" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Departmentname</label>
                        <input type="text" class="form-control" name="departmentname" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Floors:</label>
                    <input type="text" class="form-control" name="floors" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id=""><br>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descriptions:</label>
                    <textarea style="height: 200px;" class="form-control" name="descriptionss"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="new_DepartmentAdmin.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    </main>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="admin.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
