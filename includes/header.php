	<?php
		include('Admin/php/dbcon.php');
		include('get_global_values.php');
	?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		  <title><?php echo "Power-Gym || Fitness" ?></title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
			
			<style type="text/css">

				.nav-menu{
					text-align: center;
				}
				
				.menu-active a{
					border-bottom: 2px solid white;
				}

				.nav-login{
					padding-left: 20px;
				}
				.nav-login a:hover{
					background-color: black;
					color: white;
				}
				.nav-login a{
					border-radius: 25px;
					padding: 5px 20px 5px 26px;
					background-color: white;
					color: #F6214B;
				}
				.single-carusel h4{
					text-align: center;
					padding-bottom: 20px;
				}
				.single-carusel .thumb{
					background-position: center;
					background-size: cover;
					height: 200px;
					width: 350px;
				}
				.single-carusel{
					border-left: .5px solid #CDCDCD; padding-bottom: 15px;
					border-right: .5px solid #CDCDCD; padding-bottom: 15px;
					border-bottom: .5px solid #CDCDCD; padding-bottom: 15px;
					border-radius: 10px;
				}
				.single-carusel{
					margin-top: 25px;
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
					color: red;
				}



				/********************/
				.comparison {
  max-width:940px;
  margin:0 auto;
  font:13px/1.4 "Helvetica Neue",Helvetica,Arial,sans-serif;
  text-align:center;
  padding:10px;
}

.comparison table {
  width:100%;
  border-collapse: collapse;
  border-spacing: 0;
  table-layout: fixed;
  border-bottom:1px solid #CCC;
}

.comparison td, .comparison th {
  border-right:1px solid #CCC;
  empty-cells: show;
  padding:10px;
}

.compare-heading {
  font-size:18px;
  font-weight:bold !important;
  border-bottom:0 !important;
  padding-top:10px !important;
}

.comparison tbody tr:nth-child(odd) {
  display:none;
}

.comparison .compare-row {
  background:#F5F5F5;
}

.comparison .tickblue {
  color:#0078C1;
}

.comparison .tickgreen {
  color:#009E2C;
}

.comparison th {
  font-weight:normal;
  padding:0;
  border-bottom:1px solid #CCC;
}

.comparison tr td:first-child {
  text-align:left;
}
  
.comparison .qbse, .comparison .qbo, .comparison .tl {
  color:#FFF;
  padding:10px;
  font-size:13px;
  border-right:1px solid #CCC;
  border-bottom:0;
}

.comparison .tl2 {
  border-right:0;
}

.comparison .qbse {
  background:#0078C1;
  border-top-left-radius: 3px;
  border-left:0px;
}

.comparison .qbo {
  background:#009E2C;
  border-top-right-radius: 3px;
  border-right:0px;
}

.comparison .price-info {
  padding:5px 15px 15px 15px;
}

.comparison .price-was {
  color:#999;
  text-decoration: line-through;
}

.comparison .price-now, .comparison .price-now span {
  color:#ff5406;
}

.comparison .price-now span {
  font-size:32px;
}

.comparison .price-small {
    font-size: 18px !important;
    position: relative;
    top: -11px;
    left: 2px;
}

.comparison .price-buy {
  background:#ff5406;
  padding:10px 20px;
  font-size:12px;
  display:inline-block;
  color:#FFF;
  text-decoration:none;
  border-radius:3px;
  text-transform:uppercase;
  margin:5px 0 10px 0;
}

.comparison .price-try {
  font-size:12px;
}

.comparison .price-try a {
  color:#202020;
}

@media (max-width: 767px) {
  .comparison td:first-child, .comparison th:first-child {
    display: none;
  }
  .comparison tbody tr:nth-child(odd) {
    display:table-row;
    background:#F7F7F7;
  }
  .comparison .row {
    background:#FFF;
  }
  .comparison td, .comparison th {
    border:1px solid #CCC;
  }
  .price-info {
  border-top:0 !important;
  
}
  
}

@media (max-width: 639px) {
  .comparison .price-buy {
    padding:5px 10px;
  }
  .comparison td, .comparison th {
    padding:10px 5px;
  }
  .comparison .hide-mobile {
    display:none;
  }
  .comparison .price-now span {
  font-size:16px;
}

.comparison .price-small {
    font-size: 16px !important;
    top: 0;
    left: 0;
}
  .comparison .qbse, .comparison .qbo {
    font-size:12px;
    padding:10px 5px;
  }
  .comparison .price-buy {
    margin-top:10px;
  }
  .compare-heading {
  font-size:13px;
}
}/*************************/

			</style>
		</head>
		<body>	

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
				
			?>
			  <header id="header">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row align-items-center justify-content-center">
				  			<div class="col-md-4 col-4 header-top-left no-padding">
				        		<a href="mailto:support@colorlib.com"><span class="lnr lnr-inbox"></span></a>
				        		<a class="contact-texts" href="mailto:support@colorlib.com">
				        			<?php echo $email;?>
				        		</a>		
				  			</div>
				  			<div class="col-md-4 col-4 header-top-bottom no-padding">
				        		<a href="index.html"><img class="img-fluid" src="img/logo2.png" alt="" title="" /></a>			
				  			</div>
				  			<div class="col-md-4 col-4 header-top-right no-padding">
				        		<a class="contact-texts" href="tel:+440 123 12 658 439">
				        			<?php echo $phone;?>
				        		</a>
				        		<a href="tel:+440 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
				  			</div>				  							  			
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-center">	
						
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="<?php echo ($page_title == 'Homepage') ? ' menu-active' : ''; ?>">
							  	<a href="index.php">Home</a>
							  </li>
							  <li class="<?php echo ($page_title == 'Facilities') ? ' menu-active' : ''; ?>">
							  	<a href="facilities.php">Facilities</a>
							  </li>
							  <li class="<?php echo ($page_title == 'Pricing') ? ' menu-active' : ''; ?>">
							  	<a href="pricing.php">Pricing</a>
							  </li>
							  <li>
							  	<a href="#" data-toggle="modal" data-target="#modal_registrationform">Join us</a>
							  </li>
							  <li class="<?php echo ($page_title == 'Contact Us') ? ' menu-active' : ''; ?>">
							  	<a href="contact.php">Contact</a>
							  </li>
							  <!--Login-->
							  <li class="nav-login">
							  	<a href="admin/">Login <span class="lnr lnr-arrow-right"></span></a>
							  </li>
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->
