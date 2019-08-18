<!doctype html>
<html lang=en>
<head>
<title>account page</title>
<link rel="stylesheet" href="hostel.css" type="text/css" />
<meta charset=utf-8>
</head>
<body>
<aside id="contact">contact</aside>

	<header id="head"><hgroup id="hed">
		<h2 >hostel management</h2>
        <nav>
        <ul id="nav">
        	<li id="current"><a href="#">home page</a></li>
            <li><a href="studentpro.php">Students Portal</a></li>
            <li><a href="hosteldetails.php">Hostels N Resources</a></li>
            <li><a href="members-page.php">Workers Portal</a></li>
            <li><a href="ask.php">FAQs</a></li>
            <li><a href="email.php">Contact US</a></li>
            </ul></nav>
    	</hgroup>
    	</header>
        <div class="content">
        <section style="text-align:center">
        <img src="xxx.JPG" width="190px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        </section>
<h2 style="text-align:center; text-transform:capitalize; ">students details<br >Enter Your Accommodation Details as stated</h2>
	
        <section class="login">
<?php
require ('mysqli_connect.php'); // Connect to the database
// This code inserts a record into the users table
// Has the form been submitted?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Start an array named errors 
// Trim the first name
// Trim the last name
//Set the email variable to FALSE
$e = FALSE;									
// Check that an email address has been entered				
if (empty($_POST['email'])) {
$errors[] = 'You forgot to enter your email address.';
}
//remove spaces from beginning and end of the email address and validate it	
if (filter_var((trim($_POST['email'])), FILTER_VALIDATE_EMAIL)) {	
//A valid email address is then registered
$e = mysqli_real_escape_string($dbcon, (trim($_POST['email'])));
}else{									
$errors[] = 'Your  email address is invalid or you forgot to enter your email address';
}
// Check that a password has been entered, if so, does it match the confirmed password
// Trim the addmission
$unme = trim($_POST['uname']);
// Strip HTML and apply escaping
$stripped = mysqli_real_escape_string($dbcon, strip_tags($unme));
// Get string lengths
$strlen = mb_strlen($stripped, 'utf8');
// Check stripped string
if( $strlen < 1 ) {
    $errors[] = 'You forgot to enter your secret admission.';
}else{
$uname = $stripped;
}
if (empty($_POST['amount'])){
$amt=($_POST['amount']);
}
elseif (!empty($_POST['amount'])) {			
//Strip out everything tha is not a number
$amount = preg_replace('/\D+/', '', ($_POST['amount']));
$amt=$amount;
}
if (empty($_POST['serial'])){
$ph=($_POST['serial']);
}
elseif (!empty($_POST['serial'])) {			
//Strip out everything tha is not a serial number
$serial = preg_replace('/\D+/', '', ($_POST['serial']));
$ph=$serial;
}

if (empty($errors)) { // If there were no errors
//Determine whether the email address has already been registered	
$q = "SELECT user_id FROM account WHERE email = '$e' AND admission = '$uname' AND slipno = '$ph' ";
$result=mysqli_query ($dbcon, $q) ; 	
if (mysqli_num_rows($result) == 0){//The mail address was not already registered therefore register the user in the users table
// Make the query:		
$q = "INSERT INTO account (user_id, email, admission, amountpaid, slipno) VALUES (' ', '$e', '$uname', '$amt', '$ph')";		
		$result = @mysqli_query ($dbcon, $q); // Run the query
		if ($result) { // If the query ran OK
		header ("location: uploadslip.php"); 
		exit();
		} else { // If the query did not run OK
		// Message
			echo '<h2>System Error</h2>
			<p class="error">You could not be registered due to a system error. We apologize for the inconvenience.</p>'; 
			// Debugging message:
			echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
		} // End of if ($result)
		mysqli_close($dbcon); // Close the database connection
		// Include the footer and stop the script
		include ('includes/footer.php'); 
		exit();
	} else {//The email address is already registered 
	echo '<p class="error">The email address is not acceptable because it is already registered</p>';
	}
	}else{ // Display the errors
		echo '<h2>Error!</h2>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { // Display each error
			echo " - $msg<br>\n";
		}
		echo '</p><h3>Please try again.</h3><p><br></p>';
		}// End of if (empty($errors))
} // End of the main Submit conditionals
?>

<form action="account.php" method="post">
<fieldset style="background-color:transparent; border-color:#FFF;">
<legend style="text-transform: capitalize;
  text-decoration:none;
  padding-left:5px;
  height: 10px;
  padding: 5px 10px 7px 8px;
  background: #0043A8;
  background: -moz-linear-gradient(#43A9FF, #0043A8);
  background: -o-linear-gradient(#43A9FF, #0043A8);
  background: -webkit-linear-gradient(#43A9FF, #0043A8);
  border-radius: 15px 15px 15px 15px;
  -moz-border-radius: 15px 15px 15px 15px;
  -webkit-border: 15px 15px 15px 15px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
  -moz-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
  box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;">areas marked with an asterisk * are essential</legend>
	<br><label style="padding-left:60px;" class="label" for="email">Email Address*</label><input id="email" type="text" name="email" size="30" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  required>
	<br><label style="padding-left:35px;" class="label" for="uname">Admision Number*</label><input id="uname" type="text" name="uname" size="12" maxlength="12" value="<?php if (isset($_POST['uname'])) echo $_POST['uname']; ?>" required>&nbsp;6 
	to 12 characters


	<br><label style="padding-left:+70px;" class="label" for="amount">Amount paid*</label><input id="amount" type="text" name="amount" size="30" maxlength="30" value="<?php if (isset($_POST['amount'])) echo $_POST['amount']; ?>" required>
    <br><label style="padding-left:63px;" class="label" for="serial">backslip serial*</label><input id="serial" type="text" name="serial" size="30" maxlength="30" value="<?php if (isset($_POST['serial'])) echo $_POST['serial']; ?>" required>
	<p style="text-align: center; width: 40px; float: right;"><input class="button_small" id="submit" type="submit" name="submit" value="next"></p></fieldset>
</form>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
</body>
</html>