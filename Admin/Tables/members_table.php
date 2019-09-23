   <table>
        <tr>
            <th>Member ID</th>

            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            
   
            <th>Actions</th>

        </tr>

        <?php
//member_id,subscription_id,starting_date,person_id,verified_by_uid,status        //person_id,firstname,lastname,email,phone,address,date_added

            $query="SELECT 
                        mbr.member_id,mbr.person_id,
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

  while ($row=mysqli_fetch_array($result)) {
    
        $member_id=$row['member_id'];
        $email=$row['email'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $phone=$row['phone'];
        $address=$row['address'];
          

?>

<tr>
    <td>
        <?php echo $member_id;?>
    </td>
    <td>
        <?php echo $firstname." ".$lastname;?>
    </td>
    <td>
        <?php echo $email;?>
    </td>
    <td>
        <?php echo $phone;?>
    </td>
    <td>
        <?php echo $address;?>
    </td>
   
    <td>
        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        <button data-toggle="tooltip" title="Payment" class="pd-setting-ed"><i class="fa fa-dollar" aria-hidden="true"></i></button>
    </td>
</tr>
<?php
}
?>
                            </table>
    
