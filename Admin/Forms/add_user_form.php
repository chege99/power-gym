<form action="php/exec_form_user.php" method="POST" class="myform">

    <?php
        include('inc_person_details_add.php');
    ?>

<fieldset>
    <div class="my-formgroup-title">
        <h3>login Credentials</h3>
    </div>

     <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right pull-right-pro">Password</label>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input name="password" id="password" type="password" class="form-control" />
            </div>
        </div>
    </div>
  <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right pull-right-pro">Confirm Password</label>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="password" class="form-control" />
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
                        <button class="btn btn-sm btn-primary login-submit-cs " name="btnsavenew" id="btnsavenew" type="submit">Save Change</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>