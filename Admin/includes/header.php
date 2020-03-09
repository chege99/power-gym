<?php 
include('php/dbcon.php'); 
include('php/session.php'); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Portal  <?php echo "|| Power-Gym" ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">

    
    <?php include('links.php'); ?>


     <style type="text/css">
        #sidemenuactive{
            background-color: #e12503;
        }
        #sidemenuactive a{
            color: #f8f9fa;
            text-decoration: none;
        }
        .pd-read{
            border-radius: 5px;
            padding: 5px 10px;
            border: 0.5px solid white;
            background-color: red;
            color: white;
        }
        .pd-reply{
            border-radius: 5px;
            padding: 5px 10px;
            border: 0.5px solid red;
            background-color: white;
            color: red;
        }
        .btncustom_save{
            color: red;
            border: 0.5px solid red;
            background-color: white;
            border-radius: 5px;
            padding: 10px 25px;
            margin-right: 30px;
        }
        .sp-expired{
            color: white;
            background-color: orange;
            padding: 4px 10px;
            border-radius: 4px;
        }
        .sp-active{
            color: white;
            background-color: green;
            padding: 4px 10px;
            border-radius: 4px;
        }
    </style>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <?php include('navside.php'); ?>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">

            <?php include('navtop.php'); ?>

        </div>
        

