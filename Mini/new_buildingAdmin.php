<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <link rel="stylesheet" href="admin.css">

  <style>
    main .container{
      text-align: justify;
      line-height: 1.5;
      margin-bottom: 10px;
    }
    table {
        border-spacing: 20px;
}
:root{
    --color-barra-lateral:white;

    --color-texto:rgb(0,0,0);
    --color-texto-menu:rgb(134,136,144);

    --color-menu-hover:rgb(238,238,238);
    --color-menu-hover-texto:rgb(0,0,0);

    --color-boton:rgb(0,0,0);
    --color-boton-texto:rgb(255,255,255);

    --color-linea:rgb(180,180,180);

    --color-switch-base :rgb(201,202,206);
    --color-switch-circulo:rgb(241,241,241);

    --color-scroll:rgb(192,192,192);
    --color-scroll-hover:rgb(134,134,134);
}
 
  </style>
  <title>UCSM campus</title>
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
            <a href="add_new_building.php" style="text-decoration: none;">
           <button class="boton">
                <ion-icon name="add-outline"></ion-icon>
                <span>Add New</span>
            </button> 
            </a>
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
                <li>
                    <a href="ma.html">
                        <ion-icon name="map"></ion-icon>
                        <span>Map</span>
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
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    


    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
        <th scope="col"style="text-align:center">Id</th>
          <th scope="col"style="text-align:center">BuildingId</th>
          <th scope="col"style="text-align:center">Roomnumber</th>
          <th scope="col"style="text-align:center">Floor</th>
          <th scope="col"style="text-align:center">Img</th>
          <th scope="col"style="text-align:center">Description</th>
          <th scope="col"style="text-align:center">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
$sql = "SELECT * FROM `room`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr id='" . $row["id"] . "'>";
    echo "<td style='text-align:center;'>" . $row["id"] . "</td>";
    echo "<td style='text-align:center;'>" . $row["bid"] . "</td>";
    echo "<td style='text-align:center;'>" . $row["roomnum"] . "</td>";
    echo "<td>" . $row["floor"] . "</td>";
    echo "<td><img src='" . $row["imgroom"] . "' width='200px' height='70px'></td>";
    echo "<td>" . $row["descriptionOfRoom"] . "</td>";
    echo "<td>";
    echo "<a href='editbuilding.php?id=" . $row["id"] . "' class='link-dark'><i class='fa-solid fa-pen-to-square fs-5 me-3'></i></a>";
    echo "<a href='#' class='link-dark delete-btn'><i style='color:red;margin-left: 5px;' class='fa-solid fa-trash fs-5'></i></a>";
    echo "</td>";
    echo "</tr>";
}
?>

</tbody>

    </table>
  </div>
  </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="admin.js"></script>

  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".delete-btn").click(function(e) {
        e.preventDefault(); // Prevent default link behavior
        
        var id = $(this).closest("tr").attr("id");
        
        if (confirm('Are you sure you want to delete this record?It can lost all data from the dapartment table assosiated with this!')) {
            $.ajax({
                url: 'deletebuilding.php',
                type: 'GET',
                data: {id: id},
                error: function() {
                    alert('Something went wrong');
                },
                success: function(data) {
                    alert(data); 
                    $("#" + id).remove();
                    alert("Record removed successfully");
                }
            });
        }
    });
});

</script>
</body>

</html>