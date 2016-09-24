<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>

  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

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
    <div class="container" id="search-container">
  <?php include("includes/navigation.html");?>
  <?php include("includes/header.html");?>



    <h3 class="header" id="home-header">Price range</h3>
    <label for="amount">
    </label>
    <div class="search-inner-container">
      <p>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
      </p>

      <div id="slider-range"></div>
    </div>

    <h3 class="header" id="home-header"> Cuisine</h3>
    <div class="search-inner-container">
      <input type="text" class="searchField" id="cuisine-list" data-provide="typeahead" placeholder="Cuisine Name">
    </div>
    <h3 class="header" id="home-header"> Location</h3>
    <div class="search-inner-container">
      <input type="text" class="searchField" id="location-list" data-provide="typeahead" placeholder="Location">
    </div>
    <h3 class="header" id="home-header"> Atmosphere</h3>
    <div class="search-inner-container">
      <input type="text" class="searchField" id="atmosphere-list" data-provide="typeahead" placeholder="Atmosphere">
    </div>
    <h3 class="header" id="home-header"> Theme</h3>
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




  <script type="text/javascript" src="processUserInputs.js"></script>

  <script type="text/javascript" src="slider.js"></script>

  <?php include("includes/footer.html");?>
    </div>
</body>
</html>
