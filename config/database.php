<?php
class Database
{
    // Note: specify your own database credentials
    // private $host = "us-cdbr-east-03.cleardb.com";

    // private $db_name = "heroku_d2f1c20d24bec50";

    // private $username = "b2c611f744dca8";

    // private $password = "29ddfef5";

    private $host = "localhost";

    private $db_name = "lrg";

    private $username = "root";

    private $password = "";

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

       

        

        return $this->conn;
    }
}
