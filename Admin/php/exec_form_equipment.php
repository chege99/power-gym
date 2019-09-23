<?php
require ("../php/dbcon.php");
//Insert Member
if(isset($_POST['submitnew'])){
	
	$eq_name= filter_var($_POST['eq_name'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$eq_description= filter_var($_POST['eq_description'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$eq_quality= filter_var($_POST['eq_quality'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$eq_status= filter_var($_POST['eq_status'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);


	$file_type = $_FILES['eq_image']['type']; 
	$allowed = array("image/jpeg", "image/jpg","image/gif", "image/png");
	if(in_array($file_type, $allowed)) {

		if (!empty($_FILES["eq_image"]["name"])) {
				//Explode file name 
					$eq_imq_name_tmp =explode(".", $_FILES["eq_image"]["tmp_name"]);
					$eq_imq_name= $_FILES["eq_image"]["name"];

					//New name
					$eq_imq_name= round(microtime(true)) . '.' . end($eq_imq_name_tmp);

					$ImageSavefolder = "/uploads/";
					$eq_imq_path=$ImageSavefolder.$eq_imq_name;
					move_uploaded_file($_FILES["eq_image"]["tmp_name"],"../$ImageSavefolder".$eq_imq_name);

					CreateEquipment($eq_name,$eq_description,$eq_quality,$eq_status,$eq_imq_path);

			}else{
				echo "ERROR!!!!! [uploading]";
			}

	}else{
	  $error_message = 'Only jpg, gif, and png files are allowed.';
	  echo $error_message;
	  exit();
	}

}else if(isset($_REQUEST["del_equipment_id"])){

	header("Location:../equipment.php?deleted");
    /*
    $appointment_id = $_REQUEST["appointment_id"];
    
    $sql = "delete from  tbl_patient where appointment_id = {$appointment_id}";
	
	    $query_action = mysqli_query($link, $sql);
	   
	    if($query_action){
	      echo "deleted";
	      header("Location:set.php?deleted");
	    }else{
	       echo "error";
	      header("Location:set.php?error");
	    }
	    */
 }


function CreateEquipment($eq_name,$eq_description,$eq_quality,$eq_status,$eq_image_url){
	require ("../php/dbcon.php");
	$uid=1;
	$date=date('Y-m-d H:i:s');
	$query="INSERT INTO tbl_equipment(eq_name,eq_description,eq_image_url,eq_quality,eq_date_added,eq_added_by_uid,eq_status) VALUES (
			'".$eq_name."',
			'".$eq_description."',
			'".$eq_image_url."',
			'".$eq_quality."',
			'".$date."',
			'".$uid."',
			'".$eq_status."')";

	$query_exec = mysqli_query($link,$query);// or die (mysqli_error());
	header('location:../equipment.php?success');

	/*if ($link->query($query_exec) === TRUE) {
		 
		   header('location:equipment.php?success');

		} else {
		   echo "Error: " . $link->error;
		}
		
	*/
		
		
}

function UpdateEquipment(){

}
function DeleteEquipment(){

}
?>
