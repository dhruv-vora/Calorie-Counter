<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Snap It!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script async src="//www.google-analytics.com/analytics.js"></script>
    <style>
    body {
          width: 80%;
          margin: 30px auto;
          font-family: sans-serif;
        }

        img {
          border: none;
          max-width: 100%;
          height: auto;
          display: block;
          background: #ccc;
          transition: transform .2s ease-in-out;
          opacity: 0.5 ;
        }
        img:hover {
          transform: scale(0.95);
        }
        ::-webkit-input-placeholder 
        {
        color: white;
    }
</style>
</head>
<body>
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
                    <li class = "active"><a href="#">Snap It!</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="hungry.php">Hungry?</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					
                </ul>
				<ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Welcome <?php echo $_SESSION['u_first']; ?> </a></li>
                    <li><a href="include/logout.php">Log out</a></li> 
                </ul>
            </div>

        </div>
    </nav>
</body>
</html>