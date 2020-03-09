<?php
require ("../php/dbcon.php");
global $link;
//Insert Member
if(isset($_POST['btnsavenew'])){

	$duration= filter_var($_POST['duration'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$startdate= filter_var($_POST['startdate'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	$start_date=date('Y-m-d',strtotime($startdate));
	$end_date=date('Y-m-d',strtotime($start_date.'+'.$duration.' days'));

	$firstname= filter_var($_POST['firstname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$lastname= filter_var($_POST['lastname'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$email= filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$phone= filter_var($_POST['phone'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$address= filter_var($_POST['address'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	CreateMember($start_date,$end_date,$firstname,$lastname,$email,$phone,$address);

}else if(isset($_REQUEST["del_member_id"])){
    
    $member_id = $_REQUEST["del_member_id"];
    
    $sql = "delete from  tbl_members where member_id = '".$member_id."' ";
    

        $query_action = mysqli_query($link, $sql) or die(mysql_error());
       
        if($query_action){
          echo "deleted";
          header("Location: ../members.php?deleted");
        }else{
           echo "error";
          header("Location: ../members.php?error");
        }

 }else if (isset($_POST['btn_subscribe'])){
 	$duration=filter_var($_POST['duration'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
 	$member_id=filter_var($_POST['member_id'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$start_date=date('Y-m-d',strtotime(date('Y-m-d')));
	$end_date=date('Y-m-d',strtotime($start_date.'+'.$duration.' days'));
	
	$query="UPDATE tbl_members SET subcription_start_date='".$start_date."',subscription_expiry_date='".$end_date."' WHERE member_id='".$member_id."'" ;
	$query_action=mysqli_query($link,$query) or die(mysqli_error());
	header("Location: ../members.php"); 	

 }
function CreateMember($startdate,$end_date,$firstname,$lastname,$email,$phone,$address){
	require ("../php/dbcon.php");	
	
	if(validateEmail($email)){
		
		$registered_person_id=CreatePerson($firstname,$lastname,$email,$phone,$address);
		
		$query="INSERT INTO
				 	tbl_members(person_id,subcription_start_date,subscription_expiry_date)
		 		VALUES (
		 			'".$registered_person_id."',
		 			'".$startdate."',
		 			'".$end_date."')";

		 $query_exec= mysqli_query($link,$query) or die (mysqli_error());
		 header("location: ../members.php?success");
		

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
			 	'".$date."'  )";

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