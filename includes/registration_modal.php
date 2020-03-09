<div id="modal_registrationform" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #F6214B; display: flex; justify-content: space-between; height: 60px;">
     	<h3 class="mb-30" style="color:white; ">Join Us Today</h3>
        <button type="button" class="close" data-dismiss="modal" >
        	&times;
        </button>
      </div>
    <div class="modal-body" style="background-color: #F2F2F2;">
      <div class="row" style="padding-top: 20px; padding-bottom: 20px">
							<div class="col-lg-12 col-md-12">
								<form action="includes/exec_save_person.php" method="POST"> 
									<div class="row">
										<div class="col-md-6">
											<div class="mt-10">
										<input type="text" name="firstname" placeholder="*First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
									</div>
									
										</div>
										<div class="col-md-6">
											<div class="mt-10">
										<input type="text" name="lastname" placeholder="*Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
									</div>
										</div>
									</div>
									
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-inbox" aria-hidden="true"></i></div>
										<input type="email" name="email" placeholder="*Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
									</div>

									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
										<input type="phone" name="phone" placeholder="*Phone Number" onfocus="this.placeholder = '+2547'" onblur="this.placeholder = 'Phone Number'" required class="single-input">
									</div>
									
<!--*****

									<div class="input-group-icon mt-10">
											<div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
											<input type="text" name="date" id="date" placeholder="*Date you intend to start" onfocus="this.placeholder = 'mm/dd/yyyy' " onblur="this.placeholder = 'date'" required class="single-input">
									</div>
******-->

<input type="text" name="startdate" value="03/03/2020" style="display: none;">
<input type="text" name="paymentstatus" value="1" style="display: none;">
<input type="text" name="plan" value="1" style="display: none;">





									<div class="input-group-icon mt-10">
											<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
											<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = 'eg. Juja Gate C '" onblur="this.placeholder = 'Address'" class="single-input">
									</div>

									<div style="display: flex; justify-content: space-between;">
										<div class="input-group-icon mt-10">
										<button type="button"  class="genric-btn info" data-dismiss="modal">Cancel</button>
									</div>

									<div class="input-group-icon mt-10">
										<input type="submit" name="btnsavenew" id="btnsavenew" value="Register" class="genric-btn danger">
									</div>
									</div>
								</form>
							</div>
						
						</div>  	
    </div>

  </div>
</div>
	