<?php
  session_start();
  include_once 'include/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/hungry.css">
    <style>
      .body
      {
        color: white;
      }
      .read
      {
        color: yellow;  
      }
    </style>
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
                    <?php
                      if (isset($_SESSION['u_first'])) 
                      {
                        echo '<li><a href="ingred.php">SuperCook</a></li>';
                      }
                      else 
                      {
                        echo '<li ><a href="index.php">Home</a></li>';
                      }
                    ?>
                    <li class = "active"><a href="blog.php">Blog</a></li>
                    <li><a href="hungry.php">Hungry?</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  
                  <?php
                    if (isset($_SESSION['u_first'])) 
                    {
                      echo '<li><a href="#">Welcome '.$_SESSION['u_first'].'</a></li>';
                      echo '<li><a href="include/logout.php">Log out</a></li>';
                    }
                    else 
                    {
                      echo '<li><a href="#" onclick=check()>SuperCook</a></li>';
                    }
                  ?>  
              </ul>
            </div>

        </div>
    </nav>
    
    <?php
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql="SELECT * FROM blogs where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
      echo '<h4 class="read">'.$row['title'].'</h4>';
      echo '<br>';
      echo '<h6 class="read">Published on '.$row['created'].' by '.$row['author_first'].' '.$row['author_last'].'</h6>';
      echo '<br>';
      echo '<p class="body">'.nl2br($row['body']).'</p>';
    
    ?>

  </body>
  </html>

                  