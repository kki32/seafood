<!DOCTYPE html>
<html lang="en">
<head>

  <title>Seafood</title>
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

  <!--
  To collect end-user usage analytics about your application,
  insert the following script into each page you want to track.
  Place this code immediately before the closing </head> tag,
  and before any other scripts. Your first data will appear
  automatically in just a few seconds.
-->
<script type="text/javascript">
var appInsights=window.appInsights||function(config){
  function r(config){t[config]=function(){var i=arguments;t.queue.push(function(){t[config].apply(t,i)})}}var t={config:config},u=document,e=window,o="script",s=u.createElement(o),i,f;s.src=config.url||"https://az416426.vo.msecnd.net/scripts/a/ai.0.js";u.getElementsByTagName(o)[0].parentNode.appendChild(s);try{t.cookie=u.cookie}catch(h){}for(t.queue=[],i=["Event","Exception","Metric","PageView","Trace","Dependency"];i.length;)r("track"+i.pop());return r("setAuthenticatedUserContext"),r("clearAuthenticatedUserContext"),config.disableExceptionTracking||(i="onerror",r("_"+i),f=e[i],e[i]=function(config,r,u,e,o){var s=f&&f(config,r,u,e,o);return s!==!0&&t["_"+i](config,r,u,e,o),s}),t
}({
  instrumentationKey:"4ef7355c-60b5-408a-ada7-274ec9b173cb"
});

window.appInsights=appInsights;
appInsights.trackPageView();
</script>
</head>
<body>
  <div class="container">
    <?php include("includes/navigation.html");?>
    <?php include("includes/header.html");?>
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="picture/indian.jpg" alt="Best curry" width="900px" height="100px">
          <h3 id="carousel-header">Best curry</h3>
        </div>
        <div class="item">
          <img src="picture/burger.jpg" alt="Chania" width="600px" height="150px">
          <h3 id="carousel-header">Best burger</h3>
        </div>
        <div class="item">
          <img src="picture/vietnam.jpg" alt="Flower" width="600px" height="150px">
          <h3 id="carousel-header">Best springroll</h3>
        </div>
        <div class="item">
          <img src="picture/kiwi.jpg" alt="Flower" width="200px" height="150px">
          <h3 id="carousel-header">Best spaghetti</h3>
        </div>
        <div class="item">
          <img src="picture/japan.jpg" alt="Flower" width="200px" height="150px">
          <h3 id="carousel-header">Best ramen</h3>
        </div>
      </div>

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>


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



    <br>

    <div class="center" id="home-container">
      <h3 class="header" id="home-header">New restaurant review</h3>
      <div class="review-container">
        <ul>
          <li class="review-line">

            <img class="rest-image"src="http://static.stuff.co.nz/1445905209/234/12967234.jpg">
            <p id="review-header"> Roots, Lyttelton</p>
            <p id="review-p">        It's worth the climb. Upstairs on fairytale New Regent St you'll find... </p>
            <button id="read-more-btn">Read more</button>
          </li>
        </ul>
      </div>

        <div class="review-container">
          <ul>
            <li class="review-line">

              <img class="rest-image"src="http://static.stuff.co.nz/1445905389/280/12967280.jpg">
              <p id="review-header">King of Snake, Christchurch Central</p>
              <p id="review-p">ing of Snake's roast duck and lychee salad is one of Christchurch's... </p>
              <button id="read-more-btn">Read more</button>
            </li>
          </ul>
        </div>

      <div class="review-container">
        <ul>
          <li class="review-line">

            <img class="rest-image"src="http://static.stuff.co.nz/1445905363/267/12967267.jpg">
            <p id="review-header"> Bloody Mary's, Christchurch Central</p>
            <p id="review-p"> This is the place to get a beef hit and you might as well go all... </p>
            <button id="read-more-btn">Read more</button>
          </li>
        </ul>
      </div>

      <div class="review-container">
        <ul>
          <li class="review-line">

            <img class="rest-image"src="http://static.stuff.co.nz/1445905182/222/12967222.jpg">
            <p id="review-header"> Bamboozle, Christchurch Central</p>
            <p id="review-p">          The new Bamboozle with its pale green stylised palette is oh so cool... </p>
            <button id="read-more-btn">Read more</button>
          </li>
        </ul>
      </div>





    <br>

      <h3 class="header" id="home-header">New Promotion</h3>
      <div class="review-container" style="padding-bottom:30px;">
        <ul>
          <li class="review-line">
            <img class="rest-image"src="http://main-cdn.grabone.co.nz/goimage/440x267/ilkxp3f.jpg">
            <p id="review-header"> Curry Time, Redwood</p>
            <p> $29 for Two Curries, Rice, Naan & Drinks</p>
            <button id="read-more-btn">Read more</button>
          </li>
        </ul>
      </div>
      <div class="review-container">
        <ul>
          <li class="review-line">
            <img class="rest-image"src="https://media-cdn.tripadvisor.com/media/photo-s/0a/89/9d/a7/food2.jpg">
            <p id="review-header"> Dragon's Den, Sydenham</p>
            <p> $49 for a Three-Course Set Menu for Two including a Cocktail</p>
            <button id="read-more-btn">Read more</button>
          </li>
        </ul>
      </div>

    <?php include("includes/footer.html");?>

    </div>


  </div>
</body>
</html>
