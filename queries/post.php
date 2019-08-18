<?php 
session_start() ;
// Redirect user if he is not logged in
if ( !isset( $_SESSION[ 'member_id' ] ) ) { 
require ( 'login_functions.php' ) ; 
load() ; 
}
?>
<!doctype html>
<html lang=en>
<head>
<title>The form for posting queries</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="hostel.css">
</head>
<body>
<aside id="contact">contact</aside>
<header id="head"><hgroup id="hed">
		<h2 >hostel management</h2>
        <nav>
        <ul id="nav">
        	<li ><a href="../indexx.php">home page</a></li>
            <LI><a href="forum_c.php">Students Queries</a></LI>
            <li id="current"><a href="post.php">Send Your Query</a></li>
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
<?php // The form for posting queries
echo '<h2>Post a Query</h2>';
// Display the form fields
echo '<form action="process_post.php" method="post" accept-charset="utf-8">
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
<p>Choose Your Query:* <select name="subject">
<option value="Students Queries">Students Query</option>
<option value="Workers Query">Workers Query</option>
</select></p>
<p>Query*:<br><textarea name="message" rows="5" cols="50"></textarea></p>
<p style="text-align: center; width: 40px; float: right;"><input class="button_small" name="submit" type="submit" value="post"></p></section>
</form>';
//posting an entry into the database table automaticlally sends a message to the forum moderator 
// Assign the subject
$subject = "Posting added to query board";
$user = isset($_SESSION['uname']) ? $_SESSION['uname'] : "";
$body = "Posting added by " . $user;
mail("admin@hostel.co.ke", $subject, $body, "From:admin@hostel.co.ke\r\n");?>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
</body>
</html>