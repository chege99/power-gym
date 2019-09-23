 <?php
  $page_title="Admin";
  include('includes/header.php'); 
?>

<div class="mailbox-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-md-3 col-sm-3 col-xs-12"style="margin-top: 50px" >
                        <div class="hpanel responsive-mg-b-30">
                            <div class="panel-body">

                                <ul class="mailbox-list">
                         
                                    <li class="active">
                                        <a  data-toggle="tab" href="#TabUsers">
                                        	<i class="fa fa-envelope"></i> Users
										</a>
                                    </li>
                                    <li>
                                        <a  data-toggle="tab" href="#TabSocial"><i class="fa fa-globe"></i> Social Links </a>
                                    </li>
                                     <li>
                                        <a  data-toggle="tab" href="#TabContacts"><i class="fa fa-phone"></i> Contact Details </a>
                                    </li>
                                   
                                     <li>
                                        <a  data-toggle="tab" href="#TabSubscriptions"><i class="fa fa-pie-chart"></i> Subscriptions </a>
                                    </li>
                                    
                                </ul>
                        

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12"style="margin-top: 50px">
                        <div class="hpanel mg-b-15">
                            <!--<div class="panel-heading hbuilt mailbox-hd">
                                <div class="text-center p-xs font-normal">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" placeholder="Search email in your inbox..."> 
                                        <span class="input-group-btn">
                                        	<button type="button" class="btn btn-sm btn-default">
                                         		Search
											</button> 
										</span>
									</div>
                                </div>
                            </div>-->
                           	<div class="panel-footer">
                           		 <i class="fa fa-cog"> </i> Configurations
                           	</div>
                            <div class="panel-body">
                            
                            <div class="tab-content">
                                <div id="TabUsers" class="tab-pane in active animated flipInX custon-tab-style1">
                                    <?php
                                        include('Tables/users_table.php');
                                    ?>
                                </div>
                                <div id="TabSocial" class="tab-pane animated flipInX custon-tab-style1">
                                    <?php
                                        include('Forms/admin_social.php');
                                    ?>
                                </div>
                                <div id="TabContacts" class="tab-pane animated flipInX custon-tab-style1">
                                    <?php
                                        include('Forms/admin_contacts.php');
                                    ?>
                                </div>
                                
                                     <div id="TabSubscriptions" class="tab-pane animated flipInX custon-tab-style1">
                                          <?php
                                        include('Tables/admin_subscriptions.php');
                                    ?>
                                </div>
                         </div>
                        
                            </div>
                            <div class="panel-footer">
                                End
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php include('Modals/user-add.php');?>
<?php include('Modals/subscription_edit.php');?>



<?php //include('includes/footer.php'); ?>

<div class="footer-copyright-area" style="position: fixed; bottom: 0 ;width:100%">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2019 <a href="#"></a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
</body>

</html>
