<head>
  <link rel="stylesheet" href="style.css">
<title>About Us</title>

<head>
</head>
<body>
  <?php include("includes/navigation.html");?>
  <?php include("includes/header.html");?>

  <div class="center" id="search-container">
      <h3 class="header">About Seafood</h3>
      <div class="aboutUs-container">
            <p>

            Seafood is a perfect website for people who wants to quickly search the restaurant by the food they want, the atmosphere they want, the theme they want, or the location they want.
            The user can also filter by price, opening hours. </p>
          </div>


      <h3 class="header">Implemented Feature</h3>

        <div class="aboutUs-container">
  <p>
- facebook plugin </p>
  </div>

      <h3 class="header">About Us</h3>
   <div class="aboutUs-container">
  <p>
  My name is Kanyakorn Kitisopakul (Ploy). I am studying Software Engineering at University of Canterbury. </p>
  </div>
      <h3 class="header">Say hi to us in yoda language  :)</h3>
       <div class="aboutUs-container">
      <p id="yoda-text"></p>
    <input class="type-to-yoda" type="text" id="yoda-input"></input>

            <input type="submit" value="Send" onclick="judge()"></input>
  </div>

</div>

      <script type="text/javascript" src="judgeComment.js"></script>
<?php include("includes/footer.html");?>
</body>

</html>
