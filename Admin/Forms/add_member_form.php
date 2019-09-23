<form action="php/exec_form_member.php" method="POST" class="myform">

    <?php
        include('inc_person_details_add.php');
    ?>

<fieldset>
    <div class="my-formgroup-title">
        <h3>Membership Details</h3>
    </div>

        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Plan</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="form-select-list">
                        <select class="form-control custom-select-value" name="plan" id="plan">
                                <option>Select 1</option>
                                <option>Select 2</option>
                                <option>Select 3</option>
                            </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Start Date</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" placeholder = 'mm/dd/yyyy' name="startdate" id="startdate" />
                </div>
            </div>
        </div>
         <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Payment Status</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="form-select-list">
                        <select class="form-control custom-select-value" name="paymentstatus" id="paymentstatus">
                                <option>Paid</option>
                                <option>Not Paid</option>
                            </select>
                    </div>
                </div>
            </div>
        </div>
    
</fieldset>
   
   
     <div class="form-group-inner">
        <div class="login-btn-inner">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <div class="login-horizental cancel-wp pull-left">
                        <button class="btn btn-white"  data-dismiss="modal">Cancel</button>
                        <button class="btn btn-sm btn-primary login-submit-cs" id="btnsavenew" name="btnsavenew" type="submit">Save Change</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>