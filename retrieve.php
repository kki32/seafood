<?php
  header('Content-Type: application/json; charset=utf-8');

require_once('Model.php');


function retrieve(){
  global $DB;

  $found = array();
  //get restaurant id from search result
  $result = Model::retrieve();
    echo json_encode($result);
}


// if($_SERVER['REQUEST_METHOD'] === 'GET'){
  retrieve();
// }


?>
