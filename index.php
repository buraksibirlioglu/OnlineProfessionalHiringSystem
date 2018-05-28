<?php include("server.php"); 

if(empty($_SESSION["username"]))
{
	header('location: main.php');
}

?>
<! DOCTYPE html>

<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta charset="description" content="Google alt metin">
	<meta charset="keyword" content="Google keyword">
	<meta charset="author" content="Muammer">
	<meta charset="viewport" content="width-device-width, initial-scale-1.0">

</head>

<body>
	<ul>
		<li><a class="active" href="#">Home</a></li>
		<li><a class="active" href="profile.php">Profile</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a class="active" href="request.php?subId=1">Category</a></li>
		<li><a class="active" href="requestList.php">Requests</a></li>
		<li><a class="active" href="offerList.php">Offers</a></li>
		<li><a href="#about">About</a></li>
		<li style="float:right"><a class="active" href="index.php?logout='1'">Logout</a></li>
	</ul>
	<div class = "content2">
		<div>
			<img src="https://thumb9.shutterstock.com/display_pic_with_logo/450076/608978792/stock-vector-help-me-vector-banner-on-white-background-608978792.jpg" width="95%">
		</div>
		
		<?php if(isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION["username"]; ?>!</strong></p>
		<?php endif ?>
	</div>
</body>
</html>