<!doctype html>
<html>
<head>
<title>FormFillup</title>
<link rel="stylesheet" type="text/css" href="lin.css">
</head>
<body>
<div id="lin">
<form method="post" action="adults.php">
<h2>Customer Details</h2>
<div class="da">Customer_Name<input type="text" name="cname" required><br>
Address<input type="text" name="address"required><br>
Sex:<input type="radio" name="gender" value="male" checked>Male<br>
<input type="radio" name="gender" value="female">Female<br><br>
Price:<select name="price">
<option>Rs.15</option>
</select><br><br>
<input type="submit" name="submit"value="Save">
<input type="reset"><br></div></div>
<a href="cd.php"><h1 align="center">Home</h1></a>
</form>
</body>
</html>
