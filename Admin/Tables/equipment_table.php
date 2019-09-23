 <table>
    <tr>
        <th>Equipment ID</th>
        <th>Image</th>
        <th>Equipment Name</th>
        <th>Description</th>
        <th>IMG URL</th>
        <th>Quality</th>
        <th>Status</th>
        <th>Actions`</th>
    </tr>

      <?php
//member_id,subscription_id,starting_date,person_id,verified_by_uid,status        //person_id,firstname,lastname,email,phone,address,date_added

    $query="SELECT 
                equipment_id,eq_name,eq_description,eq_image_url,eq_quality,eq_date_added,eq_added_by_uid,eq_status
            FROM
                tbl_equipment
            ORDER BY
                eq_date_added
            DESC
                ";


$result=mysqli_query($link,$query) or die (mysql_error());

  while ($row=mysqli_fetch_array($result)) {
    $equipment_id=$row['equipment_id'];
    $eq_name=$row['eq_name'];
    $eq_description=$row['eq_description'];
    $eq_image_url=$row['eq_image_url'];
    $eq_quality=$row['eq_quality'];
    $eq_date_added=$row['eq_date_added'];
    $eq_added_by_uid=$row['eq_added_by_uid']; 
    $status=$row['eq_status'];  

?>

<tr>
    <td>
        <?php echo $equipment_id;?>
    </td>
    <td>
        <img src="img/new-product/5-small.jpg" alt="" />
    </td>

    <td>
        <?php echo $eq_name?>
    </td>
    <td>
        <?php echo $eq_description;?>
    </td>
    <td>
        <?php echo $eq_image_url;?>
    </td>
    <td>
        <?php echo $eq_quality;?>
    </td>
    <td>
        <?php echo $status;?>
        <button class="pd-setting">Active</button>
    </td>
    <td>
        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed" >
            <i class="fa fa-pencil-square-o" aria-hidden="true"> 
            </i>
        </button>
       
        <a data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true" 
            onclick="deleteConfirm('<?php echo $row["equipment_id"]; ?>');" ></i>
        </a>
    </td>
</tr>
<?php
}
?>

</table>

<script lang="javascript">
    function deleteConfirm(equipment_id){
        var option = confirm('Delete this Equipment From Database? \nDo you want to continue?');
        if(option == true){
            window.location.assign("php/exec_form_equipment.php?del_equipment_id=" + equipment_id);
        }
    }
</script>