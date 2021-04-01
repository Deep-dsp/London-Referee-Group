<?php
require_once '../load.php';
confirm_logged_in(true);


if (isset($_POST['submit'])) {
    $data = array(
        'fname'=>trim($_POST['fname']),
        'username'=>trim($_POST['username']),
        'password'=>trim($_POST['password']),
        'email'=>trim($_POST['email']),
        'user_level'=>trim($_POST['user_level']),
    );

 
    if(!empty($_POST['username']) && !empty($_POST['fname']) && !empty($_POST['email'])) {
        
            $message = createUser($data);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Create User Panel</title>
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
    <div class="create-info container">
        <div class="create-con">
            <h2>create a new user!</h2>
            <?php echo !empty($message)?$message:'';?>
            <form action="admin_createuser.php" method="post" class="create-form">
                <label for="first_name">First Name</label>
                <input id="first_name" type="text" name="fname" value=""><br><br>

                <label for="username">Username</label>
                <input id="username" type="text" name="username" value=""><br><br>

                <label for="password">Password</label>
                <input id="password" type="password" name="password" value=""><br><br>

                <label for="email">Email</label>
                <input id="email" type="email" name="email" value=""><br><br>

                <label for="user_level">User Level</label>
                <select id="user_level" name="user_level">
                    <?php $user_level_map = getUserLevelMap();
                        foreach ($user_level_map as $val => $label):?>
                        <option value="<?php echo $val; ?>"><?php echo $label;?></option>
                    <?php endforeach;?>
            
                </select><br><br>

                <button type="submit" name="submit">Create User</button>
            </form>
            </div>
            <div class="create-pic">
                <img src="../images/user_create.jpg" alt="user create picture">
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
                    $("select").material_select();
                });
        </script>
   
</body>

</html>