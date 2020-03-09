<?php
require ("../Admin/php/dbcon.php");
global $link;

if(isset($_POST['btnsavenew'])){
	
	

	$firstname= filter_var($_POST['firstname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$lastname= filter_var($_POST['lastname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$email= filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$phone= filter_var($_POST['phone'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$address= filter_var($_POST['address'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	CreateMember($firstname,$lastname,$email,$phone,$address);
	/*
echo "string". $plan;
echo "string". $startdate;
echo "string". $paymentstatus;
echo "string". $firstname;
echo "string". $lastname;
echo "string". $email;
echo "string". $phone;
echo "string". $address;
//*/


}



function CreateMember($firstname,$lastname,$email,$phone,$address){
	require ("../Admin/php/dbcon.php");	
	
	if(validateEmail($email)){
		
		$registered_person_id=CreatePerson($firstname,$lastname,$email,$phone,$address);
		
		$query="INSERT INTO
				 	tbl_members(person_id)
		 		VALUES (
		 			'".$registered_person_id."')";

		 $query_exec= mysqli_query($link,$query) or die (mysqli_error());
		 header("location: ../index.php?success");
		

	}else{
		echo "Email Already Exists, Please register Member with valid email"; 
	}
	//create person
	//if(pid is is_nan(val))
}

function CreatePerson($firstname,$lastname,$email,$phone,$address){
	require ("../Admin/php/dbcon.php");
	$date=date('Y-m-d H:i:s');

	$query="INSERT INTO
				 tbl_people(firstname,lastname,email,phone,address,date_added)
		 	VALUES (
		 		'".$firstname."',
			 	'".$lastname."',
			 	'".$email."',
			 	'".$phone."',
			 	'".$address."',
			 	'".$date."'  )";

	$query_exec= mysqli_query($link,$query) or die (mysqli_error());
	
	$query="SELECT * FROM tbl_people WHERE email='".$email."'";
	$query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

	$row = mysqli_fetch_array($query_exec);
	$newperson_id=$row['person_id'];
	return $newperson_id;
	
}
 

function ValidateEmail($email){
	require ("../Admin/php/dbcon.php");
	$query="SELECT * FROM tbl_people WHERE email='".$email."'";
	$query_exec= mysqli_query($link,$query) or die (mysqli_error());

	$count=mysqli_num_rows($query_exec);
	$row = mysqli_fetch_array($query_exec);


	if($count > 0){//exists
		return false;
	}else{
		return true;
	}
}

?>
