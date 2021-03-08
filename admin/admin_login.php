<?php 

//date and time php
date_default_timezone_set ('EST');
require_once '../load.php';
$ip = $_SERVER['REMOTE_ADDR'];

$current_time = date('Y-m-d H:i:s');

if (isset($_SESSION['user_id'])) {

    redirect_to('index.php');
}


if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(!empty($username) && !empty($password)) {
        
        $result = login($username, $password, $ip, $current_time);
        $message = $result;
    }else {
        $message = 'Please fill out the required fields.';
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Welcome to Login Page</title>
</head>
<body>

       
        <div class="text-info">
        <img src="images/logo.png" alt="logo">
        <h2>Welcome Back</h2>
        <p>To keep connected with us please with us please login with your personal information by username and password</p>
        </div>
    <div class="user-con">
        <div class="user-form">
    <form action="admin_login.php" method="post" class="ad-form">
    <label for="username">Username</label>
    <input id ="username" type="text" name="username" value="">
    <label for="password" type="password">Password</label>
    <input id="passsword" type="password" name="password">
    <button type="submit" name="submit">Sign In</button>
    </form>
    </div>
    <div class="user-pic">
        <img src="images/user_login" alt="">
    </div>

    </div>
    <div class="user-social">
        <h2>Or you can join with</h2>

    </div>
    <div class="mess-con"><?php echo !empty($message)?$message:'';?>
</div>
</body>
</html>