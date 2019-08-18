<?php
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1))
{ header("Location: login.php");
exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> students details</title>
        <link rel="stylesheet" href="hostel.css" type="text/css" />
	</head>
	<body>
    <aside id="contact">contact</aside>

	<header id="head"><hgroup id="hed">
		<h2 >hostel management</h2>
        <nav>
        <ul id="nav">
        	<li id="current"><a href="../indexx.php">home page</a></li>
            <li><a href="../studentspro.php">Students Portal</a></li>
            <li><a href="../hosteldetails.php">Hostels N Resources</a></li>
            <li><a href="../members-page.php">Workers Portal</a></li>
            <li><a href="../ask.php">FAQs</a></li>
            <li><a href="../email.php">Contact US</a></li>
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
    <h2 style="text-align:center; text-transform:capitalize; "> students details.<a class="button_small"  href="print_pdf.php" style="height: 40px; color:#FFF;">generate pdf</a> <a class="button_small" href="../admin-page.php" style="height: 40px; color:#FFF; float:right;">back to admin page</a></h2>
      <section class="login">
		<table cellpadding="10" cellspacing="0" align="center">
			<tr>
				<thead align="center">
				<th>First name</th>
				<th>Last Name</th>
				<th>Email Adress</th>
				<th>Admision</th>
				<thead>
			</tr>
			<?php
				mysql_connect('localhost', 'root', '');
				mysql_select_db('students');
				$query = mysql_query("Select fname,lname,email,admmision From users");
				while($row = mysql_fetch_array($query)) {
					echo '<tr class="even">';
					echo "<td>".$row['fname']."</td>";
					echo "<td>".$row['lname']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['admmision']."</td>";
					echo "</tr>";
				}
			?>
		</table>
		<br>
		<a class="button_small"  href="print_pdf.php" style="height: 40px; color:#FFF;">generate pdf</a>
        </section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>

	</body>
</html>