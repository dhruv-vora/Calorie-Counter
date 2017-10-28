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
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
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
      .btn
      {
        background-color: orange;
      }
      .spam
        {
     background:none!important;
     color:yellow;
     border:none; 
     padding:0!important;
     font: inherit;
/*     border-bottom:1px solid #444; 
*/     /*cursor: pointer;*/
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
                    <?php
                      if (isset($_SESSION['u_first'])) 
                      {
                        echo '<li><a href="ingred.php">SuperCook</a></li>';
                        echo '<li><a href="fav.php">Favourites</a></li>';
                    
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
    $email=$_SESSION['u_email'];
    $title=$row['title'];
      echo '<h4 class="read">'.$row['title'].'</h4>';
      echo '<br>';
      echo '<h6 class="read">Published on '.$row['created'].' by '.$row['author_first'].' '.$row['author_last'].'</h6>';
      echo '<br>';
      
      $sql="SELECT * FROM blogs where title='$title'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      $emails=$row['email'];
      $pos = strpos($emails,$email);
      if($pos === false) //email NOT found in emails
      {
        echo '<button class="spam" id="'.$row["title"].'" onclick="check(this.id)">Report as spam</button>'; 
        echo '<br><br>';
      }
      else //email found in emails
      {
        echo '<p class="spam">Already reported as spam</p>';
      }
      echo '<p class="body">'.nl2br($row['body']).'</p>';
    ?>
    <form action="blog.php">
      <button type="submit" name="add" class="btn btn-primary btn-block btn-large">Go back to blogs</button>
    </form>      

                         <script type="text/javascript">
                          function check(title) 
                          {
                                var u_email="<?php echo $email; ?>";
/*                                alert(u_email);
                                alert("Successfully reported as spam");
                                  window.location.href="blog.php";  
                               */
                                $.ajax({
                                  type: "POST",
                                  url: 'include/spam.php',
                                  data : 
                                  {
                                    title : title,
                                    u_email : u_email 
                                  },
                                  success:function(data) 
                                  {
                                    alert("Successfully reported as spam");
                                    window.location.href="blog.php";  
                                  }
                              });
                          }

                              
 </script>
  </body>
  </html>

                  