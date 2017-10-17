<?php
    session_start();
    include_once 'include/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Favourites</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <style>
        .link
        {
          font-size: 20px;
          color: white;
        }
        a.link:hover,a.link:visited 
        {
          color: white; 
        }
        .sub
        {
     background:none!important;
     color:inherit;
     border:none; 
     padding:0!important;
     font: inherit;
     border-bottom:1px solid #444; 
     cursor: pointer;
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
                    <li><a href="ingred.php">SuperCook</a></li>
                    <li class = "active"><a href="#">Favourites</a></li>
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
        <div class="left">
             <div class="article">
       	        <h2 style="color: white;">Here are your favourites</h2>
                <hr>
                <?php
                  $u_email=$_SESSION['u_email'];
                  $sql = "SELECT * FROM fav WHERE u_email='$u_email'";
                  $result = mysqli_query($conn,$sql);
                  $resultCheck = mysqli_num_rows($result);
                  
                  if ($resultCheck == 0) 
                  {
                    echo '<h3 style="color: white;">You do not have any favourites.</h3>';
                  }      
                  else
                  {
                    while($row = mysqli_fetch_array($result))
                    {
                      $title=$row['title'];
                      echo '<h3><a class="link" target="_blank" href="'.$row['source_url'].'"> '. $row['title'] .'</a><br><br>';
                      echo '<img height="300px" width="400px" src="'.$row['image_url'].'"<br>';
                      echo '<br><br>';
                    echo '<form method="POST" action="include/remfav.php?title='.$title.'" >
                      <button class="sub" id="sub">Remove from favourites</button>
                    </form>
                    ';
                    echo "<hr>";
                    }
                  }
                ?>
                <script type="text/javascript">
                  function toggleText(button_id) 
                  {
                    var el = document.getElementById(button_id);
                    
                  }
                  </script>
            </div>
        </div>
      </body>
</html>       
                
