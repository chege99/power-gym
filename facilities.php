<?php 
$page_title="Facilities";
include("includes/header.php"); 
?>

<?php include("includes/breadcrumb.php"); ?>






		<!-- Start top-course Area -->
<section class="top-course-area section-gap">
	<div class="container-fluid">
		<div class="row">


			<?php

			    $query="SELECT 
			                eq_name,eq_image_url
			            FROM
			                tbl_equipment
			            ORDER BY
			                eq_date_added
			            DESC
			                ";


			$result=mysqli_query($link,$query) or die (mysql_error());

			  while ($row=mysqli_fetch_array($result)) {
			    $eq_name=$row['eq_name'];
			    $eq_image_url=$row['eq_image_url'];
			?>
			
		<div class="col-md-3">
			<div class="single-carusel item  " style="border: 0.3px solid black">
				<div class="thumb" style="background-image: url('Admin/<?php echo $eq_image_url; ?>'); background-position: center; background-repeat: no-repeat;background-size: contain;">
					
				</div>
				<div class="title-price ">
					
						<h4><?php echo $eq_name?></h4>

				</div>
			</div>
		</div>
		<?php
		}
		?>
		</div>
	</div>	
</section>
			<!-- End top-course Area -->	
<?php include("includes/call-to-action.php"); ?>	
<?php include("includes/footer.php"); ?>


