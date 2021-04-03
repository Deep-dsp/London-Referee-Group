<?php
require_once '../load.php';
confirm_logged_in();

$event_id = $_GET['id'];
$current_event = getSingleEvent($event_id);

if(empty($current_event)) {
    $message = 'Failed to get event info';
}

if (isset($_POST['submit'])){
    $event_data = array(
        'title' => trim($_POST['title']),
        'description' => trim($_POST['description']),
        'img' => trim($_POST['img']),
        'id' => $event_id
    );
    $message = editContent($event_data);
}

function getSingleEvent($event_id){
    $pdo = Database::getInstance()->getConnection();
    $get_event_info = 'SELECT * FROM events WHERE id = :id';
    $get_info_set = $pdo->prepare($get_event_info);
    $results = $get_info_set->execute(
        array(
            ':id'=>$event_id,
        )
    );

    if($results && $get_info_set->rowCount()){
        $_SESSION['id'] = $event_id;
        return $get_info_set;
    }else{
        return false;
    }
}

function editContent($event_id){
    
    $pdo = Database::getInstance()->getConnection();

    $get_user_info = 'SELECT * FROM `events` WHERE id =:id';
    $user_info_set = $pdo->prepare($get_user_info);
    $user_info_set->execute(
        array(
            ':id'=>$event_id
        )
    );

    if($found_user = $user_info_set->fetch(PDO::FETCH_ASSOC)){
       
            $update_user_query = 'UPDATE `events` SET title = :title, description = :description, img = :img WHERE id=:id';
            $update_user_set = $pdo->prepare($update_user_query);
            $update_user_result = $update_user_set->execute(
                array(
                    ':title'=>$found_user['title'],
                    ':description'=>$found_user['description'],
                    ':img'=>$found_user['img'],
                    ':id'=>$event_id
                )
            );
        
            if($update_user_result){  
                redirect_to('index.php');
               
            }else{
                return 'Something went wrong.';
            }
            
        
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
    <title>Edit User Panel</title>
</head>
<body>

<div class="edit-info">
    <div class="edit-con">
        <h2>Edit Each Content</h2>
            
        <?php echo !empty($message) ? $message : ''; ?>
            <?php if(!empty($current_event)): ?>
            <form action="admin_content.php" method="post">
            <?php while($event_info = $current_event->fetch(PDO::FETCH_ASSOC)):?>
                    <label for="title">Title</label>
                    <input id="title" type="text" name="title" value="<?php echo $event_info['title'];?>"><br><br>

                    <label for="description">Content</label>
                    <input id="content" type="text" name="description" value="<?php echo $event_info['description'];?>"><br><br>

                    <label for="img">Image</label>
                    <input id="pic" type="file" name="img" value="<?php echo $event_info['img'];?>"><br><br>
                    <label for="image">
                    <img src="../images/<?php echo $event_info['img'];?>" alt=""/>
                    </label>
                    <button type="submit" name="submit">Update User</button>
                <?php endwhile;?>
            </form>
            <?php endif;?>
        </div>
        </div>

</body>
</html>