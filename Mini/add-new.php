<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $bname = $_POST['bname'];
   $description = $_POST['description'];

   
   $img_name = $_FILES['image']['name'];
   $img_tmp = $_FILES['image']['tmp_name'];
   $img_des = "upimage/" . $img_name;
   

   if (move_uploaded_file($img_tmp, 'upimage/' . $img_name)) {
      $sql = "INSERT INTO `buildings`(`id`, `bname`, `img`, `description`) VALUES (NULL, ?, ?, ?)";
      $stmt = mysqli_prepare($conn, $sql);

      if ($stmt) {
         mysqli_stmt_bind_param($stmt, "sss", $bname, $img_des, $description);
         $result = mysqli_stmt_execute($stmt);

         if ($result) {
            header("Location: adminpage.php?msg=New record created successfully");
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
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="admin.css">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>UCSM campus</title>
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
      .main {
         background-color: gainsboro;
         margin-top: 10px;
         max-width: 400px;
      }
      
   </style>
</head>
<body style="background-color: lightgray;">
  

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
                    <a href="new_buildingAdmin.php">
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
         <form action="" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Building:</label>
                  <input type="text" class="form-control" name="bname" placeholder="" required>
               </div>
             
                  <div class="mb-3">
                     <label class="form-label">image</label>
                     <input type="file" class="form-control" name="image" id=""><br>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Descriptions:</label>
                    <textarea style="height: 200px;" class="form-control" name="description"></textarea>
                </div>

                  <div>
                     <button type="submit" class="btn btn-success" name="submit">Save</button>
                     <a href="adminpage.php" class="btn btn-danger">Cancel</a>
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
