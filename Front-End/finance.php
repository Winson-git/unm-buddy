<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/finance.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance</title>
    <link href="pictures/UNMLogo.png" rel="icon" />
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
        <div class="til" >
            <h1 style="font-size: 50px;">Finance
                <a href="payment.php" style="float:right; " href="payment.php" >Make Payment<span></span><span></span><span></span><span></span></a>
            </h1>
        </div>

        <div class="ct">
            <table>
                <tr>
                    <th>Fee ID</th>
                    <th>Description</th>
                    <th>Date Issued</th>
                    <th>Fee Amount</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Year 1 Sem 1 Fees</td>
                    <td>20-2-2021</td>
                    <td>$18,000</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lab Fees</td>
                    <td>20-2-2021</td>
                    <td>$2,000</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Club session Fees</td>
                    <td>20-2-2021</td>
                    <td>$50</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Year 1 Sem 2 Fees</td>
                    <td>20-7-2021</td>
                    <td>$18,000</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Rental</td>
                    <td>20-2-2022</td>
                    <td>$7,800</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Sport wears Fees</td>
                    <td>20-2-2022</td>
                    <td>$600</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Year 2 Sem 1 Fees</td>
                    <td>20-2-2022</td>
                    <td>$19,000</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Security Fees</td>
                    <td>20-2-2022</td>
                    <td>$600</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Year 2 Sem 2 Fees</td>
                    <td>20-7-2022</td>
                    <td>$19,000</td>
                    <td>Pending</td>
                </tr>

            </table>
        </div>

        <div class="sidebar">
            <div class="profile">
                <img src="pictures/profile.png" alt="profile_picture">
                <h3><?php echo $_SESSION['last_name']," ", $_SESSION['first_name'] ?></h3>
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
                        <li><a href="home.php">Help Desk</a></li>
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
                        <li class="helpnumber"><i class ="fa fa-phone"></i> +6 (03) 8924 8199</li>
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
                <ul class="footer-legal-list" >
                    <li>&copy; Copyright 2022 UNMBUDDY</li>
                </ul>
            </section>
        </footer>

        <script>
            var hamburger = document.querySelector(".hamburger");
            hamburger.addEventListener("click", function(){
                document.querySelector("body").classList.toggle("active");
            })
        </script>

    </div>
</div>

</body>
</html>

    <?php
}else{
    header("Location: index.php");
    exit();
}
?>