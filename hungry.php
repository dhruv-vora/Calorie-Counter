<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hungry?</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/hungry.css">
  
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
                        echo '<li><a href="fav.php">Favourites</a></li>';
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
                      echo '<li><a href="#" onclick=check()>SuperCook</a></li>';   //an alert should pop up saying log in to use this feature but thats not coming up
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
      <img src="images/frozengrapes.jpg"  id = "myImg01" alt="It's a fruity treat with enough crunch to wake you up if you are about to doze off while reading a difficult chapter. A replacement for saccharine sweets like mithai and bakery goods, frozen grapes is a welcome distraction from your studies. The fruit sugar will give you a sugar high that the mind needs after focusing on cerebral work. Just pop a few fresh grapes in the freezer and eat them when hungry. It is like a frozen dessert – almost. " width="300" height="200" onclick="popup(this.id)">
      <figcaption>
        Frozen Grapes
      </figcaption>
    </figure>

      <figure class = "abc">
      <img src="images/hummusandpita.jpg" alt="Rich in protein, fibre and flavour, humus and pita combo is a great break time food or even a late night snack. Try rosemary, dill, chilli or some other hummus options that you get in health stores. Spread some on pita bread and chomp on. This one is like a full meal so eat in moderation or you will feel full and sleepy." id = "myImg02" onclick="popup(this.id)">
      <figcaption>
        Hummus and Pita
      </figcaption>
    </figure>
    <figure class = "abc">
      <img src="images/froyo.jpg" alt="A great study snack, it has protein, good fat as well as other nutrients to add flavour and fun to your study time. Home-made or flavoured yogurt (with interesting on the shelf variations like blueberry, mango, kulfi and more), anything works. And one trip to the refrigerator is enough to get your snack. If you have time, add some chopped fruits, pistachio, walnuts, raisins and cranberries to turn it into an erotic dessert." id = "myImg03" onclick="popup(this.id)">
      <figcaption>
        Flavoured Yogurt
      </figcaption>
    </figure>
    <figure class = "abc">
      <img src="images/bananachips.jpg" alt="Healthy and non-greasy, unlike potato chips, banana chips is full of potassium and fibre. The nutrient rich snack won’t make you feel bloated like extra salty potato fries. Alternatively, you can stock up your room shelf with interesting versions like spinach chips, karela chips and so on to spice up your wafers plate on a dull homework day." id = "myImg04" onclick="popup(this.id)">
      <figcaption>
        Banana Chips
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/apples.jpg" alt="The good old fruit is delicious, nutritious and filling. Chop an apple and eat it when you are craving for a sweet snack. Apple gives you a serotonin boost that can power up your cram session before a class test. Pick it over processed food like fried namkeen and sugar laden biscuits." id = "myImg05" onclick="popup(this.id)">
      <figcaption>
        Apples
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/clearsoup.jpg" alt="It is natural to want a warm beverage when you are stressed about a meeting a deadline. What better than some piping hot soup to charge your study time? To keep it light, have a clear vegetable soup or chicken soup. Avoid heavy cream based soups as they make you sleepy." id = "myImg06" onclick="popup(this.id)">
      <figcaption>
        Clear Soup
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/popcorn.jpg" alt="Low on calories and high in good carbs and fibre, popcorn is a super snack. A bowl of microwaved popcorn with a dash of butter or olive oil, salt and pepper will uplift your mood. It is rich in antioxidant which is a health and mood booster." id = "myImg07" onclick="popup(this.id)">
       <figcaption>
        Popcorn
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/chocavo.jpg" alt="Good chocolate? Boosts energy levels. Tricking yourself into eating healthy chocolate pudding? Boosts endorphins levels. Recipe at http://www.howsweeteats.com/2013/02/chocolate-avocado-pudding-yep-its-a-thing/." id = "myImg08" onclick="popup(this.id)">
      <figcaption>
        Chocolate Avocado Pudding
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/chickpeas.jpg" alt="Boil chickpeas or put it in the microwave (with adequate water) for an hour – time enough to get through your crucial notes. Then, select your seasoning and much away. Chickpeas have high protein content; keep some around and pop in your mouth when hungry." id = "myImg09" onclick="popup(this.id)">
      <figcaption>
        Chickpeas
      </figcaption>
    </figure>
  <figure class = "abc">
      <img src="images/nut.jpg" alt="Dry fruits such as almonds, walnuts, cashews, raisins have natural sugar and fibre that helps you stay full and also gives you the sugar rush needed for long study hours. Mix nuts of your choice- raisins, cashews, peanuts – and keep them in an airtight jar. You can also carry this to your friend’s place for group study." id = "myImg10" onclick="popup(this.id)">
      <figcaption>
        Nutty Trail
      </figcaption>
    </figure>
</div>

<div id="myModal1" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption1" class = "caption"></div>
</div>

<script>
function popup(id)
{
    var modal = document.getElementById('myModal1');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById(id);
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
  function check()
  {
    var a = confirm("Please Log-in First to use the SuperCook Feature");
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