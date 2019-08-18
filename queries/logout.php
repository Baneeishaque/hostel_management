<?php
session_start() ;
// Redirect the user if not logged in
if ( !isset( $_SESSION[ 'member_id' ] ) ) { 
require ( 'login_functions.php' ) ; load() ; 
}
?>
<!doctype html>
<html lang=en>
<head>
<title>Logout code</title>
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
            <li><a href="forum_w.php">Workers Queries</a></li>
            <li ><a href="post.php">Send Your Query</a></li>
            <li ><a href="view_posts.php">View your Query</a></li>
            <li><a href="search.php">Search</a></li>
            <li id="current"><a href="logout.php">Logout</a></li>
            </ul></nav>
    	</hgroup>
    	</header>
        <div class="content">
        <section style="text-align:center;">
        <img src="xxx.JPG" width="160px" height="190px" />
        <img src="xxx.JPG" width="150px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        </section>
      <section class="login">
<?php 

// Remove the session variables from the session
$_SESSION = array() ;
// Destroy the session
session_destroy() ;
// Display the thank you message
echo '<h2>Thank you for logging out!</h2>
<br><h3>Logging out is a very important security measure</h3> ';
?>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
</body>
</html>