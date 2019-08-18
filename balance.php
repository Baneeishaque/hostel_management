<?php
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1))
{
   header("Location: login.php");
   exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="hostel.css" type="text/css" />
<title>remaining bed space</title>
</head>

<body>
<aside id="contact">contact</aside>

	<header id="head"><hgroup id="hed">
		<h2 >hostel management</h2>
        <nav>
        <ul id="nav">
        	<li id="current"><a href="#">home page</a></li>
            <li><a href="#">home page</a></li>
            <li><a href="#">home page</a></li>
            <li><a href="#">home page</a></li>
            <li><a href="#">home page</a></li>
            <li><a href="#">home page</a></li>
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
$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("students", $con);

$result = mysql_query("select count(1) FROM users WHERE check_in='YES'");
$row = mysql_fetch_array($result);


$total = $row[0];
echo '<section class="login"><h2 style="text-align:center;">Total students checked in: ' . $total;


mysql_close($con);
?>
<?php
$ans=900;
$ans=$ans-$total;

echo '<br /> ' . $ans . '  remaining bed space in the whole university out of 900 available bed space ';
?>
<h2><a class="button_small" href="admin-page.php" style="height: 40px; color:#FFF; float:right;">back to admin page</a></h2></section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
</body>
</html>