<?php

session_start();

//intializing variables

$username = "";
$email= "";

$errors = array();
//connect to database

$db = mysqli_connect('localhost','root','','bank') or die("could not connect to database");

//registering user

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//form validation

if(empty($username)) {
 array_push($errors, "username is required");
};

	if(empty($email)){
		array_push($errors, "email is required");
	};

			if(empty($password_1)) {
			array_push($errors, "password is required");
		};

				if(empty($password_1 != $password_2)) {
					array_push($errors, "Passwords need to match");
					};

//check db for existing user with same username

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = 'email' LIMIT 1";

$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);

if ($user['username']===$username) {

	array_push($errors,"username is taken");
	
}

if ($user['email']===$email) {

	array_push($errors,"This email is already registered to a user");
	
}

//register the user if no errors are found

if (count($errors)==0) {

	$password = md5($password_1);// hash password

	$query = "INSERT INTO user (username , email , password) VALUES ('$username' , '$email','$password')";

	mysqli_query($db,$query);

	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";

	header('location:index.php');



}

?>