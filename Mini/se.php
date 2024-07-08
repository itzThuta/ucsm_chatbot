<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- ===== Boxicons CSS ===== -->
     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="footer.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    transition: all 0.4s ease;;
}

:root{
    --body-color: lightgrey;
    --nav-color: #2f1fe4;
    --side-nav: #010718;
    --text-color: #FFF;
    --search-bar: #F2F2F2;
    --search-text: #010718;
}

body{
    height: 100vh;
    background-color: var(--body-color);
    
    background-repeat: no-repeat;
    background-size: cover;
}

body.dark{
    --body-color: #18191A;
    --nav-color: #242526;
    --side-nav: #242526;
    --text-color: #CCC;
    --search-bar: #242526;
}

nav{
    position: fixed;
    top: 0;
    left: 0;
    height: 70px;
    width: 100%;
    background-color: var(--nav-color);
    z-index: 100;
}

body.dark nav{
    border: 1px solid #393838;

}

nav .nav-bar{
    position: relative;
    height: 100%;
    max-width: 1000px;
    width: 100%;
    background-color: var(--nav-color);
    margin: 0 auto;
    padding: 0 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    
    
}

nav .nav-bar .sidebarOpen{
    color: var(--text-color);
    font-size: 25px;
    padding: 5px;
    cursor: pointer;
    display: none;
}

nav .nav-bar .logo{
    color: var(--text-color);
    font-size: 35px;
    font-weight: 700;
}


.navLogo img{
  width: 50px;
  height: 50px;
  position: 50%;
  margin-top: 1px;
  vertical-align: middle;
}

.menu .logo-toggle{
    display: none;
}

.nav-bar .nav-links{
    display: flex;
    align-items: center;
}

.nav-bar .nav-links li{
    margin: 0 5px;
    list-style: none;
}

.nav-links li a{
    position: relative;
    font-size: 17px;
    font-weight: 400;
    color: var(--text-color);
    text-decoration: none;
    padding: 10px;
}

.nav-links li a::before{
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 6px;
    width: 6px;
    border-radius: 50%;
    background-color: var(--text-color);
    opacity: 0;
    transition: all 0.3s ease;
}

.nav-links li:hover a::before{
    opacity: 1;
}

.nav-bar .darkLight-searchBox{
    display: flex;
    align-items: center;
}

.darkLight-searchBox .dark-light,
.darkLight-searchBox .searchToggle{
    height: 40px;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 5px;
}

.dark-light i,
.searchToggle i{
    position: absolute;
    color: var(--text-color);
    font-size: 22px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: fixed;
    
}

.dark-light i.sun{
    opacity: 0;
    pointer-events: none;
}

.dark-light.active i.sun{
    opacity: 1;
    pointer-events: auto;
}

.dark-light.active i.moon{
    opacity: 0;
    pointer-events: none;
}

.searchToggle i.cancel{
    opacity: 0;
    pointer-events: none;
}

.searchToggle.active i.cancel{
    opacity: 1;
    pointer-events: auto;
}

.searchToggle.active i.search{
    opacity: 0;
    pointer-events: none;
}

.searchBox{
    position: relative;
}

