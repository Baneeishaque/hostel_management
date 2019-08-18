<!doctype html>
<html lang=en>
<head>
<title>Studentdetails</title>
<link rel="stylesheet" href="hostel.css" type="text/css" />
<meta charset=utf-8>
</head>
<body><aside id="contact">contact</aside>

	<header id="head"><hgroup id="hed">
		<h2 >hostel management</h2>
        <nav>
        <ul id="nav">
        	<li><a href="indexx.php">home page</a></li>
            <li  id="current"><a href="studentspro.php">Students Portal</a></li>
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

<?php
require ('mysqli_connect.php'); // Connect to the database
// This code inserts a record into the users table
// Has the form been submitted?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Start an array named errors 
// Trim the first name
$name = trim($_POST['fname']);
// Strip HTML and apply escaping
$stripped = mysqli_real_escape_string($dbcon, strip_tags($name));
// Get string lengths
$strlen = mb_strlen($stripped, 'utf8');
// Check stripped string
if( $strlen < 1 ) {
    $errors[] = 'You forgot to enter your first name.';
}else{
$fn = $stripped;
}
// Trim the last name
$lnme = trim($_POST['lname']);
// Strip HTML and apply escaping
$stripped = mysqli_real_escape_string($dbcon, strip_tags($lnme));
// Get string lengths
$strlen = mb_strlen($stripped, 'utf8');
// Check stripped string
if( $strlen < 1 ) {
    $errors[] = 'You forgot to enter your last name.';
}else{
$ln = $stripped;
}
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
if (empty($_POST['psword1'])){
$errors[] ='Please enter a valid password';
}
if(!preg_match('/^\w{8,12}$/', $_POST['psword1'])) {
$errors[] = 'Invalid password, use 8 to 12 characters and no spaces.';
}
else{
$psword1 = $_POST['psword1'];
}
if($_POST['psword1'] == $_POST['psword2']) {
$p =@ mysqli_real_escape_string($dbcon, trim($psword1));
}else{
$errors[] = 'Your two password do not match.';
}
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
// Check for a membership school
	if (empty($_POST['school'])) {
		$errors[] = 'You forgot to choose your school.';
	} else {
		$school = trim($_POST['school']);
	}

// Trim the home address
$add1 = trim($_POST['addr1']);
// Strip HTML and apply escaping
$stripped = mysqli_real_escape_string($dbcon, strip_tags($add1));
// Get string lengths
$strlen = mb_strlen($stripped, 'utf8');
// Check stripped string
if( $strlen < 1 ) {
    $errors[] = 'You forgot to enter your home contact.';
}else{
	$ad1 = $stripped;
}
// Check for gender
	if (empty($_POST['sex'])) {
		$errors[] = 'You forgot to choose your gender.';
	} else {
		$sex = trim($_POST['sex']);
	}
// Trim the course
$ct = trim($_POST['course']);
// Strip HTML and apply escaping
$stripped = mysqli_real_escape_string($dbcon, strip_tags($ct));
// Get string lengths
$strlen = mb_strlen($stripped, 'utf8');
// Check stripped string
if( $strlen < 1 ) {
    $errors[] = 'You forgot to enter your course.';
}else{
$cse = $stripped;
}	
if (empty($_POST['phone'])){
$ph=($_POST['phone']);
}
elseif (!empty($_POST['phone'])) {			
//Strip out everything tha is not a number
$phone = preg_replace('/\D+/', '', ($_POST['phone']));
$ph=$phone;
}
if (empty($errors)) { // If there were no errors
//Determine whether the email address has already been registered	
$q = "SELECT user_id FROM users WHERE email = '$e' ";
$result=mysqli_query ($dbcon, $q) ; 	
if (mysqli_num_rows($result) == 0){//The mail address was not already registered therefore register the user in the users table
// Make the query:		
$q = "INSERT INTO users (user_id, fname, lname, email, psword, registration_date, admmision, school, haddr, sex, course, phone) VALUES (' ', '$fn', '$ln', '$e', SHA1('$p'), NOW(), '$uname','$school', '$ad1' ,'$sex', '$cse', '$ph')";		
		$result = @mysqli_query ($dbcon, $q); // Run the query
		if ($result) { // If the query ran OK
		header ("location: hostel.php"); 
		exit();
		} else { // If the query did not run OK
		// Message
			echo '<section class="login"><h2>System Error</h2>
			<p class="error">You could not be registered due to a system error. We apologize for the inconvenience.</p>'; 
			// Debugging message:
			echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p></script>';
		} // End of if ($result)
		mysqli_close($dbcon); // Close the database connection
		// Include the footer and stop the script
		 
		exit();
	} else {//The email address is already registered 
	echo '<p class="error">The email address is not acceptable because it is already registered</p>';
	}
	}else{ // Display the errors
		echo '<h2>Error!</h2>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { // Display each error
			echo " - $msg<br></section>\n";
		}
		echo '</p><h3>Please try again.</h3><p><br></p>';
		}// End of if (empty($errors))
} // End of the main Submit conditionals
?>

