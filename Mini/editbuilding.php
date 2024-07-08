<?php
include "db_conn.php";

$id = $_GET["id"];
$errors = array();

if (isset($_POST["submit"])) {
    $bid = $_POST['bid'];
    $roomnum = $_POST['roomnum'];
    $floor = $_POST['floor'];
    $descriptions = $_POST['descriptions'];

    $img_des = '';
      
    if (!is_numeric($bid)) {
       $errors[] = "Bid should be a numeric value.";
    }

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $img_name = $_FILES['image']['name'];
        $img_tmp = $_FILES['image']['tmp_name'];
        $img_des = "upimage/" . $img_name;
        move_uploaded_file($img_tmp, $img_des);
    }
    $bid_check_query = "SELECT id FROM buildings WHERE id=?";
    $stmt = mysqli_prepare($conn, $bid_check_query);
    mysqli_stmt_bind_param($stmt, "s", $bid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) == 0) {
        $errors[] = "Error: The provided BID does not exist.";
    }

    if (empty($errors)) {
        $bid = mysqli_real_escape_string($conn, $bid);
        $roomnum = mysqli_real_escape_string($conn, $roomnum);
        $floor = mysqli_real_escape_string($conn, $floor);
        $descriptions = mysqli_real_escape_string($conn, $descriptions);
        $id = mysqli_real_escape_string($conn, $id);

        $sql = "UPDATE `room` SET `bid`='$bid', `roomnum`='$roomnum', `floor`='$floor', `descriptionOfRoom`='$descriptions'";

        if (!empty($img_des)) {
            $sql .= ", `imgroom`='$img_des'";
        }

        $sql .= " WHERE id = '$id'";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: new_buildingAdmin.php?msg=Data updated successfully");
            exit();
        } else {
            $errors[] = "Failed: " . mysqli_error($conn);
        }
    }
}

$sql = "SELECT * FROM `room` WHERE id = $id LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

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
                <a href="adminpage.php">
                    <ion-icon name="business-outline"></ion-icon>
                    <span>Buildings</span>
                </a>
            </li>
            <li>
                <a id="inbox" href="new_buildingAdmin.php">
                    <ion-icon name="school-outline"></ion-icon>
                    <span>Rooms</span>
                </a>
            </li>
            <li>
                <a href="new_DepartmentAdmin.php">
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
            <h3>Edit Rooms Information</h3>
        </div>

        <?php
        $sql = "SELECT * FROM `room` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">BID:</label>
                        <input type="text" class="form-control" name="bid" value="<?php echo $row['bid'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Room:</label>
                        <input type="text" class="form-control" name="roomnum" value="<?php echo $row['roomnum'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Floor</label>
                        <input type="text" class="form-control" name="floor" value="<?php echo $row['floor'] ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="imageInput"><br>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">descriptionOfRoom</label>
                        <textarea style="height:200px" class="form-control" name="descriptions"><?php echo $row['descriptionOfRoom']; ?></textarea>
                    </div>


                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="new_buildingAdmin.php" class="btn btn-danger">Cancel</a>
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

</body>

</html>
