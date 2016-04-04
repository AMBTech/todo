<!DOCTYPE html>
<html>
<head>
    <title></title>

        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.min.css">
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>

        <style type="text/css">
            .about:hover, .home:hover, .social:hover {
                background: rgba(255,255,255,0.2);
            }
        </style>

</head>
<body>

    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-flued" style="background-color: #2B6699;">
            <div class="container" >

                <div class="navbar-header">
                    
                    <button class="navbar-toggle collapsed" id="navBtn" data-toggle="collapse" 
                    data-target="#navbar-collapse" aria-expanded="false"
                    style="border: 0px;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="home.php" class="navbar-brand header_content"
                    style="color: #FFF; font-size: 22px; line-height: 25px;">AB Technologies</a>
                </div>
                

                <div class="collapse navbar-collapse no-padding" id="navbar-collapse" style="";>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li class="home"><a href="home.php" style="color: #FFF; font-size: 20px; line-height: 25px;">
                        <span class="glyphicon glyphicon-home"></span>
                                Home
                            </a>
                        </li>
                        <li class="about"><a href="#" 
                        style="color: #FFF; font-size: 20px; line-height: 25px;">
                                About
                            </a>
                        </li>
                        <li class="social"><a href="#" style="color: #FFF; font-size: 20px; line-height: 25px;">
                                Social Media
                            </a>
                        </li> -->
                        <li>
                            <form method="POST" action="scripts/logout.php" >
                                <p style="font-family: Verdana; font-size: 16px; color: #FFF;
                                    position: absolute; margin-left: -180px; line-height: 50px;">
                                    <?php 
                                        if(isset($_SESSION['username']))
                                        {
                                            echo $_SESSION['username'];
                                        }
                                    ?>
                                </p>
                                <button class="btn btn-default" name="login_status" id="login_status" onclick="func()"
                                style="color: #FFF; background-color: #FFF; 
                                color: #000; border-radius: 0px; border: 0px; margin: 10px;">
                                    <?php
                                        if(isset($_SESSION['username']))
                                            echo 'Sign Out';
                                        else
                                            echo 'Log In';
                                    ?>
                                </button>
                            </form>
                        </li>
                        <!-- <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home </a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-book"></span> About </a></li> -->
                    </ul>
                </div>


            </div>
        </div>
    </nav>




        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>


