<?php
session_start();
include_once 'db.php'; //including connection 

if (isset($_POST['del'])) //checking if delete button has been pressed
{
	$sql3 = "DELETE FROM tempblogs LIMIT 1";
	mysqli_query($conn, $sql3);
	
	header("Location: ../review.php?");

	exit();				
}
if (isset($_POST['add'])) //checking if add button has been pressed
{
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn,$_POST['content']);
	
	$sql1="SELECT * FROM tempblogs LIMIT 1";
    $result = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_array($result);
    $author_first=$row['author_first'];
    $author_last=$row['author_last'];
    $created=$row['created'];
    
    		  	
	$sql2 = "INSERT INTO blogs (title,body,author_first,author_last,created) VALUES ('$title', '$content', '$author_first', '$author_last','$created');";
	mysqli_query($conn, $sql2);

	$sql3 = "DELETE FROM tempblogs WHERE created='$created'";
	mysqli_query($conn, $sql3);
	
	header("Location: ../review.php?");

	exit();			
}
?>
