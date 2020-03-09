<table>
            <tr>
                <th></th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Status</th>
                <th>Subscription<br>Expiry<br>Date</th>
                <th>Upgrade Subscription</th>
                <th>Actions</th>
            </tr>

            <?php

                $query="SELECT 
                            mbr.member_id,mbr.person_id,mbr.subscription_expiry_date,mbr.subcription_start_date,
                            psn.person_id,psn.firstname,psn.lastname,psn.email,psn.phone,psn.address,psn.date_added
                        FROM
                            tbl_members mbr
                        LEFT JOIN
                            tbl_people psn
                        ON  
                            mbr.person_id = psn.person_id
                        ORDER BY
                            psn.date_added
                        DESC
                            ";


    $result=mysqli_query($link,$query) or die (mysql_error());
    $counter=0;
      while ($row=mysqli_fetch_array($result)) {
        
            $member_id=$row['member_id'];
            $email=$row['email'];
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
            $phone=$row['phone'];
            $address=$row['address'];
            $subscription_expiry_date=$row['subscription_expiry_date'];
            $subcription_start_date=$row['subcription_start_date'];

            $date_today=date('Y-m-d');   
            if ($subscription_expiry_date > $date_today){
                $subscription_status=true;
            }else{
                $subscription_status=false;
            }

    ?>
    

    <tr>
        <td>
            <?php echo ++$counter;?>
        </td>
        <td>
            <?php echo $firstname." ".$lastname;?>
        </td>
        <td>
            <?php echo $phone;?>
        </td>
        <td>
            <?php 
                if ($subscription_status){
                    echo "<span class='sp-active'>Active</span>";
                }else{
                    echo "<span class='sp-expired'>Expired</span>";
                }
            ?>
        </td>
       <td>
           <?php
           if ($subscription_expiry_date > $date_today){
                //$subscription_status=true;
                echo $subscription_expiry_date;
            }else{
                //$subscription_status=false;
                echo "----------------";
            }

            ?>
       </td>

        <td>


            <div class="row" style="display: <?php echo ($subscription_status==true) ? 'none':''; ?>">

                <form action="php/exec_form_member.php" method="POST"> 
                    <div class="col-md-7" >   
                        <input type="hidden" name="member_id" value="<?php echo $member_id;?>">
                        <div class="form-select-list">
                            <select class="form-control custom-select-value" name="duration" >
                                    <option>Choose Validity</option>
                                    <option value="30">1 Month</option>
                                    <option value="62">2 Months</option>
                                    <option value="93">3 Months</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1" >
                        <button  data-toggle="tooltip" title="Confirm Subscription" class="pd-setting-ed"style="background-color: red" name="btn_subscribe">
                            <i class="fa fa-dollar" aria-hidden="true" style="color: white">
                            </i>
                        </button>
                    </div>
                </form>


            </div>
        </td>
        <td>
             <button data-toggle="tooltip" title="Delete Member" class="pd-setting-ed" onclick="deleteConfirm('<?php echo $row["member_id"]; ?>');">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
             </button>

             <button data-toggle="tooltip" title="Send Mail: <?php echo $email?>" class="pd-setting-ed">
                <i class="fa fa-envelope" aria-hidden="true"></i>
             </button>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
    

<script lang="javascript">
    function deleteConfirm(member_id){
        var option = confirm('Delete this Member From Database? \nDo you want to continue?');
        if(option == true){
            window.location.assign("php/exec_form_member.php?del_member_id=" + member_id);
        }
    }
</script>

