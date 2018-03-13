<!DOCTYPE html>
<html>
  <head>
  <title>burger bliss</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="css/style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
  <body>
    <div class="bgimg w3-display-container w3-text-white">
      <div class="w3-display-middle w3-jumbo">
        <p>burger bliss</p>
        <div class="social w3-center">
          <i class="fab fa-twitter fa-xs"></i>
          <i class="fab fa-facebook fa-xs"></i>
          <i class="fab fa-instagram fa-xs"></i>
          <i class="fab fa-yelp fa-xs"></i>
      </div>
      </div>
      <div class="w3-display-topleft w3-container w3-xlarge">
        <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black"><i class="fas fa-bars"></i> menu</button></p>
        <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black"><i class="fas fa-users"></i> team</button></p>
      </div>

    </div>
    <!-- Menu Modal -->
    <div id="menu" class="w3-modal">
      <form action="calculations.php">
        <div class="w3-modal-content w3-animate-zoom">
          <div class="w3-container w3-black w3-display-container">
            <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Burger Types</h1>
            <p>Angus beef on fresh sourdough bun with handmade french fries beverage</p>
          </div>
          <div class="w3-container">
            <h5><input type="checkbox" name="order[]" value="grand">Grand Slam <i>Mayo, cheddar, lettuce, tomato, pickle, mayo </i><b>$6.50</b></h5>
            <h5><input type="checkbox" name="order[]" value="veggie">Veggie Delight <i>Black bean burger with vegan Gourmet Cheddar, lettuce, tomato, pickle </i> <b>$8.00</b></h5>
            <h5><input type="checkbox" name="order[]" value="animal">Animal Style <i>Secret Sauce, relish, cheddar, lettuce, tomato, pickle </i><b>$7.50</b></h5>
          </div>
          <div class="w3-container w3-black">
            <h1>Burger Dressings</h1>
          </div>
          <div class="w3-container">
            <h5><input type="checkbox" name="order[]" value="mayo">Mayo <b>$.50</b></h5>
            <h5><input type="checkbox" name="order[]" value="jala">Jalapenos <b>$.35</b></h5>
            <h5><input type="checkbox" name="order[]" value="cheese">Cheddar Cheese <b>$.75</b></h5>
            <h5><input type="checkbox" name="order[]" value="chili">Chili <b>$1.25</b></h5>
            <h5><input type="checkbox" name="order[]" value="meat">Extra Patty <b>$2.50</b></h5>
          </div>
          <div class="w3-container w3-black">
            <h1>Sides</h1>
          </div>
          <div class="w3-container">
            <h5><input type="checkbox" name="order[]" value="fries">Animal Style Fries <i>Secret Sauce, grilled onions, melted cheddar </i> <b>$1.75</b></h5>
            <h5><input type="checkbox" name="order[]" value="shake">Shake <i>16 oz. Chocolate, Vanilla, Banana, Strawberry </i> <b>$3.75</b></h5>
            <h5><input type="checkbox" name="order[]" value="drink">Fountain Drink <i>12 oz. Coke, Diet Coke, Grape Fanta, Iced Tea, Rootbeer </i><b>$1.99</b></h5>
            <h5><input type="checkbox" name="order[]" value="lemon">Fresh Lemonade <i>16 oz. fresh squeezed lemonade </i><b>$2.50</b></h5>
          </div>
          <div align="center"><button class="w3-button w3-black">Submit</button></div><br />
        </div>
      </form>
    </div>
    <!-- Team Modal -->
    <div id="contact" class="w3-modal">
      <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black">
          <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
          <h1>Teammates</h1>
        </div>
        <div class="w3-container">
          <form action="/action_page.php" target="_blank">
            <!-- <p class="w3-xlarge">Burger Bliss was created by these talented individuals:</p>
            <p class="w3-large"><a href="http://ladan.icoolshow.net/"/>Layth</a></p>
            <p class="w3-large"><a href="http://dcoulter.icoolshow.net/"/>Danielle</p>
            <p class="w3-large"><a href="http://yhussein.icoolshow.net/"/>Yahya</p>
            <p class="w3-large"><a href="http://eneville.icoolshow.net/"/>Erik</p> -->

            <ul class="w3-ul">
              <li><a href="http://ladan.icoolshow.net/"/>Layth</a></li>
              <li><a href="http://dcoulter.icoolshow.net/"/>Danielle</a></li>
              <li><a href="http://yhussein.icoolshow.net/"/>Yahya</a></li>
              <li><a href="http://eneville.icoolshow.net/"/>Erik</a></li>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>