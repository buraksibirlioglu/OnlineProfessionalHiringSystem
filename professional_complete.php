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
  <div class="bg-primary text-white py-5 h-100" >
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="col-md-9">
            <h1>We need more info about you!</h1>
            <p>Please fill the following form to continue</p>
            <form method="post" action="professional_complete.php">
              <div class="form-group">
                <label>Compay Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" required=""> 
              </div>
              <div class="form-group">
                <label>Enter Information About Company</label>
                <textarea class="form-control" name="info" rows="3" required=""></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Choose a category</label>
                <select class="custom-control custom-select" required name="sub">
                  <option selected="" value="">Categories</option>
                  <option value="1">Colloring</option>
                  <option value="2">Installation</option>
                  <option value="3">Decoration</option>
                  <option value="4">Roof Renovation</option>
                  <option value="5">Math</option>
                  <option value="6">Physics</option>
                  <option value="7">Coding</option>
                  <option value="8">English</option>
                  <option value="9">Home</option>
                  <option value="10">Office</option>
                  <option value="11">Garden</option>
                  <option value="12">Carpet Washing</option>
                  <option value="13">Home to Home</option>
                  <option value="14">Intercity</option>
                  <option value="15">International</option>
                  <option value="16">Vehicle Shipping</option>
                </select>
              </div>
              <button type="submit" class="btn btn-secondary" name="professional_complete">Submit</button>
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