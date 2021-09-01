<?php  
require('connection.php');
session_start();
/**
 * 
 */
    
    $photo = new portfolio_photo();
    $photos = $photo->postall();
    echo $photos;

class portfolio_photo
{
    private $con="";
           function __construct()
           {
             $c=new Connection();
             $getcon= $c->connect();
             $this->con=$getcon;
           }

	function postall()
            {

                     $sql = "SELECT * FROM pictures";
                     $stmt = $this->con->prepare($sql);
                      // execute the prepared statement
                      $stmt->execute();
                      if($stmt->rowCount() > 0)
                      {
                        $output="";
                        $count=0;
                         while($row = $stmt->fetch())
                                {
                                   $storeid=$row["belongs"];
                                   $query1 = "SELECT name , category FROM project LIMIT 3";
                                   $stmt1 = $this->con->prepare($query1);
                                   $stmt1->execute();
                                  while( $result = $stmt1->fetch())
                                  {
                                    $name = $result["name"];
                                   $catag = $result["category"];

                                
                      if ($name === $row["belongs"])
                      {
                           $output = '
                           <div class="flickity-slide" style=" width: 22.22%;">
                            <article class="project project-slide hover-shrink">
                              <a href="single-project.php" class="project__url">
                                <figure class="project__img-holder hover-shrink--shrink">
                                  <img src="'.$row["path"].'"  " class="project__img hover-shrink--zoom" alt=""/>
                                </figure>
                              </a>
                              <div class="project__description-wrap">
                                <div class="project__description">
                                  <h3 class="project__title"><a href="single-project.php">"'.$name.'"</a></h3>
                                  <span class="project__category">"'.$catag.'"</span>
                                </div>
                              </div>
                            </article>
                            </div>';
                         echo $output;

                       }
                        
                      }
                       
                     }

                     }
                       

                        unset($stmt);                     
                        // Close connection
                        unset($this->con);
           }
         }
       ?>