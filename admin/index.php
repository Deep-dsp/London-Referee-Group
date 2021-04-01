<?php 
require_once '../load.php';
confirm_logged_in();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Admin page panel</title>
</head>
<body>
<!-- Header -->
<div class="nav-bar-new row">
            
            <nav>
                <div class="nav-wrapper container">
                    <a href="#!" class="brand-logo"><img class="responsive-img" src="../images/final_logo.png" alt=""></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">short_text</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="../about.html">About</a></li>
                            <li><a class='dropdown-trigger' href='#' data-target='dropdown1'>Programs</a></li>
                            <li><a href="../contact.html">Contact Us</a></li>
                            <li></li>
                        </ul>
                </div>
            </nav>
      
            <ul class="sidenav" id="mobile-demo">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../about.html">About</a></li>
                <li><a href="../officialsDev.html">Officials Development Program</a></li>
                <li><a href="../parent.html">Parent Education</a></li>
                <li><a href="../membership.html">Membership</a></li>
                <li><a href="../contact.html">Contact Us</a></li>
      
                <div class="legal__links">
                    <i class="instagram icon"></i>
                    <i class="facebook icon"></i>
                    <i class="twitter icon"></i>
                </div>
                
            </ul>
            <!-- DropDown -->
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="../officialsDev.html">Officials Development</a></li>
                <li><a href="../parent.html">Parent Education</a></li>
                <li><a href="../membership.html">Membership</a></li>
              </ul>
          
        </div>
        <!-- Header -->
           

<div class="info-pic-con container">
    <div class="info-user">

        <h2>Welcome to the admin page panel, <?php echo $_SESSION['user_name'];?>!</h2>
        <h3>You are in level: <?php echo getCurrentUserLevel();?> </h3>
        <?php if(isCurrentUserAdminAbove()):?>
            <a href="admin_createuser.php" class="info-create">Create user</a>
            <a href="admin_deleteuser.php" class="info-create">Delete User</a>
        <?php endif;?>
        <h3>You last sign in: <?php  echo $_SESSION['last_login'];?></h3>
        <div class="info-op">
    
        <a href="admin_edituser.php" class="user-edit">Edit User</a>
        <a href="admin_logout.php" class="signout">Sign out</a>
        </div>
            
    </div>
    <div class="info-pic1">
        <img src="../images/user_welcome.jpg" alt="user welcome picture">
    </div>
</div>   
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
                $(document).ready(function(){
                    $('.dropdown-trigger').dropdown(
                    {
                        constrainWidth: false
                    }
                    );

                    $('.sidenav').sidenav();
                });
        </script>
</body>
</html>