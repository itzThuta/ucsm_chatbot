<!DOCTYPE HTML>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>UCSM Campus Navigation and Information</title>
      <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="information.css" />
       
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

      <!-- ===== Footer CSS ===== -->
      <link rel="stylesheet" href="footer.css">
   
    <style>
        /* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    transition: all 0.4s ease;;
}


/* ===== Colours ===== */
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

img{
  width: 50px;
  height: 50px;
  object-position: 50%;
  margin-right: -100px;
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
    background-color: var(--av-color);
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

@media (max-width: 790px) {
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
        .section-container{
            padding-top: 50px;
        }

        @media screen and (max-width: 575.99px) {
    footer{
        margin-top: 10px;
        padding-top: 10px;
    }
}
 
.section-container .content-container {
    h5{
            color: #010718;
        }
        p{
            color: #010718;
        }
    }

body.dark .section-container .content-container{
    h5{
            color: white;
        }
        p{
            color: white;
        }
        }
    </style>
   </head>
   <body>
    <?php include("nav.php") ?>

      <div class="section-container">
         <div class="columns image" style="background-image:url('IMG/Rector.jpg')">
            &nbsp;
         </div>
         <div class="columns content">
            <div class="content-container">
            <h5>OUR HISTORY</h5>
        <br>
        <p>On 18th September 1997, the University of Computer Studies, Mandalay was established
        under the Ministry of Science and Technology to conduct teaching and research in various
        branches of computer education in Myanmar, UCSM offers both undergraduate and
        advanced computer education in Myanmar, UCSM offers both undergraduate and
        postgraduate degrees as well as dioploma programs in computer studies. On 27th January
        2009, the Ph.D. program was started. UCSM is promoted as University of Computer
        Studies, Mandalay (Centre of Excellence) in 2012-2013 Academic Year. Its teaching
        materials and textbooks are in English. Our Missions are to produce experts who have the 
        practical ability to invent, install, experiment with, and apply computer hardware and 
        software with a view to making Myanmar a modern and developed nation and to train
        Information Technology (IT) professionals for Myanmar.</p>
        <br>
        <p>
            Learning Management System (LMS) has been using as a learning platform 
            at UCSM since 2014. Teachers and students access the learning resources 
            (e-Books, lecture slides, learning materials, etc.) from the Class or Lab 
            Rooms or their places. Student assessments such as tutorials, assignments, 
            mid-term exams, practical exams and other activities are performed via LMS.
        </p>
        <br>
            </div>
         </div>
      </div>
      <div class="section-container">
         <div class="columns content">
            <div class="content-container">
            <h5>RECTOR'S MESSAGE</h5>
    <br>
    <p>Welcome to University of Computer Studies, Mandalay!</p>
        <br>
    <p>
        University of Computer Studies, Mandalay (UCSM), which was founded in 1997 is the secondly 
        established University in Computing disciplines and majors in Myanmar. Although it was begun 
        with providing only Bachelor of Computer Science (B. C. Sc.) and Bachelor of Computer Technology 
        (B. C. Tech.) degrees in the early years, it has gradually been upgraded to open post graduate 
        Courses and it is currently offering six Graduate degrees, Master and Doctoral degrees.
    </p>
    <br>
    <p>
        UCSM is currently implementing the outcomes-based teaching and learning and digital transformation 
        with Courses. The mission of the UCSM is to contribute to society through producing high-quality 
        graduates and applied research outcomes. The core values of UCSM are promoting accessibility, 
        inclusiveness, integrity and excellence. The research areas are focused on applied and current 
        fields of ICT which enable to assist social and economic development of Myanmar and is also in line 
        with both Sustainable Development Goals 2030 (SDG) and Myanmar Sustainable Development Plan 2018-2030 (MSDP).
    </p>
            </div>
         </div>
         <div class="columns image" style="background-image:url('IMG/background.jpg')">
            &nbsp;
         </div>
      </div>
      <div class="section-container">
         <div class="columns image" style="background-image:url('IMG/aboutus.jpg')">
            &nbsp;
         </div>
         <div class="columns content">
            <div class="content-container">
                <h5>Mission</h5>
              <p>
              • To nurture graduates who have self- directed learning skills to meet the changing demand of the future jobs<br>

              • To offer the programmes that produce graduates who have competitive power in regional and national labour market<br>

              • To improve the quality of education in terms of curriculum, learning environment, research and teaching processes<br>

              • To fulfill the university's infrastructure to reinforce interactive teaching, learning and assessment methods<br>

              • To provide opportunities for professional development of faculty to support their educational and pedagogical responsibilities
              </p>
            </div>
         </div>
      </div>

      <footer>
    <div class="footerInfo">
        <div class="footerContainer">
            <div class="footerItem">

                <div class="socialInfo">
                    <div class="mainTitle">
                        <h4> Follow Us <span></span></h4>
                    </div>
                    <div class="socialItem">
                        <div class="socialLink facebook">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="socialLink instagram">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="socialLink twitter">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                </div>

                <div class="socialInfo">
                    <div class="mainTitle">
                        <h4> Developer Team <span></span></h4>
                    </div>
                    <div class="socialItem">
                        <a href="#"> @Ye Naing Win</a>
                        <a href="#"> @Kaung Htet Swam</a>
                        <a href="#"> @Htike Si Thu Aung</a>
                        <a href="#"> @Khant Zin Hein</a>
                    </div>
                </div>

                <div class="socialInfo">
                    <div class="mainTitle">
                        <h4> Rector Office<span></span></h4>
                    </div>
                    <h5 class="addressTitle">Ph:09-797111333-106</h5>
                    <h5 class="addressTitle"> Email: studentaffairs@ucsm.edu.mm</h5>
                    <h5><a href="https://www.ucsm.edu.mm/">www.ucsm.edu.mm</a></h5>
                </div>

                <div class="socialInfo">
                    <div class="mainTitle">
                        <h4> Address <span></span></h4>
                    </div>
                    <h5 class="addressTitle">Mandalay-Mogok Road<br>Patheingyi Township,Mandalay-Myanmar</h5>
                    <div class="callInfo">
                        <h6>Call</h6> <i class="fa-solid fa-arrow-right-long"></i>
                        <span>09-752302115</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
   </body>
</html>
