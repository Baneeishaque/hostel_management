<!doctype html>
<html lang=en>
<head>
<title>Queries  found</title>
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
            <li><a href="forum_w.php">Workers Queries</a></li>
            <li ><a href="view_posts.php">View your Query</a></li>
            <li id="current"><a href="search.php">Search</a></li>
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
<!--Start of the quotes found page content-->
<?php
// Start the session.
session_start() ;
// Redirect if not logged in
if ( !isset( $_SESSION[ 'member_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }
// Connect to the database
require ( 'mysqli_connect.php' ) ;
//if POST is set
if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
$target = $_POST['target'];//Set variable
}
// Make the full text query
$q = "SELECT uname, hostel, room_no, post_date, subject, message FROM forum WHERE MATCH (message) AGAINST ( '$target') ORDER BY post_date ASC";
$result = mysqli_query( $dbcon, $q ) ;
if (@ mysqli_num_rows( $result ) > 0 )
{
 echo '<h2>Full Text query Search Results</h2><table><tr><th>Posted By</th><th>Query</th><th id="msg">Queries</th></tr>';
  while ( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ))
  {
    echo '<tr class="even"><td>' . $row['uname'].'<br>'.$row['post_date'].'<br>'.$row['hostel'].'<br>'.$row['room_no'].'</td>
    <td>'.$row['subject'].'</td><td>' . $row['message'] . '</td> </tr>';
  }
  echo '</table>' ;
}
else { echo '<p>There are currently no query messages.</p>' ; }
mysqli_close( $dbcon ) ;
?>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
	
</body>
</html>