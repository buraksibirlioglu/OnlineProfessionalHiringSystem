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
                <h1 class="text-center display-3 text-primary">PROFILE</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-5 text-white bg-primary">
          <div class="container">
            <div class="row">
              <div class="col-md-6 text-md-left text-center align-self-center my-5">

                <?php 
                $c_name = $_SESSION["username"];
                $c_id = $_SESSION["userid"];
                

                
                $p_email = "x@gmail.com";


                $query = "SELECT company_name, information FROM professional WHERE user_id = '$c_id'";
                $infoTable = mysqli_query($db, $query);
                $infoResult = mysqli_fetch_assoc($infoTable);
                $p_company_name = $infoResult['company_name'];
                $p_company_info = $infoResult['information'];
                $p_email = $_SESSION["email"];
                $query = "SELECT phone FROM user WHERE id = '$c_id'";
                $phoneTable=mysqli_query($db, $query);
                $phoneResult = mysqli_fetch_assoc($phoneTable);
                $p_phone = $phoneResult['phone'];
                $query = "SELECT city_name FROM user, city WHERE id = '$c_id' and user.city_id = city.city_id";
                $cityTable=mysqli_query($db, $query);
                $cityResult = mysqli_fetch_assoc($cityTable);
                $p_city = $cityResult['city_name'];
                $query = "SELECT subcategory_name FROM professional, subcategory WHERE user_id = '$c_id' and professional.subcategory_id = subcategory.subcategory_id";
                $infoTable = mysqli_query($db, $query);
                $infoResult = mysqli_fetch_assoc($infoTable);
                $p_category = $infoResult['subcategory_name'];


                ?>
                <h1 class="display-1"><?php echo $p_company_name ?></h1>

                <div class="row">
                  <div class="col-md-12">
                    <p class="lead"><?php echo $p_company_info ?></p>
                  </div>
                </div>
                <a class="btn btn-light btn-lg" href="requests.php">Requests</a>
                <!--<a class="btn btn-light btn-lg" href="#">SERVICE RATINGS</a> -->
              </div>
              <div class="col-md-6">
                <img class="img-fluid d-block mx-auto" src="cleaning.jpg"> 
              </div>
            </div>
          </div>
        </div>
        <div class="py-5 bg-light">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center display-3 text-primary">Account Information</h1>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Company Name*</th>
                      <td><?php echo $p_company_name ?></td>
                      <th class="">
                        <span style="font-weight: normal;"></span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Category*</th>
                      <td><?php echo $p_category ?></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>e-mail*</th>
                      <td><?php echo $p_email ?></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Phone*</th>
                      <td><?php echo $p_phone ?></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>City*</th>
                      <td><?php echo $p_city ?></td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-1">
                <a class="btn btn-primary" href="#">Edit</a>
              </div>
              <div class="col-md-6">
                <a class="btn btn-primary" href="#">Save </a>
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