<!doctype html>
<html lang=en>
<head>
<title>queries-page</title>
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
        <div style="height:900px;" class="content">
        <section style="text-align:center">
        <img src="xxx.JPG" width="160px" height="190px" />
        <img src="xxx.JPG" width="150px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        <img src="xxx.JPG" width="190px" height="190px" />
        </section>
<h2 style="text-align:center; text-transform:capitalize; ">This home page shows a selection from our large collection of hostel queries
To view the whole collection, please register.
You will then be able to send you queries anytime to the hostel managers</h2>
<section class="login">
<?php
// Connect to the database
require ( 'mysqli_connect.php' ) ;
// Make the query
$q = "SELECT uname, hostel, room_no, post_date, subject, message FROM forum LIMIT 5" ;
$result = mysqli_query( $dbcon, $q ) ;
if ( mysqli_num_rows( $result ) > 0 )
{
  echo '<br><table><tr><th>Posted By</th><th>Query</th><th id="msg">Message</th></tr>';
  while ( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ))
  {
    echo '<tr class="even"><td>' . $row['uname'].'<br>'.$row['post_date'].'<br> hostel '.$row['hostel'].'<br>'.'room no '. $row['room_no'].'</td>
    <td>'.$row['subject'].'</td><td>' . $row['message'] . '</td> </tr>';
  }
  echo '</table>' ;
}
else { echo '<p>There are currently no messages.</p>' ; }
mysqli_close( $dbcon ) ;
?>
<a class="button_small" style="float:left; text-decoration:none; height:30px; color:#FFF;" href="login.php">login</a>
<a class="button_small" style="float:right; text-decoration:none; height:30px; color:#FFF;" href="safer-register-page.php">register</a>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
</body>
</html>