<?php
	session_start();
	include_once 'db.php';
	
	$title = $_GET['title'];
	$u_email=$_SESSION['u_email'];

	$sql= "DELETE FROM fav WHERE title='$title' AND u_email='$u_email'";
	mysqli_query($conn, $sql);                      

header("Location: ../fav.php");
exit();