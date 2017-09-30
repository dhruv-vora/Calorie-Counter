<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CalCount</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <style>
        body {
          width: 80%;
          margin: 30px auto;
          font-family: sans-serif;
          }
        .container
        {
            width: 100%;
            height: 1000px;
            background-color: yellow;
        }
        .left
        {
            margin-right: 50%;
            background-color: grey;
            height: 1000px;
            width: 65%;
            float:left;
        }
        .article
        {
           padding: 5px 5px 0px 5px; 
           height: 200px;
           background-color: green;
        }
        .title
        {
            font-size: 24px; 
        }
        .right
        {
            margin-left: 68%;
            width: 32%;
            height: 800px;
            background-color: red;

        }
    </style>

</head>
	<body>	
	<nav class="navbar navbar-default">
        <div class="container-fluid">

            <!-- Logo -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">CALCOUNT</a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                    <li ><a href="index.php">Home</a></li>
                    <li class = "active"><a href="blog.php">Blog</a></li>
                    <li><a href="hungry.php">Hungry?</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    
                </ul>

                

                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="snapit.php">Snap It!</a></li>
                </ul>
            </div>

        </div>
    </nav>
    
        <div class="left">
            <div class="article">
                <div class="title">
                    Article 1     
                </div>
            </div>
            <div class="article">
            
            </div>
            <div class="article">
            
            </div>
            <div class="article">
            
            </div>
            <div class="article">
            
            </div>
        </div>
        <div class="right">
            <div class="topright">
                
            </div>   
        </div>

	</body>
</html>