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
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

  <body>
    <nav class="navbar navbar-expand-md bg-primary navbar-dark">
      <a class="navbar-brand" href="#">
        <b>
          <b>HelpMe</b>
        </b>
      </a>
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
          <a class="btn navbar-btn ml-2 text-white btn-secondary" href="index.php?logout='1'">
            <i class="fa d-inline fa-lg fa-user-circle-o"></i>Log Out
            <br>
          </a>

          <a class="btn btn-default navbar-btn btn-light text-secondary" href="customer_profile.php">
            <i class="fa d-inline fa-lg fa-user-circle-o"></i>Profile
            <br> </a>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-md bg-secondary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="professional_profile.php">
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
            <a class="nav-link" href="requests.php">Request</a>
          </li>
          <li class="nav-item text-light">
            <a class="nav-link" href="pmessages.php">Messages</a>
          </li>
          <li class="nav-item text-light">
            <a class="nav-link" href="givenJobs.php">Given Jobs</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center display-3 text-primary">Comments About Given Services</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <table class= "table">
                <tr>
                  <th>Info About Given Job</th>
                  <th>Price</th> 
                  <th>Comment</th>
                  <th>Consumer Name</th>
                </tr>
                <?php 
        //connection
                $db = mysqli_connect("localhost", "root", "", "helpme");
                $usernameForRequestList = $_SESSION["username"];

      //SELECT consumer.name, consumer.surname, request.time_interval,request.information FROM user,request,consumer WHERE request.consumer_id = consumer.consumer_id && consumer.consumer_id= user.id && user.city_id = '5' && request.subcategory_id = '1' && request.isTaken = '0'

      //$profSubCategoryID = 1;
                $sql1 = "SELECT user_id FROM professional,user WHERE user.id = professional.user_id && user.username='$usernameForRequestList'";

      //taking subcategoryID of current user which is proffesional
                $consIdTable=mysqli_query($db, $sql1);
                $result1 = mysqli_fetch_assoc($consIdTable);

                $profID = $result1['user_id'];
				//SELECT offer.information, offer.price, comment.comment_text FROM comment,offer WHERE offer.professional_id = '3' && comment.offer_id = offer.offer_id 
				//SELECT offer.information, offer.price ,comment.comment_text,consumer.name FROM comment,offer,consumer WHERE offer.professional_id = '3' && comment.offer_id = offer.offer_id && comment.consumer_id = consumer.consumer_id

                $sql2 = "SELECT offer.information, offer.price ,comment.comment_text,consumer.name FROM comment,offer,consumer WHERE offer.professional_id = '$profID' && comment.offer_id = offer.offer_id && comment.consumer_id = consumer.consumer_id";
                
                $consIdTable2 = mysqli_query($db, $sql2);
      while($row = mysqli_fetch_assoc($consIdTable2)){   //Creates a loop to loop through results
        echo "<tr>
        <td>" . $row['information'] . "</td>
        <td>" . $row['price'] . "</td>
        <td>" . $row['comment_text'] . "</td>
        <td>" . $row['name'] . "</td> 
        </tr>"; 
         //$row['index'] the index here is a field name
      }

      ?>
    </table>    
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