<?php
/*
*headers about who can read this file and which type of content it will return.
*This file can be read by anyone (asterisk * means all) and will return a data in JSON format
*/
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
  // get database connection
include_once '../config/Database.php';
 
// instantiate product object
include_once '../objects/users.php';

$database = new Database();
$db=$database->getConnection();

$user = new Users($db);

//query user 
$stmt=$user->read();
$num=$stmt->rowCount();

if ($num>0) {
	//$user_arr=new array();
	$user_arr['records']=array();
	// retrieve our table contents
	// fetch() is faster than fetchAll()
	// http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
	while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		//extract row
		//this will make $row["name"] 
		//to $name only
		extract($row);
		$user_info=array(
			"password"=>$password,
			"person_id"=>$person_id,
			"added_by_uid"=>$added_by_uid,
			"firstname"=>$firstname,
			"lastname"=>$lastname,
			"email"=>$email,
			"phone"=>$phone,
			"address"=>$address,
			"date_added"=>$date_added
		);
		array_push($user_arr["records"],$user_info);
	}
	//show response code- 200 OK
	http_response_code(200);
	//show user in JSON
	echo json_encode($user_arr);
}else{
	//http response 404 not found
	http_response_code(404);
	//no records response to user
	echo json_encode(
		array('message' => "No user Found" )
	);
}   
