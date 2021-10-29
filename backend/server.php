<?php
// initializing variables
$email    = "";
$errors = array();

// connect to the database
require "../database/db_connection.php";

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

  // check if the passwords are matched
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (first_name, last_name, email, phonenumber, password_1, password_2 )
  			  VALUES('$first_name', '$last_name', '$email', '$phonenumber', '$password_1', '$password_2')";
  	mysqli_query($con, $query);
  	header('location: ../index.php');
  }
}

// ...
// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);

  if (empty($email)) {
  	array_push($errors, "email is required");
  }
  if (empty($password_1)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password_1='$password_1'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  header('location: fff.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>