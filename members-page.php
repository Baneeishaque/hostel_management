<?php
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0))
{  header("Location: login.php");
   exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="hostel.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOSTEL MANAGEMENT</title>
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
		if (isset($_SESSION['fname'])){?>
        <p style="padding:0px; border:#FFF 4px; margin-left:0"><figure><img width="150px" height="150px" src="carter.JPG" /><span>
        <figcaption> <?php 
		echo "{$_SESSION['fname']}" ?> </p>
        <section class="login">
        
        <?php
			echo '<h2 style="text-align:center; text-transform:capitalize; ">Welcome to the Members\' Page ';
			
			echo "{$_SESSION['fname']}";
		}
			echo ' <br> hostel details</h2>';
			?>

					<p>HOSTEL: M
				<br>ROOM NUMBER: 395<br>ROOM MATE: KEVIN KIMUTAI<br> NOTE THIS MODULE IS NOT COMPLETE.</p>


		
        
        

</section><section style="position:absolute;
	margin-right:10;
	border: #FFF double 3px;
	top: 300px;
	opacity:1;
	left: 750px;
	height: 200px;
	width: 200px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;"><h2 h2 style="text-align:center; text-transform:capitalize; ">ROOM NEWS/QUERY</h2>
    <P> YOU DO NOT HAVE ANY NEWS CURRENTLY</P><a class="button_small" href="queries/post.php" style="height: 25px; text-decoration:none; text-transform:none; color:#FFF;">ADD QUERY</a></section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
</body>
</html>
