   <?php 
      

        $key="facebook";
        $table="tbl_config_contact_info";

        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $facebooklink=$row['value'];


    ?>
<for class="admin-socil">
     <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                    <span class="input-group-btn"><button type="button" class="btn btn-danger">Facebook</button></span>
                    <input type="text" class="form-control" value="<?php echo $facebooklink;?>">
                </div>
            </div>
        </div>
</div>

  <?php 
      

        $key="twitter";
        $table="tbl_config_contact_info";

        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $twitterlink=$row['value'];


    ?>
<div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                    <span class="input-group-btn"><button type="button" class="btn btn-danger">Twitter</button></span>
                    <input type="text" class="form-control" value="<?php echo $twitterlink;?>">
                </div>
            </div>
        </div>
</div>
  <?php 
      

        $key="instagram";
        $table="tbl_config_contact_info";

        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $instagramlink=$row['value'];


    ?>
<div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                    <span class="input-group-btn"><button type="button" class="btn btn-danger">Instagram</button></span>
                    <input type="text" class="form-control" value="<?php echo $instagramlink;?>">
                </div>
            </div>
        </div>
</div>
  <?php 
      

        $key="whatsapp";
        $table="tbl_config_contact_info";

        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $whatsapplink=$row['value'];


    ?>
<div class="form-group-inner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                    <span class="input-group-btn"><button type="button" class="btn btn-danger">Whatsapp</button></span>
                    <input type="text" class="form-control" value="<?php echo $whatsapplink;?>">
                </div>
            </div>
        </div>
</div>
  <?php 
      

        $key="whatsappk";
        $table="tbl_config_contact_info";

        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $whatsapplink=$row['value'];


    ?>
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