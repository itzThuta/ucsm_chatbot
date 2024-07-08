<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCSM Campus Navigation and Information</title>

    

    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <style>
        .search-field::before{
    content: '';
    position: absolute;
    right: 14px;
    top: -4px;
    height: 14px;
    width: 15px;
    background-color: var(--nav-color);
    transform: rotate(-45deg);
    z-index: -1;
}

.search-field input{
    height: 34px;
    width: 240px;
    padding: 0 45px 0 15px;
    outline: none;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 400;
    color: var(--search-text);
    background-color: var(--search-bar);
}

 .searchToggle.active ~ .search-field{
    bottom: -74px;
    opacity: 1;
    width: 250px;
    pointer-events: auto;
}
    .searchBox .search-field{
    position: absolute;
    bottom: -85px;
    right: 5px;
    height: 50px;
    width: 250px;
    display: flex;
    align-items: center;
    --av-color:rgb(203, 199, 199);
    background-color: var(--av-color);
    padding: 3px;
    border-radius: 6px;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}
button{
          border:none;
          background-color: #64b9fa;
          outline:none;
          cursor: pointer;
         position: absolute;
        }
        i{
            margin:9px;
        }
</style>
</head>
<body>
<nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><img src='IMG/ucsm1.png' alt="UCSM" style="margin-right: 7px;">UCSM</span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo">UCSM</span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="info.html">Campus Information</a></li>
                    <li><a href="map.html">Map</a></li>
                    <li><a href="../user_login/dashboard_home.php">UCSM ChatBot</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>
                    <div class="search-field">
                          <form action="se.php" method="POST">
                        <input type="text" name="a" placeholder="Search...">
                        <button><i class='bx bx-search'></i></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<script src="script.js"></script>
</body>
</html>