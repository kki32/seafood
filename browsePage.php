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


<div id="sortBy-container">
<h3 id="sortBy-header">Sorted by:
 <button id="price" class="sortButton" type="button" >Price</button>
  <button id="hours" class="sortButton" type="button" >Opening hours</button>
   <button id="popularity" class="sortButton" type="button" >Popularity</button>
    <button id="distance" class="sortButton" type="button" >Distance from here</button>
</h3>
</div>
  <h3 id="home-header">Browse Restaurants</h3>

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
 <a href="restaurantReviewPage.php"><img class="search-result-image" src="https://b.zmtcdn.com/data/pictures/1/9000621/563f18e3aed1db24bb496240de2b7657.jpg" /></a>
 <div class="search-result-label-container">
 <p class="search-result"> <span id="search-result-label">Price range: </span>$20~$60</p>
 <p class="search-result"> <span id="search-result-label">Rating: </span>5</p>
 <p class="search-result"> <span id="search-result-label">Name: </span>Five Stars</p>
 <p class="search-result"> <span id="search-result-label">Address: </span>Fendalton Village, 8/250 Clyde Road, Fendalton, Christchurch</p>
 <p class="search-result"> <span id="search-result-label">Phone no: </span> 03 3517178</p>

 <li class="search-result-container">
  <div class="search-result-tag-container">
  <p id="search-result-tag"> Thai</p>
  <p id="search-result-tag"> Ilam</p>
  <p id="search-result-tag"> Quiet</p>
  <p id="search-result-tag"> Takeaway</p></div>
  <a href="restaurantReviewPage.php"><img class="search-result-image" src="http://www.joyfulrestaurant.co.nz/images/IMG_0182.jpg" /></a>
  <div class="search-result-label-container">
  <p class="search-result"> <span id="search-result-label">Price range: </span>$12~$20</p>
  <p class="search-result"> <span id="search-result-label">Rating: </span>5</p>
  <p class="search-result"> <span id="search-result-label">Name: </span>Joyful Restaurant</p>
  <p class="search-result"> <span id="search-result-label">Address: </span> 102 Riccarton Road, Christchurch</p>
  <p class="search-result"> <span id="search-result-label">Phone no: </span> 03 341 6883 </p>
  <p class="search-result"> <span id="search-result-label">Website: http://www.joyfulrestaurant.co.nz/main.htm</span></p></div></li>

  <li class="search-result-container">
   <div class="search-result-tag-container">
   <p id="search-result-tag"> Chinese</p>
   <p id="search-result-tag"> Fast Food</p>
   <p id="search-result-tag"> Fast Serve</p>
   <p id="search-result-tag"> Takeaway</p></div>
   <a href="restaurantReviewPage.php"><img class="search-result-image" src="https://c2.staticflickr.com/4/3836/15328038995_fd40d18583_b.jpg" /></a>
   <div class="search-result-label-container">
   <p class="search-result"> <span id="search-result-label">Price range: </span>$3~$30</p>
   <p class="search-result"> <span id="search-result-label">Rating: </span>5</p>
   <p class="search-result"> <span id="search-result-label">Name: </span>Captain Ben's</p>
   <p class="search-result"> <span id="search-result-label">Address: </span>4 Rountree Street, Upper Riccarton, Christchurch</p>
   <p class="search-result"> <span id="search-result-label">Phone no: </span>  03 3487076 </p>
   <p class="search-result"> <span id="search-result-label">Website: </span></p></div></li>

   <li class="search-result-container">
    <div class="search-result-tag-container">
    <p id="search-result-tag"> Thai</p>
    <p id="search-result-tag"> Ilam</p>
    <p id="search-result-tag"> Quiet</p>
    <p id="search-result-tag"> Takeaway</p></div>
    <a href="restaurantReviewPage.php"><img class="search-result-image" src="https://s3-media4.fl.yelpcdn.com/bphoto/uF87qC0E2WuLXJDBqWyejw/ls.jpg" /></a>
    <div class="search-result-label-container">
    <p class="search-result"> <span id="search-result-label">Price range: </span>$20~$50</p>
    <p class="search-result"> <span id="search-result-label">Rating: </span>5</p>
    <p class="search-result"> <span id="search-result-label">Name: </span>Buddha Stix</p>
    <p class="search-result"> <span id="search-result-label">Address: </span>74 Riccarton Road, Riccarton, Christchurch</p>
    <p class="search-result"> <span id="search-result-label">Phone no: </span> 03 9611704 </p>
    <p class="search-result"> <span id="search-result-label">Website: </span></p></div></li>

    <li class="search-result-container">
     <div class="search-result-tag-container">
     <p id="search-result-tag"> Thai</p>
     <p id="search-result-tag"> Ilam</p>
     <p id="search-result-tag"> Quiet</p>
     <p id="search-result-tag"> Takeaway</p></div>
     <a href="restaurantReviewPage.php"><img class="search-result-image" src="https://s3-media4.fl.yelpcdn.com/bphoto/uF87qC0E2WuLXJDBqWyejw/ls.jpg" /></a>
     <div class="search-result-label-container">
     <p class="search-result"> <span id="search-result-label">Price range: </span>$20~$50</p>
     <p class="search-result"> <span id="search-result-label">Rating: </span>5</p>
     <p class="search-result"> <span id="search-result-label">Name: </span>Buddha Stix</p>
     <p class="search-result"> <span id="search-result-label">Address: </span>74 Riccarton Road, Riccarton, Christchurch</p>
     <p class="search-result"> <span id="search-result-label">Phone no: </span> 03 9611704 </p>
     <p class="search-result"> <span id="search-result-label">Website: </span></p></div></li>

     <li class="search-result-container">
      <div class="search-result-tag-container">
      <p id="search-result-tag"> Thai</p>
      <p id="search-result-tag"> Ilam</p>
      <p id="search-result-tag"> Quiet</p>
      <p id="search-result-tag"> Takeaway</p></div>
      <a href="restaurantReviewPage.php"><img class="search-result-image" src="https://s3-media4.fl.yelpcdn.com/bphoto/uF87qC0E2WuLXJDBqWyejw/ls.jpg" /></a>
      <div class="search-result-label-container">
      <p class="search-result"> <span id="search-result-label">Price range: </span>$20~$50</p>
      <p class="search-result"> <span id="search-result-label">Rating: </span>5</p>
      <p class="search-result"> <span id="search-result-label">Name: </span>Buddha Stix</p>
      <p class="search-result"> <span id="search-result-label">Address: </span>74 Riccarton Road, Riccarton, Christchurch</p>
      <p class="search-result"> <span id="search-result-label">Phone no: </span> 03 9611704 </p>
      <p class="search-result"> <span id="search-result-label">Website: </span></p></div></li>
