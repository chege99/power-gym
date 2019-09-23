 <?php
  $page_title="Trainers";
  include('includes/header.php'); 
?>


    <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 50px;">
                        <div class="product-status-wrap">
                            <h4>Trainers List</h4>
                            <div class="add-product">
                                <a href="#" data-toggle="modal" data-target="#AddEditModal">Add Trainer</a>
                            </div>
                            <?php include('Tables/trainers_table.php'); ?>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>





<?php include('Modals/trainers-add.php');?>

<?php include('includes/footer.php'); ?>