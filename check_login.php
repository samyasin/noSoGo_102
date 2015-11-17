<?php
session_start();
require_once 'includes/database.php';
require_once 'includes/user.php';

$db = new database();
$userModel = new user();
$userModel->email = mysqli_real_escape_string($db->conn, trim($_POST['email']));
$userModel->password = mysqli_real_escape_string($db->conn, trim($_POST['password']));
$userSet = $userModel->auth($userModel->email,md5($userModel->password));
if (!empty($userSet)) {    
    $_SESSION['user_id'] = $userSet[0]['user_id'];
    header("location:profile.php");
} else {
    echo "error happends";
}

