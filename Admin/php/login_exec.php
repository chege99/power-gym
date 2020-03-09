<?php 
include_once("dbcon.php");

if(isset($_POST["login"])){
	
	$email = filter_var($_POST["username"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$password = filter_var($_POST["password"],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

	$query="SELECT 
				usr.user_id,usr.person_id,
				psn.person_id,psn.email
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

	$sql= mysqli_query($link,$query);

	$count=mysqli_num_rows($sql);
	$row = mysqli_fetch_array($sql);

	if($count > 0){
		session_start();
		$_SESSION['sess_id']=$row['user_id'];

		header("location: ../dashboard.php?success");

	}else{

		header("location:../login.php?Incorect");

	}

}

?>