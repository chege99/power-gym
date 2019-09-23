
 <div class="product-status mg-tb-15">
            <div class="containerz">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0; margin: -24px auto;">
                        <div class="product-status-wrap">
                            <h4>Subscriptions</h4>
                            <div class="add-product">
                                
                            </div>
                            <table>
                                <tr>
                                    <th>Subscription ID</th>
                                    <th>Title</th>
                                    <th>Rate</th>
                                    <th>Description</th>
                                    <th>Duration</th>
                                    <th>Actions</th>
                                </tr>



<?php
//tbl_config_subscription` (`subscription_id,`, `subscription_title,`, `subscription_rate,`) VALUES (NULL, 'Gold', '200')


            $query="SELECT 
                        subscription_id,subscription_title,subscription_rate,subscription_description,duration
                    FROM
                        tbl_config_subscription
                   ";


$result=mysqli_query($link,$query) or die (mysql_error());

  while ($row=mysqli_fetch_array($result)) {
    
        $subscription_id=$row['subscription_id'];
        $subscription_title=$row['subscription_title'];
        $subscription_rate=$row['subscription_rate'];      
        $subscription_description=$row['subscription_description'];     
        $duration=$row['duration'];  
?>

<tr>
    <td>
        <?php echo $subscription_id;?>
    </td>
    <td>
        <?php echo $subscription_title;?>
    </td>
    <td>
        <?php echo $subscription_rate;?>
    </td>
    <td>
        <?php echo $subscription_description;?>
    </td>
      <td>
        <?php echo $duration;?>
    </td>
    <td>
      <a data-toggle="modal" data-target="#AddEditModalSubscription" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
                   