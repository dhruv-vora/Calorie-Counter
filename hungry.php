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
        body {
          width: 80%;
          margin: 30px auto;
          font-family: sans-serif;
        }

        h2 {
          text-align: left;
          font-size: 1.85em;
          margin: 0 0 30px;
        }

        h3 {
          text-align: left;
          font-size: 1.65em;
          margin: 0 0 10px;
        }

        .abc figure {
          display: inline-block;
          margin-bottom: 8px;
          width: calc(50% - 4px);
          margin-right: 8px;
          text-decoration: none;
          color: black;
        }

        .abc figure:nth-of-type(2n) {
          margin-right: 0;
        }

        @media screen and (min-width: 50em) {
          .abc figure {
            width: calc(25% - 6px);
          }
          
          .abc figure:nth-of-type(2n) {
            margin-right: 8px;
          }
          
          .abc figure:nth-of-type(4n) {
            margin-right: 0;
          }
        }

        .abc figure:hover img {
          transform: scale(1.15);
        }

        figure {
          margin: 0;
          overflow: hidden;
        }

        figcaption {
          margin-top: 15px;
        }

        img {
          border: none;
          max-width: 100%;
          height: auto;
          display: block;
          background: #ccc;
          transition: transform .2s ease-in-out;
        }

        .p a {
          display: inline;
          font-size: 13px;
          margin: 0;
          text-decoration: underline;
          color: blue;
        }

        .p {
          text-align: center;
          font-size: 13px;
          padding-top: 100px;
        }




        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        .caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {    
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
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
                    <li class = "active"><a href="#">Hungry?</a></li>
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
                      echo '<li><a href="index.php" onclick=alert("Please Log-in First to use the Snap It! Feature");>Snap It!</a></li>';   //an alert should pop up saying log in to use this feature but thats not coming up
                    }
                  ?>  
              </ul>
            </div>

        </div>
    </nav>


    <h3>Hungry? Here are a few healthy snacks to keep you going!</h3><h5>~Double click to know more~</h5>


<div style = "display: flex;
            flex-wrap: wrap;" class = "abc">

      <figure class = "abc">
      <img src="images/frozengrapes.jpg"  id = "myImg01" alt="It's a fruity treat with enough crunch to wake you up if you are about to doze off while reading a difficult chapter. A replacement for saccharine sweets like mithai and bakery goods, frozen grapes is a welcome distraction from your studies. The fruit sugar will give you a sugar high that the mind needs after focusing on cerebral work. Just pop a few fresh grapes in the freezer and eat them when hungry. It is like a frozen dessert – almost. " width="300" height="200" onclick="popup1()">
      <figcaption>
        Frozen Grapes
      </figcaption>
    </figure>

      <figure class = "abc">
      <img src="images/hummusandpita.jpg" alt="Rich in protein, fibre and flavour, humus and pita combo is a great break time food or even a late night snack. Try rosemary, dill, chilli or some other hummus options that you get in health stores. Spread some on pita bread and chomp on. This one is like a full meal so eat in moderation or you will feel full and sleepy." id = "myImg02" onclick="popup2()">
      <figcaption>
        Hummus and Pita
      </figcaption>
    </figure>
    <figure class = "abc">
      <img src="images/froyo.jpg" alt="A great study snack, it has protein, good fat as well as other nutrients to add flavour and fun to your study time. Home-made or flavoured yogurt (with interesting on the shelf variations like blueberry, mango, kulfi and more), anything works. And one trip to the refrigerator is enough to get your snack. If you have time, add some chopped fruits, pistachio, walnuts, raisins and cranberries to turn it into an erotic dessert." id = "myImg03" onclick="popup3()">
      <figcaption>
        Flavoured Yogurt
      </figcaption>
    </figure>
    <figure class = "abc">
      <img src="images/bananachips.jpg" alt="Healthy and non-greasy, unlike potato chips, banana chips is full of potassium and fibre. The nutrient rich snack won’t make you feel bloated like extra salty potato fries. Alternatively, you can stock up your room shelf with interesting versions like spinach chips, karela chips and so on to spice up your wafers plate on a dull homework day." id = "myImg04" onclick="popup4()">
      <figcaption>
        Banana Chips
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/apples.jpg" alt="The good old fruit is delicious, nutritious and filling. Chop an apple and eat it when you are craving for a sweet snack. Apple gives you a serotonin boost that can power up your cram session before a class test. Pick it over processed food like fried namkeen and sugar laden biscuits." id = "myImg05" onclick="popup5()">
      <figcaption>
        Apples
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/clearsoup.jpg" alt="It is natural to want a warm beverage when you are stressed about a meeting a deadline. What better than some piping hot soup to charge your study time? To keep it light, have a clear vegetable soup or chicken soup. Avoid heavy cream based soups as they make you sleepy." id = "myImg06" onclick="popup6()">
      <figcaption>
        Clear Soup
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/popcorn.jpg" alt="Low on calories and high in good carbs and fibre, popcorn is a super snack. A bowl of microwaved popcorn with a dash of butter or olive oil, salt and pepper will uplift your mood. It is rich in antioxidant which is a health and mood booster." id = "myImg07" onclick="popup7()">
       <figcaption>
        Popcorn
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/chocavo.jpg" alt="Good chocolate? Boosts energy levels. Tricking yourself into eating healthy chocolate pudding? Boosts endorphins levels. Recipe at http://www.howsweeteats.com/2013/02/chocolate-avocado-pudding-yep-its-a-thing/." id = "myImg08" onclick="popup8()">
      <figcaption>
        Chocolate Avocado Pudding
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/chickpeas.jpg" alt="Boil chickpeas or put it in the microwave (with adequate water) for an hour – time enough to get through your crucial notes. Then, select your seasoning and much away. Chickpeas have high protein content; keep some around and pop in your mouth when hungry." id = "myImg09" onclick="popup9()">
      <figcaption>
        Chickpeas
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/nut.jpg" alt="Dry fruits such as almonds, walnuts, cashews, raisins have natural sugar and fibre that helps you stay full and also gives you the sugar rush needed for long study hours. Mix nuts of your choice- raisins, cashews, peanuts – and keep them in an airtight jar. You can also carry this to your friend’s place for group study." id = "myImg10" onclick="popup10()">
      <figcaption>
        Nutty Trail
      </figcaption>
    </figure>
