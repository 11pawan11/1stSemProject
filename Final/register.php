<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
  <h1 style="color:white"; align="center";>Register Users</h1>
  <div id="lin">
  	<h2>Register</h2>
<div class="login">
 
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="da">
  	  Username
  	  <input type="text" name="username" required<?php echo $username; ?>"><br>
  	  <label>Password</label>
  	  <input type="password" name="password_1" required><br>
  	
  	 <label>Confirm password</label>
  	  <input type="password" name="password_2" required><br>
  
  	  <button type="submit" class="btn" name="reg_user">Register</button><br>
<button type="reset" class="btn" name="reg_user">Reset</button><br>

  	
  	<p>
  		Already a member? &nbsp <a href="login.php">Sign in</a>
  	</p>
</div>

  </form>
</div>

<a href="login.php"><h1 align="left">Home</h1></a> 
</div>
</body>
</html>
