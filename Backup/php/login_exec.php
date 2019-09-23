<?php 
include_once("dbcon.php");

if(isset($_POST["login"])){
	
	$email = filter_var($_POST["username"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$password = filter_var($_POST["password"],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$encrypt_pass = md5($password);
    $shortened_pass = substr($encrypt_pass,0,50);

	$query="SELECT 
				usr.user_id,usr.password,usr.rest_token,usr.person_id,usr.added_by_uid,
				psn.person_id,psn.firstname,psn.lastname,psn.email,psn.phone,psn.address,psn.date_added
			FROM
				tbl_users usr
			LEFT JOIN
				tbl_people psn
			ON
				usr.person_id = psn.person_id
			WHERE
			    usr.password  = '".$password."'
			AND
				psn.email = '".$email."'
			LIMIT
			    0,1";


	$sql= mysqli_query($link,$query)or die (mysqli_error());

	//Make  sure the person exists
	$count=mysqli_num_rows($sql);
	$row = mysqli_fetch_array($sql);
	
	if($count > 0){
		session_start();
		$_SESSION['id']=$row['usr.user_id'];
		$user_id=$row['usr.user_id'];
		$person_id=$row['person_id']; 
	

		header("location: ../dashboard.php?success");

	}else{

		header("location:../login.php?Incorect-credentials");

	}

}

?>