<?php
    session_start();
    include("./config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./system/plugins/bootstrap/css/bootstrap.min.css"/>
</head>
    <header>          
        <!--logo-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 border">      
                    <div class="logo border">
                        <a href="index.html">
                           <img src="./assets/img/logo.png" alt="logo" height="80px" width="80px">
                        </a>
                    </div>
                    <!--menu-->
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="userDashboard.php">Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">About us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Services</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Pharmacy</a>
                            </li>
                            <li>
                                <a href="so.php">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--search and location-->
                <div class="col-md-2">
                    <div class="header-social text-center">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">                                  
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="fa-solid fa-location-dot"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </header>
    <!--banner-->
    <section class="banner" style="background-image: url(./assets/img/myprofile.jpg);">
        <div class="container">
            <div class="service">
                <a href="appointments.php">
                    <div class="service-content">
                        Apointments
                    </div>
                    <div class="service-btn">
                        <i class="fas fa-arrow-right"></i>                 
                    </div>
                    <div class="service-icon">
                    <i class="fa-regular fa-calendar-check"></i>
                    </div>
                </a>
                <a href="displayUserInfo.php">
                    <div class="service-content">
                        Edit profile
                    </div>
                    <div class="service-btn">
                        <i class="fas fa-arrow-right"></i>                 
                    </div>
                    <div class="service-icon">
                         <i class="fa-regular fa-pen-to-square"></i>
                    </div>
                </a>
                <a href="deleteProfile.php">
                    <div class="service-content">
                        Delete profile
                    </div>
                    <div class="service-btn">              
                        <i class="fas fa-arrow-right"></i>                 
                    </div>
                    <div class="service-icon">
                        <i class="fa-solid fa-trash-can"></i>
                    </div>
                </a>
            </div>

        </div>
    </section>
    <script>
        //scroll bar
        var header = document.getElementsByTagName("header");
        window.onscroll = function () {scrollFunction()};

        function scrollFunction(){
            if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200){
                header[0].setAttribute("class", "header-active");
            }
            else{
                header[0].removeAttribute("class")
            }
        }

    </script>
    <!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
        
      </section>
      <!-- Section: Social media -->
        </form>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="www.linkedin.com/in/amshar-mushtaq-b08a97229">Amshar</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
<body>

</body>         

</html>