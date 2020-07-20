<?php
  session_start();
 if (isset($_SESSION['priusername'])){
	   }
   else {
	   header("location: index.php");
   }
   
?>
<!DOCTYPE html>
<html>
<head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QUERIES</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

</head>
<body>
    <div class="bg">
  <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
			<table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>            
                    <td><a class="white-text templatemo-sort-by">Date </a></td>
                    <td><a  class="white-text templatemo-sort-by">Campus/Pool </a></td>
                    <td><a  class="white-text templatemo-sort-by">Pool Venue </a></td>
                    <td><a  class="white-text templatemo-sort-by">SSLC </a></td>
					   <td><a  class="white-text templatemo-sort-by">PU/Dip </a></td>
                       <td><a  class="white-text templatemo-sort-by">BE Aggregate</a></td>
   <td><a  class="white-text templatemo-sort-by">Current Backlogs </a></td>               
   <td><a  class="white-text templatemo-sort-by">History of Backlogs </a></td>
   <td><a  class="white-text templatemo-sort-by">Detain Years </a></td>
   <td><a  class="white-text templatemo-sort-by">Other Details </a></td>    				                </thead>
			   </tr>			   
<?php
			
$connect = mysqli_connect('localhost','root','','test');
// mysql_select_db('details');
if(isset($_POST['submit']))
{ 
$cname = $_POST['cname'];
$sql = $connect->query("SELECT * FROM addpdrive WHERE `CompanyName`='$cname'");

while($row = $sql->fetch_assoc())
{
	            print "<tr>"; 
	print "<br><td>";
    echo $row['Date'];
	print "<br></td><td>"; 
	echo $row['C/P'];
	print "<br></td><td>"; 
	echo  $row['PVenue'];
	print "<br></td><td>"; 
	echo $row['SSLC'];
	print "<br></td><td>"; 
	echo $row['PU/Dip'];
	print "<br></td><td>";
    echo $row['BE'];	
	print "<br></td><td>"; 
	echo $row['Backlogs'];
	print "<br></td><td>"; 
	echo $row['HofBacklogs'];
	print "<br></td><td>"; 
	echo $row['DetainYears'];
	print "<br></td><td>";
	echo $row['ODetails'];
print "</td></tr><br><br><br>"; 
}
}
?>
<!--while ($row = mysql_fetch_assoc($rs_result)) 
{ 

            print "<tr>"; 

print "<td>" . $row['FirstName'] . "</td>"; 
print "<td>" . $row['LastName'] . "</td>"; 
print "<td>" . $row['USN'] . "</td>"; 
print "<td>" . $row['Mobile'] . "</td>"; 
print "<td>" . $row['Email'] . "</td>"; 
print "<td>" . $row['DOB'] . "</td>"; 
print "<td>" . $row['Sem'] . "</td>"; 
print "<td>" . $row['Branch'] . "</td>"; 
print "<td>" . $row['SSLC'] . "</td>"; 
print "<td>" . $row['PU/Dip'] . "</td>"; 
print "<td>" . $row['BE'] . "</td>";
print "<td>" . $row['Backlogs'] . "</td>";
print "<td>" . $row['HofBacklogs'] . "</td>";
print "<td>" . $row['DetainYears'] . "</td>";




print "</tr>"; 

}-->
</center>
</body></html>