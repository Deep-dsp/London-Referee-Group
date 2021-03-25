<?php
class Database
{
    // Note: specify your own database credentials
    private $host = "localhost";

    private $db_name = "db_user";

    private $username = "root";

    private $password = "root";

    #1. add a new private static variable
    private static $instance = null;

    public $conn;

    #2. add a new function __construct 
    private function __construct()
    {
        $db_dsn = array(
            'host'    => $this->host,
            'dbname'  => $this->db_name,
            'charset' => 'utf8',
        );

        if (getenv('IDP_ENVIRONMENT') === 'docker') {
            $db_dsn['host'] = 'mysql';
            $this->username = 'docker_u';
            $this->password = 'docker_p';
        }

        try {
            $dsn        = 'mysql:' . http_build_query($db_dsn, '', ';');
            $this->conn = new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo json_encode(
                array(
                    'error'   => 'Database connection failed',
                    'message' => $exception->getMessage(),
                )
            );
            exit;
        }
    }
    #3. Another getInstance function
    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    #4. Re-work on the getConnection()
    // get the database connection
    public function getConnection()
    {
<<<<<<< HEAD
        return $this->conn;
    }
}
=======

       

        

        return $this->conn;
    }
}
>>>>>>> 54dda27dff19e92c0592c8421b216112b8058551
