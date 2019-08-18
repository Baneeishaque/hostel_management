<?php
// set the maximum upload size in bytes
$max = 900000008240;
if (isset($_POST['upload'])) {
  // define the path to the upload folder
  $destination = 'C:/upload_test/';
  require_once('Upload.php');
  try {
	$upload = new Ps2_Upload($destination);
	$upload->move();
	$result = $upload->getMessages();
  } catch (Exception $e) {
	echo $e->getMessage();
  }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset=utf-8">
<link rel="stylesheet" href="hostel.css" type="text/css" />
<title>Upload Backslip</title>
</head>

<body><aside id="contact">contact</aside>

	<header id="head"><hgroup id="hed">
		<h2 >hostel management</h2>
        <nav>
        <ul id="nav">
        	<li ><a href="indexx.php">home page</a></li>
            <li id="current"><a href="studentspro.php">Students Portal</a></li>
            <li><a href="hosteldetails.php">Hostels N Resources</a></li>
            <li><a href="members-page.php">Workers Portal</a></li>
            <li><a href="ask.php">FAQs</a></li>
            <li><a href="email.php">Contact US</a></li>
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
        
        <h2 style="text-align:center; text-transform:capitalize; ">students details<br >Upload your backslip </h2>
	
        <section class="login">
<?php
if (isset($result)) {
  echo '<ul>';
  foreach ($result as $message) {
	echo "<li>$message</li>";
  }
  echo '</ul>';
}
?>
<form action="" method="post" enctype="multipart/form-data" id="uploadImage">
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
  <p>
    <label for="image">Upload image:</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max; ?>">
    <input type="file" name="image" id="image">
  </p>
  <p style="text-align: center; width: 40px; float: right;">
    <input class="button_small" type="submit" name="upload" id="upload" value="Finish">
    <a href="indexhostel.php">log in</a>
  </p></fieldset>
</form>
</section></div>
<footer style=" text-align:center;" class="foot">copy right apps:lab programmers &copy; 2014</footer>
</body>
</html>