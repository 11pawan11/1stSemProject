<!-- This is for login page
 -->
<?php
session_start();
// initializing variables and setting the email and password blank
$username = "";
$email    = "";
$errors = array(); 
// connect to the database called Hotel.
$db = mysqli_connect('localhost', 'root', '', 'Hotel');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form to php variables if users press the register button.
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //$error corresponds to array()
  if (empty($username))
    {array_push($errors, "Username"); }
  
  if (empty($password_1)) 
    { array_push($errors, "required"); }

  if ($password_1 != $password_2)
	{array_push($errors, "Passwords donot match");}
   
  
  // first check the database to make sure 
  // a user does not already exist with the same username and or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";//query ::even if one data is just matchecd.... 
  $result = mysqli_query($db, $user_check_query);//run the query..
  $user = mysqli_fetch_assoc($result);//puts data in the form of an assosiative array.
  if ($user) // if user exists
  { 

    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");}
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

    //insert the data into the corresponding database when there are no errors
  	$query = "INSERT INTO `users` (username, password) 
  			  VALUES('$username', '$password')";
  	mysqli_query($db, $query);//run this query
  	$_SESSION['username'] = $username;//store username as a session. 
  	// $_SESSION['success'] = "You are now logged in";
    //redirect to index.php("to the main page") when registered successfully.
  	header('location: login.php');
  }
}
// ... // LOGIN USER

//if login button is pressed
if (isset($_POST['login_user'])) {
  //store the value enterd by users to certain variables.
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

//checks empty field.
  if (empty($username)) {
    array_push($errors, "wrong username");
  }
  if (empty($password)) {
    array_push($errors, "wrong password");
  }
   //if no errors occur.
  if (count($errors) == 0){
    //md5 is encryption technique
    //stores the password in encrypted form 
   // $password = ($password);
    // now fetch record from the database to check username and password provided by users with the data already in database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1){
      $_SESSION['username'] = $username;
      // $_SESSION['success'] = "You are now logged in";
      header('location: adult1.php');
    }
    else 
     { array_push($errors, "Wrong password/username ");}
  }
}
?>
