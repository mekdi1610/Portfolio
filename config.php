<?php  

class config{

private $servername="sql206.epizy.com";
private $username="epiz_25600350";
private $password="uEnvNJf3Iv1M0AM";
private $database="epiz_25600350_Portfolio";

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