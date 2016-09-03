<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 50%;
    height: 20%;
    margin: auto;
  }

  </style>
</head>
<body>
  <?php include("includes/navigation.html");?>
  <?php include("includes/header.html");?>

  <div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">

          <img src="picture/indian.jpg" alt="Best curry" width="900px" height="100px">
          <h3 class="carousel-header">Best curry</h3>
        </div>

        <div class="item">

          <img src="picture/burger.jpg" alt="Chania" width="600px" height="150px">
          <h3 class="carousel-header">Best burger</h3>
        </div>

        <div class="item">
          <img src="picture/vietnam.jpg" alt="Flower" width="600px" height="150px">
          <h3 class="carousel-header">Best springroll</h3>
        </div>

        <div class="item">

          <img src="picture/kiwi.jpg" alt="Flower" width="200px" height="150px">
          <h3 class="carousel-header">Best spaghetti</h3>
        </div>

        <div class="item">

          <img src="picture/japan.jpg" alt="Flower" width="200px" height="150px">
          <h3 class="carousel-header">Best ramen</h3>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br>


  <div class="center" id="home-container">
    <h3 class="header" id="home-header">New restaurant review</h3>
    <table>
      <tr>
        <th>Twenty Seven Steps, 16 New Regent St</th>
        <th>  Bamboozle, 151 Cambridge Terrace </th>
        <th>Roots, 8 London St, Lyttelton</th>
      </tr>
      <tr>
        <td><img class="rest-image"src="http://static.stuff.co.nz/1445905164/221/12967221.jpg"></td>
        <td><img class="rest-image" src="http://static.stuff.co.nz/1445905182/222/12967222.jpg"></td>
        <td><img class="rest-image" src="http://static.stuff.co.nz/1445905209/234/12967234.jpg"></td>
      </tr>
      <tr>
        <td>A visit to Roots throws usual rules out the window. There you are pondering... <button id="read-more-btn">Read more</button>
        </td>
        <td>
          The new Bamboozle with its pale green stylised palette is oh so cool... <button id="read-more-btn">Read more</button>
        </td>
        <td>
          It's worth the climb. Upstairs on fairytale New Regent St you'll find... <button id="read-more-btn">Read more</button>
        </td>
      </tr>
    </table>

  </div>
  <br>
  <div class="center" id="home-container">


    <h3 class="header" id="home-header">New promotion</h3>
    <table>
      <tr>
        <th>Twenty Seven Steps, 16 New Regent St</th>
        <th>  Bamboozle, 151 Cambridge Terrace </th>

        <th>Roots, 8 London St, Lyttelton</th>
      </tr>
      <tr>
        <td><img class="rest-image"src="http://static.stuff.co.nz/1445905164/221/12967221.jpg"></td>
        <td><img class="rest-image" src="http://static.stuff.co.nz/1445905182/222/12967222.jpg"></td>
        <td><img class="rest-image" src="http://static.stuff.co.nz/1445905209/234/12967234.jpg"></td>
      </tr>
      <tr>
        <td>A visit to Roots throws usual rules out the window. There you are pondering... <button id="read-more-btn">Read more</button>
        </td>
        <td>
          The new Bamboozle with its pale green stylised palette is oh so cool... <button id="read-more-btn">Read more</button>
        </td>
        <td>
          It's worth the climb. Upstairs on fairytale New Regent St you'll find... <button id="read-more-btn">Read more</button>
        </td>
      </tr>
    </table>
  </div>
  <?php include("includes/footer.html");?>
</body>
</html>
