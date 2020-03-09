<form action="php/exec_form_member.php" method="POST" class="myform">

    <?php
        include('inc_person_details_add.php');
    ?>

     <?php
        include('inc_subscription_details.php');
    ?>
   
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