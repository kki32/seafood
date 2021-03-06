<!DOCTYPE html>
<html lang="en">
<head>

  <title>Seafood</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <title>About Us</title>
      <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <style>
         .ui-widget-header {
            background: #cedc98;
            border: 1px solid #DDDDDD;
            color: #333333;
            font-weight: bold;
         }
      </style>

  </head>
  <body>
        <div class="container" id="search-container">
    <?php include("includes/navigation.html");?>
    <?php include("includes/header.html");?>


      <h3 class="header"> <img src="picture/seagullIcon.png" width="80px" height="80px"> About Seafood Version 1.0 </h3>
      <div class="aboutUs-container">
        <p class="paragraph">
          Seafood is a perfect website for user who wants to quickly search the restaurant in Christchurch by the food they want, the atmosphere they want, the theme they want, or the location they want. In the future, we aim to make it like a diary for users to keep a record of the restaurants the users enjoy.

        </div>

        <h3 class="header"><img src="picture/cookiesIcon.png" width="80px" height="80px"> Implemented Features</h3>

        <div class="aboutUs-container">
          <p class="paragraph">
            At the moment, we have</p>
            <ul>
              <li class="bullet-points" >implemented the interface of the website using HTML5 and CSS.</li>
              <li class="bullet-points" >implemented at least two JQuery plugins. First is the slider for price range under Search page and second is the progress bar when translating our language to Yoda language under About Us page.</li>
                <li class="bullet-points" >implemented the Facebook Comments under review page for the restaurant (Click the picture of any restaurant in Browse page and Search result page to see review page).</li>
                <li class="bullet-points" >made API call to translate our language to Yoda language :) in About Us page under Say hi to us in yoda language header.</li>
  <li class="bullet-points" > implemented Bootstrap such as the command prediction under Search page. Try typing T in the textfield under Cuisine header and you would see Thai.</li>
              </ul>
            </div>


            <h3 class="header"><img src="picture/shipIcon.png" width="80px" height="80px">Coming soon</h3>

            <div class="aboutUs-container">
              <p class="paragraph">
                Due to restricted time, many features could not make it to this version. However we have listed down our wish lists.
                In the future, we want</p>
                <ul>
                  <li class="bullet-points" >to retrieve the restaurants information from the database rather than hard code it. In fact, we have our database but it could not be accessed.</li>
                  <li class="bullet-points" >to create log in/log out system so that the user could save their favourite restaurants and review the restaurants.</li>
                  <li class="bullet-points" >to allow user to rate the restaurant.</li>
                  <li class="bullet-points" >to sort the restaurant based on the selected button</li>
                  <li class="bullet-points" >to retrieve the opening hours from api</li>
                  <li class="bullet-points" >to allow user to add questions to help page</li>
                  <li class="bullet-points" >to search for the restaurant using the category</li>
                  <li class="bullet-points" >to create a personal list under Browse so if the user has no idea what they want, they could look at other people's list</li>
                  <li class="bullet-points" >to expand restaurant database to include restaurants outside Christchurch.</li>
                </ul>
              </div>

              <h3 class="header"><img src="picture/captainIcon.png" width="80px" height="80px">About Us</h3>
              <div class="aboutUs-container">
                <p class="paragraph">
                  Our designer is Kanyakorn Kitisopakul (Ploy) who is currently studying 3rd year of Software Engineering at University of Canterbury.

                </p>
              </div>


              <h3 class="header">Say hi to us in Yoda language  :)</h3>
              <div class="aboutUs-container">
                <div id="progressbar-4"></div>

                <p id="yoda-text"></p>

                <input type="text" class="form-control" id="yoda-input"></input>
              </div>

                <input type="submit" value="Send" onclick="progressBar()" style="margin-left:30px;"></input>








        <h3 class="header">  If in doubt with anything on the website, see Help page</h3>
<br>
      </div>

      <script src="translate.js"></script>

            <?php include("includes/footer.html");?>
                        </div>
          </body>

          </html>
