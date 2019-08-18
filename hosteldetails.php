<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hostel details</title>
<link rel="stylesheet" type="text/css" href="hostel.css">
</head>

<body><aside id="contact">contact</aside>

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
<H2 style="text-align:center; text-transform:capitalize; "> HOSTELS DETAILS</H2>
<P>This is a brief information of our hostels; their location within moi university, the total number of students they can accommodate, the accommodation fee for each semester, the officials details of the hostel</P>
<section class="login" style="width:auto;">
	<article><h3>hostel m</h3>
    	<table>
        	<tr>
            <th>location</th>
            <th>official</th>
            <th>hostel hotline</th>
            <th>number of rooms</th>
            <th>accommodation fee</th>
            <th>occupants</th>
            </tr>
            <tr class="even">
            <td>gprs=1235,1452</td>
            <td>janitors:marry chebet<br /> &nbsp;&nbsp;&nbsp;&nbsp;mike sonko<br />
            	warden: man power</td>
            <td>landline number:0704407117<br />
            	mobile number:0704407117<br />
                email address:emailhostel@moi.mu.ac.ke</td>
            <td>total number of rooms:<?php
            	$room=900;
				echo $room;
				?><br />
            	vacant rooms:540</td>
            <td>semester one: 3250<br />
            	semester two: 2750</td>
            <td>male<br />
            	<?php
				$students=$room*2;
                echo "total number of students=". $students;
				?></td>
                </tr>
                <tr class="even">
            <td>gprs=1235,1452</td>
            <td>janitors:marry chebet<br /> &nbsp;&nbsp;&nbsp;&nbsp;mike sonko<br />
            	warden: man power</td>
            <td>landline number:0704407117<br />
            	mobile number:0704407117<br />
                email address:emailhostel@moi.mu.ac.ke</td>
            <td>total number of rooms:<?php
            	$room=900;
				echo $room;
				?><br />
            	vacant rooms:540</td>
            <td>semester one: 3250<br />
            	semester two: 2750</td>
            <td>male<br />
            	<?php
				$students=$room*2;
                echo "total number of students=". $students;
				?></td>
                </tr>
        	</table>
            </section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
</body>
</html>