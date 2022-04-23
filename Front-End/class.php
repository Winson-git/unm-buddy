<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/class.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Class</title>
        <link href="pictures/UNMLogo.png" rel="icon"/>
    </head>


    <body>
    <div class="menusidebar">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="search-container">
                        <form>
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <! contain >
            <h1>Modules Overview</h1>
            <div class="modv">
                <ul class="cards">
                    <li>
                        <a href="" class="card">
                            <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt=""/>
                            <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                        <path/>
                                    </svg>
                                    <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt=""/>
                                    <div class="card__header-text">
                                        <h3 class="card__title">Software Engineering Group Project</h3>
                                        <span class="card__status">COMP2019</span>
                                    </div>
                                </div>
                                <p class="card__description">Summary of Software Engineering Group Project</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="card">
                            <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt=""/>
                            <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                        <path/>
                                    </svg>
                                    <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt=""/>
                                    <div class="card__header-text">
                                        <h3 class="card__title">Introduction to Macroeconomics</h3>
                                        <span class="card__status">ECON1027</span>
                                    </div>
                                </div>
                                <p class="card__description">Summary of Introduction to Macroeconomics</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="card">
                            <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt=""/>
                            <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                        <path/>
                                    </svg>
                                    <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt=""/>
                                    <div class="card__header-text">
                                        <h3 class="card__title">Fundamentals of Neuroscience</h3>
                                        <span class="card__tagline"></span>
                                        <span class="card__status">LIFE1051</span>
                                    </div>
                                </div>
                                <p class="card__description">Summary of Fundamentals of Neuroscience</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="card">
                            <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt=""/>
                            <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                        <path/>
                                    </svg>
                                    <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt=""/>
                                    <div class="card__header-text">
                                        <h3 class="card__title">Social Psychology</h3>
                                        <span class="card__status">PSGY1012</span>
                                    </div>
                                </div>
                                <p class="card__description">Summary of Social Psychology</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <h1>TimeTable</h1>
            <div class="Timetable">
                <hr style="width:100%; float:left;">
                <br><br>
                <table style="width:99%; background:#fff;" border="5" cellspacing="0" align="left">
                    <!--<caption>Timetable</caption>-->
                    <tr>
                        <td height="30" width="100">
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>9:00</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>9:30</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>10:00</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>10:30</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>11:00</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>11:30</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>12:00</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>12:30</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>13:00</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>13:30</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>14:00</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>14:30</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>15:00</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>15:30</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>16:00</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>16:30</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>17:00</b>
                        </td>
                        <td align="center" height="20"
                            width="100">
                            <b>17:30</b>
                        </td>
                    </tr>
                    <tr>
                        <td align="center-left" height="50">
                            <b>Mon</b></td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Software
                            Engineering Group Project<br>Block B-BB80
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Software
                            Specification<br>Block F3-F3B08
                        </td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Artificial
                            Intelligence Methods(20cr)<br>Block B-BB80
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>C++
                            Programming<br>Block F3-F3C04
                        </td>
                    </tr>
                    <tr>
                        <td align="center-left" height="50">
                            <b>Tue</b>
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Algorithms
                            Correctness And Efficiency<br>Block F3-F3C04
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Languanges
                            And Computation<br>Block F3-F3C04
                        </td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td style="background-color:#aaa" colspan="2" align="center" height="50">Computing<br>Introduction
                            To Image Processing<br>Block B-BB80
                        </td>
                        <td style="background-color:#aaa" colspan="2" align="center" height="50">Computing<br>Introduction
                            To Image Processing<br>Block B-BB80
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Algorithms
                            Correctness And Efficiency<br>Block B-BB80
                        </td>
                    </tr>
                    <tr>
                        <td align="center-left" height="50">
                            <b>Wed</b>
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Introduction
                            To Image Processing<br>Block F3-F3A04
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Algorithms
                            Correctness And Efficiency<br>Block D-DA08
                        </td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Software
                            Engineering Group Project<br>Block B-BB80
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Artificial
                            Intelligence Methods(20cr)<br>Block B-BB80
                        </td>
                    </tr>
                    <tr>
                        <td align="center-left" height="50">
                            <b>Thu</b>
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>C++
                            Programming<br>Block F2-TCR1
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Software
                            Specification<br>Block B-BB80
                        </td>
                        <td style="background-color:#aaa" colspan="2" align="center" height="50">Lecture<br>Software
                            Engineering Group Project<br>Block D-DA08
                        </td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td style="background-color:#aaa" colspan="2" align="center" height="50">Tutorial<br>Algorithms
                            Correctness And Efficiency<br>Block F3-F3C04
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Artificial
                            Intelligence Methods(20cr)<br>Block F3-F3C04
                        </td>
                    </tr>
                    <tr>
                        <td align="center-left" height="50">
                            <b>Fri</b>
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Software
                            Engineering Group Project<br>Block B-BB80
                        </td>
                        <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Human
                            Computer Interaction<br>Block F1-F1A02
                        </td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                        <td align="center" height="50"></td>
                    </tr>
                </table>
            </div>

            <div class="sidebar">
                <div class="profile">
                    <img src="pictures/profile.png" alt="profile_picture">
                    <h3><?php echo $_SESSION['last_name'], " ", $_SESSION['first_name'] ?></h3>
                    <p>Student</p>
                </div>
                <ul>
                    <li>
                        <a href="home.php" class="active">
                            <span class="icon"><i class="fa fa-home"></i></span>
                            <span class="item">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="news.php">
                            <span class="icon"><i class="fa fa-newspaper-o"></i></span>
                            <span class="item">Newsletter</span>
                        </a>
                    </li>
                    <li>
                        <a href="class.php">
                            <span class="icon"><i class="fa fa-book"></i></span>
                            <span class="item">Class</span>
                        </a>
                    </li>
                    <li>
                        <a href="module_details.php">
                            <span class="icon"><i class="fa fa-university"></i></span>
                            <span class="item">Modules</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.php">
                            <span class="icon"><i class="fa fa-calendar"></i></span>
                            <span class="item">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="search_people.php">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <span class="item">People</span>
                        </a>
                    </li>
                    <li>
                        <a href="result_page.php">
                            <span class="icon"><i class="fa fa-graduation-cap"></i></span>
                            <span class="item">Result</span>
                        </a>
                    </li>
                    <li>
                        <a href="finance.php">
                            <span class="icon"><i class="fa fa-credit-card"></i></span>
                            <span class="item">Finance</span>
                        </a>
                    </li>
                    <li>
                        <a href="help_page.php">
                            <span class="icon"><i class="fa fa-question-circle"></i></span>
                            <span class="item">Help</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-cog"></i></span>
                            <span class="item">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <span class="icon"><i class="fa fa-reply"></i></span>
                            <span class="item">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>


            <hr class="rounded">
            <footer>
                <section class="footer-main">
                    <div class="footer-main-item">
                        <h2 class="footer-title">Site Information</h2>
                        <ul>
                            <br>
                            <li><a href="help.php">Help Desk</a></li>
                            <br>
                            <li><a href="finance.php">Finance</a></li>
                            <br>
                            <li><a href="news.php">Newsletter</a></li>
                            <br>
                        </ul>
                    </div>

                    <div class="footer-main-item">
                        <h2 class="footer-title">Navigation</h2>
                        <ul>
                            <br>
                            <li><a href="home.php">Dashboard</a></li>
                            <br>
                            <li><a href="finance.php">Finance</a></li>
                            <br>
                            <li><a href="news.php">Newsletter</a></li>
                            <br>
                        </ul>
                    </div>

                    <div class="footer-main-item">
                        <h2 class="footer-title">Get in touch</h2>
                        <ul>
                            <br>
                            <li><b>Malaysia</b></li>
                            <br>
                            <li class="helpnumber"><i class="fa fa-phone"></i> +6 (03) 8924 8199</li>
                            <br>
                            <li class="helpmail"><i class="fa fa-envelope"></i> ITServiceDesk@nottingham.edu.my</li>
                            <br>
                        </ul>
                    </div>
                </section>

                <section class="footer-social">
                    <table>
                        <tr class="footer-social-list">
                            <th><a href="#"><i class="fa fa-facebook-square"></i></a></th>
                            <th><a href="#"><i class="fa fa-twitter"></i></a></th>
                            <th><a href="#"><i class="fa fa-instagram"></i></a></th>
                            <th><a href="#"><i class="fa fa-github"></i></a></th>
                            <th><a href="#"><i class="fa fa-linkedin"></i></a></th>
                            <th><a href="#"><i class="fa fa-youtube"></i></a></th>
                        </tr>
                    </table>
                </section>

                <section class="footer-legal">
                    <ul class="footer-legal-list">
                        <li>&copy; Copyright 2022 UNMBUDDY</li>
                    </ul>
                </section>
            </footer>

            <script>
                var hamburger = document.querySelector(".hamburger");
                hamburger.addEventListener("click", function () {
                    document.querySelector("body").classList.toggle("active");
                })
            </script>

        </div>
    </div>

    </body>
    </html>

    <?php
} else {
    header("Location: index.php");
    exit();
}
?>