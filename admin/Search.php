<?php

include_once '../PHP/Connection.php';

//Check if contributor exist and return result to ajax code
if (isset($_REQUEST["searchBy"])) {
	$datasent = $_REQUEST["searchBy"];
    
        $accept = explode("_", $datasent);
        $searchObj = new Search();
        $searchObj->setKeyword($accept[0]);
        $searchObj->setCatagory($accept[1]);
        $searchObj->viewSearch();
     
    

	
}
class Search
{
    private $searchByCatagory,$searchByKeyword;
    public function __construct()

    {

        //Call the Connection class

        $conObj = new Connection();

        $this->con  = $conObj->connect();

    }
    public function setKeyword($Keyword)
	{
		$this->searchByKeyword = $Keyword;
        
	}
    public function setCatagory($catagory)
	{
        $this->searchByCatagory = $catagory;
       
	}
    public function getKeyword()
	{
        echo $this->searchByKeyword;
		return $this->searchByKeyword;
	}
    public function getCatagory()
	{
		return $this->searchByCatagory;
	}
    public function viewSearch()
    {
  
        if($this->searchByCatagory == "prj"){
            //echo "yes";
                  echo '<h2 style="font-weight: bold;" class="mb-30">Results from Projects</h2>';
            echo '<table style=border-spacing:0;">';
  echo '<tr><th>Title</th><th>Category</th><th>Client</th><th>Date</th><th>Link</th><th>Action</th></tr>';

            $stmt = $stmt = $this->con->prepare("SELECT * FROM `project` where `name` like ? OR `category` like ? OR `client` like ? OR `date` like ? OR `link` like ?");
            $stmt->execute(["%$this->searchByKeyword%", "%$this->searchByKeyword%", "%$this->searchByKeyword%", "%$this->searchByKeyword%", "%$this->searchByKeyword%"]);
            while ($row = $stmt->fetch()) {
                $ID = $row[0];
                $name = $row[1];
                $catagory = $row[2];
                $client = $row[3];
                $date = $row[4];
                $link = $row[6];
         
        if ($ID == 0) { 
            echo "<br>";
            echo '<blockquote class="generic-blockquote">Sorry, no Result Found for "<?php echo  $Keyword;?>" in Projects</blockquote>';
           }
            else{
     


            echo '<tr>';
             
              echo '<td>'.$name.'</td>';
              echo '<td>'.$catagory.'</td>';
              echo '<td >'.$client.'</td>';
              echo '<td>'.$date.'</td>';
              echo '<td>'.$link.'</td>';
              echo '<td>';
              echo '<a href="edit.php?id='.$ID.'"><button class="btn btn-primary" >Edit</button></a>';
              echo '<a href="delete.php?id=id='.$ID.'"><button class="btn btn-danger">Delete</button></a>';
           echo '</td>';
         
          echo '</tr>';
            }



    }echo '</table>';
}

if($this->searchByCatagory == "pic"){
    echo '<h2 style="font-weight: bold;" class="mb-30">Results from Pictures</h2>';
    echo '<table style="border-spacing:0;">';
echo '<tr><th>Main</th><th>Title</th><th>Belongs</th><th>Path</th><th>Action</th></tr>';
    //echo "yes";
    $stmt = $stmt = $this->con->prepare("SELECT * FROM `pictures` where filename LIKE ? OR path LIKE ? OR belongs LIKE ?");
    $stmt->execute(["%$this->searchByKeyword%", "%$this->searchByKeyword%", "%$this->searchByKeyword%"]);
    while ($row = $stmt->fetch()) {
        $ID = $row[0];
        $main = $row[1];
        $filename = $row[2];
        $belongs = $row[3];
        $path = $row[4];
        
 
if ($ID == 0) { 
    echo "<br>";
    echo '<blockquote class="generic-blockquote">Sorry, no Result Found for "<?php echo  $Keyword;?>" in Projects</blockquote>';
   }
    else{




    echo '<tr>';
     
      echo '<td>'.$main.'</td>';
      echo '<td>'.$filename.'</td>';
      echo '<td >'.$belongs.'</td>';
      echo '<td>'.$path.'</td>';
     
      echo '<td>';
      echo '<a href="edit.php?id='.$ID.'"><button class="btn btn-primary" >Edit</button></a>';
      echo '<a href="delete.php?id=id='.$ID.'"><button class="btn btn-danger">Delete</button></a>';
   echo '</td>';
 
  echo '</tr>';
    }



}
}
if($this->searchByCatagory == "team"){
    echo '<h2 style="font-weight: bold;" class="mb-30">Results from Team</h2>';
    echo '<table style=border-spacing:0;">';
echo '<tr><th>Name</th><th>Role</th><th>Telegram</th><th>linkedin</th><th>Instagram</th><th>Action</th></tr>
';
    //echo "yes";
    $stmt = $stmt = $this->con->prepare("SELECT * FROM `team` where `name` LIKE ? OR `role` LIKE ? OR `telegram` LIKE ? OR `instagram` LIKE ? OR `linkedin` LIKE ?");
    $stmt->execute(["%$this->searchByKeyword%", "%$this->searchByKeyword%", "%$this->searchByKeyword%", "%$this->searchByKeyword%", "%$this->searchByKeyword%"]);
    while ($row = $stmt->fetch()) {
        $ID = $row[0];
        $name = $row[1];
        $role = $row[2];
        $telegram = $row[3];
        $instagram = $row[4];
        $linkedin = $row[5];
        
 
if ($ID == 0) { 
    echo "<br>";
    echo '<blockquote class="generic-blockquote">Sorry, no Result Found for "<?php echo  $Keyword;?>" in Projects</blockquote>';
   }
    else{




    echo '<tr>';
     
      echo '<td>'.$name.'</td>';
      echo '<td>'.$role.'</td>';
      echo '<td >'.$telegram.'</td>';
      echo '<td>'.$instagram.'</td>';
      echo '<td>'.$linkedin.'</td>';
     
      echo '<td>';
      echo '<a href="edit.php?id='.$ID.'"><button class="btn btn-primary" >Edit</button></a>';
      echo '<a href="delete.php?id=id='.$ID.'"><button class="btn btn-danger">Delete</button></a>';
   echo '</td>';
 
  echo '</tr>';
    }

    }

echo '</table>';
}
    }
}
