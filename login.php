<?php
session_start();
require_once 'includes/database.php';
require_once 'includes/user.php';
if (isset($_POST['submit'])) {
    $db = new database();
    $userModel = new user();
    $userModel->email = mysqli_real_escape_string($db->conn, trim($_POST['email']));
    $userModel->password = mysqli_real_escape_string($db->conn, trim($_POST['password']));
    $userModel->gender = $_POST['gender'];
    $userModel->date_of_birth = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
    if ($userModel->create()) {
        header("location:editprofile.php");
    } else {
        echo "error happends";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NoSoGo</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>

        <div id="container" class="container">
            <div class="content-scroller-home">
                <div class="content-wrapper-home">
                    <div class="content-home about-section" >

                        <div class="inner"><br>
                            <h4 class="join">Join Now and you can
                                Share, Comment and Vote on your feed!!</h4>
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading panel-heading-gray">Already a Member </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form"  action="check_login.php" method="POST">                       

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Email: </label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input type="text" class="form-control" placeholder="email" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Password: </label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-unlock"></i></span>
                                                        <input type="text" class="form-control" placeholder="password" name="password">
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="form-group">
                                                <a href="">Forget your Password!!</a>
                                            </div>
                                            <div class="form-group last">
                                                <input type="submit" value="Login" name="submit" class="button"> 
                                            </div>
                                        </form>

                                        <div class="form-group col-lg-6">
                                            <a href=""> <input type="button" value="Login Via Facebbok" class="facebbok"></a>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <a href=""> <input type="button" value="Login Via Twitter" class="twitter"></a>
                                        </div>
                                    </div> </div>
                            </div>



                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading panel-heading-gray">New to NoSoGo? </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form"  method="POST" action="login.php">                       

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Email: </label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input type="email" class="form-control" placeholder="email" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Password: </label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-unlock"></i></span>
                                                        <input type="password" class="form-control" placeholder="password" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Confirm: </label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-unlock"></i></span>
                                                        <input type="password" class="form-control" placeholder="confirm password" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Gender: </label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                                        <select name="gender" size="1" class="form-control">
                                                            <option selected>------- Gender -------</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Birthday: </label>
                                                <div class="birth">

                                                    <div class="form-group  col-lg-3">
                                                        <input  class="form-control" name="day" type="text" placeholder="day">
                                                    </div>
                                                    <div class="form-group  col-lg-3" >
                                                        <input  class="form-control" name="month" type="text" placeholder="month">
                                                    </div>
                                                    <div class="form-group  col-lg-3">
                                                        <input  class="form-control" name="year" type="text" placeholder="year">

                                                    </div>
                                                </div>


                                                <div class="form-group last">
                                                    <input type="submit" value="Create an Account" name="submit" class="button"> 
                                                </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="header_container-home">
                    <div id="header-home">
                        <div class="row">
                            <div class="col-lg-6">  <div class="logo-home">
                                    <a href="index.php">     <img  src="images/logo.png" alt=""></a></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
