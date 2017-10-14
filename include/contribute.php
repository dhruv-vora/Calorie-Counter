<?php
session_start();


if (isset($_POST['submit'])) //checking if register button has been pressed
{
		
	include_once 'db.php'; //including connection 

	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn,$_POST['content']);
	$fname=$_SESSION['u_first'];
	$lname=$_SESSION['u_last'];
	/*echo $title;
	echo "<br>";
	echo $content;
	echo "<br>";
	echo $fname;
	echo "<br>";
	echo $lname;
	echo "<br>";
	*/
	$sql = "INSERT INTO tempblogs (title,body,author_first,author_last,created) VALUES ('$title','$content','$fname','$lname',now());";
	mysqli_query($conn, $sql);
	header("Location: ../blog.php?contribute=success");
		
	exit();			
}
?>
