<?php 
$page_title="Contact Us";
include("includes/header.php"); 
?>


<?php
	include_once("admin/php/dbcon.php");

	$query="SELECT value FROM tbl_config_contact_info WHERE title='email'";
	$sql= mysqli_query($link,$query);
	$count=mysqli_num_rows($sql);
	$result= mysqli_fetch_assoc($sql);
	$email=$result['value'];

	$query="SELECT value FROM tbl_config_contact_info WHERE title='phone_number'";
	$sql= mysqli_query($link,$query);
	$count=mysqli_num_rows($sql);
	$result= mysqli_fetch_assoc($sql);
	$phone=$result['value'];
	
	$query="SELECT value FROM tbl_config_contact_info WHERE title='city'";
	$sql= mysqli_query($link,$query);
	$count=mysqli_num_rows($sql);
	$result= mysqli_fetch_assoc($sql);
	$city=$result['value'];

	$query="SELECT value FROM tbl_config_contact_info WHERE title='street'";
	$sql= mysqli_query($link,$query);
	$count=mysqli_num_rows($sql);
	$result= mysqli_fetch_assoc($sql);
	$street=$result['value'];
?>
<?php include("includes/breadcrumb.php"); ?>
		<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5><?php echo $city;?></h5>
									<p>
										<?php echo $street;?>
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5><?php echo $phone;?></h5>
									<p>Mon to Fri 9am to 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5><?php echo $email;?></h5>
									<p>Send us your query anytime!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area text-right" id="" action="includes/exec_send_mail.php" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" type="submit" name="btn_submit" style="float: right;" value="">Send Message</button>
									</div>											
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

<?php include("includes/call-to-action.php"); ?>
<?php include("includes/footer.php"); ?>


