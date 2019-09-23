<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/database.php';
 
// instantiate person object
include_once '../objects/people.php';
 
$database = new Database();
$db = $database->getConnection();
 
$person = new People($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
 // make sure data is not empty
if(
	!empty($data->firstname)&&
	!empty($data->lastname)&&
	!empty($data->email)&&
	!empty($data->phone)&&
	!empty($data->address)
){
    // set person property values

    $person->firstname = $data->firstname;
    $person->lastname = $data->lastname;
    $person->email = $data->email;
    $person->phone = $data->phone;
    $person->address = $data->address;
    $person->date_added = date('Y-m-d H:i:s');
 
    // create the Person
    if($person->create()){
 
        // set response code - 201 created
        http_response_code(201);
 
        // tell the user
        echo json_encode(array("message" => "Person was created."));
    }
 
    // if unable to create the person, tell the user
    else{
 
        // set response code - 503 service unavailable
        http_response_code(503);
 
        // tell the user
        echo json_encode(array("message" => "Unable to create Person."));
    }
}
 
// tell the user data is incomplete
else{
 
    // set response code - 400 bad request
    http_response_code(400);
 
    // tell the user
    echo json_encode(array("message" => "Unable to create Person. Data is incomplete."));
}
?>