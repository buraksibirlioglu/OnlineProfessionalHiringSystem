<?php include("server.php"); 

if(empty($_SESSION["username"]))
{
	header('location: main.php');
}
$proID = $_SESSION['userid'];
$query = "SELECT user_id FROM professional where user_id = '$proID'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) == 1){
  header('location: professional_profile.php');
}
else
{
	header('location: customer_profile.php');
}

?>