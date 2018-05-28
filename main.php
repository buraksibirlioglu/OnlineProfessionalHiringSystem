<?php include("server.php");?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="theme.css" type="text/css">

</head>

<body>
	<div class="pt-5 text-white bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-md-left text-center align-self-center my-5">
					<h1 class="display-1">HelpMe</h1>
					<p class="lead">A background with color. One is enough.</p>
				</div>
				<div class="col-md-6">
					<img class="img-fluid d-block mx-auto" src="1395826613845.jpg"> 
				</div>
			</div>
		</div>
	</div>
	<div class="py-5 bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="card text-white p-5 bg-primary">
						<div class="card-body">
							<h1 class="mb-4">Login</h1>
							<form method="post" action="main.php">
								<?php include ("errors_login.php"); ?>
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" placeholder="Enter Username" name="username" required=""> 
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="Enter Password" name="password" required=""> 
								</div>
								<button type="submit" name= "login" class="btn btn-secondary">Login</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card text-white p-5 bg-primary">
						<div class="card-body">
							<h1 class="mb-4">Sign Up</h1>
							<form action="main.php" method="post">
								<?php include ("errors_register.php"); ?>
								<div class="form-group">
									<label>Email address</label>
									<input type="email" class="form-control" placeholder="Enter email" name="email" required=""> 
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" placeholder="Enter Username" name="username" required=""> 
								</div>
								<div class="form-group" >
									<label>Password</label>
									<input type="password" class="form-control" placeholder="Enter Password" name="password_1" required="">
								</div>
								<div class="form-group" >
									<label>Password - Again</label>
									<input type="password" class="form-control" placeholder="Confirm Password" name="password_2" required="">
								</div>
								<div class="form-group" >
									<label >Phone Number</label>
									<input type="tel" class="form-control" placeholder="Phone Number" name="phone" required="">
								</div>
								<div class="form-group" >
									<label >City</label>
									<select name="city" required class="custom-control custom-select">
										<option value="0">Select City</option>
										<option value="1">Adana</option>
										<option value="2">Adıyaman</option>
										<option value="3">Afyonkarahisar</option>
										<option value="4">Ağrı</option>
										<option value="5">Amasya</option>
										<option value="6">Ankara</option>
										<option value="7">Antalya</option>
										<option value="8">Artvin</option>
										<option value="9">Aydın</option>
										<option value="10">Balıkesir</option>
										<option value="11">Bilecik</option>
										<option value="12">Bingöl</option>
										<option value="13">Bitlis</option>
										<option value="14">Bolu</option>
										<option value="15">Burdur</option>
										<option value="16">Bursa</option>
										<option value="17">Çanakkale</option>
										<option value="18">Çankırı</option>
										<option value="19">Çorum</option>
										<option value="20">Denizli</option>
										<option value="21">Diyarbakır</option>
										<option value="22">Edirne</option>
										<option value="23">Elazığ</option>
										<option value="24">Erzincan</option>
										<option value="25">Erzurum</option>
										<option value="26">Eskişehir</option>
										<option value="27">Gaziantep</option>
										<option value="28">Giresun</option>
										<option value="29">Gümüşhane</option>
										<option value="30">Hakkâri</option>
										<option value="31">Hatay</option>
										<option value="32">Isparta</option>
										<option value="33">Mersin</option>
										<option value="34">İstanbul</option>
										<option value="35">İzmir</option>
										<option value="36">Kars</option>
										<option value="37">Kastamonu</option>
										<option value="38">Kayseri</option>
										<option value="39">Kırklareli</option>
										<option value="40">Kırşehir</option>
										<option value="41">Kocaeli</option>
										<option value="42">Konya</option>
										<option value="43">Kütahya</option>
										<option value="44">Malatya</option>
										<option value="45">Manisa</option>
										<option value="46">Kahramanmaraş</option>
										<option value="47">Mardin</option>
										<option value="48">Muğla</option>
										<option value="49">Muş</option>
										<option value="50">Nevşehir</option>
										<option value="51">Niğde</option>
										<option value="52">Ordu</option>
										<option value="53">Rize</option>
										<option value="54">Sakarya</option>
										<option value="55">Samsun</option>
										<option value="56">Siirt</option>
										<option value="57">Sinop</option>
										<option value="58">Sivas</option>
										<option value="59">Tekirdağ</option>
										<option value="60">Tokat</option>
										<option value="61">Trabzon</option>
										<option value="62">Tunceli</option>
										<option value="63">Şanlıurfa</option>
										<option value="64">Uşak</option>
										<option value="65">Van</option>
										<option value="66">Yozgat</option>
										<option value="67">Zonguldak</option>
										<option value="68">Aksaray</option>
										<option value="69">Bayburt</option>
										<option value="70">Karaman</option>
										<option value="71">Kırıkkale</option>
										<option value="72">Batman</option>
										<option value="73">Şırnak</option>
										<option value="74">Bartın</option>
										<option value="75">Ardahan</option>
										<option value="76">Iğdır</option>
										<option value="77">Yalova</option>
										<option value="78">Karabük</option>
										<option value="79">Kilis</option>
										<option value="80">Osmaniye</option>
										<option value="81">Düzce</option>
									</select>
								</div>
								<div>
									<input type="hidden" name="signUpDate" id="todayDate"/>
									<script type="text/javascript">
										function getDate()
										{
											var today = new Date();
											var dd = today.getDate();
                        					var mm = today.getMonth()+1; //January is 0!
                        					var yyyy = today.getFullYear();
                        					if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm}
                        						today = yyyy+""+mm+""+dd;

                        					document.getElementById("todayDate").value = today;
                        				}

                      					//call getDate() when loading the page
                      					getDate();
                      				</script>
                      			</div>
                      			<div class="form-group">
                      				<label>I am a...</label>
                      				<div class="custom-control custom-radio">
                      					<input type="radio" id="radio_costumer" name="customRadio" class="custom-control-input" required="required" value="1">
                      					<label class="custom-control-label" for="radio_costumer">... costumer</label>
                      				</div>
                      				<div class="custom-control custom-radio">
                      					<input type="radio" id="radio_professional" name="customRadio" class="custom-control-input" required="required" value="2">
                      					<label class="custom-control-label" for="radio_professional">... professional</label>
                      				</div>
                      			</div>
                      			<button type="submit" name="register" class="btn btn-secondary">SignUp</button>
                      		</form>
                      	</div>
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