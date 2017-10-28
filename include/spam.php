<?php
 	session_start();
	include_once 'db.php';

	$title = $_POST['title'];
	$email = $_POST['u_email'];  
	/*$sql1= "SELECT * FROM blogs WHERE title='$title'";
	$result=mysqli_query($conn, $sql1);
	$preemail=$result['email'];                      

	$newemail=''.$preemail.';'.$email;	
	*/
	$sql= "UPDATE blogs SET spam = spam + 1 , email=concat(email, ';', '$email') Where title='$title'";
	mysqli_query($conn, $sql);                      

	$sql2="DELETE from blogs WHERE spam=5";
	mysqli_query($conn, $sql2);


