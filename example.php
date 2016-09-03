<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
  <link rel="stylesheet" href="style.css">
  <h1>Search Result</h1>
  <div>
<h3>Sorted by:</h3>
<form >
<button id="price" class="sort" type="button" >Price</button>
 <button id="hours" class="sort" type="button" >Opening hours</button>
  <button id="rating" class="sort" type="button" >Popularity</button>
   <button id="distance" class="sort" type="button" >Distance from here</button>
</form>
  </div>


</head>
<body>
  <h3>Restaurants</h3>
  <div id="restaurant-list"></div>
  <script type="text/javascript">
  $(".sort").click(function() {
      var userInputs = [{"sortBy":this.id}];
      <?php
      require('searchResult.php');
      print_r(SearchResult::retrieve("rating"));
      ?>

    //
    // $.ajax({
    //   type: "POST",
    //   url: "retrieve",
    //   data: {search: JSON.stringify(userInputs)},
    //   dataType: "json",
    //
    //   // contentType: "application/json"
    // })
    // .success( function(data) {
    //   console.log('done');
    //   console.log(data);
    //   $.each(data, function(index, element) {
    //     $('#restaurant-list').append('<button> '+ element.cuisine + '</button>');
    //     $('#restaurant-list').append('<button> '+ element.location + '</button>');
    //     $('#restaurant-list').append('<button> '+ element.atmosphere + '</button>');
    //     $('#restaurant-list').append('<button> '+ element.theme + '</button>');
    //     $('#restaurant-list').append('<li> Price range: '+ element.price + '</li>');
    //     $('#restaurant-list').append('<li> Rating: '+ element.rating + '</li>');
    //     $('#restaurant-list').append('<li> Name: '+ element.name + '</li>');
    //     $('#restaurant-list').append('<li> Address: '+ element.address + '</li>');
    //     $('#restaurant-list').append('<li> Phone no: '+ element.phone + '</li>');
    //     $('#restaurant-list').append('<li> Name: '+ element.url + '</li>');
    //     $('#restaurant-list').append('<li> Website: '+ element.website + '</li>');
    //     $('#restaurant-list').append('<img class="searchPic" src="' + element.url + '" />');
    //   });
    // })
    //
    // .fail( function(data) {
    //   console.log('fail');
    //   console.log(data);
    // });

    });
    </script>
  </body>
  </html>
