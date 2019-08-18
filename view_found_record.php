<?php
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1))
{ header("Location: login.php");
exit();
}
?>
<!doctype html>
<html lang=en>
<head>
<title>View found record page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="hostel.css">

</head>
<body><!-- Start of view-found-record content -->
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
<h2 style="text-align:center; text-transform:capitalize; ">Search Result <a class="button_small" href="search.php" style="height: 40px; color:#FFF;">search for members</a> <a class="button_small" href="admin-page.php" style="height: 40px; color:#FFF; float:right;">back to admin page</a></h2>
<section class="login" style="width:auto;">
<?php 
// This code retrieves records from the users table.
require ('mysqli_connect.php'); // Connect to the db.
echo '<p>If no record is shown, this is because you had an incorrect or missing entry in the search form.<br>Click the search and try again</p>';
$admmision=$_POST['admmision'];
$admmision = mysqli_real_escape_string($dbcon, $admmision);
$lname=$_POST['lname'];
$lname = mysqli_real_escape_string($dbcon, $lname);
$q = "SELECT lname, admmision, email, DATE_FORMAT(registration_date, '%M %d, %Y') AS regdat, school, check_in, user_id FROM users WHERE lname='$lname' AND admmision='$admmision' ORDER BY registration_date ASC ";		
$result = @mysqli_query ($dbcon, $q); // Run the query.
if ($result) { // If it ran, display the records.
// Table header.
echo '<table>
<tr><td><b>Edit</b></td>
<td><b>Delete</b></td>
<td><b>Last Name</b></td>
<td><b>Admision</b></td>
<td><b>Email</b></td>
<td><b>Date Registered</b></td>
<td><b>School</b></td>
<td><b>Checked in</b></td>
</tr>';
// Fetch and display the records:
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo '<tr class="even">
	<td><a href="edit_record.php?id=' . $row['user_id'] . '">Edit</a></td>
	<td><a href="delete_record.php?id=' . $row['user_id'] . '">Delete</a></td>
	<td>' . $row['lname'] . '</td>
	<td>' . $row['admmision'] . '</td>
	<td>' . $row['email'] . '</td>
	<td>' . $row['regdat'] . '</td>
	<td>' . $row['school'] . '</td>
	<td>' . $row['check_in'] . '</td>
	</tr>';
	}
	echo '</table>'; // Close the table.
	mysqli_free_result ($result); // Free up the resources.	
} else { // If it did not run OK.
// Error message:
	echo '<p class="error">The current users could not be retrieved. We apologize for any inconvenience.</p>';
	// Debugging message:
	echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
} // End of if ($result). Now display the total number of records/members.
$q = "SELECT COUNT(user_id) FROM users";
$result = @mysqli_query ($dbcon, $q);
$row = @mysqli_fetch_array ($result, MYSQLI_NUM);
$members = $row[0];
mysqli_close($dbcon); // Close the database connection.
echo "<p>Total students: $members</p>";
?>
<!-- End of view-found-record page content -->

</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>

</body>
</html>