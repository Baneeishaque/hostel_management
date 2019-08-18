<!doctype html>
<html lang=en>
<head>
<title>Login page</title>
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
        <section class="login">
<?php
//include ( 'includes/header_login.php' ) ;
// Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">A problem occurred:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="safer-register-page.php">Register</a></p>' ;
}
?>
<!-- Display the login form fields -->
<h2>Login: <span style="color:#F00;">make sure your register to use this portal use ur admision or worker id to register</h2>
<form action="process_login.php" method="post">
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
<p><label class="label" for="uname">admission number/worker id*:</label><input id="uname" type="text" 
name="uname" size="16" maxlength="16" value="<?php if (isset($_POST['uname']))
echo $_POST['uname']; ?>"></p>
<p><label style="padding-left:125px;" class="label" for="psword">Password*:</label><input id="psword" 
type="password" name="psword" size="16" maxlength="16" value="<?php if
(isset($_POST['psword'])) echo $_POST['psword']; ?>" ></p>
<p ><input  class="button_small" type="submit" value="Login" > <a class="button_small" style="float:right; text-decoration:none; height:30px; color:#FFF;" href="safer-register-page.php">register</a></p></fieldset>
</form>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>

</body>
</html>