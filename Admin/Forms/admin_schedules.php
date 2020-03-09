<for class="admin-socil">
     <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Weekdays</label>
     </div>

       <?php 
      
        $key="OT_weekday";

        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $OT_weekday=$row['value'];

        ?>

      <div class="form-group-inner">
                    <div class="row">
                        
                        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-btn"><button type="button" class="btn btn-danger">Opening</button></span>
                                <input type="text"  id="input_starttime" class="form-control timepicker" name="OT_weekday" value="<?php echo $OT_weekday;?>">
                            </div>
                        </div>
                    </div>
    </div>

    <?php 
      
        $key="CT_weekday";

        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $CT_weekday=$row['value'];

    ?>
    <div class="form-group-inner">
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-btn"><button type="button" class="btn btn-danger">Closing</button></span>
                                <input type="text" class="form-control" name="CT_weekday" value="<?php echo $CT_weekday;?>">
                            </div>
                        </div>
                    </div>
    </div>

       <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Weekends</label>
     </div>

    <?php 
      
        $key="OT_weekend";

        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $OT_weekend=$row['value'];

    ?>
      <div class="form-group-inner">
                    <div class="row">
                        
                        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-btn"><button type="button" class="btn btn-danger">Opening</button></span>
                                <input type="text" class="form-control" name="OT_weekend" value="<?php echo $OT_weekend;?>">
                            </div>
                        </div>
                    </div>
    </div>
    <?php 
      
        $key="CT_weekend";

        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $CT_weekend=$row['value'];

    ?>
    <div class="form-group-inner">
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-btn"><button type="button" class="btn btn-danger">Closing</button></span>
                                <input type="text" class="form-control" name="CT_weekend" value="<?php echo $CT_weekend;?>">
                            </div>
                        </div>
                    </div>
    </div>

       <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Public Holidays</label>
     </div>

     <?php 
      
        $key="OT_holiday";

        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $OT_holiday=$row['value'];

    ?>
      <div class="form-group-inner">
                    <div class="row">
                        
                        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-btn"><button type="button" class="btn btn-danger">Opening</button></span>
                                <input type="text" class="form-control" name="OT_holiday" value="<?php echo $OT_holiday;?>">
                            </div>
                        </div>
                    </div>
    </div>

    <?php 
      
        $key="CT_holiday";

        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query) ;//or die (mysqli_error()); 

        $row = mysqli_fetch_array($query_exec);
        $CT_holiday=$row['value'];

    ?>
    <div class="form-group-inner">
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-btn"><button type="button" class="btn btn-danger">Closing</button></span>
                                <input type="text" class="form-control" name="CT_holiday" value="<?php echo $CT_holiday;?>">
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
                    <button class="btn btn-sm btn-primary login-submit-cs" name="btn_save_schedules" type="submit">Save Change</button>
                </div>
            </div>
        </div>
    </div>
</div>

</form>