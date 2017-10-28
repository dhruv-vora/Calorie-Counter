<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SuperCook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/contribute.css">
    <style>
        textarea
        {
            font-size: 20px;
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
                     <li class = "active"><a href="#">SuperCook</a></li>
                    <li><a href="fav.php">Favourites</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="hungry.php">Hungry?</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  
                  <?php
                      echo '<li><a href="#">Welcome '.$_SESSION['u_first'].'</a></li>';
                      echo '<li><a href="include/logout.php">Log out</a></li>';
                    
                  ?>  
              </ul>
            </div>

        </div>
    </nav>

    <h4 style="color: white;">Ever wondered what recipes you can cook with the ingredients you have in your fridge or pantry?</h4> 
    <br>
    <h4 style="color: white;">This portal lets you find recipes that either maximize the usage of ingredients you have at hand (pre shopping) and also minimize the ingredients that you don't currently have (post shopping). </h4>
    <div style="color: white;">
    <form name="contribute" action="recipes.php" method="POST">  
       <textarea name="content" id="content" placeholder="Type your ingredients here (new item on new line)" required="required"></textarea> 
       <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Get Recipes</button>
      </form>
</div>
</body>
</html>