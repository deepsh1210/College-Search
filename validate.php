 
<?php
// define variables and set to empty values
$fname = $email = $gender = $password = $lname = $cet = $jee_main = $jee_adv = $phone = "";
$state = $category = $gender = "";

$fnameerror = $phoneerr = $emailerr = $lnameerr = $passworderr = $ceterr =  $jee_main_err = $jee_adv_err = "";
$stateerr = $categoryerr = $gendererr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$validated = true;

	// First Name Validation
	$fname = test_input($_POST["fname"]);
	if (preg_match("/[^A-Za-z'-]/", $fname)) {
		$fnameerror = "Name must contain alphabets only!";
		$validated = false;
	} 

	

	//Email Validation
	$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
	$email = test_input($_POST["email"]);
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$emailerr = "Entered email is not valid!";
		$validated = false;
	} 	
	
	

	//Last Name Validation
	$lname = test_input($_POST["lname"]);
	if (preg_match("/[^A-Za-z'-]/", $lname)) {
		$lnameerr = "Name must contain alphabets only!";
		$validated = false;
	} 
	
		

	//Phone Number Validation
	$phone = test_input($_POST["phone"]);
	$length = strlen ($phone);
	if(!preg_match ("/^[0-9]*$/", $phone) ){
		$phoneerr = "Phone number must contain numbers only!";
		$validated = false;
	} 
	else if( $length < 10 or $length > 10) {
		$phoneerr = "Phone number must be of length 10";
		$validated = false;
	}
	
	//Rank Validation
	if(!empty($_POST["cet"])) {
		$cet = test_input($_POST["cet"]);
		if(!preg_match ("/^[0-9]*$/", $cet) ){
			$ceterr = "Rank must contain numbers only!";
			$validated = false;
		} 
	}

	if(!empty($_POST["jee_main"])) {
		$jee_main = test_input($_POST["jee_main"]);
		if(!preg_match ("/^[0-9]*$/", $jee_main) ){
			$jee_main_err = "Rank must contain numbers only!";
			$validated = false;
		} 
	}

	if(!empty($_POST["jee_adv"])) {
		$jee_adv = test_input($_POST["cet"]);
		if(!preg_match ("/^[0-9]*$/", $jee_adv) ){
			$jee_adv_err = "Rank must contain numbers only!";
			$validated = false;
		} 
	}

	//Password Validation
	$password = test_input($_POST["password"]);
	if (strlen($password) < 8) {
		$passworderr = "Your Password Must Contain At Least 8 Characters!";
		$validated = false;
	}
	else if(!preg_match("#[0-9]+#", $password)) {
		$passworderr = "Your Password Must Contain At Least 1 Number!";
		$validated = false;
	}
	else if(!preg_match("#[A-Z]+#", $password)) {
		$passworderr = "Your Password Must Contain At Least 1 Capital Letter!";
		$validated = false;
	}
	
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>


 
