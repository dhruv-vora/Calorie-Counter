<?php
  session_start();
  include_once 'include/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Review</title>
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
                <a href="#" class="navbar-brand">CALCOUNT</a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                    <!-- <li><a href="snapit.php">Snap It!</a></li>
                     <li><a href="hungry.php">Hungry?</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                     -->
                     <li class = "active"><a href="#">Review</a></li>
                    
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
    <?php
      $sql="SELECT * FROM tempblogs limit 1";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $resultCheck = mysqli_num_rows($result);
  
      if ($resultCheck == 0) 
      {
        echo '<h3 style="color: white;">No more blogs to review.</h3>';
 
      }
      else 
      {
        echo '<h4  style="color: white;">By '.$row['author_first'].' '.$row['author_last'].' and submitted on '.$row['created'].'</h4>';
        echo '<br>';
        echo '<form name="review" action="include/review.php" method="POST" >  
        <input type="text" name="title" size="100" value='.$row['title'].'>
        <textarea name="content" id="content">'.$row['body'].'</textarea>
        <button type="submit" name="add" class="btn btn-primary btn-block btn-large">Add to Blog</button>
        <button type="submit" name="del" class="btn btn-primary btn-block btn-large">Discard</button>
      </form>';
    }
    ?>

  </body>
  </html>
