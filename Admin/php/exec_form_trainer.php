<?php
require ("../php/dbcon.php");
//Insert Member
if(isset($_POST['btnsavenew'])){
	
	$firstname= filter_var($_POST['firstname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$lastname= filter_var($_POST['lastname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$email= filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$phone= filter_var($_POST['phone'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$address= filter_var($_POST['address'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	CreateTrainer($firstname,$lastname,$email,$phone,$address);
}else if(isset($_REQUEST["del_trainer_id"])){
    
    $trainer_id = $_REQUEST["del_trainer_id"];
    
    $sql = "delete from  tbl_trainers where trainer_id = '".$trainer_id."' ";
    

        $query_action = mysqli_query($link, $sql) or die(mysql_error());
       
        if($query_action){
          echo "deleted";
          header("Location: ../trainers.php?deleted");
        }else{
           echo "error";
          header("Location: ../trainers.php?error");
        }

 }


function CreateTrainer($firstname,$lastname,$email,$phone,$address){
	require ("../php/dbcon.php");	
	
	if(validateEmail($email)){
		
		$registered_person_id=CreatePerson($firstname,$lastname,$email,$phone,$address);
		
		$query="INSERT INTO
				 	tbl_trainers(person_id)
		 		VALUES (
		 			'".$registered_person_id."'  )";
		 $query_exec= mysqli_query($link,$query) or die (mysqli_error());
		 header("location: ../trainers.php?success");

	}else{
		echo "Email Already Exists, Please register Trainer with valid email"; 
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


	if($count > 0){//exists
		return false;
	}else{
		return true;
	}
}