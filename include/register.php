<?php

if (isset($_POST['signup'])) //checking if register button has been pressed
{
		
	include_once 'db.php'; //including connection 

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pass']);
	$newpwd = mysqli_real_escape_string($conn, $_POST['newpass']);

	//checking if email id has already been registered
	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0) 
	{
		header("Location: ../index.php?register=usertaken");
		exit();
	}
	else 
	{
		//checking if the 2 passwords match
		if($pwd!=$newpwd)
		{
			header("Location: ../index.php?register=pwdnotmatch");
			exit();		
		}
		else
		{
			//Hashing the password
			$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
			//Insert the user into the database
			$sql = "INSERT INTO users (first,last,email,password) VALUES ('$first', '$last', '$email', '$hashedPwd');";
			mysqli_query($conn, $sql);
			header("Location: ../snapit.php?register=success");	//change the link to a new page which displays the message that you have been registered and click on this link to log in
			exit();
		}
	}
}
else 
{
	header("Location: ../index.php");
exit();
}