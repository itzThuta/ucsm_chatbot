<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
    
    $first_name = mysqli_real_escape_string($conn, $_POST['bname']);
    $last_name = mysqli_real_escape_string($conn, $_POST['description']);

    
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        
        $img_name = mysqli_real_escape_string($conn, $_FILES['image']['name']);
        
        $img_loc = $_FILES['image']['tmp_name'];
        $img_des = "upimage/" . $img_name;
        move_uploaded_file($img_loc, 'upimage/' . $img_name);
    } else {
        
        $img_des = $row['img'];
    }

    
    $sql = "UPDATE buildings SET bname='$first_name', img='$img_des', description='$last_name' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: adminpage.php?msg=Data updated successfully");
        exit(); 
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="admin.css">
</head>

<body style="background-color:lightgray;">

    <!-- Navigation Bar -->
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
                    <a id="inbox" href="adminpage.php">
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
                    <a  href="new_DepartmentAdmin.php">
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
                        <div class="circulo"></div>
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
                <h3>Edit Buildings Information</h3>
            </div>

            <?php
            $sql = "SELECT * FROM buildings WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>

            <div class="container d-flex justify-content-center">
                <form action="" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Building:</label>
                            <input type="text" class="form-control" name="bname" value="<?php echo $row['bname'] ?>">
                        </div>
                        <div class="col">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="imageInput"><br>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea style="height: 200px;" class="form-control" name="description"><?php echo $row['description']; ?></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="adminpage.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script src="admin.js"></script>

</body>

</html>
