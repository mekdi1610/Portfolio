<?php include("includes/adminheader.php");
session_start();
 $user=$_SESSION['username'];
if(is_null($user)){

	header("location: admin_index.php?message=l");
}
elseif($user != NULL){

?>

<br>
<br>
<br>
<div>
<p>Enter Student ID</p>
<form method="POST" action="account.php" class="form-inline">
              <div class="form-group">
                <input type="text" name="Search" class="form-control" id="exampleInputName2" placeholder="search.." required />
                <button type="submit" name="search" class="btn btn-primary">Search</button>
                
              </div>
              
            </form>
            
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php }

include("includes/footer.php");?>
