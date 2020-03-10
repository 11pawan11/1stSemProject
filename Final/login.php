<?php
 include('server.php') 
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <h1 style="color:white;" align="center">Welcome to login page</h1>
  <div id="lin">
  	<h2>Login</h2>
<div class="login">
  
<form method="post" action="login.php">
  	<?php include('errors.php'); ?>
 
  		<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required><br>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required><br>
  	
  		<button type="submit" class="btn" name="login_user">Login</button>

  

  </form>
</div>
</div>

</body>
</html>
