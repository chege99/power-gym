<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

 // get database connection
include_once '../config/Database.php';
 
// instantiate user object
include_once '../objects/users.php';

$database = new Database();
$db=$database->getConnection();

$user = new Users($db);
 
// get id of user to be edited
$data = json_decode(file_get_contents("php://input"));

// set ID property of user to be edited
$user->user_id = $data->user_id;
 
// set user property values
$user->password = $data->password;
$user->rest_token = $data->rest_token;


// update the user
if($user->update()){
 
    // set response code - 200 ok
    http_response_code(200);
 
    // tell the user
    echo json_encode(array("message" => "user was updated."));
}
 
// if unable to update the user, tell the user
else{
 
    // set response code - 503 service unavailable
    http_response_code(503);
 
    // tell the user
    echo json_encode(array("message" => "Unable to update user."));
}
?>