</ul>
<div id="page-number-container">
 <a class="pageNum" href="">1</a>
 <a class="pageNum" href="">2</a>
 <a class="pageNum" href="">3</a>
 <a class="pageNum" href="">4</a>
 <a class="pageNum" href="">5</a>
</div>
  </div>

</div>



  <script type="text/javascript">

$(".sort").click(function() {
    var userInputs = [{"sortBy":this.id}];

    $.ajax({
      type: "GET",
      url: "browse",
      data: {search: JSON.stringify(userInputs)},
      dataType: "json",
      // contentType: "application/json"
    })
    .success( function(data) {
      console.log('done');
      console.log(data);
      $.each(data, function(index, element) {
            $('#restaurant-list').remove();
        $('#restaurant-list').after('<tr> <td>Name :</td><td>' + element.name + '</td></tr>');
        // $('#restaurant-list tr:last').after('<li> Name: '+ element.name + '</li>');
        // $('#restaurant-list').append('<li> Address: '+ element.address + '</li>');
        // $('#restaurant-list').append('<li> Phone no: '+ element.phone + '</li>');
        // $('#restaurant-list').append('<li> Name: '+ element.url + '</li>');
        // $('#restaurant-list').append('<li> Website: '+ element.website + '</li>');
        // $('#restaurant-list').append('<img class="searchPic" src="' + element.url + '" />');
      });
    })

    .fail( function(data) {
      console.log('fail');
      console.log(data);
    });


});





  </script>
  <?php include("includes/footer.html");?>
  </body>
  </html>
