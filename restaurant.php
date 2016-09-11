<?php
require_once('config.php');  // Make sure the database connection is open.
class Restaurant {
    public $id;
    public $name;
    public $address;
    public $hours;
    public $phone;
    public $website;
    public $rating;
    public $visited;
    public $url;

    // Define the fields of $this by reading the appropriate
    // row from the database.
    static function find($id) {
      global $DB;
      $sql = "SELECT * FROM restaurant where id='$id'";
      $result = $DB->query($sql);
      Restaurant::checkResult($result);

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

        // global $DB;
        // $stud = new Model();
        //
        // $sql = "SELECT * FROM restaurant";
        // $result = $DB->query($sql);
        // if (!$result) {
        //     die("Select query failed: " . $DB->error ."\n");
        // }
        //
        // if ($result->num_rows > 0) {
        //       $row = $result->fetch_assoc();
        //
        //     // output data of each row
        //     foreach ($row as $field => $value) {
        //         $stud->$field = $value;
        //     }
        // }
        // return $stud;
    }






    // Other methods (irrelevant)
