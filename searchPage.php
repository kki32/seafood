
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
  <script type="text/javascript" src="bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js">  </script>
  <script type="text/javascript" src="typeahead/typeahead.bundle.js">  </script>
  <script type="text/javascript" src="typeahead/bloodhound.js">  </script>
  <script type="text/javascript" src="typeahead/typeahead.bundle.min.js">  </script>
  <script type="text/javascript" src="typeahead/typeahead.jquery.js">  </script>
  <script type="text/javascript" src="typeahead/bootstrap3-typeahead.js">  </script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

</head>

<body>
  <?php include("includes/navigation.html");?>
  <?php include("includes/header.html");?>

  <div class="center" id="search-container">

    <h3 class="header">Price range</h3>
    <label for="amount">
    </label>
    <div class="search-inner-container">
      <p>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
      </p>

      <div id="slider-range"></div>
    </div>

    <h3 class="header"> Cuisine</h3>
    <div class="search-inner-container">
      <input type="text" class="searchField" id="cuisine-list" data-provide="typeahead" placeholder="Cuisine Name">
    </div>
    <h3 class="header"> Location</h3>
    <div class="search-inner-container">
      <input type="text" class="searchField" id="location-list" data-provide="typeahead" placeholder="Location">
    </div>
    <h3 class="header"> Atmosphere</h3>
    <div class="search-inner-container">
      <input type="text" class="searchField" id="atmosphere-list" data-provide="typeahead" placeholder="Atmosphere">
    </div>
    <h3 class="header"> Theme</h3>
    <div class="search-inner-container">
      <input type="text" class="searchField" id="theme-list" data-provide="typeahead" placeholder="Theme">
    </div>


    <h3> Other</h3>
    <div class="search-inner-container">
      <input type="checkbox" name="vehicle" value="Car" checked> BYO<br>
      <input type="checkbox" name="vehicle" value="Car" checked> Live music<br>
      <input type="checkbox" name="vehicle" value="Car" checked> Gluten free<br>
      <input type="checkbox" name="vehicle" value="Car" checked> Chicken lover<br>
      <input type="checkbox" name="vehicle" value="Car" checked> Fish lover<br>
      <input type="checkbox" name="vehicle" value="Car" checked> Beef lover<br>
      <input type="checkbox" name="vehicle" value="Car" checked> Pork lover<br>
      <input type="checkbox" name="vehicle" value="Car" checked> Vegetarian<br>
    </div>

    <div class="submit-btn-container">
      <button type="button" onclick="collectInputs()">Go</button>
    </div>
  </div>



  <script type="text/javascript" src="processUserInputs.js"></script>

  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 10, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
  <?php include("includes/footer.html");?>
</body>
</html>
