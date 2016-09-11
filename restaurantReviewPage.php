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
<a href="restaurantReview.php"><img class="search-result-image" src="https://s3-media4.fl.yelpcdn.com/bphoto/uF87qC0E2WuLXJDBqWyejw/ls.jpg" /></a>
<div class="search-result-label-container">
<p class="search-result"> <span id="search-result-label">Price range: </span>$20~$50</p>
<p class="search-result"> <span id="search-result-label">Rating: </span>5</p>
<p class="search-result"> <span id="search-result-label">Name: </span>Buddha Stix</p>
<p class="search-result"> <span id="search-result-label">Address: </span>74 Riccarton Road, Riccarton, Christchurch</p>
<p class="search-result"> <span id="search-result-label">Phone no: </span> 03 9611704 </p>
<p class="search-result"> <span id="search-result-label">Website: </span></p></div></li>

</ul>

 </div>
 <div id="facebook-comments">
 <div class="fb-comments" data-href="http://seafood-msa.azurewebsites.net" data-width="1000px" data-numposts="10"></div>

  </div>
</div>



</body>
</html>
