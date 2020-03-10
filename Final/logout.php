+<!--this page destroys the session created already....
	......logout page.................
-->
<?php
session_start();
?>

<?php 
session_destroy();
//redirect to the login page
header('location:login.php');
?>