<?php											
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1))
{
header("Location: login.php");
exit();
}
?>
<!doctype html>
<html lang=en>
<head>
<title>Search page</title>
<link rel="stylesheet" href="hostel.css" type="text/css" />
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="includes.css">
<style type="text/css">
h3.red { color:red; font-size:105%; font-weight:bold; text-align:center;}
</style>
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
            </ul></nav>
            <a class="button_small" href="logout.php" style="height: 25px; text-decoration:none; text-transform:none; color:#FFF;">LOG OUT</a>
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
<!-- Start of search page content. -->
<h2><center>Search for a Record</center>  <a class="button_small" href="admin-page.php" style="height: 40px; color:#FFF; float:right;">back to admin page</a></h2>
<h3 class="red">Both are required items</h3>
  <section class="login">
<form action="view_found_record.php" method="post">
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
	<p><label class="label" for="admmision">Admision:</label><input id="admmision" type="text" name="admmision" size="30" maxlength="30" value="<?php if (isset($_POST['admmision'])) echo $_POST['admmision']; ?>"></p>
	<p><label class="label" for="lname">Last Name:</label><input id="lname" type="text" name="lname" size="30" maxlength="40" value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>"></p>
	<p style="text-align: center; width: 40px; float: right;"><input class="button_small" id="submit" type="submit" name="submit" value="Search"></p></fieldset>
</form>
<h2> <a class="button_small" style="float:right; height:20px; color:#FFF;" href="admin_view_users.php"> to view members</a> </h2></section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>

<!-- End of the search page content. -->
	
</body>
</html>