<?php
    session_start();
    include("./config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arogya</title>
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
                <!--My profile button-->
                <div class="col-md-3">
                    <a href="myprofile.php" class="btn-blue mt-20px">
                        <i class="fa-regular fa-user"></i> My profile
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!--banner-->
    <section class="banner" style="background-image: url(./assets/img/banner.jpg);">
        <div class="container">
            <div class="banner-content">
                <img src="./assets/img/moh_logo.png" alt="MOH-logo" width="auto" height="80px">
                <h1>Inspiring Better Health</h1>
            </div>
            <div class="service">
                <a href="doctors.html">
                    <div class="service-content">
                        Doctors
                    </div>
                    <div class="service-btn">
                        <i class="fas fa-arrow-right"></i>                 
                    </div>
                    <div class="service-icon">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                </a>
                <a href="bookAppointment.php">
                    <div class="service-content">
                        Book an appointment 
                    </div>
                    <div class="service-btn">
                        <i class="fas fa-arrow-right"></i>                 
                    </div>
                    <div class="service-icon">
                        <i class="fas fa-calendar"></i>
                    </div>
                </a>
                <a href="javascript:void(0);">
                    <div class="service-content">
                        Have an emergency? 
                    </div>
                    <div class="service-btn">              
                        <i class="fas fa-arrow-right"></i>                 
                    </div>
                    <div class="service-icon">
                        <div class="call">
                            <i class="fa-solid fa-square-phone"></i>
                        </div>   
                        <div class="call-number">
                            <p>Emergency Line</p>
                            <h3>+94 011 234 5678</h3>
                        </div>                 
                    </div>
                </a>
            </div>

        </div>
    </section>
    <section class="work">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="hours">
                        <h2>Working hours</h2>
                        <div class="time">
                            <div class="booking">Mon-Friday</div>
                            <div class="booking">9AM-10PM</div>
                            <div class="booking">
                                <button type="button" class="btn-white">
                                    <i class="fas fa-calendar-week"></i> Book
                                </button>
                            </div>
                        </div>
                        <div class="time">
                            <div class="booking">Saturday & Sunday</div>
                            <div class="booking">8AM-12PM</div>
                            <div class="booking">
                                <button type="button" class="btn-white">
                                    <i class="fas fa-calendar-week"></i> Book
                                </button>
                            </div>
                        </div>
                        <div class="time">
                            <h4>Time not flexible</h4>
                        <p>get a free checkup</p>
                        <button type="button" class="btn-blue btn-transparent mt-20px">
                            <i class="fas fa-calendar"></i> Suggest checkup time
                        </button>
                        </div>               
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="survey">
                        <a href="javascript:void(0);">
                            <div class="survey-bg" style="background-image: url(./assets/img/survey.jpg);"></div>
                            <div class="survey-content">
                                <div class="survey-icon">
                                    <i class="fa-solid fa-square-poll-vertical"></i>
                                </div>
                                <h2>Take our survey </h2>
                                <p>Take our survey to let us know how your experience was with us. By completing the survey you can get 20% off on your next checkup</p>
                                <button type="button" class="survey-link mt-20px"> Click here to take the survey
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="survey">
                        <a href="javascript:void(0);">
                            <div class="survey-bg" style="background-image: url(./assets/img/hospital.jpg);"></div>
                            <div class="survey-content">
                                <div class="survey-icon">
                                    <i class="fa-regular fa-hospital"></i>
                                </div>
                                <h2>Our facility </h2>
                                <p>Proin mattis sollicitudin tellus. Nulla pellentesque maximus purus, quis mollis dolor aliquet at. Phasellus efficitur et metus in condimentum. Maecenas rutrum blandit libero in porttitor. Suspendisse potenti. Nulla malesuada, ante eget pretium pharetra, augue odio eleifend purus, vel ultrices dui mi sed nisl. Etiam aliquet urna nec arcu vestibulum congue. Aliquam pellentesque, lacus et suscipit volutpat, lorem ex aliquam enim, et facilisis quam orci eget turpis. Mauris a enim fringilla, pellentesque dui eget, ultrices velit.</p>
                                <button type="button" class="survey-link mt-20px"> Click here to view more pictures
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
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