<h2 style="text-align:center; text-transform:capitalize; ">students details<br >Enter Your Personal Details as stated</h2>
		<!--<p style="text-align:center; text-transform:capitalize; padding:12px;">areas marked with an asterisk * are essential</p>-->
        <section class="login">
<form action="studentsregister.php" method="post">
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
	<br><label style="padding-left:63px;" class="label" for="fname">First Name*</label><input id="fname" type="text" name="fname" size="30" maxlength="30" value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>" required>
	<br><label style="padding-left:65px;" class="label" for="lname">Last Name*</label><input id="lname" type="text" name="lname" size="30" maxlength="40" value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>" required>
	<br><label style="padding-left: 40px;" class="label" for="email">Email Address*</label><input id="email" type="text" name="email" size="30" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required>
	<br><label style="padding-left:73px;" class="label" for="psword1">Password*</label><input id="psword1" type="password" name="psword1" size="12" maxlength="12" value="<?php if (isset($_POST['psword1'])) echo $_POST['psword1']; ?>" required>&nbsp;8 
	to 12 characters
	<br><label style="padding-left:15px;" class="label" for="psword2">Confirm Password*</label><input id="psword2" type="password" name="psword2" size="12" maxlength="12" value="<?php if (isset($_POST['psword2'])) echo $_POST['psword2']; ?>" required>
	<br><label style="padding-left:17px;" class="label" for="uname">admission number*</label><input id="uname" type="text" name="uname" size="12" maxlength="12" value="<?php if (isset($_POST['uname'])) echo $_POST['uname']; ?>" required>&nbsp;6 
	to 12 characters
	<br><label style="padding-left:89px;" class="label" for="school">school*</label>
	<select name="school">
	<option value="">- Select School-</option>
	<option value="30"<?php if (isset($_POST['school']) AND ($_POST['school'] == '30')) echo ' selected="selected"'; ?>>School one</option>
	<option value="125"<?php if (isset($_POST['school']) AND ($_POST['school'] == '125')) echo ' selected="selected"'; ?>>school e</option>
	<option value="5"<?php if (isset($_POST['school']) AND ($_POST['school'] == '5')) echo ' selected="selected"'; ?>>school c</option>
	<option value="2"<?php if (isset($_POST['school']) AND ($_POST['school'] == '2')) echo ' selected="selected"'; ?>>school b</option>
	<option value="15"<?php if (isset($_POST['school']) AND ($_POST['school'] == '15')) echo ' selected="selected"'; ?>>schoool of a</option>
	</select>

	<br><label style="padding-left:49px;" class="label" for="addr1">home contact*</label><input id="addr1" type="text" name="addr1" size="30" maxlength="30" value="<?php if (isset($_POST['addr1'])) echo $_POST['addr1']; ?>" required>
     <select name="sex"><p>
     <br><p><label class="label" for="school">gender*</label></p>
	<option value="">- Select Gender -</option>
	<option value="m"<?php if (isset($_POST['sex']) AND ($_POST['sex'] == 'm')) echo ' selected="selected"'; ?>>male </option>
	<option value="f"<?php if (isset($_POST['sex']) AND ($_POST['sex'] == 'f')) echo ' selected="selected"'; ?>>female </option>
	</select>
	<br><label style="padding-left:89px;" class="label" for="course">Course*</label><input id="city" type="text" name="course" size="30" maxlength="30" value="<?php if (isset($_POST['course'])) echo $_POST['course']; ?>" required>
	<br><label style="padding-left:75px;" class="label" for="phone">Telephone</label><input id="phone" type="text" name="phone" size="30" maxlength="30" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>" required>
	<p style="text-align: center; text-transform:uppercase; width: 40px; float: right;"><input class="button_small"  id="submit" type="submit" name="submit" value="next"></p></fieldset>
    
</form>
</section>

</div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>

</body>
</html>