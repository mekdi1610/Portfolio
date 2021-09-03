<?php

include_once '../PHP/Connection.php';

//Project
if (isset($_REQUEST["addProject"])) {
	$datasent = $_REQUEST["addProject"];
    
        $accept = explode("_", $datasent);
        $registerObj = new Register();
        $registerObj->setPName($accept[0]);
        $registerObj->setPCatagory($accept[1]);
        $registerObj->setPClient($accept[2]);
        $registerObj->setPDate($accept[3]);
        $registerObj->setPDescription($accept[4]);
        $registerObj->setPLink($accept[5]);
        $registerObj->addProject();	
}

//Project
if (isset($_REQUEST["addTeam"])) {
	$datasent = $_REQUEST["addTeam"];
    
        $accept = explode("_", $datasent);
        $registerObj = new Register();
        $registerObj->setTName($accept[0]);
        $registerObj->setTRole($accept[1]);
        $registerObj->setTTelegram($accept[2]);
        $registerObj->setLinkedin($accept[3]);
        $registerObj->setTTwitter($accept[4]);
        $registerObj->addTeam();	
}
class Register
{
    private $pname, $pcatagory, $pclient, $pdate, $pdescription, $plink;
    private $tname, $trole, $ttelegram, $tlinkedin, $ttwitter;
    
    public function __construct()

    {

        //Call the Connection class

        $conObj = new Connection();

        $this->con  = $conObj->connect();

    }
    public function setPName($name)
	{
		$this->pname = $name;
        
	}
    public function setPCatagory($catagory)
	{
        $this->pcatagory = $catagory;  
	}
    public function setPClient($client)
	{
        $this->pclient = $client;  
	}
    public function setPDate($date)
	{
        $this->pdate = $date;  
	}
    public function setPDescription($description)
	{
        $this->pdescription = $description;  
	}
    public function setPLink($link)
	{
        $this->plink = $link; 
	}
    ////
    public function setTName($tname)
	{
        $this->tname = $tname;  
	}
    public function setTRole($trole)
	{
        $this->trole = $trole;  
	}
    public function setTTelegram($ttelegram)
	{
        $this->ttelegram = $ttelegram;  
	}
    public function setLinkedin($tlinkedin)
	{
        $this->tlinkedin = $tlinkedin;  
	}
    public function setTTwitter($ttwitter)
	{
        $this->ttwitter = $ttwitter; 
	}
    public function addProject()
    {
        $sql = "INSERT INTO `project`(`name`, `category`, `client`, `date`, `description`, `link`) VALUES(?,?,?,?,?,?)";
        $result = $this->con->prepare($sql)->execute([$this->pname, $this->pcatagory , $this->pclient , $this->pdate , $this->pdescription , $this->plink]);
        if ($result) {
            echo "Successful";
        }
        else{
            echo "Not inserted";
        }
     }
     public function addPicture()
     {
         $sql = "INSERT INTO `project`(`name`, `category`, `client`, `date`, `description`, `link`) VALUES(?,?,?,?,?,?)";
         $result = $this->con->prepare($sql)->execute([$this->pname, $this->pcatagory , $this->pclient , $this->pdate , $this->pdescription , $this->plink]);
         if ($result) {
             echo "Successful";
         }
         else{
             echo "Not inserted";
         }
      }
      public function addTeam()
      {
          
          $sql = "INSERT INTO `team` (`name`, `role`, `telegram`, `instagram`, `linkedin`) VALUES (?,?,?,?,?)";
          $result = $this->con->prepare($sql)->execute([$this->tname, $this->trole, $this->ttelegram ,$this->ttwitter ,$this->tlinkedin]);
          if ($result) {
              echo "Successful";
          }
          else{
              echo "Not inserted";
          }
       }
}
