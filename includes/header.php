<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>NoSoGo | Social Network</title>
        <link href="css/default.css" rel="stylesheet"> 
    </head>
    <body>


        <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" data-toggle="sidebar-menu" id="toggle-sidebar-menu" class="visible-xs"><i class="fa fa-ellipsis-v"></i></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav">
                        <li><a href=""><img src="images/logo.png" alt="" /></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">



                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                                <img src="images/people/110/guy-5.jpg" alt="Bill" class="img-circle" width="60" /> Bill <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="profile.php">Profile</a>
                                </li>
                                <li><a href="message.php">Messages</a>
                                </li>
                                <li><a href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <div class="sidebar left hidden-xs">
            <div data-scrollable>
                <div class="sidebar-block">
                    <div class="profile">
                        <img src="images/people/110/guy-6.jpg" alt="people" class="img-circle" />
                        <h4>Adrian D.</h4>
                    </div>
                </div>
                <div class="sidebar-block">
                    <div class="category"><i class="fa fa-info-circle"></i><a href="profile.php">  Profile</a></div>
                    <div class="category"><i class="fa fa-info-circle"></i><a href="message.php">  Message</a></div>
                    <div class="category"><i class="fa fa-users"></i><a href="friends.php">  Friends</a></div>
                    <div class="category"><i class="fa fa-picture-o"></i> <a href="photo.php"> Photos</a></div>
                    <div class="category"><i class="fa fa-comments"></i> <a href="interest.php"> Interest</a></div>
                    <div class="category"><i class="fa fa-cogs"></i> <a href="setting.php"> Setting</a></div>
                </div>
                <div class="sidebar-block">
                    <div class="category">Interest</div>

                    <button class="btn btn-default btn-circle"><i class="fa fa-newspaper-o"></i><span>13</span></button>
                    <button class="btn btn-default btn-circle"><i class="fa fa-futbol-o"></i><span>13</span></button>
                    <button class="btn btn-default btn-circle"><i class="fa icon-in-love"></i><span>13</span></button>
                    <div class="smile"><img src="images/Entertainment.png" /><span>15</span></div>

                </div>

                <div class="sidebar-block">
                    <div class="category">Friends</div>
                    <div class="sidebar-photos">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="images/place1.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/place2.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/place3.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/food1.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/food1.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/place3.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/place2.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/place1.jpg" alt="people" />
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>



                <div class="sidebar-block">
                    <div class="category">Photos</div>
                    <div class="sidebar-photos">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="images/place1.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/place2.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/place3.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/food1.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/food1.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/place3.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/place2.jpg" alt="people" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/place1.jpg" alt="people" />
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
