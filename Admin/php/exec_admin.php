<?php
require ("../php/dbcon.php");

if (isset($_POST['btn_save_contacts'])) {
	$phone_number=filter_var($_POST['phone_number'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$email=filter_var($_POST['email'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$city=filter_var($_POST['city'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$street=filter_var($_POST['street'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$website=filter_var($_POST['website'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

	$query="UPDATE tbl_config_contact_info SET value='".$phone_number."' WHERE title='phone_number'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_contact_info SET value='".$email."' WHERE title='email'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_contact_info SET value='".$city."' WHERE title='city'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_contact_info SET value='".$street."' WHERE title='street'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_contact_info SET value='".$website."' WHERE title='website'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	
	header("location: ../admin.php?success");


}else if (isset($_POST['btn_save_social'])) {
	$facebooklink=filter_var($_POST['facebooklink'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$twitter=filter_var($_POST['twitter'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$instagramlink=filter_var($_POST['instagramlink'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$whatsapplink=filter_var($_POST['whatsapplink'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

	$query="UPDATE tbl_config_contact_info SET value='".$facebooklink."' WHERE title='facebook'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_contact_info SET value='".$twitter."' WHERE title='twitter'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_contact_info SET value='".$instagramlink."' WHERE title='instagram'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_contact_info SET value='".$whatsapplink."' WHERE title='whatsapp'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());

	header("location: ../admin.php?success");

}else if (isset($_POST['btn_save_schedules'])) {
	$OT_weekday=filter_var($_POST['OT_weekday'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$CT_weekday=filter_var($_POST['CT_weekday'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$OT_weekend=filter_var($_POST['OT_weekend'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$CT_weekend=filter_var($_POST['CT_weekend'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$OT_holiday=filter_var($_POST['OT_holiday'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$CT_holiday=filter_var($_POST['CT_holiday'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

	$query="UPDATE tbl_config_schedules SET value='".$OT_weekday."' WHERE title='OT_weekday'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_schedules SET value='".$CT_weekday."' WHERE title='CT_weekday'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_schedules SET value='".$OT_weekend."' WHERE title='OT_weekend'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_schedules SET value='".$CT_weekend."' WHERE title='CT_weekend'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_schedules SET value='".$OT_holiday."' WHERE title='OT_holiday'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());
	$query="UPDATE tbl_config_schedules SET value='".$CT_holiday."' WHERE title='CT_holiday'";
		$query_exec= mysqli_query($link,$query) or die(mysqli_error());

		header("location: ../admin.php?success");

}
