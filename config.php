<?php

function connectDb() {
 $db = new mysqli('mysql.cosc.canterbury.ac.nz', 'kki32', '18582950');
    if ($db->connect_error) {
        die("Could not connect to MySQL server\n");
    }

    if (!$db->select_db('kki32')) {
           die("Could not select database\n");
    }
    $db->set_charset('utf8');  // Make sure we talk utf-8 to the server

    return $db;
}

global $DB;
$DB = connectDb();

// $sql = "SELECT * FROM restaurant";
// $result = $DB->query($sql);
// if (!$result) {
//     die("Select query failed: " . $DB->error ."\n");
// }
//
// echo $result->num_rows . " students found: \n";
// while (($row = $result->fetch_object()) !== NULL) {
//     print_r($row);
// }

?>
