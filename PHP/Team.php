<?php
include_once 'Connection.php';
// //Accepts username to check if it exists or not
// if (isset($_REQUEST["username"])) {
//     $username = $_REQUEST["username"];
//     $photoObj = new Photo();
//     $photoObj->setUserName($username);
//     $photoObj->checkUserName();
// }

class Team
{
    
    public $con = "";
    public function __construct()
    {
        //Call the Connection class
        $conObj = new Connection();
        $this->con = $conObj->connect();
    }
    // destructor  
    function __destruct()
    {
    }
    
   
    public function fetchTeam()
    {
        $accept = array(); $arrayID = []; $arrayName = []; $arrayRole = []; $arrayTg = []; $arrayPhoto = []; $arrayInsta = []; $arrayLink = [];
		$stmt = $this->con->query("SELECT `id`, `name`, `role`, `telegram`, `photo`, `instagram`, `linkedin` FROM team");
		while ($row = $stmt->fetch()) {
            array_push($arrayID, $row[0]);
			array_push($arrayName, $row[1]);
			array_push($arrayRole, $row[2]);
			array_push($arrayTg, $row[3]);
            array_push($arrayPhoto, $row[4]);
            array_push($arrayInsta, $row[5]);
			array_push($arrayLink, $row[6]);
		}
		array_push($accept, $arrayID, $arrayName, $arrayRole, $arrayTg, $arrayPhoto, $arrayInsta, $arrayLink);
		return $accept;
    }
    
}
