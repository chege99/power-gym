<?php
require ("../php/dbcon.php");
//Insert Member
if(isset($_POST['submitnew'])){
	
	$eq_name= filter_var($_POST['eq_name'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$eq_description= filter_var($_POST['eq_description'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$eq_quality= filter_var($_POST['eq_quality'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	//$eq_status= filter_var($_POST['eq_status'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$eq_status="Active";

	$file_type = $_FILES['eq_image']['type']; 
	$allowed = array("image/jpeg", "image/jpg","image/gif", "image/png");

	$file = $_FILES['eq_image'];
	$fileName = $_FILES['eq_image']['name'];
	$fileTmpName = $_FILES['eq_image']['tmp_name'];
	$fileError = $_FILES['eq_image']['error'];
	$fileSize = $_FILES['eq_image']['size'];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg','jpeg','png');

		if (in_array($fileActualExt, $allowed)) {
				//echo "Test 1 Success<br>";

			if ($fileError === 0) {
				//echo "Test 2 Success<br>";
				
				if ($fileSize < 10000000) {
				//echo "Test 3 Success<br>";

					$fileNameNew = uniqid('',true).".".$fileActualExt;

					$file_destination = '../uploads/'.$fileNameNew;

					$file_save_path='/uploads/'.$fileNameNew;

					if (move_uploaded_file($fileTmpName, $file_destination)){
					

								CreateEquipment($eq_name,$eq_description,$eq_quality,$eq_status,$file_save_path);
							


							$sql = mysqli_query($link,$query) or die(mysqli_error());

							echo "Test 7 Success<br>";
		
					echo "<script>

			         if (confirm('Profile Saved')) {
			            window.location = '../equipment.php?success';
			         }
			         </script>";

					}//Not uploaded
				
					echo "<script>

			         if (confirm('Image is too large to upload')) {
			            window.location = '../equipment.php?UploadFailed';
			         }
			         </script>";

				}
			}else{//File Error Test 1
			echo "<script>

		         if (confirm('There was an error Uploading file')) {
		            window.location = '../equipment.php?UploadFailed';
		         }
		         </script>";

			}
		}

}else if(isset($_REQUEST["del_equipment_id"])){
	
	$equipment_id = $_REQUEST["del_equipment_id"];
    
    $sql = "delete from  tbl_equipment where equipment_id = '".$equipment_id."' ";
	

	    $query_action = mysqli_query($link, $sql) or die(mysql_error());
	   
	    if($query_action){
	      echo "deleted";
	      header("Location: ../equipment.php?deleted");
	    }else{
	       echo "error";
	      header("Location: ../equipment.php?error");
	    }

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
	
		
}


?>
