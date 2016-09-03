<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <?php include("includes/navigation.html");?>
  <?php include("includes/header.html");?>
  <div class="center" id="home-container">
        <h3 id="home-header">Search Result</h3>
    <div id="sortBy-container">
      <h3 id="sortBy-header">Sorted by:
        <button id="price" class="sortButton" type="button" >Price</button>
        <button id="hours" class="sortButton" type="button" >Opening hours</button>
        <button id="popularity" class="sortButton" type="button" >Popularity</button>
        <button id="distance" class="sortButton" type="button" >Distance from here</button>
      </h3>
    </div>


    <div>
 <ul id="restaurant-list"></ul>
    </div>
    <div id="page-number-container">
      <a class="pageNum" href="">1</a>
      <a class="pageNum" href="">2</a>
      <a class="pageNum" href="">3</a>
      <a class="pageNum" href="">4</a>
      <a class="pageNum" href="">5</a>
    </div>

  </div>

  <script type="text/javascript">

  $.ajax({
    type: "POST",
    url: "retrieve",
    dataType: "json",
  })
  .success( function(data) {
    console.log('done');
    console.log(data);
    $.each(data, function(index, element) {

      $('#restaurant-list').append('<li class="search-result-container">' +

      '<div class="search-result-tag-container">' +
      '<p id="search-result-tag">' + element.cuisine + '</p>' +
      '<p id="search-result-tag">' + element.location + '</p>' +
      '<p id="search-result-tag">' + element.atmosphere + '</p>' +
      '<p id="search-result-tag">' + element.theme + '</p></div>' +
      '<a href="restaurantReview.php"><img class="search-result-image" src="' + element.url + '" /></a>' +
      '<div class="search-result-label-container">' +
      '<p class="search-result"> <span id="search-result-label">' + 'Price range: </span>'    + element.price + '</p>' +
      '<p class="search-result"> <span id="search-result-label">' + 'Rating: </span>'    + element.rating + '</p>' +
      '<p class="search-result"> <span id="search-result-label">' + 'Name: </span>'    + element.name + '</p>' +
      '<p class="search-result"> <span id="search-result-label">' + 'Address: </span>'    + element.address + '</p>' +
      '<p class="search-result"> <span id="search-result-label">' + 'Phone no: </span>'    + element.phone + '</p>' +
      '<p class="search-result"> <span id="search-result-label">' + 'Website: </span>'+ element.website + '</p></div></li>');

  });
  })

  .fail( function(data) {
    console.log('fail');
    console.log(data);
  });


  </script>


</body>
</html>
