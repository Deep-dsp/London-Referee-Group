<?php 
    $db_dsn = array( 
        'host' => 'us-cdbr-east-03.cleardb.com',
        'dbname' => 'heroku_d2f1c20d24bec50',
        'charset' => 'utf8'
    );

    $dsn = 'mysql:'.http_build_query($db_dsn, '', ';');


    //This is the DB credentials

    $db_user = 'b2c611f744dca8';
    $db_pass = '29ddfef5';

    try{
        $pdo = new PDO($dsn, $db_user, $db_pass);
        //var_dump($pdo);
        // echo (in this case) is almost like console.log
        // echo "you're in! enjoy the show";
    } catch (PDOException $exception){
        echo 'Connection Error:'.$exception->getMessage();
        exit();
    }