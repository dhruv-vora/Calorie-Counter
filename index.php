<?php
  include 'include/db.php';
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
    <script async src="//www.google-analytics.com/analytics.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
                    <li class = "active"><a href="index.php">Home</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="hungry.php">Hungry?</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					
                </ul>
				<ul class="nav navbar-nav navbar-right">
                    <li><a href="#" onclick="alert('Please Log-in First to use the Snap It! Feature');">Snap It!</a></li> 
                </ul>
            </div>

        </div>
    </nav>

	<div class="login">
	<h1>Login</h1>
    <form name="login" action="include/login.php" method="POST">
      <input type="email" name="email" placeholder="Email-id" required="required" value=""/>
        <input type="password" name="pass" placeholder="Password" required="required" />
        <?php
          if (isset($_GET['login'])) //checking if login parameter is present
          {
            $login = mysqli_real_escape_string($conn, $_GET['login']);
            if($login=='emailerror')
            {
              //echo "<p class=error> This Email-id does not exist !";
              echo '<script language="javascript">';
              echo 'alert("This Email-id does not exist !")';
              echo '</script>';
            }
            if($login=='pwderror')
            {
              //echo "<p class=error> The password entered is incorrect!";
              echo '<script language="javascript">';
              echo 'alert("The password entered is incorrect!")';
              echo '</script>';
            }
          }
        ?>
        <button type="submit" name="login" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
    
    <hr style=" border: 1px solid black;">
    <h1>Register</h1>

    <form name="signup" action="include/register.php" onsubmit="validate()" method="POST">
        <div class="formbox">
        <input type="text" name="first" placeholder="First Name" required="required">
        <input type="text" name="last" placeholder="Last name" required="required">
        </div>
        <div class="formbox">
        <input type="email" name="email" placeholder="Email" required="required">
        </div>
        <div class="formbox">
        <input type="password" name="pass" placeholder="New password" required="required" value="">
        </div>
        <div class="formbox">
        <input type="password" name="newpass" placeholder="Re-enter password" required="required" value="">
        </div>
        <?php
          if (isset($_GET['register'])) //checking if register parameter is present
          {
            $register = mysqli_real_escape_string($conn, $_GET['register']);
            if($register=='usertaken')
            {
              //echo "<p class=error> This Email-id has already been registered !";
              echo '<script language="javascript">';
              echo 'alert("This Email-id has already been registered !")';
              echo '</script>';
            }
            /*if($register=='pwdnotmatch')
            {
              //echo "<p class=error> The two passwords do not match!";
              echo '<script language="javascript">';
              echo 'alert("The two passwords do not match !")';
              echo '</script>';
            }*/

            /*else
              echo "<p>";
            {
            }
*/        }
        ?>
        <div class="formbox">
        <button type="submit" name="signup" class="btn btn-primary btn-block btn-large">Sign Up</button>
        </div>
      </form>
	<div class="footer">
	</div>

</div>
 
<script type="text/javascript">
  function validate()
  {
    if(document.signup.pass.value!=document.signup.newpass.value)
     { 
      document.signup.pass.focus();
      alert("passwords do not match");
      return false;
      }
      return true();
  }  
</script>

</body>
</html>