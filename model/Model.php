<?php
require_once('config.php');  // Make sure the database connection is open.
require_once('restaurant.php');
require_once('restaurantFinder.php');


class Model {
  public $id;
  public $restId;

  static function find($cuisine, $location, $atmosphere, $theme, $other, $price, $sort) {
      global $DB;
      $stud = new RestaurantFinder();
// $sql = "SELECT * FROM restaurantFinder, restaurant where restaurant.id=restaurantFinder.restId and cuisine='$cuisine' order by $sort";
      $sql = "SELECT * FROM restaurantFinder, restaurant where restaurant.id=restaurantFinder.restId";
      $result = $DB->query($sql);
      if (!$result) {
          die("Select query failed: " . $DB->error ."\n");
      }


      $found = array();
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            array_push($found, $row["restId"]);
          }
      }

      return $found;
  }

  static function store($arr) {
    global $DB;
        $sql = "TRUNCATE TABLE searchResult";

            $result = $DB->query($sql);

    foreach ($arr as $key) {
        $sql = "INSERT INTO searchResult SET restId='$key'";
      $result = $DB->query($sql);

      //  var_dump($result->fetch_assoc());
      Model::checkResult($result);
    }


  }

  private static function checkResult($result) {
    global $DB;
    if (!$result) {
      die("DB error ({$DB->error})");
    }
  }

  public static function listAll() {
    global $DB;
    $sql = "SELECT * FROM restaurant, restaurantFinder where restaurant.id=restaurantFinder.restId";
    $result = $DB->query($sql);
    Model::checkResult($result);

    $found = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        }
    }


    return $found;
  }

  public static function retrieve() {
    global $DB;
        // $sql = "SELECT * FROM restaurant, restaurantFinder, searchResult where restaurant.id=restaurantFinder.restId and restaurant.id=searchResult.restId order by '$orderBy'";
    $sql = "SELECT * FROM restaurant, restaurantFinder, searchResult where restaurant.id=restaurantFinder.restId and restaurant.id=searchResult.restId";
    $result = $DB->query($sql);
    Model::checkResult($result);

    $found = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        }
    }



    return $found;
  }







}



// Other methods (irrelevant)
