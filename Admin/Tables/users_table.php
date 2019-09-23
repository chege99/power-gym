
 <div class="product-status mg-tb-15">
            <div class="containerz">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0; margin: -24px auto;">
                        <div class="product-status-wrap">
                            <h4>Users</h4>
                            <div class="add-product">
                                <a href="#" data-toggle="modal" style="color: white; margin-top: -4px;" data-target="#AddEditModal">Add User</a>
                            </div>
                            <table>
                                <tr>
                                    <th>User ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>



<?php
//user_id,password,rest_token,person_id,added_by_uid        //person_id,firstname,lastname,email,phone,address,date_added

            $query="SELECT 
                        usr.user_id,usr.password,usr.rest_token,usr.person_id,usr.added_by_uid,
                        psn.person_id,psn.firstname,psn.lastname,psn.email,psn.phone,psn.address,psn.date_added
                    FROM
                        tbl_users usr
                    LEFT JOIN
                        tbl_people psn
                    ON
                        usr.person_id = psn.person_id
                    ORDER BY
                        psn.date_added
                    DESC
                        ";


$result=mysqli_query($link,$query) or die (mysql_error());

  while ($row=mysqli_fetch_array($result)) {
    
        $user_id=$row['user_id'];
        $email=$row['email'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $phone=$row['phone'];
        $address=$row['address'];
          

?>

<tr>
    <td>
        <?php echo $user_id;?>
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
    </td>
</tr>
<?php
}
?>
                            </table>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   