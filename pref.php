<?php
  session_start();
 if (($_SESSION['husername'])){
   
  }
   else {
	   header("location: index.php");
   die("You must be Log in to view this page <a href='index.php'>Click here</a>");}
?>

<?php
$connect = mysqli_connect("localhost", "root", "","test"); // Establishing Connection with Server
// mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['Update']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$sun = $_SESSION["husername"];
$email = $_POST['email'];

if($user!='')
{
	if($user==$sun)
	{
		$query = "UPDATE `test`.`hlogin` SET `Fname`='$fname', `Lname`='$lname',  `Email`='$email', `Username`='$user'
           WHERE `hlogin`.`Username` = '$sun'";
		$data = mysqli_query($connect,$query);
		  if($data)
    {
				echo "<center>Details has been received successfully...!!</center>";
      }
	}	  
	else{
	  echo "<center>Failed</center>";
}
}


}
?>
