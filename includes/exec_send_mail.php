<?php
if (isset($_POST['btn_submit'])) {
	$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$email= filter_var($_POST['email'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$subject= filter_var($_POST['subject'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$message= filter_var($_POST['message'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

	
	function SendMail($name,$email,$subject,$message){
		require ("../admin/php/dbcon.php");

		$query="INSERT INTO
					 tbl_messages(sender_name,sender_email,subject,message,status)
			 	VALUES (
			 		'".$name."',
				 	'".$email."',
				 	'".$subject."',
				 	'".$message."',
				 		'unread'
				 )";

		$query_exec= mysqli_query($link,$query) or die (mysqli_error());	
	}

	SendMail($name,$email,$subject,$message);
	header('location: ../contact.php');

}