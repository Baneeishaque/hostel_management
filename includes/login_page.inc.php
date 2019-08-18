<h2 style="padding-left:4px; width:65px; border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px; background:#0F0; text-align:center;">Login</h2>
<form action="indexhostel.php" method="post">
	<p><label class="label" for="email">Email Address:</label>
	<input id="email" type="text" name="email" size="30" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" > </p>
		<p><label class="label" style="padding-left:63px;" for="psword">Password:</label>
	<input id="psword" type="password" name="psword" size="12" maxlength="12" value="<?php if (isset($_POST['psword'])) echo $_POST['psword']; ?>" ><span>&nbsp;Between 8 and 12 characters.</span></p>
	<p ><input class="button_small" id="submit" type="submit" name="submit" value="Login"> <a class="button_small" style="float:right; height:20px; text-decoration: none; color:#FFF;" href="studentsregister.php">Sign up students portal</a><a class="button_small" href="loginwrk.php" style="height: 25px; text-decoration:none; float:right; height:20PX; text-transform:none; color:#FFF;">WORKERS LOG IN PORTAL</a></p> 
</form><br>