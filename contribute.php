<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contribute</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/contribute.css">
    
</head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <!-- Logo -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Yummly</a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                     <li><a href="ingred.php">SuperCook</a></li>
                     <li><a href="fav.php">Favourites</a></li>
                    <li class = "active"><a href="blog.php">Blog</a></li>
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

    <h3 style="color: white;">Write to us and we will add your article to the blog after reviewing it.</h3>

    <!-- onsubmit="var text = document.getElementById('content').value; if(text.length < 150) { alert('Please write atleast 150 characters!'); return false; } return true;"
    Put the above part in below form tag -->
    <form name="contribute" action="include/contribute.php" method="POST" onsubmit="var text = document.getElementById('content').value; if(text.length < 150) { alert('Please write atleast 150 characters!'); return false; } return true;">  
        <input type="text" name="title" placeholder="Blog Title" required="required">
        <textarea name="content" id="content" placeholder="Type your article here (Minimum 150 characters)" required="required"></textarea>
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Submit</button>
      </form>



</body>
</html>