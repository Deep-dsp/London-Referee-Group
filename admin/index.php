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
    <title>Admin page panel</title>
</head>
<body>
<div>
            <div class="hero-home">
                <div class="logo">
                    <img src="/images/logo.png" alt="">
                </div>
                <nav>
                    <ul class="nav-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <div class="dropdown">
                            <button class="dropbtn">Programs</button>
                            <div class="dropdown-content">
                              <a href="#">Junior Mentorship Program</a>
                              <a href="#">Membership Program</a>
                              <a href="#">Careers</a>
                            </div>
                        </div> 
                        <!-- <li><a href="#">Refree</a></li>
                        <li><a href="#">Membership</a></li> -->
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="ref-button">
                    
                    <div class="ham-burger">
                        <i class="bars icon"></i>
                    </div>
                </div>
            </div>
           
                <div class="log-button">
                    <button>More</button>
                </div>
            
</div>

<div class="info-user">

    <h2>Welcome to the admin page panel, <?php echo $_SESSION['user_name'];?>!</h2>
    <h3>You are in level: <?php echo getCurrentUserLevel();?> </h3>
    <?php if(isCurrentUserAdminAbove()):?>
        <a href="admin_createuser.php" class="info-create">Create user</a>
    <?php endif;?>
    <h3>You last sign in: <?php  echo $_SESSION['last_login'];?></h3>
    <div class="info-op">
   
    <a href="admin_edituser.php" class="user-edit">Edit User</a>
    <a href="admin_logout.php" class="signout">Sign out</a>
    </div>
        <div class="info-pic">
       
        </div>
    </div>
    
</body>
</html>
