<?php
  header('Content-Type: application/json; charset=utf-8');
require_once('config.php');
require_once('Model.php');
// require_once('restaurantFinder.php');
// require_once('restaurant.php');

function search(){
  global $DB;
  $fields = $_POST['search'];
// $cuisine, $location, $atmosphere, $theme, $other, $price, $sort
//find restaurant id of restaurant with the given tags
  $user = Model::find("Thai", "Fendalton", "quiet", "pub", "beer", "$20","price");

  //store restaurant id in search result
  Model::store($user);

  $arr = array('a' => 'b', 'b' => 'c', 'c' => 'd', 'd' => 'e', 'e' => 'g');
    echo json_encode($arr);
}




if($_SERVER['REQUEST_METHOD'] === 'POST'){
  search();
}




?>
