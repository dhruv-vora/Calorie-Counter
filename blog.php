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
    <link rel="stylesheet" type="text/css" href="css/blog.css">

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
                    <?php
                      if (isset($_SESSION['u_first'])) 
                      {
                        echo '<li><a href="snapit.php">Snap It!</a></li>';
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
                      echo '<li><a href="contribute.php">Contribute</a></li>';
                      echo '<li><a href="include/logout.php">Log out</a></li>';
                    }
                    else 
                    {
                      echo '<li><a href="#" onclick=check1()>Contribute</a></li>';
                      echo '<li><a href="#" onclick=check2()>Snap It!</a></li>';   //an alert should pop up saying log in to use this feature but thats not coming up
                    }
                  ?>
                      
                  </ul>
                </div>
            </div>
        </nav>
        <div class="left">
             <div class="article">
                <?php
                    $sql="SELECT * FROM blogs ORDER BY created DESC";
                    $result = mysqli_query($conn,$sql);

                    while($row = mysqli_fetch_array($result))
                    {
                        echo '<h4><a href="article.php?id='.$row['id'].'" class="read">'.$row['title'].'</a></h4>';
                        echo '<br>';
                        echo '<h6>Published on '.$row['created'].' by '.$row['author_first'].' '.$row['author_last'].'</h6>';
                        echo '<br>';
                        echo '<h5>'.substr($row['body'], 0, 200).'...<a href="article.php?id='.$row['id'].'" class="read">Read more</a></h5>';

                        echo '<hr>';
                    }
                    if (isset($_GET['contribute'])) //checking if register parameter is present
                    {
                        $contribute = mysqli_real_escape_string($conn, $_GET['contribute']);
                        if($contribute=='success')
                        {
                            echo '<script language="javascript">';
                            echo 'alert("Your article has been sent for review!")';
                            echo '</script>';
                        }
                    }
                ?>
                
            </div>
        </div>

        <div class="right">
            <div class="topright">
                
            </div>   
        </div>
        <script type="text/javascript">
            function check1()
            {
                var a = confirm("Please Log-in First to use the Contribute to the Blog");
                if (a == true) 
                {
                    window.location.href = "index.php";
                } 
                else 
                {
                    window.location.href = "#";
                }
            }  
            function check2()
            {
                var a = confirm("Please Log-in First to use the Snap It! Feature");
                if (a == true) 
                {
                    window.location.href = "index.php";
                } 
                else 
                {
                    window.location.href = "#";
                }
            }  
        </script>
	</body>
</html>