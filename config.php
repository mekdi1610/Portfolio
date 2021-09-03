<?php  

class config{

private $servername="localhost";
private $username="root";
private $password="";
private $database="Port";

    public function getservername(){
    return $this->servername;
    }
    public function getusername(){
    return $this->username;
    }
    public function getpassword(){
    return $this->password;
    }
    public function getdatabase(){
    return $this->database;
    }
}
?>