.searchBox .search-field{
    position: absolute;
    bottom: -85px;
    right: 5px;
    height: 50px;
    width: 200px;
    display: flex;
    align-items: center;
    --av-color:rgb(203, 199, 199);
    background-color: var(--nav-color);
    padding: 3px;
    border-radius: 6px;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.searchToggle.active ~ .search-field{
    bottom: -74px;
    opacity: 1;
    pointer-events: auto;
}

.search-field::before{
    content: '';
    position: absolute;
    right: 14px;
    top: -4px;
    height: 12px;
    width: 12px;
    background-color: var(--nav-color);
    transform: rotate(-45deg);
    z-index: -1;
}

.search-field input{
    height: 100%;
    width: 100%;
    padding: 0 45px 0 15px;
    outline: none;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 400;
    color: var(--search-text);
    background-color: var(--search-bar);
}

body.dark .search-field input{
    color: var(--text-color);
}

.search-field i{
    position: absolute;
    color: var(--nav-color);
    right: 15px;
    font-size: 22px;
    cursor: pointer;
}

body.dark .search-field i{
    color: var(--text-color);
}

@media screen and (max-width: 790px) {
    nav .nav-bar .sidebarOpen{
        display: block;
    }

    .menu{
        position: fixed;
        height: 100%;
        width: 320px;
        left: -100%;
        top: 0;
        padding: 20px;
        background-color: var(--side-nav);
        z-index: 100;
        transition: all 0.4s ease;
    }

    nav.active .menu{
        left: -0%;
    }

    nav.active .nav-bar .navLogo a{
        opacity: 0;
        transition: all 0.3s ease;
    }

    .menu .logo-toggle{
        display: block;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo-toggle .siderbarClose{
        color: var(--text-color);
        font-size: 24px;
        cursor: pointer;
    }

    .nav-bar .nav-links{
        flex-direction: column;
        padding-top: 30px;
    }

    .nav-links li a{
        display: block;
        margin-top: 20px;
    }
}


        .backstyle{
            margin-top: 80px;
            overflow: hidden;
            color: black;
        } 

        body.dark .backstyle{
            color:#F2F2F2;
        }

        .gar{
            margin-top: 75px;
        }
        body.dark  .gar{
            color:#F2F2F2;
        }
        .backstyle img {
            float: left;
            clear: left;
            height: 400px;
            width: 50%;
            margin-bottom: 50px;
        }
        .backstyle h3,h4,h5,p {
            float: right;
            clear: right;
            width: 45%;

            margin-bottom: 50px;
            text-align: justify;
        }
        @media screen and (max-width: 790px){
            .backstyle img{
                float: none;
                width: 450px;
                height: 500px;
            }
            .backstyle h3,h4,h5,p {
                float: none;
                width: auto;
                text-align: justify;
                line-height: 1.2;
            }
       }
       
    </style>
</head>
<body>

<?php include("nav.php") ?>
<?php
include "abb.php";

/*function isInDictionary($word) {
    $dictionary = file("dictionary.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    return in_array(strtolower($word), $dictionary);
}
*/
if (empty($_POST["a"])) {
    echo "<div class='gar'>";
    echo "<h2 style=' text-align: center;  background-color: red;'>NO Result Found</h2>";
    echo "<h2><a href ='index.html'>Back</a></h2>";
    echo "</div>";
}/* else {
    $search = trim($_POST["a"]);
    if (!isInDictionary($search)) {
        echo "<div class='gar'>";
        echo "<h2><center>Check the spelling and Try Again!</center></h2>";
        echo "<h2><a href ='index.html'><buttom>Back</buttom></a></h2>";
        echo "</div>";
    }*/
     else {
        $search = trim($_POST["a"]);
        $searchWithoutSpaces = str_replace(' ', '', $search);
        
        $query_building = $db->prepare("SELECT id AS building_id, bname AS building_name, img AS image, description AS building_description
                                        FROM buildings
                                        WHERE REPLACE(bname, ' ', '') LIKE :search OR
                                        REPLACE(description, ' ', '') LIKE :search
                                        ");
        $query_building->execute(array(':search' => "%$searchWithoutSpaces%"));
        $buildings = $query_building->fetchAll(PDO::FETCH_OBJ);

        $query_room = $db->prepare("SELECT roomnum AS roomnumber, floor AS floornumber, imgroom AS imageroom,
                                            descriptionOfRoom AS room_description, buildings.bname AS building_name, buildings.img AS building_image, buildings.description AS building_description
                                            FROM `room`
                                            JOIN `buildings` ON room.bid = buildings.id
                                            WHERE REPLACE(room.roomnum, ' ', '') LIKE :search 
                                            OR REPLACE(room.floor, ' ', '') LIKE :search 
                                            OR REPLACE(room.descriptionOfRoom, ' ', '') LIKE :search");
        $query_room->execute(array(':search' => "%$searchWithoutSpaces%"));
        $rooms = $query_room->fetchAll(PDO::FETCH_OBJ);
        
        $query_department = $db->prepare("SELECT department.id AS department_id, departmentname, floors, imgdepartment AS imagedepartment, descriptionOfDepartment AS department_description, roomnum, floor, imgroom, buildings.bname AS building_name
        FROM department
        JOIN `room` ON room.id = department.rid
        JOIN `buildings` ON department.brid = buildings.id
        WHERE REPLACE(room.roomnum, ' ', '') LIKE :search 
            OR REPLACE(room.floor, ' ', '') LIKE :search 
            OR REPLACE(room.descriptionOfRoom, ' ', '') LIKE :search 
            OR REPLACE(departmentname, ' ', '') LIKE :search 
            OR REPLACE(floors, ' ', '') LIKE :search 
            OR REPLACE(descriptionOfDepartment, ' ', '') LIKE :search");

        $query_department->execute(array(':search' => "%$searchWithoutSpaces%"));
        $departments = $query_department->fetchAll(PDO::FETCH_OBJ);

        foreach ($buildings as $building) {
            echo "<div class='backstyle'>";
            echo "<img src='{$building->image}'>";
            echo "<h3>Building - {$building->building_name}</h3>";
            echo "<p>{$building->building_description}</p>";
            echo "</div>";
        }

        
        foreach ($rooms as $room) {
            echo "<div class='backstyle'>";
            echo "<img src='{$room->imageroom}'>";
            echo "<h3>Building - {$room->building_name}</h3>";
            echo "<h4>RoomNumber - {$room->roomnumber}</h4>";
            echo "<h4>{$room->floornumber}</h5>";
            echo "<p>{$room->room_description}</p>";
            echo "</div>";
        }

        foreach ($departments as $department) {
            echo "<div class='backstyle'>";
            echo "<img src='{$department->imagedepartment}'>";
            echo "<h3>Building - {$department->building_name}</h3>";
            echo "<h4>Room/DepartmentNumber - {$department->roomnum}</h4>";
            echo "<h4>{$department->departmentname}</h5>";
            echo "<h4>{$department->floors}</h5>";
            echo "<p>{$department->department_description}</p>";
            echo "</div>";
        }
    }

?>
</body>
</html>
