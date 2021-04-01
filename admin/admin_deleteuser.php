<?php
require_once '../load.php';
confirm_logged_in(true);

if(isset($_GET['id'])){
    $delete_user_id = $_GET['id'];

    $delete_result = deleteUser($delete_user_id);

    if(!$delete_result){
        $message = 'Failed to delete user';
    }
}


$users = getAllUsers();

if(!$users){
    $message = 'Failed to get user list';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Delete User</title>
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
<div class="delete-con container">
        <h2>Delete User Panel</h2>
        <?php echo !empty($message) ? $message : ''; ?>
        <a href="index.php" class="delete-back">Back to Dashboard</a>
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php while($single_user = $users->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $single_user['user_id'];?></td>
                    <td><?php echo $single_user['user_name'];?></td>
                    <td><?php echo $single_user['user_email'];?></td>
                    <td>
                        <a href="admin_deleteuser.php?id=<?php echo $single_user['user_id'];?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
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