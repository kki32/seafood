<!DOCTYPE html>
<html lang="en">
<head>

  <title>Seafood</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <head>

  </head>
  <body>
      <div class="container" id="search-container">
    <?php include("includes/navigation.html");?>
    <?php include("includes/header.html");?>



      <h3 id="home-header">Frequently Asked Questions</h3>

      <div class="question-answer-container">
        <li class="question">How to browse restaurants?</li>
        <li class="answer">Go Browse page, and start browsing :)</li>
      </div>

      <div class="question-answer-container">
        <li class="question">How to search restaurant?</li>
        <li class="answer">Go Search page, and start inputting the fields.
          Once finished, Clicked Search button. Note that at the moment,
          the search functionality has not been implemented,
          the search would just return the same restaurants list as the
          restaurant list in the Browse page.</li>
        </div>

        <div class="question-answer-container">
          <li class="question">What is the difference between Browse and Search page?</li>
          <li class="answer">Browse is for looking for any restaurants. This is ideal for users who comes here for wander.
            Search page is for looking up for specific type of restaurants. This is ideal for users who come here especially to find the restaurant.</li>
          </div>

          <div class="question-answer-container">
            <li class="question">How to review the restaurant?</li>
            <li class="answer">You can go to review page by clicking the picture of any restaurant in Browse or Search result page.
            This would bring you to the review page.</li>
          </div>

          <div class="question-answer-container">
            <li class="question">How is the rating works?</li>
            <li class="answer">At the moment, we still have not implement the rating functionality.
              Ideally, we want to create website account and then take the statistics from their votes.</li>
            </div>


            <div class="question-answer-container">
              <li class="question">How to sort the restaurants?</li>
              <li class="answer">At the moment, we still have not implement the functionality for sorting restaurants yet.</li>
            </div>

            <div class="question-answer-container" style="border-bottom-style: none;">
              <li class="question">How come there is only three restaurants under Browse page?</li>
              <li class="answer">We only want to demonstrate what the interface looks like. In the future, we plan to fill the page with roughly about 7 restaurants.
                Note that the page number does not work at this point.
              </li>
            </div>

            <?php include("includes/footer.html");?>
          </div>


          </body>
          </html>
