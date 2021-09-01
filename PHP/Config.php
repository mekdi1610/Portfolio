<?php  
//Configration of Database : These information will be changed when it is deployed
class Config{
    private $serverName="sql206.epizy.com";
    private $userName="epiz_25600350";
    private $password="uEnvNJf3Iv1M0AM";
    private $database="epiz_25600350_Portfolio";
    public function getServerName(){
        return $this->serverName;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getDatabase(){
        return $this->database;
    }
}
