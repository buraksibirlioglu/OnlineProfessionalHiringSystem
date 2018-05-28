<?php 
session_start();
$username = "";
$email = "";
$password = "";
$phonenumber = "";
$city = "";
$signUpDate = "";
$userid = 0;
$errors_register = array();
$errors_login = array();
$errors = array();


	//connection
$db = mysqli_connect("localhost", "root", "", "helpme");

	//if the register button clicked
if(isset($_POST["register"]))
{
	$username = mysqli_real_escape_string($db, $_POST["username"]);
	$email = mysqli_real_escape_string($db, $_POST["email"]);
	$password_1 = mysqli_real_escape_string($db, $_POST["password_1"]);
	$password_2 = mysqli_real_escape_string($db, $_POST["password_2"]);
	$phonenumber = mysqli_real_escape_string($db, $_POST["phone"]);
	$city = mysqli_real_escape_string($db, $_POST["city"]);
	$signUpDate = mysqli_real_escape_string($db, $_POST["signUpDate"]);
	$customRadio = mysqli_real_escape_string($db, $_POST["customRadio"]);
	$cityInt = (int)$city;

	
	$query_check_username = "SELECT * FROM user WHERE username = '$username'";
	$username_check_result = mysqli_query($db, $query_check_username);
	if(mysqli_num_rows($username_check_result) == 1){
		array_push($errors_register, "This username exists. Please try another one.");
	}
	$query_check_phone = "SELECT * FROM user WHERE phone = '$phonenumber'";
	$phone_check_result = mysqli_query($db, $query_check_phone);
	if(mysqli_num_rows($phone_check_result) == 1){
		array_push($errors_register, "This phone number exists. Please try another one.");
	}
	$query_check_email = "SELECT * FROM user WHERE email = '$email'";
	$email_check_result = mysqli_query($db, $query_check_email);
	if(mysqli_num_rows($email_check_result) == 1){
		array_push($errors_register, "This email has already registered to the system.");
	}
	if(count($errors_register) == 0){
			$password = md5($password_1); //password encryption
			$sql  = "INSERT INTO user (username, email, password, phone, address, sign_up_date, city_id) VALUES('$username', '$email', '$password', '$phonenumber', '$city', '$signUpDate', '$cityInt')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "Logged In";
			$query = ("SELECT email, id FROM user WHERE username = '$username'");
			$result = mysqli_query($db, $query) or die("could not perform query");
			$email = "";
			$userid = 1;
			while($row = mysqli_fetch_assoc($result)) {
				$email = $row['email'];
				$userid = $row['id'];
			}
			$_SESSION['email'] = $email;
			$_SESSION['userid'] = $userid;
			if($customRadio == 1){
				header('location: customer_complete.php');
			}
			else
			{
				header('location: professional_complete.php');
			}
		}
	}

	//login
	if(isset($_POST["login"])){
		$username = mysqli_real_escape_string($db, $_POST["username"]);
		$password = mysqli_real_escape_string($db, $_POST["password"]);

		
		if(count($errors_login) == 0){
			$password = md5($password);
			$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result) == 1){
				//log user in
				$_SESSION['username'] = $username;
				$query = ("SELECT email, id FROM user WHERE username = '$username'");
				$result = mysqli_query($db, $query) or die("could not perform query");
				$email = "";
				$userid = 1;
				while($row = mysqli_fetch_assoc($result)) {
					$email = $row['email'];
					$userid = $row['id'];
				}
				$_SESSION['email'] = $email;
				$_SESSION['userid'] = $userid;
				$_SESSION['success'] = "Logged In";

				header('location: homepage.php'); // redirect to homepage
			}
			else{
				array_push($errors_login, "Username or password is wrong");
			}
		}
	}



	// logout
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION["username"]);
		header('location: main.php');
	}

	if(isset($_POST["repair_post"]))
	{
		$username123 = $_SESSION["username"];
		$information = mysqli_real_escape_string($db, $_POST["repair_info"]);
		$timeInterval = mysqli_real_escape_string($db, $_POST["repair_interval"]);
		$subId = mysqli_real_escape_string($db, $_POST["repairRadio"]);
		$subIDint =(int)$subId;
		$timeIntervalInt = (int)$timeInterval;
		//$subId = $_GET['subId'];
		//ensure that form fields are filled
		if(empty($information)){
			array_push($errors, "Inf is required");
		}
		if(empty($timeInterval)){
			array_push($errors, "Interval is required");
		}
		if(empty($subId)){
			array_push($errors, "subid is required");
		}

		if(count($errors) == 0){
			
			$sql2 ="SELECT consumer_id FROM user,consumer WHERE id = consumer_id && username='$username123'";
			$sql3 = "SELECT subcategory_id FROM subcategory WHERE subcategory_id = '$subIDint'";
			
			$consIdTable=mysqli_query($db, $sql2);
			$result1 = mysqli_fetch_assoc($consIdTable);
			$consId = $result1['consumer_id'];
			//$consId = 2;
			
			$subIDtable=mysqli_query($db, $sql3);
			$result2 = mysqli_fetch_assoc($subIDtable);
			$subID1 = $result2['subcategory_id'];
			//$subID1 = 1;
			
			$sql4  = "INSERT INTO request (consumer_id, subcategory_id, time_interval, information, isTaken) VALUES('$consId', '$subID1', '$timeIntervalInt','$information','TRUE')";
			mysqli_query($db, $sql4);
			//msqli_close($db);
			//echo $consId;
			header('location: homepage.php'); // redirect to homepage
			//SELECT offer.information FROM offer,request WHERE request.consumer_id = '2' && request.request_id = offer.request_id
		}
	}
	if(isset($_POST["private_post"]))
	{
		$username123 = $_SESSION["username"];
		$information = mysqli_real_escape_string($db, $_POST["private_info"]);
		$timeInterval = mysqli_real_escape_string($db, $_POST["private_interval"]);
		$subId = mysqli_real_escape_string($db, $_POST["privateRadio"]);
		$subIDint =(int)$subId;
		$timeIntervalInt = (int)$timeInterval;
		//$subId = $_GET['subId'];
		//ensure that form fields are filled
		if(empty($information)){
			array_push($errors, "Inf is required");
		}
		if(empty($timeInterval)){
			array_push($errors, "Interval is required");
		}
		if(empty($subId)){
			array_push($errors, "subid is required");
		}

		if(count($errors) == 0){
			
			$sql2 ="SELECT consumer_id FROM user,consumer WHERE id = consumer_id && username='$username123'";
			$sql3 = "SELECT subcategory_id FROM subcategory WHERE subcategory_id = '$subIDint'";
			
			$consIdTable=mysqli_query($db, $sql2);
			$result1 = mysqli_fetch_assoc($consIdTable);
			$consId = $result1['consumer_id'];
			//$consId = 2;
			
			$subIDtable=mysqli_query($db, $sql3);
			$result2 = mysqli_fetch_assoc($subIDtable);
			$subID1 = $result2['subcategory_id'];
			//$subID1 = 1;
			
			$sql4  = "INSERT INTO request (consumer_id, subcategory_id, time_interval, information, isTaken) VALUES('$consId', '$subID1', '$timeIntervalInt','$information','TRUE')";
			mysqli_query($db, $sql4);
			//msqli_close($db);
			//echo $consId;
			header('location: homepage.php'); // redirect to homepage
			//SELECT offer.information FROM offer,request WHERE request.consumer_id = '2' && request.request_id = offer.request_id
		}
	}
	if(isset($_POST["cleaning_post"]))
	{
		$username123 = $_SESSION["username"];
		$information = mysqli_real_escape_string($db, $_POST["cleaning_info"]);
		$timeInterval = mysqli_real_escape_string($db, $_POST["cleaning_interval"]);
		$subId = mysqli_real_escape_string($db, $_POST["cleaningRadio"]);
		$subIDint =(int)$subId;
		$timeIntervalInt = (int)$timeInterval;
		//$subId = $_GET['subId'];
		//ensure that form fields are filled
		if(empty($information)){
			array_push($errors, "Inf is required");
		}
		if(empty($timeInterval)){
			array_push($errors, "Interval is required");
		}
		if(empty($subId)){
			array_push($errors, "subid is required");
		}

		if(count($errors) == 0){
			
			$sql2 ="SELECT consumer_id FROM user,consumer WHERE id = consumer_id && username='$username123'";
			$sql3 = "SELECT subcategory_id FROM subcategory WHERE subcategory_id = '$subIDint'";
			
			$consIdTable=mysqli_query($db, $sql2);
			$result1 = mysqli_fetch_assoc($consIdTable);
			$consId = $result1['consumer_id'];
			//$consId = 2;
			
			$subIDtable=mysqli_query($db, $sql3);
			$result2 = mysqli_fetch_assoc($subIDtable);
			$subID1 = $result2['subcategory_id'];
			//$subID1 = 1;
			
			$sql4  = "INSERT INTO request (consumer_id, subcategory_id, time_interval, information, isTaken) VALUES('$consId', '$subID1', '$timeIntervalInt','$information','TRUE')";
			mysqli_query($db, $sql4);
			//msqli_close($db);
			//echo $consId;
			header('location: homepage.php'); // redirect to homepage
			//SELECT offer.information FROM offer,request WHERE request.consumer_id = '2' && request.request_id = offer.request_id
		}
	}

	if(isset($_POST["shipping_post"]))
	{
		$username123 = $_SESSION["username"];
		$information = mysqli_real_escape_string($db, $_POST["shipping_info"]);
		$timeInterval = mysqli_real_escape_string($db, $_POST["shipping_interval"]);
		$subId = mysqli_real_escape_string($db, $_POST["shippingRadio"]);
		$subIDint =(int)$subId;
		$timeIntervalInt = (int)$timeInterval;
		//$subId = $_GET['subId'];
		//ensure that form fields are filled
		if(empty($information)){
			array_push($errors, "Inf is required");
		}
		if(empty($timeInterval)){
			array_push($errors, "Interval is required");
		}
		if(empty($subId)){
			array_push($errors, "subid is required");
		}

		if(count($errors) == 0){
			
			$sql2 ="SELECT consumer_id FROM user,consumer WHERE id = consumer_id && username='$username123'";
			$sql3 = "SELECT subcategory_id FROM subcategory WHERE subcategory_id = '$subIDint'";
			
			$consIdTable=mysqli_query($db, $sql2);
			$result1 = mysqli_fetch_assoc($consIdTable);
			$consId = $result1['consumer_id'];
			//$consId = 2;
			
			$subIDtable=mysqli_query($db, $sql3);
			$result2 = mysqli_fetch_assoc($subIDtable);
			$subID1 = $result2['subcategory_id'];
			//$subID1 = 1;
			
			$sql4  = "INSERT INTO request (consumer_id, subcategory_id, time_interval, information, isTaken) VALUES('$consId', '$subID1', '$timeIntervalInt','$information','TRUE')";
			mysqli_query($db, $sql4);
			//msqli_close($db);
			//echo $consId;
			header('location: homepage.php'); // redirect to homepage
			//SELECT offer.information FROM offer,request WHERE request.consumer_id = '2' && request.request_id = offer.request_id
		}
	}

	if(isset($_POST["customer_complete"])){
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$surname = mysqli_real_escape_string($db, $_POST['surname']);
		$new_date = date('Y-m-d', strtotime($_POST['date_of_birth']));
		$useridtoconsumer = $_SESSION['userid'];

		$sql5= "INSERT INTO `consumer`(`consumer_id`, `name`, `surname`, `date_of_birth`) VALUES ('$useridtoconsumer','$name','$surname','$new_date')";
		mysqli_query($db, $sql5);
		header('location: homepage.php');
	}
	if(isset($_POST["professional_complete"])){
		$comp_name = mysqli_real_escape_string($db, $_POST['name']);
		$info = mysqli_real_escape_string($db, $_POST['info']);
		$sub = mysqli_real_escape_string($db, $_POST['sub']);
		$subInt = (int)$sub;
		$useridtopro = $_SESSION['userid'];

		$sql5= "INSERT INTO `professional`(`user_id`, `company_name`, `information`, `subcategory_id`) VALUES ('$useridtopro','$comp_name','$info','$subInt')";
		mysqli_query($db, $sql5);
		header('location: requests.php');
	}

	if(isset($_POST["msg_post"]))
	{
	$username123 = $_SESSION["username"];
	$title = mysqli_real_escape_string($db, $_POST["msg_title"]);
	$text = mysqli_real_escape_string($db, $_POST["msg_text"]);
	$offID = mysqli_real_escape_string($db, $_POST["msg_to"]);
	$offInt =(int)$offID;
	if(empty($title)){
	array_push($errors, "Inf is required");
	}
	if(empty($text)){
	array_push($errors, "Interval is required");
	}
	if(empty($offID)){
		array_push($errors, "subid is required");
		}
	if(count($errors) == 0){
		$sql4  = "INSERT INTO message (offer_id, title, text, isView, isDeleted, direction) VALUES('$offInt', '$title', '$text','0','0','1')";
		mysqli_query($db, $sql4);
		header('location: cmessages.php');
		}
	}
	
	if(isset($_POST["msg_reply"]))
	{
	$username123 = $_SESSION["username"];
	$title = mysqli_real_escape_string($db, $_POST["msg_title"]);
	$text = mysqli_real_escape_string($db, $_POST["msg_text"]);
	$offID = mysqli_real_escape_string($db, $_POST["offId"]);
	$offInt =(int)$offID;
	
	$sql1 = "SELECT professional.user_id FROM professional,user WHERE user.id = professional.user_id && user.username='$username123'";
	$consIdTable=mysqli_query($db, $sql1);
	$result1 = mysqli_fetch_assoc($consIdTable);
	$user=$result1['user_id'];

	if(empty($user)){
		$direction=1;
	}
	else
		$direction=0;
			
	
	if(empty($title)){
	array_push($errors, "Inf is required");
	}
	if(empty($text)){
	array_push($errors, "Interval is required");
	}
	if(empty($offID)){
		array_push($errors, "subid is required");
		}
	if(count($errors) == 0){
		$sql4  = "INSERT INTO message (offer_id, title, text, isView, isDeleted, direction) VALUES('$offInt', '$title', '$text','0','0','$direction')";
		mysqli_query($db, $sql4);
		if(empty($user)){
		header('location: cmessages.php');
		}
		else
			header('location: pmessages.php');
		}
		
	}
	if(isset($_POST["edit"])){
		$new_name = mysqli_real_escape_string($db, $_POST['name_edit']);
		$new_surname = mysqli_real_escape_string($db, $_POST['surname_edit']);
		$new_email = mysqli_real_escape_string($db, $_POST['email_edit']);
		$new_password = mysqli_real_escape_string($db, $_POST['password_edit']);
		$id_edit = $_SESSION["userid"];
		if($new_password != '')
		{
			$new_password = md5($new_password);

			$sql5 = "UPDATE user SET email = '$new_email',
									password = '$new_password'
				WHERE id = '$id_edit'";
		}
		else
		{
			$sql5 = "UPDATE user SET email = '$new_email' WHERE id = '$id_edit'";
		}
		$_SESSION["email"] = $new_email;

		mysqli_query($db, $sql5);
		
		$sql5= "UPDATE consumer SET name = '$new_name',
									surname = '$new_surname'
				WHERE consumer_id = '$id_edit'";
		mysqli_query($db, $sql5);
		

		header('location: profile.php');
	
	}
								  

	?>