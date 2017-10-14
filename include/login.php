<?php

session_start();

if (isset($_POST['login'])) 
{
	include 'db.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pass']);

	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
		
	if ($resultCheck < 1) //if email-id not found
	{
		header("Location: ../index.php?login=emailerror");
		exit();
	}
	else 
	{
		if ($row = mysqli_fetch_assoc($result)) 
		{
			//De-hashing the password
			$hashedPwdCheck = password_verify($pwd, $row['password']);
			if ($hashedPwdCheck == false) 
			{
				header("Location: ../index.php?login=pwderror");
				exit();
			} 
			else if ($hashedPwdCheck == true) 
			{
				
				//Log in the user here
				$_SESSION['u_first'] = $row['first'];
				$_SESSION['u_last'] = $row['last'];
				$_SESSION['u_email'] = $row['email'];
				$_SESSION['u_calorie'] = $row['calorie']; 
				if($_SESSION['u_first']=='admin')
				{
					header("Location: ../review.php");
				}
				else
				{
					header("Location: ../ingred.php?login=success");
				}
				exit();
			}
		}
	}
}
else 
{
	header("Location: ../index.php?login=error");
	exit();
}
