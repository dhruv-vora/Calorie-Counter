<?php
  session_start();
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
    <style>
        body 
        {
          width: 80%;
          margin: 30px auto;
          font-family: sans-serif;
          background-image: url("images/def.JPG");
          background-size: cover;    
        }
        .container
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
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="hungry.php">Hungry?</a></li>
                    <li class = "active"><a href="#">Contact Us</a></li>
                    
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
                          echo '<li><a href="#" onclick=check()>Snap It!</a></li>';
                        }
                    ?>
                          
                  </ul>
            </div>

        </div>
    </nav>
	<div class="container">
		<h2> Contact Us </h2>
		<dl>
			<dt>Call us</dt><dd>Rushabh: 9769900911</dd>
			<dt>Office Address</dt> <dd>D.J.Sanghvi College of Engineering </dd><dd>Bhaktivedanta Swami Marg </dd> <dd>Mumbai - 400091</dd>
			<dt>Email ID</dt>
			<dd>calcount@gmail.com</dd>
			
		</dl>
		<h2>Have Google Maps & GPS?</h2>
		<p>Simply search for 'Dwarkadas J. Sanghvi' and get turn by turn directions!</p>
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:600px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="https://termsofusegenerator.net">terms of use generator</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(19.107641, 72.837068),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.107641, 72.837068)});infowindow = new google.maps.InfoWindow({content:'<strong>CALCOUNT Office</strong><br>D.J. Sanghvi College Of Engineering, Vile Parle West<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>		
		<dl>
			<h2>How to find us otherwise:</h2>
			<dd>To reach Vile Parle, the nearest railway station is Vile Parle . The major railway station is Churchgate (or maybe Borivali).</dd> 
			<dd>From Vile Parle station a rickshaw (auto) is available which costs Rs. 25 approx,to reach the college.</dd>
			<dd>The nearest airport is CST.</dd>
		</dl>
	<div>

  <script type="text/javascript">
  function check()
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