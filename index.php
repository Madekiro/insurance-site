<?php
include "config.php";
session_start();
$_SESSION['conn'] = new mysqli(
    $config['DB_SERVER'],
    $config['DB_USERNAME'],
    $config['DB_PASSWORD'],
    $config['DB_NAME'],
    3306
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dunn Insurance Enterprise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="styles\index.css">



</head>

<body>
    <div class="wrapper">
        <nav role="navigation" class="navbar navbar-expand-md">

            <div class="collapse navbar-collapse">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Contacts</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login_form.html">Login</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- <header>
            <div class="js-header-spacer"></div>
            <div id="header" class="container-fluid mod-header--fixed" style="position: fixed;">
                <div class="row">
                    
                    <div class="component plain-html">
                        <a href="index.php">Home</a>
                    </div>
                    
                    <div class="component plain-html">
                        <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </header> -->
        <main>
            <div class="js-header-spacer"></div>
            <div id="content" class="container">
                <div class="row">
                    <div class="fill">
                        <img src="media\insurance header 2.png" alt="" srcset="">
                    </div>

                    <div class="component-content" style="width:50%; margin:0 auto;">
                        <div class="js-header-spacer"></div>
                        <nav class="page-quicklinks m-b-8">
                            <ul id="quicklinks" class="page-quicklinks-list">
                                <li class="page-quicklinks-item">
                                    <a class="page-quicklinks-link" href="http://">
                                        <p>News and Media</p>
                                    </a>
                                </li>
                                <li class="page-quicklinks-item">
                                    <a class="page-quicklinks-link" href="http://">
                                        <p>About Us</p>
                                    </a>
                                </li>
                                <li class="page-quicklinks-item">
                                    <a class="page-quicklinks-link" href="http://">
                                        <p>Products and Services</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                    <!-- <div class="component-content" style="width:50%; margin:0 auto;">
                        <div class="js-header-spacer"></div>
                        <div class="promo m-t-5 m-b-10" style="background-color: #f5e7b4;">
                            <div class="container">
                                <div class="row">
                                    <div class="promo-image col-12 col-md-6 col-lg-4">
                                        <div class="promo-image-wrapper">
                                            <img id="promo-image" src="media\ua flag.png" alt="" srcset="">
                                        </div>

                                    </div>
                                    <div class="promo-content col-12 col-md-6 col-lg-6">
                                        <h2>Support for Ukraine</h2>
                                        <p>Text</p>
                                        <a href="http://" class="btn">Find out more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>