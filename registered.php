<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Successfully Registered</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!--     <link rel="stylesheet" type="text/css" href="css/registered.css">
 -->
<style>
        .title
  {
    font-family: Lobster,Monospace;
    font-size: 18px;
/*    background-color: transparent;
*/  }
  .brand
  {
    font-size: 25px;
  }
      body 
        {
          width: 80%;
          margin: 30px auto;
          font-family: sans-serif;
          background-image: url("images/abc.jpg");
          background-size: 100%;
        }
        .message
        {
          text-align: center;
          margin-top: 50px;
          color: white;
 
        }
        p
        {
          font-size:50px;
          
        }
        .link
        {
          font-size: 20px;
          color: white;
        }
        a.link:hover 
        {
          color: white; 
        }

</style>
</head>
<body>
<nav class="navbar navbar-default title">
        <div class="container-fluid">

            <!-- Logo -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand brand">Yummly</a>
            </div>
            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                    <li class = "active"><a href="index.php">Home</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="hungry.php">Hungry?</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          
                </ul>
        <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" onclick="alert('Please Log-in First to use the SuperCook Feature');">SuperCook</a></li> 
                </ul>
            </div>

        </div>
    </nav>
    <div class="message">
    <p>You have been successfully registered!</p>
    <br>
    <a href="index.php" class="link">Please click on this link to login to your account.</a>
  </div>
</body>
</html>