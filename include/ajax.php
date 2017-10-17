<?php
 	session_start();
	include_once 'db.php';

	$action = $_POST['action'];
	$title = $_POST['title'];
	$source_url = $_POST['source_url'];
	$image_url = $_POST['image_url'];
	$u_email= $_POST['u_email'];
	  
	if($action=="remove")
	{
		$sql= "DELETE FROM fav WHERE title='$title' AND u_email='$u_email'";
		mysqli_query($conn, $sql);                      
	}
	if($action=="add")
	{
	  	$sql = "INSERT INTO fav (title,source_url,image_url,u_email) VALUES ('$title', '$source_url', '$image_url', '$u_email');";
		mysqli_query($conn, $sql);                      
	}


