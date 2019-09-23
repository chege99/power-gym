 <?php
  $page_title="Equipment";
  include('includes/header.php'); 
?>


    <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 50px;">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="#" data-toggle="modal" data-target="#AddEditModal">Add Equipment</a>
                            </div>
                          <?php include('Tables/equipment_table.php'); ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>





<?php include('Modals/equipment-add.php');?>

<?php include('includes/footer.php'); ?>