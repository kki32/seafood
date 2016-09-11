<?php
require_once('config.php');  // Make sure the database connection is open.
class RestaurantFinder {
    public $id;
    public $restId;
    public $cuisine;
    public $location;
    public $hasBeer;

    // Define the fields of $this by reading the appropriate
    // row from the database.


        static function findByRestId($restaurantId) {
          global $DB;
          $sql = "SELECT * FROM restaurant where id='$restaurantId'";
          $result = $DB->query($sql);
          RestaurantFinder::checkResult($result);

          $found = array();
          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              return $row;
          }
        }

        private static function checkResult($result) {
          global $DB;
          if (!$result) {
            die("DB error ({$DB->error})");
          }
        }

        // Define the fields of $this by reading the appropriate
        // row from the database.
        static function listAllRestaurants() {
            global $DB;
            $stud = new RestaurantFinder();

            $sql = "SELECT * FROM restaurantFinder";
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



}

// $a = new RestaurantFinder();
// $g = $a->find("Thai");
// echo json_encode($g);
// foreach ($g as $key) {
//   print_r($key);
// }


    // Other methods (irrelevant)