</div>

<p class="p">Demo by George Martsoukos. <a href="http://www.sitepoint.com/using-modern-css-to-build-a-responsive-image-grid/" target="_blank">See article</a>.</p>

<div id="myModal1" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption1" class = "caption"></div>
</div>

<div id="myModal2" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img02">
  <div id="caption2" class = "caption"></div>
</div>

<div id="myModal3" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img03">
  <div id="caption3" class = "caption"></div>
</div>

<div id="myModal4" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img04">
  <div id="caption4" class = "caption"></div>
</div>

<div id="myModal5" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img05">
  <div id="caption5" class = "caption"></div>
</div>

<div id="myModal6" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img06">
  <div id="caption6" class = "caption"></div>
</div>

<div id="myModal7" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img07">
  <div id="caption7" class = "caption"></div>
</div>

<div id="myModal8" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img08">
  <div id="caption8" class = "caption"></div>
</div>

<div id="myModal9" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img09">
  <div id="caption9" class = "caption"></div>
</div>

<div id="myModal10" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img10">
  <div id="caption10" class = "caption"></div>
</div>

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption" class = "caption"></div>
</div>



<script>
function popup1()
{
    var modal = document.getElementById('myModal1');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg01');
    var modalImg = document.getElementById('img01');
    var captionText = document.getElementById("caption1");
    img.onclick = function()
    {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }


// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    { 
        modal.style.display = "none";
    }
}
function popup2()
{
    var modal = document.getElementById('myModal2');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg02');
    var modalImg = document.getElementById('img02');
    var captionText = document.getElementById("caption2");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    var span = document.getElementsByClassName("close")[1];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    { 
        modal.style.display = "none";
    }
}
function popup3()
{
    var modal = document.getElementById('myModal3');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg03');
    var modalImg = document.getElementById('img03');
    var captionText = document.getElementById("caption3");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    var span = document.getElementsByClassName("close")[2];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    { 
        modal.style.display = "none";
    }
}
function popup4()
{
    var modal = document.getElementById('myModal4');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg04');
    var modalImg = document.getElementById('img04');
    var captionText = document.getElementById("caption4");
    img.onclick = function()
    {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }


// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[3];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    { 
        modal.style.display = "none";
    }
}
function popup5()
{
    var modal = document.getElementById('myModal5');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg05');
    var modalImg = document.getElementById('img05');
    var captionText = document.getElementById("caption5");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    var span = document.getElementsByClassName("close")[4];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    { 
        modal.style.display = "none";
    }
}
function popup6()
{
    var modal = document.getElementById('myModal6');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg06');
    var modalImg = document.getElementById('img06');
    var captionText = document.getElementById("caption6");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    var span = document.getElementsByClassName("close")[5];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    { 
        modal.style.display = "none";
    }
}
function popup7()
{
    var modal = document.getElementById('myModal7');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg07');
    var modalImg = document.getElementById('img07');
    var captionText = document.getElementById("caption7");
    img.onclick = function()
    {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }


// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[6];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    { 
        modal.style.display = "none";
    }
}
function popup8()
{
    var modal = document.getElementById('myModal8');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg08');
    var modalImg = document.getElementById('img08');
    var captionText = document.getElementById("caption8");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    var span = document.getElementsByClassName("close")[7];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    { 
        modal.style.display = "none";
    }
}
function popup9()
{
    var modal = document.getElementById('myModal9');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg09');
    var modalImg = document.getElementById('img09');
    var captionText = document.getElementById("caption9");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    var span = document.getElementsByClassName("close")[8];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    { 
        modal.style.display = "none";
    }
}
function popup10()
{
    var modal = document.getElementById('myModal10');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg10');
    var modalImg = document.getElementById('img10');
    var captionText = document.getElementById("caption10");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    var span = document.getElementsByClassName("close")[9];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    { 
        modal.style.display = "none";
    }
}
</script>


    </body>
</html>