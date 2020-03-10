<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="link.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!-- create a table and show in the suitable format -->
<body>
<div id="li">
<a href="cd.php">Go Back</a>
</div>
<div class="container">                                                                            
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Price</th>
      </tr>
    </thead>

  </div>
</div>
</body>


<!-- fetching data from data base-->
<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tic_management";

$conn =new mysqli($servername,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
die("connection failed" . $conn->connect_error);
}

$sql="SELECT cname,address,gender,price FROM Adult";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0) ;
while ($row= mysqli_fetch_array($result)){
echo"<tr>";
echo"<td>".$row['cname']."</td>";
echo"<td>".$row['address']." </td>";
echo"<td>".$row['gender']." </td>";
echo"<td>".$row['price']." </td>";
echo"</tr>";
}
mysqli_close($conn);  

?>

</table>
</body>
</html>

