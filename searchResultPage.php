<!DOCTYPE html>
<html lang="en">
<head>

  <title>Seafood</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container" id="home-container">
  <?php include("includes/navigation.html");?>
  <?php include("includes/header.html");?>



    <div id="sortBy-container">
      <h3 id="sortBy-header">Sorted by:
        <button id="price" class="sortButton" type="button" >Price</button>
        <button id="hours" class="sortButton" type="button" >Opening hours</button>
        <button id="popularity" class="sortButton" type="button" >Popularity</button>
        <button id="distance" class="sortButton" type="button" >Distance from here</button>
      </h3>
    </div>
    <h3 id="home-header">Search Results</h3>

    <div>
      <ul id="restaurant-list">
        <li class="search-result-container">
          <div class="search-result-tag-container">
            <p id="search-result-tag"> Vietnamese</p>
            <p id="search-result-tag"> Fendalton</p>
            <p id="search-result-tag"> Quiet</p>
            <p id="search-result-tag"> Takeaway</p>
            <p id="search-result-tag"> Restaurant</p>
          </div>
          <a href="restaurantReviewPage.php"><img class="search-result-image" src="https://b.zmtcdn.com/data/pictures/1/9000621/86929c787f7bd56e267ec4e574f0426a.jpg" /></a>
          <div class="search-result-label-container">

            <span id="search-result-label">Price range:</span>
            <p class="search-result"> $20~$60</p>
            <span id="search-result-label">Rating:</span>
            <p class="search-result"> <img class="star-image" src="http://cliparts.co/cliparts/8iz/rR4/8izrR4rzT.png"/>
            </p>
            <span id="search-result-label">Name: </span>
            <p class="search-result"> Five Stars</p>
            <span id="search-result-label">Address: </span>
            <p class="search-result">Fendalton Village, 8/250 Clyde Road, Fendalton, Christchurch</p>


          </div></li>
          <li class="search-result-container">
            <div class="search-result-tag-container">
              <p id="search-result-tag"> Thai</p>
              <p id="search-result-tag"> Ilam</p>
              <p id="search-result-tag"> Quiet</p>
              <p id="search-result-tag"> Takeaway</p></div>
              <a href="restaurantReviewPage.php"><img class="search-result-image" src="http://www.joyfulrestaurant.co.nz/images/IMG_0182.jpg" /></a>
              <div class="search-result-label-container">
                <span id="search-result-label">Price range:</span>
                <p class="search-result"> $12~$20</p>
                <span id="search-result-label">Rating:</span>
                <p class="search-result"> <img class="star-image" src="http://cliparts.co/cliparts/8iz/rR4/8izrR4rzT.png"/>
                </p>
                <span id="search-result-label">Name: </span>
                <p class="search-result"> Joyful Restaurant</p>
                <span id="search-result-label">Address: </span>
                <p class="search-result">102 Riccarton Road, Christchurch</p>



              </div></li>

              <li class="search-result-container" style="border-bottom-style: none;">
                <div class="search-result-tag-container">
                  <p id="search-result-tag"> Chinese</p>
                  <p id="search-result-tag"> Fast Food</p>
                  <p id="search-result-tag"> Fast Serve</p>
                  <p id="search-result-tag"> Takeaway</p></div>
                  <a href="restaurantReviewPage.php"><img class="search-result-image" src="https://c2.staticflickr.com/4/3836/15328038995_fd40d18583_b.jpg" /></a>
                  <div class="search-result-label-container">
                    <span id="search-result-label">Price range:</span>
                    <p class="search-result"> $3~$30</p>
                    <span id="search-result-label">Rating:</span>
                    <p class="search-result"> <img class="star-image" src="http://cliparts.co/cliparts/8iz/rR4/8izrR4rzT.png"/>
                    </p>
                    <span id="search-result-label">Name: </span>
                    <p class="search-result"> Captain Ben's</p>
                    <span id="search-result-label">Address: </span>
                    <p class="search-result">4 Rountree Street, Upper Riccarton, Christchurch</p>

                  </div></li>




                </ul>

              </div>



            <?php include("includes/footer.html");?>
                </div>
          </body>
          </html>
