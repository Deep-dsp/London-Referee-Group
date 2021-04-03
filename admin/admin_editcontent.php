<?php 
require_once '../load.php';
confirm_logged_in(true);


function getAllEvent() {
    $pdo = Database::getInstance()->getConnection();
    $get_event_query = 'SELECT * FROM events';
    $events = $pdo->query($get_event_query);

    if($events){
        return $events;
    }else{
        return false;
    }

   
}

$Allevent = getAllEvent($conn);
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
        <div class="delete-con">
        <h2>Edit Content</h2>
       
        <a href="index.php">Back to Dashboard</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Edit</th>
                </tr>
            </thead>

            <tbody>
                <?php while($single_event = $Allevent->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $single_event['id'];?></td>
                    <td><?php echo $single_event['title'];?></td>
                    <td><?php echo $single_event['description'];?></td>
                    <td>
                        <a href="admin_content.php?id=<?php echo $single_event['id'];?>">Edit</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
        
        </div>
</body>
</html>