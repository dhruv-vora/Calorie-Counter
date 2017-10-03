<?php
session_start();


if (isset($_POST['submit'])) //checking if register button has been pressed
{
		
	include_once 'db.php'; //including connection 

	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = $_POST['content'];

	$sql = "INSERT INTO tempblogs (title,body,author_first,author_last,created) VALUES ('$title', '$content', '{$_SESSION['u_first']}', '{$_SESSION['u_last']}',now());";
	mysqli_query($conn, $sql);
	header("Location: ../blog.php?contribute=success");
		
	exit();			
}
?>
