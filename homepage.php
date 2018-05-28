<?php include("server.php"); 

if(empty($_SESSION["username"]))
{
  header('location: main.php');
}
$proID = $_SESSION['userid'];
$query = "SELECT user_id FROM professional where user_id = '$proID'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) == 1){
  header('location: requests.php');
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

          <!--<a class="btn btn-default navbar-btn btn-light text-secondary">Profile</a> -->
          <a class="btn btn-default navbar-btn btn-light text-secondary" href="customer_profile.php">
            <i class="fa d-inline fa-lg fa-user-circle-o"></i>Profile
            <a class="btn navbar-btn ml-2 text-white btn-secondary" href="index.php?logout='1'">
              <i class="fa d-inline fa-lg fa-user-circle-o"></i>Log Out
              <br> 
            </a>
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
    <div class="py-5 text-white bg-secondary">
      <div class="container">
        <div class="row">
          <div class="align-self-center p-5 col-md-6">
            <h1 class="mb-4">REPAIR</h1>
            <form method="post" action="homepage.php">
              <div class="custom-control custom-radio">
                <input type="radio" id="colloring" name="repairRadio" class="custom-control-input" required="required" value="1">
                <label class="custom-control-label" for="colloring">Colloring</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="installation" name="repairRadio" class="custom-control-input" required="required" value="2">
                <label class="custom-control-label" for="installation">Installation</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="decoration" name="repairRadio" class="custom-control-input" required="required" value="3">
                <label class="custom-control-label" for="decoration">Decoration</label>
              </div>
              <div class="custom-control custom-radio">  
                <input type="radio" id="roof_renovation" name="repairRadio" class="custom-control-input" required="required" value="4">
                <label class="custom-control-label" for="roof_renovation">Roof Renovation</label>
              </div>

              <div class="form-group">
                <label>Time Interval</label>
                <input type="text" class="form-control" name="repair_interval" required="">
                <small class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label>Information</label>
                <textarea class="form-control" name="repair_info" rows="3" required=""></textarea>
              </div>
              <button type="submit" class="btn border border-light btn-lg btn-light" name="repair_post">Send Request
                <br>
              </button>
            </form>
          </div>
          <div class="col-md-6 p-0">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="repair.jpg" atl="first slide" class="d-block w-100"> </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid w-100" src="https://pingendo.github.io/templates/sections/assets/gallery_restaurant_3.jpg" data-holder-rendered="true">
                  <div class="carousel-caption">
                    <h3>Relax area</h3>
                    <p>Take the time to chill</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="py-5 text-white bg-light">
        <div class="container">
          <div class="row">
            <div class="align-self-center p-5 col-md-6">
              <h1 class="mb-4 text-secondary">PRIVATE COURSE</h1>
              <form method="post" action="homepage.php">
               <div class="custom-control custom-radio">
                <input type="radio" id="math" name="privateRadio" class="custom-control-input" required="required" value="5">
                <label class="custom-control-label text-secondary" for="math">Math</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="physics" name="privateRadio" class="custom-control-input" required="required" value="6">
                <label class="custom-control-label text-secondary"  for="physics">Physics</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="coding" name="privateRadio" class="custom-control-input" required="required" value="7">
                <label class="custom-control-label text-secondary" for="coding">Coding</label>
              </div>
              <div class="custom-control custom-radio">  
                <input type="radio" id="english" name="privateRadio" class="custom-control-input" required="required" value="8">
                <label class="custom-control-label text-secondary" for="english">English</label>
              </div>

              <div class="form-group">
                <label class="text-secondary">Time Interval</label>
                <input type="text" class="form-control" name="private_interval" required="">
                <small class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label class="text-secondary">Information</label>
                <textarea class="form-control" name="private_info" rows="3" required=""></textarea>
              </div>
              <button type="submit" class="btn btn-secondary border border-light btn-lg" name="private_post">Send Request
                <br>
              </button>
            </form>
          </div>
          <div class="col-md-6 p-0">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="privatecourse.jpg" atl="first slide" class="d-block w-100"> </div>
              </div>
              <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="py-5 text-white bg-secondary">
        <div class="container">
          <div class="row">
            <div class="align-self-center p-5 col-md-6">
              <h1 class="mb-4">CLEANING</h1>
              <form method="post" action="homepage.php">
               <div class="custom-control custom-radio">
                <input type="radio" id="home" name="cleaningRadio" class="custom-control-input" required="required" value="9">
                <label class="custom-control-label" for="home">Home</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="office" name="cleaningRadio" class="custom-control-input" required="required" value="10">
                <label class="custom-control-label" for="office">Office</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="garden" name="cleaningRadio" class="custom-control-input" required="required" value="11">
                <label class="custom-control-label" for="garden">Garden</label>
              </div>
              <div class="custom-control custom-radio">  
                <input type="radio" id="carpet_washing" name="cleaningRadio" class="custom-control-input" required="required" value="12">
                <label class="custom-control-label" for="carpet_washing">Carpet Washing</label>
              </div>
              <div class="form-group">
                <label>Time Interval</label>
                <input type="text" class="form-control" name="cleaning_interval" required="">
                <small class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label>Information</label>
                <textarea class="form-control" name="cleaning_info" rows="3" required=""></textarea>
              </div>
              <button type="submit" class="btn border border-light btn-lg btn-light" name="cleaning_post">Send Request
                <br>
              </button>
            </form>
          </div>
          <div class="col-md-6 p-0">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="cleaning.jpg" atl="first slide" class="d-block w-100"> </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid w-100" src="https://pingendo.github.io/templates/sections/assets/gallery_restaurant_3.jpg" data-holder-rendered="true">
                  <div class="carousel-caption">
                    <h3>Relax area</h3>
                    <p>Take the time to chill</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="py-5 text-white bg-light">
        <div class="container">
          <div class="row">
            <div class="align-self-center p-5 col-md-6">
              <h1 class="mb-4 text-secondary">SHIPPING</h1>
              <form method="post" action="homepage.php">
               <div class="custom-control custom-radio">
                <input type="radio" id="home_to_home" name="shippingRadio" class="custom-control-input" required="required" value="13">
                <label class="custom-control-label text-secondary" for="home_to_home">Home to Home</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="intercity" name="shippingRadio" class="custom-control-input" required="required" value="14">
                <label class="custom-control-label text-secondary" for="intercity">Intercity</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="international" name="shippingRadio" class="custom-control-input" required="required" value="15">
                <label class="custom-control-label text-secondary" for="international">International</label>
              </div>
              <div class="custom-control custom-radio">  
                <input type="radio" id="vehicle_shipping" name="shippingRadio" class="custom-control-input" required="required" value="16">
                <label class="custom-control-label text-secondary" for="vehicle_shipping">Vehicle Shipping</label>
              </div>
              <div class="form-group">
                <label class="text-secondary"">Time Interval</label>
                <input type="text" class="form-control" name="shipping_interval" required="">
                <small class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label class="text-secondary">Information</label>
                <textarea class="form-control" name="shipping_info" rows="3" required=""></textarea>
              </div>
              <button type="submit" class="btn btn-secondary border border-light btn-lg" name="shipping_post">Send Request
                <br>
              </button>
            </form>
          </div>
          <div class="col-md-6 p-0">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="shipping.jpg" atl="first slide" class="d-block w-100"> </div>
              </div>
              <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
              </a>
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