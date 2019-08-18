<?php
session_start() ;
// Redirect if not logged in
if ( !isset( $_SESSION[ 'member_id' ] ) ) { 
require ( 'login_functions.php' ) ; load() ; }
?>
<!doctype html>
<html lang=en>
<head>
<title>Workers queries page</title>
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
            <li id="current"><a href="view_posts.php">View your Query</a></li>
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
// Connect to the database
require ( 'mysqli_connect.php' ) ;
// Make the query
$q = "SELECT uname, hostel, room_no, post_date,subject,message FROM forum WHERE subject = 'Workers Query' ORDER BY 'post_date' ASC";
$result = mysqli_query( $dbcon, $q ) ;
if ( mysqli_num_rows( $result ) > 0 )
{
  echo '<h2>Workers Queries</h2><table><tr><th>Posted By</th><th>Subject</th><th id="msg">Queries</th></tr>';
  while ( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ))
  {
    echo '<tr class="even"><td>' . $row['uname'].'<br>'.$row['post_date'].'<br>'.$row['hostel'].'<br>'.$row['room_no'].'</td>
    <td>'.$row['subject'].'</td><td>' . $row['message'] . '</td> </tr>';
  }
  echo '</table>' ;
}
else { echo '<p>There are currently no messages.</p>' ; }
mysqli_close( $dbcon ) ;
?>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
</body>
</html>