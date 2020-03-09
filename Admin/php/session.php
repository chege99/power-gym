<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();
include('dbcon.php');
if ( isset( $_SESSION['sess_id'] ) ) {
/**/
	$query=" 
		SELECT * FROM 
		tbl_users LEFT JOIN tbl_people 
		ON tbl_users.person_id=tbl_people.person_id
		where user_id='".$_SESSION['sess_id']."'
	";
	
	$sql=mysqli_query($link,$query) or die (mysqli_error());

	$count=mysqli_num_rows($sql);

	if($count == 0){//No user so destroy session 
		session_destroy();
		header('location: login.php');
	}

} else {
	//no session id
    // Redirect them to the login page
    header("Location: login.php");
    
}
?>