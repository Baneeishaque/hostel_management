<!doctype html>
<html lang=en>
<head>
<title>queries-registration</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="hostel.css">
</head>
<body>
<aside id="contact">contact</aside>
<header id="head"><hgroup id="hed">
		<h2 >hostel management</h2>
        <nav>
        <ul id="nav">
        	<li id="current"><a href="../indexx.php">home page</a></li>
            <LI><a href="forum_c.php">Students Queries</a></LI>
            <li><a href="forum_w.php">Workers Queries</a></li>
            <li><a href="view_posts.php">View your Query</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul></nav>
    	</hgroup>
    	</header>
        <div class="content">
        <section style="text-align:center">
        <img src="xxx.JPG" width="160px" height="190px" />
        <img src="xxx.JPG" width="150px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        </section>
      
<!--Start of the page-specific content-->
<?php
require ('mysqli_connect.php'); // Connect to the database
// Has the form been submitted?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Start an errors array
// Trim the username
$unme = trim($_POST['uname']);
// Strip HTML tags and apply escaping
$stripped = mysqli_real_escape_string($dbcon, strip_tags($unme));
// Get string lengths
$strLen = mb_strlen($stripped, 'utf8');
// Check stripped string
if( $strLen < 1 ) {
    $errors[] = 'You forgot to enter your secret username.';
}else{
$uname = $stripped;
}
//Set the email variable to FALSE
$e = FALSE;									
// Check that an email address has been entered				
if (empty($_POST['email'])) {
$errors[] = 'You forgot to enter your email address.';
}
//Remove spaces from beginning and end of the email address and validate it	
if (filter_var((trim($_POST['email'])), FILTER_VALIDATE_EMAIL)) {	
//A valid email address is then registered
$e = mysqli_real_escape_string($dbcon, (trim($_POST['email'])));
}else{									
$errors[] = 'Your email is not in the correct format.';
}
// Check that a password has been entered, if so, does it match the confirmed password
if (empty($_POST['psword1'])){
$errors[] ='Please enter a valid password';
}
if(!preg_match('/^\w{8,12}$/', $_POST['psword1'])) {
$errors[] = 'Invalid password, use 8 to 12 characters and no spaces.';
}
if(preg_match('/^\w{8,12}$/', $_POST['psword1'])) {
$psword1 = $_POST['psword1'];
}
if($_POST['psword1'] == $_POST['psword2']) {
$p = mysqli_real_escape_string($dbcon, trim($psword1));
}else{
$errors[] = 'Your two password do not match.';
}

if (empty($errors)) { // If there are no errors. register the user in the database
		// Make the query
		$q = "INSERT INTO members (member_id, uname, email, psword, reg_date ) VALUES (' ', '$uname', '$e', SHA1('$p'), NOW()  )";		
		$result = @mysqli_query ($dbcon, $q); // Run the query
		if ($result) { // If the query ran OK
		header ("location: register_thanks.php"); 
		exit();
		} else { // If there was a problem
		// Error message
			echo '<h2>System Error</h2>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			// Debugging message:
			echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
		} // End of if ($result)
		mysqli_close($dbcon); // Close the database connection
		// Include the footer and quit the script
		include ('includes/footer.php'); 
		exit();
	} else { // Display the errors
		echo '<h2>Error!</h2>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { // Display each error
			echo " - $msg<br>\n";
		}
		echo '</p><h3>Please try again.</h3><p><br></p>';
		}// End of if (empty($errors))
} // End of the main Submit conditionals
?>

<h2 style="text-align:center; text-transform:capitalize; " >Hostel queries Registration <br/>All the fields must be filled out</h2>
		<!--<h3></h3>
	<p class="warning">IMPORTANT: Do NOT use your real name for the admission number or worker id.<br>The admision numbers or worker id	must be one word 8 to 12 characters long with no spaces. <br>For extra 
	security include a number at the end of, or within the user name. (example: pauline7)
	</p>
	<p class="cntr"><strong>Terms and conditions: </strong>Your registration and all your messages will be immediately deleted<br>if you 
	post unpleasant, obscene or defamatory message to this forum.</p>
			<h3>When you click the 'Register' button, you will 
	see a confirmation page <br></h3>-->
      <section class="login">
<form action="safer-register-page.php" method="post">
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
		<label style="padding-left:0px;" class="label" for="uname">admision number/ worker id*:</label><input id="uname" type="text" name="uname" size="12" maxlength="12" value="<?php if (isset($_POST['uname'])) echo $_POST['uname']; ?>">&nbsp;8 
	to 12 characters
	<br><label style="padding-left:87px;" class="label" for="email">Email Address*:</label><input id="email" type="text" name="email" size="30" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" >
	<br><label style="padding-left:121px;" class="label" for="psword1">Password*:</label><input id="psword1" type="password" name="psword1" size="12" maxlength="12" value="<?php if (isset($_POST['psword1'])) echo $_POST['psword1']; ?>" >&nbsp;8 
	to 12 characters
	<br><label style="padding-left:62px;" class="label" for="psword2">Confirm Password*:</label><input id="psword2" type="password" name="psword2" size="12" maxlength="12" value="<?php if (isset($_POST['psword2'])) echo $_POST['psword2']; ?>" >
	<p style="text-align: center; width: 40px; float: right;"><input class="button_small" id="submit" type="submit" name="submit" value="Register"></p></fieldset>
</form>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>


<!-- End of the registration page content -->
</body>
</html>