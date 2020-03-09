<?php
require ("../php/dbcon.php");
if(isset($_REQUEST["del_message_id"])){
    
    $message_id = $_REQUEST["del_message_id"];
    
    $sql = "delete from  tbl_messages where message_id = '".$message_id."' ";
	

	    $query_action = mysqli_query($link, $sql) or die(mysql_error());
	   
	    if($query_action){
	      echo "deleted";
	      header("Location: ../mailbox.php?deleted");
	    }else{
	       echo "error";
	      header("Location: ../mailbox.php?error");
	    }
	 
 }else if (isset($_POST['set_msg_read'])) {
 	
 	$message_id=$_POST['message_id'];

	$query="UPDATE tbl_messages set status='read' WHERE message_id='".$message_id."' ";

	$sql=mysqli_query($link,$query) or die(mysqli_error());

	header('location: ../mailbox.php');
	
 }

?>