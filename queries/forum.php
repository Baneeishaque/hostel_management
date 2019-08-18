<?php
session_start() ;
// Redirect if not logged in.
if ( !isset( $_SESSION[ 'member_id' ] ) ) { 
require ( 'login_functions.php' ) ; load() ; }
?>
<!doctype html>
<html lang=en>
<head>
<title>Query page</title>
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
<h2 style="text-align:center; text-transform:capitalize;">Choose a query or send your query</h2>
	<ul>
		<li><a href="forum_c.php">Students Queries</a></li>
		<li><a href="forum_w.php">Workers Queries</a></li>
        <li><a href="post.php">Send Your Query</a></li>
	</ul>
<br>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>

</body>
</html>