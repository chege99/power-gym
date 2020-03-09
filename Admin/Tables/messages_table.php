 <table>
    <tr>
        <th></th>
        <th>Subject</th>
        <th>Sender Name</th>
        <th>Sender Email</th>
        <th>Message</th>
        <th>Actions</th>
    </tr>
      <?php
      $query="SELECT 
                   message_id,sender_name,sender_email,subject,message,date_received,status
                FROM
                    tbl_messages
                ORDER BY
                    date_received
                DESC
                    ";


        $result=mysqli_query($link,$query) or die (mysql_error());
        $counter=0;
        while ($row=mysqli_fetch_array($result)) {
            $message_id=$row['message_id'];
            $sender_name=$row['sender_name'];
            $sender_email=$row['sender_email'];
            $subject=$row['subject'];
            $message=$row['message'];
            $date_received=$row['date_received'];
            $status=$row['status'];
        ?>

    <tr <?php echo (($status=="unread")? 'style="font-weight: ;"' : '') ?>>
        <td>
            <?php echo ++$counter;?>
        </td>

        <td>
            <?php echo $subject;?>
        </td>
        <td>
            <?php echo $sender_name?>
        </td>
        <td>
            <?php echo $sender_email;?>
        </td>
        <td>
            <?php echo $message;?>
        </td>
        <td>
            <a href="mailto:<?php echo $sender_email?>" style="margin: 5px;">
               <button class="pd-reply">Reply</button>
            </a>
                  
            <button data-toggle="tooltip" title="Trash" class="pd-reply" onclick="deleteConfirm('<?php echo $row["message_id"]; ?>'); "  style="margin: 5px;">
                Delete
            </button>
        </td>
    </tr>

<?php
    }
?>

</table>

<script lang="javascript">
   function deleteConfirm(message_id){
        var option = confirm('WARNING!!! This will delete the mesaage from the database!!! \nDo you want to continue?');
        if(option == true){
            window.location.assign("php/exec_form_message.php?del_message_id=" + message_id);
        }
    }
</script>









