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
<link rel="stylesheet" type="text/css" href="hostel.css">
<title>finance</title>
</head>

<body>
<aside id="contact">contact</aside>

	<header id="head"><hgroup id="hed">
		<h2 >hostel management</h2>
        <nav>
        <ul id="nav">
        	<li id="current"><a href="indexx.php">home page</a></li>
            <li><a href="studentspro.php">Students Portal</a></li>
            <li><a href="hosteldetails.php">Hostels N Resources</a></li>
            <li><a href="members-page.php">Workers Portal</a></li>
            <li><a href="ask.php">FAQs</a></li>
            <li><a href="email.php">Contact US</a></li>
            </ul></nav><a class="button_small" href="logout.php" style="height: 25px; text-decoration:none; text-transform:none; color:#FFF;">LOG OUT</a>
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
        <section class="login" style="width:auto;"><h2><a class="button_small" href="admin-page.php" style="height: 40px; color:#FFF; float:right;">back to admin page</a></h2>
<?php
// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("students") or die(mysql_error());



$query = "SELECT SUM(amountpaid) FROM account"; 
	 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo ' <section class="login"><h2> Total accommodation fee paid = sh ' . $row['SUM(amountpaid)'] . " only <br/> academic year 2014/2014";
	echo "<br /></h2>";

}
?>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>


</body>
</html>