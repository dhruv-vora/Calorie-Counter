<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recipes</title>
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
                    <li class = "active"><a href="ingred.php">SuperCook</a></li>
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
       	        <h2 style="color: white;">Here are some of the dishes you can prepare!</h2>
                <hr>
				<?php
				if (isset($_POST['submit'])) //checking if register button has been pressed
				{
					$array=explode( "\r\n", $_POST['content'] );
					$array=implode("%2C", $array);
					
					$url = "http://food2fork.com/api/search?key=d3ab033003c2e546e131f5b45402e3e9&q=";
					$urlend=".json";
					$url=$url."".$array."".$urlend;
					$data = file_get_contents($url); // put the contents of the file into a variable
        			$characters = json_decode($data,true); // decode the JSON feed    

                    $count=count(array_keys($characters['recipes']));

                    foreach($characters['recipes'] as $details)
        			{
                        echo '<h3><a class="link" target="_blank" href="'.$details['source_url'].'"> '. $details['title'] .'<br><br>';
            			echo '<img height="300px" width="400px" src="'.$details['image_url'].'"<br>';
/*                        echo '<h4><a class="link" href="'.$details['source_url'].'"> View the entire recipe by clicking here:</a><br>';
*/                        echo "<hr>";
                    }
                    exit();
				}
				?>
                
            </div>
        </div>

        <div class="right">
            <div class="topright">
                
            </div>   
        </div>
        
    </body>
</html>