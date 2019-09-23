<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
  // get database connection
include_once '../config/Database.php';
 
// instantiate user object
include_once '../objects/users.php';

$database = new Database();
$db=$database->getConnection();

$user = new users($db);
 
// get posted data
$user->user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die();

// set user id to be deleted
//$user->user_id = $data->user_id;
 
// delete the user
if($user->delete()){
 
    // set response code - 200 ok
    http_response_code(200);
 
    // tell the user
    echo json_encode(array("message" => "user was deleted."));
}
 
// if unable to delete the user
else{
 
    // set response code - 503 service unavailable
    http_response_code(503);
 
    // tell the user
    echo json_encode(array("message" => "Unable to delete user."));
}
?>