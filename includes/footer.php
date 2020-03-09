 

		<!-- start footer Area -->		
			<footer class="footer-area" style="margin-top: ; background-color: #f2f2f2">
				<div style="height: 5px; background-color: #F6214B">
					
				</div>
				<div class="container" style="padding: 0 40px;">
					<div class="footer-bottom row align-items-center" style="background-color: #F6214B;color: white; padding:10px 0;">
						<p class="footer-text m-0 col-lg-6 col-md-12">
							Power Gym
						</p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="<?php echo $facebooklink;?>"><i class="fa fa-facebook"></i></a>
							<a href="<?php echo $twitterlink;?>"><i class="fa fa-twitter"></i></a>
							<a href="<?php echo $instagramlink;?>"><i class="fa fa-instagram"></i></a>
							<a href="tel:<?php echo $whatsapplink;?>"><i class="fa fa-whatsapp"></i></a>
						</div>
					</div>
					



				</div>
			</footer>	

			<?php include('includes/registration_modal.php')?>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>								
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	

			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
			<script>
			    $(document).ready(function(){
			        var date_input=$('input[name="date"]'); //our date input has the name "date"
			        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			        date_input.datepicker({
			            format: 'mm/dd/yyyy',
			            startDate: new Date(),
			            container: container,
			            todayHighlight: true,
			            autoclose: true,
			        })
			    })
			</script>

			<script type="text/javascript">
				
			</script>
		</body>
	</html>