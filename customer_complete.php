<?php include("server.php"); 

if(empty($_SESSION["username"]))
{
  header('location: main.php');
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
  <div class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-8" >
          <div class="col-md-9">
            <h1>We need more info about you!</h1>
            <p>Please fill the following to continue</p>
            <form method="post" action="customer_complete.php">
              <div class="form-group">
                <label for="InputName">Your name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" required=""> 
              </div>
              <div class="form-group">
                <label for="InputSurname">Your Surname</label>
                <input type="text" class="form-control" placeholder="Surname" name="surname" required=""> 
              </div>
              <div class="form-group">
                <label for="InputDateOfBirth">Date of Birth</label>
                <input type="date" class="form-control" placeholder="Date Of Birth" name="date_of_birth" required=""> 
              </div>
              <button type="submit" class="btn btn-secondary" name="customer_complete">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>