<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tic_management";

$cname=$_POST['cname'];
$address= $_POST['address'];
$gender= $_POST['gender'];
$price= $_POST['price'];
//create connection
$conn =new mysqli($servername,$dbusername,$dbpassword,$dbname);

//check connection
if($conn->connect_error){
die("connection failed" . $conn->connect_error);
}
$sql = "INSERT INTO Adult (cname,address,gender,price) 
VALUES('$cname','$address', '$gender', '$price')";
if($conn->query($sql) === TRUE){
echo"your data is entered";
}
else
{
echo"error to entered" . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
<br />
<html>
<link rel="stylesheet" type="text/css" href="link.css">
<body>
<div id="link">
<a href="form1.php">Add new data</a><br><br>
<a href="cd.php">Back to menu</a>
</div>
<body>
</html>



