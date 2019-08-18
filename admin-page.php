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
<title>Admin page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="hostel.css">
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
       <section class="login" style="width:auto; top:300px;">
        <?php 
		if (isset($_SESSION['fname'])){?>
        <p style="padding:0px; border:#FFF 4px; margin-left:0"><figure><img width="150px" height="150px" src="carter.JPG" /><span>
        <figcaption> <?php 
		echo "{$_SESSION['fname']}" ?> </p>

<!-- Start of the member's page content. -->
<?php
echo '<h2>Welcome to the Admin Page ';

echo "{$_SESSION['fname']}";
}
echo '</h2>';
?>

	<h2 align="center">You have permission to view, edit and check out users from the system and resources click the link below:</h2>
    <h2 align="center"><a href="balance.php">view total vacant spaces</a></h2>
    <h2 align="center"><a href="admin_view_users.php">view members edit and delete </a></h2>
    
    <h2 align="center"><a href="pdfhacked/index.php">view students and print pdf form</a></h2>
    <h2 align="center"><a href="finance.php">view total accommodation fee paid</a></h2>
    </section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
	
<!-- End of the members page content. -->

</body>
</html>