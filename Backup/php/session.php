<?php 
session_start();
include_once("dbcon.php"); 

//Check whether the session variable SESS_MEMBER_ID is present or not
//if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { 
if (!$_SESSION['logged_in']) {
?>
	<script>
		window.location = "login.php";//link to login
	</script>
<?php

}
	//session active

	$session_id=$_SESSION['id'];

	$user_query = mysqli_query($link,"select * from tbl_users where user_id = '$session_id'");
	$user_row = mysqli_fetch_array($user_query);
	$person_id = $user_row['person_id'];

	//$person_query=mysqli_query($link,"select * from tbl_people where person_id='$person_id'")
	//$person_info_row=mysql_fetch_array($person_query);
	//$person_name=$person_id;//$person_info_row['firstname'];//.$person_info['lastname'];
?>
