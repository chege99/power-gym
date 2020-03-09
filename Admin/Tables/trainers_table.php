<table>
    <tr>
        <th>Trainer id</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>
   <?php
//user_id,password,rest_token,person_id,added_by_uid        //person_id,firstname,lastname,email,phone,address,date_added

            $query="SELECT 
                        trn.trainer_id,trn.person_id,trn.added_by_uid,
                        psn.person_id,psn.firstname,psn.lastname,psn.email,psn.phone,psn.address,psn.date_added
                    FROM
                        tbl_trainers trn
                    LEFT JOIN
                        tbl_people psn
                    ON
                        trn.person_id = psn.person_id
                    ORDER BY
                        trn.trainer_id
                    ASC
                        ";


$result=mysqli_query($link,$query) or die (mysql_error());
$counter=0;
  while ($row=mysqli_fetch_array($result)) {
    
        $trainer_id=$row['trainer_id'];
        $email=$row['email'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $phone=$row['phone'];
        $address=$row['address'];
          

?>

<tr>
    <td>
        <?php echo ++$counter;?>
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
       <button data-toggle="tooltip" title="Trash" class="pd-setting-ed" onclick="deleteConfirm('<?php echo $row["trainer_id"]; ?>');"><i class="fa fa-trash-o" aria-hidden="true" ></i>
        </button>
    </td>
</tr>
<?php
}
?>

</table>

<script lang="javascript">
    function deleteConfirm(trainer_id){
        var option = confirm('Delete this Trainer From Database? \nDo you want to continue?');
        if(option == true){
            window.location.assign("php/exec_form_trainer.php?del_trainer_id=" + trainer_id);
        }
    }
</script>

