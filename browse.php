<?php
  header('Content-Type: application/json; charset=utf-8');
require_once('config.php');
require_once('searchResult.php');
require_once('restaurantFinder.php');
require_once('restaurant.php');


function listAll(){
  global $DB;
  $found = array();
  //get restaurant id from search result
  $result = SearchResult::listAll();
    echo json_encode($result);
}

// function sortBy(){
//   global $DB;
//   $found = array();
//   //get restaurant id from search result
//   $result = RestaurantFinder::listAllRestaurants();
//   foreach ($result as $id) {
//     $rest = Restaurant::find($id);
//     // print_r($rest);
//     if($rest != null){
//         array_push($found, $rest);
//     }
//   }
//     echo json_encode($found);
//
// }


if($_SERVER['REQUEST_METHOD'] === 'GET'){
  listAll();
} else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    listAll();
}





?>
