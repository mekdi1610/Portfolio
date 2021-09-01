<?php  
  include_once('config.php'); 

    class Connection {  
        private $connection="";
        private $servername, $username, $password, $database;
        private $charset="utf8mb4";

        function __construct() {  
        $cofObj=new config();
        $this->servername=$cofObj->getservername();
        $this->username=$cofObj->getusername();
        $this->password=$cofObj->getpassword();
        $this->database=$cofObj->getdatabase();
        }

        public function connect(){
            //connection using PDO
            try {
                    $dsn = "mysql:host=".$this->servername.";dbname=".$this->database.";charset=".$this->charset;
                    $PDO = new PDO($dsn, $this->username, $this->password);
                    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $PDO;
                } catch (PDOException $e) {
                    //Throw an expection if there is a problem with the PDO Connection
                    echo "Connection Failed".$e->getMessage();
                }
        }
    }




?>