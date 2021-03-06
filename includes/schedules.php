<!-- Start schedule Area -->
			<section class="schedule-area section-gap relative" id="schedule">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">When are we open?</h1>
							</div>
						</div>
					</div>						
					<div class="row" style="margin-top: -40px;">

						<div class="table-wrap col-lg-12">
							<table class="schdule-table table table-bordered">
								  <thead class="thead-light">
								    <tr>
								      <th class="head" scope="col">Day</th>
								      <th class="head" scope="col">Opening Time</th>
								      <th class="head" scope="col">Closing Time</th>
								    </tr>
								  </thead>
								  <tbody>
								   <tr>
								   	  <th class="name" scope="row">Weekdays</th>
								      <td><?php echo $OT_weekday; ?></td>			      
								      <td><?php echo $CT_weekday; ?></td>
								   </tr>
								   <tr>
								      <th class="name" scope="row">Weekends</th>
								      <td><?php echo $OT_weekend; ?></td>
								      <td><?php echo $CT_weekend; ?></td>
								   </tr>
								   <tr>
								      <th class="name" scope="row">Holidays</th>
								      <td><?php echo $OT_holiday; ?></td>      
								      <td><?php echo $CT_holiday; ?></td>
								   </tr>			    							 
								  </tbody>
							</table>							
						</div>
					</div>
					<img class="schedule-img" src="img/schedule-img.png" alt="">
				</div>	
			</section>
			<!-- End schedule Area -->					
			