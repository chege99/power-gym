<?php
require ("../php/dbcon.php");
//Insert Member
if(isset($_POST['btnsavenew'])){
	$password= filter_var($_POST['password'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	$firstname= filter_var($_POST['firstname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$lastname= filter_var($_POST['lastname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$email= filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$phone= filter_var($_POST['phone'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$address= filter_var($_POST['address'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	CreateUser($password, $firstname, $lastname, $email, $phone, $address);

}


function CreateUser($password, $firstname, $lastname, $email, $phone, $address){

	require ("../php/dbcon.php");	
	
	if(validateEmail($email)){
		
		$registered_person_id=CreatePerson($firstname,$lastname,$email,$phone,$address);
		
		$query="INSERT INTO
				 	tbl_users(person_id,password)
		 		VALUES (
		 			'".$registered_person_id."',
		 			'".$password."'  )";
		 $query_exec= mysqli_query($link,$query) or die (mysqli_error());
		 header("location: ../users.php?success");
		

	}else{
		echo "Email Already Exists, Please register Member with valid email"; 
	}


}


function CreatePerson($firstname,$lastname,$email,$phone,$address){
	require ("../php/dbcon.php");
	$date=date('Y-m-d H:i:s');

	$query="INSERT INTO
				 tbl_people(firstname,lastname,email,phone,address,date_added)
		 	VALUES (
		 		'".$firstname."',
			 	'".$lastname."',
			 	'".$email."',
			 	'".$phone."',
			 	'".$address."',
			 	'".$date."'   )";

	$query_exec= mysqli_query($link,$query) or die (mysqli_error());
	
	$query="SELECT * FROM tbl_people WHERE email='".$email."'";
	$query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

	$row = mysqli_fetch_array($query_exec);
	$newperson_id=$row['person_id'];
	return $newperson_id;
	
}



function ValidateEmail($email){
	require ("../php/dbcon.php");
	$query="SELECT * FROM tbl_people WHERE email='".$email."'";
	$query_exec= mysqli_query($link,$query) or die (mysqli_error());

	$count=mysqli_num_rows($query_exec);
	$row = mysqli_fetch_array($query_exec);


	if($count > 0){
		return false;
	}else{
		return true;
	}
}

