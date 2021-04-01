<?php 
include("connect1.php");
include("functions1.php");

if(isset($_GET["id"])){
    
    $targetID = $_GET["id"];
    
    $result = getSingleEvent($pdo, $targetID);

    return $result;
} else {
   
    $allEvent = getAllEvent($pdo);

    return $allEvent;
}