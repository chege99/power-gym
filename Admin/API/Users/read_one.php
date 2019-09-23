<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/users.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new Users($db);
 
// set ID property of record to read
$user->user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die();
 
// read the details of user to be edited
$user->readOne();
 
if($user->user_id!=null){
    // create array
    $user_arr = array(
     

        "user_id" => $user->user_id,
		"password" => $user->password,
		"firstname" => $user->firstname,
		"lastname" => $user->lastname,
		"email" => $user->email,
		"phone" => $user->phone,
		"address" => $user->address,
		"date_added" => $user->date_added
 
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($user_arr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user user does not exist
    echo json_encode(array("message" => "user does not exist."));
}
?>


		