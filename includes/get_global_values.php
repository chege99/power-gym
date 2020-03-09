  <?php 
    
        $key="OT_weekday";
        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query);
        $row = mysqli_fetch_array($query_exec);
        $OT_weekday=$row['value'];

        $key="CT_weekday";
        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query);
        $row = mysqli_fetch_array($query_exec);
        $CT_weekday=$row['value'];
      
        $key="OT_weekend";
        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query);
        $row = mysqli_fetch_array($query_exec);
        $OT_weekend=$row['value'];

        $key="CT_weekend";
        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query);
        $row = mysqli_fetch_array($query_exec);
        $CT_weekend=$row['value'];

        $key="OT_holiday";
        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query);
        $row = mysqli_fetch_array($query_exec);
        $OT_holiday=$row['value'];
      
        $key="CT_holiday";
        $query="SELECT * FROM tbl_config_schedules WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query);
        $row = mysqli_fetch_array($query_exec);
        $CT_holiday=$row['value'];

        $key="facebook";
        $table="tbl_config_contact_info";
        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query);
        $row = mysqli_fetch_array($query_exec);
        $facebooklink=$row['value'];

        $key="twitter";
        $table="tbl_config_contact_info";
        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query);
        $row = mysqli_fetch_array($query_exec);
        $twitterlink=$row['value'];

        $key="instagram";
        $table="tbl_config_contact_info";
        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query);
        $row = mysqli_fetch_array($query_exec);
        $instagramlink=$row['value'];

        $key="whatsapp";
        $table="tbl_config_contact_info";
        $query="SELECT * FROM tbl_config_contact_info WHERE title='".$key."'";
        $query_exec= mysqli_query($link,$query);
        $row = mysqli_fetch_array($query_exec);
        $whatsapplink=$row['value'];

    ?>