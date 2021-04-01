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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Welcome to Login Page</title>
</head>
<body>
        
     <div class="user2 container"> 
         <div class="user-contain">
                <div class="text-info">
                <div class="logo">
                <a href="../index.html"><img src="../images/admin_logo.png" alt=""></a>
                </div>
                <h2>Welcome Back</h2>
                <p>To keep connected with us please login with your personal information by username and password</p>
                </div>
                <div class="user-con">
                    <div class="user-form">
                <form action="admin_login.php" method="post" class="ad-form">
                <label for="username">Username</label>
                <input id ="username" type="text" name="username" value="">
                <label for="password" type="password">Password</label>
                <input id="passsword" type="password" name="password">
                <div class="box bg-1">
                <button type="submit" name="submit" class="button button--winona button--border-thin button--round-s" data-text="Sign In"><span>Sign In</span></button>
                </div>
                </form>
                <div class="back-link" style="margin-top:10px;">
                    <a href="../index.html">Go Back To Home Page <span>&#8594;</span></a>
                </div>
                </div>
                

                </div>
                <div class="user-social">
                    <h5>Or you can connect with us on</h5>
                    <div class="legal__links">
                        <i class="instagram icon"></i>
                        <i class="facebook icon"></i>
                        <i class="twitter icon"></i>
                    </div>
                </div>
            </div>
                <div class="user-pic">
                    <img src="../images/user_login.jpg" alt="user login">
                </div>
    
            
        </div> 
    <div class="mess-con"><?php echo !empty($message)?$message:'';?>

    
</div>
</body>
</html>