<?php include("server.php");
$offId = $_GET['offId']; 
$offIDint =(int)$offId;
$sql1 = "UPDATE offer SET isAccepted=1 WHERE offer_id=$offIDint";
mysqli_query($db, $sql1);
$sql1 = "SELECT offer.request_id FROM offer WHERE offer_id =$offIDint";
$consIdTable1=mysqli_query($db, $sql1);
$result1 = mysqli_fetch_assoc($consIdTable1);
$request_id = $result1['request_id'];
echo $request_id;
$sql1 = "UPDATE request SET isTaken=1 WHERE request_id=$request_id";
mysqli_query($db, $sql1);
header('location: homepage.php');
?>