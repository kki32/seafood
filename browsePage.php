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

  <table id="restaurant-list"></table>


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
