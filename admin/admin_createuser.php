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
    <title>Create User Panel</title>
</head>

<body>
<div class="create-con">
    <h2>Let's create a new user!</h2>
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
</body>

</html>