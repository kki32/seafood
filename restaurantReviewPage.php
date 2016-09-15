<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=904149656384086";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <?php include("includes/navigation.html");?>
  <?php include("includes/header.html");?>
  <div class="center" id="home-container">

    <h3 id="home-header">Review</h3>
 <ul id="restaurant-list"></ul>


 <div>
<ul id="restaurant-list">
<li class="search-result-container">
<div class="search-result-tag-container">
<p id="search-result-tag"> Thai</p>
<p id="search-result-tag"> Ilam</p>
<p id="search-result-tag"> Quiet</p>
<p id="search-result-tag"> Takeaway</p></div>
<a href="restaurantReview.php"><img class="search-result-image" src="https://b.zmtcdn.com/data/pictures/1/9000621/86929c787f7bd56e267ec4e574f0426a.jpg" /></a>
<div class="search-result-label-container">

  <span id="search-result-label">Price range:</span>
  <p class="search-result"> $20~$60</p>
  <span id="search-result-label">Rating:</span>
  <p class="search-result"> 5
  </p>
  <span id="search-result-label">Name: </span>
  <p class="search-result"> Five Stars</p>
  <span id="search-result-label">Address: </span>
  <p class="search-result">Fendalton Village, 8/250 Clyde Road, Fendalton, Christchurch</p>
  <span id="search-result-label">Phone no: </span>
  <p class="search-result">   03 3517178 </p>

</div></li>

</ul>

 </div>
 <div id="facebook-comments">
 <div class="fb-comments" data-href="http://seafood-msa.azurewebsites.net" data-width="1000px" data-numposts="10"></div>

  </div>


<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
</div>



</body>
</html>
