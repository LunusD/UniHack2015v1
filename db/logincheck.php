<?php
include 'init.php';   // includes the init.php file

/* if (user_exists('sjschofield') === true) {
	echo 'exists';
} */    // this if statement checks to see if the user_exists function works as defined in users.php

if(empty($_POST) === false) {
	$Username = $_POST['Username'];
	$UserPassword = $_POST['UserPassword'];      // if the Username and UserPassword fields are NOT empty

 	// echo $Username, ' ', $UserPassword;      // print whatever was entered into Username and UserPassword - for initial testing purposes


	 if(empty($Username) === true || empty($UserPassword) === true) {
		$errors[] = 'you need to enter both a Username and UserPassword';
	} else if(user_exists($Username) === false) {
		$errors[] = 'This Username isn\'t in our database';
	} else {
		$login = login($Username, $UserPassword);
		if($login === false) {
			$errors[] = 'That Username/UserPassword combination is invalid';
		} else {
			//set the user session and redirect to home
			$_SESSION['userID'] = $login; 
			header('Location: ../index.php');
			exit();
		}
	}

}
echo output_errors($errors); //outputs the errors to the screen
?>
