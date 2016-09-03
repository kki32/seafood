<?php
require_once('config.php');  // Make sure the database connection is open.
class FrequentlyAsked {
    public $id;
    public $question;
    public $answer;
    // Define the fields of $this by reading the appropriate
    // row from the database.
    static function listAll() {
      global $DB;
      $sql = "SELECT * FROM frequentlyAsked";
      $result = $DB->query($sql);
      FrequentlyAsked::checkResult($result);
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
   
    }
