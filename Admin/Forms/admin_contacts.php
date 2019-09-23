  <?php 
      

        $key="phonenumber";
        $table="tbl_config_contact_info";

        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $phonenumberlink=$row['value'];


    ?>

<for class="admin-contacts">
<div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                    <span class="input-group-btn"><button type="button" class="btn btn-danger">Phone Number</button></span>
                    <input type="text" class="form-control" value="<?php echo $phonenumberlink;?>">
                </div>
            </div>
        </div>
</div>
  <?php 
      

        $key="email";
        $table="tbl_config_contact_info";

        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $emaillink=$row['value'];


    ?>
<div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                    <span class="input-group-btn"><button type="button" class="btn btn-danger">Email</button></span>
                    <input type="text" class="form-control" value="<?php echo $emaillink;?>">
                </div>
            </div>
        </div>
</div>
  <?php 
      

        $key="address";
        $table="tbl_config_contact_info";

        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $addresslink=$row['value'];


    ?>
<div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                    <span class="input-group-btn"><button type="button" class="btn btn-danger">Address</button></span>
                    <input type="text" class="form-control" value="<?php echo $addresslink;?>">
                </div>
            </div>
        </div>
</div>
  <?php 
      

        $key="website";
        $table="tbl_config_contact_info";

        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $websitelink=$row['value'];


    ?>
<div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                    <span class="input-group-btn"><button type="button" class="btn btn-danger">Website</button></span>
                    <input type="text" class="form-control" value="<?php echo $websitelink;?>">
                </div>
            </div>
        </div>
</div>
<div class="form-group-inner">
    <div class="login-btn-inner">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
                <div class="login-horizental cancel-wp pull-right">
                    <button class="btn btn-white" type="submit">Cancel</button>
                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                </div>
            </div>
        </div>
    </div>
</div>

</form>