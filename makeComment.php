<?php include("server.php"); 

if(empty($_SESSION["username"]))
{
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> 
</head>

<body>
	<nav class="navbar navbar-expand-md bg-primary navbar-dark">
		<a class="navbar-brand" href="homepage.php">
			<b>
				<b>HelpMe</b>
			</b>
		</a>
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
				<a class="btn btn-default navbar-btn btn-light text-secondary" href="customer_profile.php">
					<i class="fa d-inline fa-lg fa-user-circle-o"></i>Profile
				</a>
				<a class="btn navbar-btn ml-2 text-white btn-secondary" href="index.php?logout='1'">
					<i class="fa d-inline fa-lg fa-user-circle-o"></i>Log Out
					<br> 
				</a>
			</div>
		</div>
	</nav>
	<nav class="navbar navbar-expand-md bg-secondary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="homepage.php">
        <b>Home Page
          <br>
        </b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item text-light">
            <a class="nav-link" href="offers.php">Offers</a>
          </li>
          <li class="nav-item text-light">
            <a class="nav-link" href="cmessages.php">Messages</a>
          </li>
          <li class="nav-item text-light">
            <a class="nav-link" href="takenJobs.php">Taken Jobs</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>	
	<div class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center display-3 text-primary">MAKE COMMENT</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">								
					<?php $offId = (isset($_GET['offId']) ? $_GET['offId'] : null);
					?>

					<form method="post" action="makeComment.php">
						<?php include ("errors.php"); ?>
						<div class="form-group">
							<label>Comment</label>
							<input type="text" name="commentInfo" class="form-control" required="">
							<small class="form-text text-muted"></small>
						</div>
						<input type="hidden" name="offId" value="<?php echo $offId?>" />
						<div class="form-group">
							<label for="exampleInputEmail1">Rate Your Experience</label>
							<select class="custom-control custom-select" name="rating" required>
								<option selected="">Open this select menu</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="input-group">
							<button type="submit" name="makeComment" class="btn">Create Comment On Job</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<div class="bg-dark text-white">
		<div class="container">
			<div class="row">
				<div class="p-4 col-md-4">
					<h2 class="mb-4 text-secondary">HelpMe</h2>
					<p class="text-white">A company for whatever you may need, from house cleaning to private course.</p>
				</div>
				<div class="p-4 col-md-4">
					<h2 class="mb-4 text-secondary">Mapsite</h2>
					<ul class="list-unstyled">
						<a href="#" class="text-white">Home Page</a>
						<br>
						<a href="#" class="text-white">Repair</a>
						<br>
						<a href="#" class="text-white">Private Course</a>
						<br>
						<a href="#" class="text-white">Cleaning</a>
						<li>Shipping</li>
					</ul>
				</div>
				<div class="p-4 col-md-4">
					<h2 class="mb-4 text-secondary">Contact</h2>
					<p>
						<a href="mailto:info@pingendo.com" class="text-white">
							<i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>helpme42@gmail.com
						</a>
					</p>
					<p>
						<a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank">
							<i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>Bilkent University
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
<?php 
if(isset($_POST["makeComment"]))
{

	$username123 = $_SESSION["username"];
	$comment = mysqli_real_escape_string($db, $_POST["commentInfo"]);
	$rating = mysqli_real_escape_string($db, $_POST["rating"]);
	$ratingInt = (int)$rating; 
	$offId = mysqli_real_escape_string($db, $_POST["offId"]);
	$offId =(int)$offId;


	if(empty($comment)){
		array_push($errors, "Comment is required");
	}

	if(count($errors) == 0){

		$sql2 ="SELECT consumer.consumer_id FROM user,consumer WHERE id = consumer_id && username='$username123'";

		$consIdTable=mysqli_query($db, $sql2);
		$result1 = mysqli_fetch_assoc($consIdTable);
		$consID = $result1['consumer_id'];

		$sql3 = "SELECT offer.professional_id FROM offer WHERE offer_id = '$offId'";
		$consIdTable=mysqli_query($db, $sql3);
		$result1 = mysqli_fetch_assoc($consIdTable);
		$profID = $result1['professional_id'];
										//INSERT INTO comment (consumer_id,professional_id, comment_text, offer_id) VALUES('2', '3', 'dasdasdasdassa','7')

			//$consId = 2;1

		$sqlForIsComment = "SELECT isCommented FROM offer WHERE offer_id = '$offId'";
		$consIdTable=mysqli_query($db, $sqlForIsComment);
		$result1 = mysqli_fetch_assoc($consIdTable);
		$isCommentedCheck = $result1['isCommented'];

										//if there is no comment about particular offer
		if($isCommentedCheck == 0){

											//$sql4 = "INSERT INTO comment (consumer_id,professional_id, comment_text, offer_id) VALUES('2', '3', 'giveComment10','10')";
			$sql4  = "INSERT INTO comment (consumer_id,professional_id, comment_text, offer_id, rate) VALUES('$consID', '$profID', '$comment','$offId', '$ratingInt')";
			mysqli_query($db, $sql4);


			$sqlForIsCommented = "UPDATE offer SET isCommented=1 WHERE offer_id=$offId";
			mysqli_query($db, $sqlForIsCommented);

			$rate_sql = "SELECT avg(rate) FROM comment WHERE professional_id = '$profID'";
			$rate_table=mysqli_query($db, $rate_sql);
			$rate_result = mysqli_fetch_assoc($rate_table);
			$rate_result1 = $rate_result['avg(rate)'];
			$rate_result1 = doubleval($rate_result1);
			$update_rating_pro = "UPDATE professional SET rate = '$rate_result1' WHERE user_id = '$profID'";
			mysqli_query($db, $update_rating_pro);




		}
		else{
											//echo "This job is already commented";
			echo "
			<script type='text/javascript'>  
			alert('This job is already commented');
			</script>
			";
		}
			header('location: takenJobs.php'); // redirect to homepage
			//SELECT offer.information FROM offer,request WHERE request.consumer_id = '2' && request.request_id = offer.request_id
		}
	}
	
	?>