<?php
include_once 'Connection.php';
class Project
{
    public $con = "";
    private $proID, $path, $belongs;
    public function __construct()
    {
        //Call the Connection class
        $conObj = new Connection();
        $this->con  = $conObj->connect();
    }
    // destructor  
    function __destruct()
    {
    }
    //Get and Set Methods
    public function setProID($proID) 
    {
        $this->proID = $proID;
    }
    public function getProID()
    {
        return $this->proID;
    }
    public function setPath($path)
    {
        $this->path = $path;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function setBelongsTo($belongs)
    {
        $this->branchName = $branchName;
    }
    public function getBelongsTo()
    {
        return $this->belongsTo;
    }
    
    public function fetchProjectPic()
    {
        $accept = array(); $picIDArray = array(); $pathArray = array(); $belongsToArray = array(); $catToArray = array(); $nameToArray = array(); $proIDToArray = array();
        $stmt = $this->con->query("SELECT pictures.id, pictures.path, pictures.belongs,pictures.Catagory, project.name, project.id FROM `pictures` JOIN `project` ON `pictures`.`ProID`= `project`.`id` WHERE `main` = 1");
        while ($row = $stmt->fetch()) {
            array_push($picIDArray, $row[0]);
            array_push($pathArray, $row[1]);
            array_push($belongsToArray, $row[2]);
            array_push($catToArray, $row[3]);
            array_push($nameToArray, $row[4]);
            array_push($proIDToArray, $row[5]);
        }
        array_push($accept, $picIDArray, $pathArray, $belongsToArray, $catToArray, $nameToArray, $proIDToArray);
        return $accept;
    }
     public function getProject($ProID)
    {
        $accept = array(); 
       
        $stmt = $this->con->prepare("SELECT `id`, `name`, `category`, `client`, `date`, `description`, `link` FROM `project` WHERE `id`= ?");
        $stmt->execute([$ProID]);
        while ($row = $stmt->fetch()) {
            $proIDArray = $row[0];
            $nameArray = $row[1];
            $catArray = $row[2];
            $clientArray = $row[3];
            $dateArray = $row[4];
            $desArray = $row[5];
            $linkArray = $row[6];
        }
        array_push($accept, $proIDArray, $nameArray, $catArray, $clientArray, $dateArray, $desArray, $linkArray);
        return $accept;
    }
       public function fetchSingleProPic($ProID)
    {
        $accept = array(); $pathArray = array();
        $stmt = $this->con->prepare("SELECT pictures.path FROM `pictures` JOIN `project` ON `pictures`.`ProID`= `project`.`id` WHERE `project`.`id` = ?");
        $stmt->execute([$ProID]);
        while ($row = $stmt->fetch()) {
            array_push($pathArray, $row[0]);
        }
        
        return $pathArray;
    }
   
}
