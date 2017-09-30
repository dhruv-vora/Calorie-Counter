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
  <style>
      body {
          width: 80%;
          margin: 30px auto;
          font-family: sans-serif;
          background-image: url("images/abc.JPG");
          background-size: cover;
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

        .login { 
  position: absolute;
  top: 30%;
  left: 80%;
  margin: -110px 0 0 -150px;
  width:300px;
  height:400px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
  width: 100%; 
  margin-bottom: 10px; 
  background: rgba(0,0,0,0.3);
  border: none;
  outline: none;
  height: 50px;
  padding: 10px;
  font-size: 13px;
  color: #fff;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
  border: 1px solid rgba(0,0,0,0.3);
  border-radius: 4px;
  box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
  -webkit-transition: box-shadow .5s ease;
  -moz-transition: box-shadow .5s ease;
  -o-transition: box-shadow .5s ease;
  -ms-transition: box-shadow .5s ease;
  transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
.btn
{
  background-color: orange;
}
.error
{
 color: white;
  
}
.footer
{
  height: 50px;
}
</style>

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