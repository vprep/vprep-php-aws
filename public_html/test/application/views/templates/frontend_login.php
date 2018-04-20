<!DOCTYPE html>
<html lang="en">
    <head>
        <title>vPrep | Splash</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- LIBRARY FONT-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/font/font.css'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/font/font-icon/font-awesome-4.4.0/css/font-awesome.css'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/font/font-icon/font-svg/css/Glyphter.css'); ?>">
        <!-- LIBRARY CSS-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/libs/animate/animate.css'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/libs/bootstrap-3.3.5/css/bootstrap.css'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/frontend/'); ?>/css/bootstrap-datepicker.css">
				<script src="<?php echo base_url(); ?>assets/frontend/libs/jquery/jquery-2.1.4.min.js"></script>
    </head>
    <body>
        <?php if (!empty($this->uri->segment(1))): ?>
            <header>
                <div class="header-main homepage-01">
                    <div class="container">
                        <div class="header-main-wrapper">
                            <div class="navbar-header">
                                <div class="logo pull-left">
                                    <a class="header-logo" href="<?php echo base_url();?>"> 
                                        <span style="color:#dd6b34;"></span>
                                    </a>
                                    <a style="color:#ef961e; font-size:16px; line-height:30px;" href="<?php echo base_url(); ?>">
                                        <img style="margin-right:15px;" src="<?php echo base_url('assets/frontend/images/arrows.png'); ?> "> Back 
                                    </a>
                                </div>
                                <button style="background:#fff;" class="navbar-toggle edugate-navbar" data-target=".navigation" data-toggle="collapse" type="button"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <?php endif; ?>
        <div id="wrapper-content">
            <?php echo!empty($body) ? $body : ''; ?>
        </div>
        <script src="<?php echo base_url('assets/frontend/libs/jquery/jquery-2.1.4.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/frontend/libs/bootstrap-3.3.5/js/bootstrap.min.js'); ?>"></script>
        <!-- Include Date Range Picker -->
        <script src="<?php echo base_url('assets/frontend/js/main.js'); ?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/date-picker.js'); ?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/bootstrap-datepicker.min.js'); ?>"></script>
        <script>
            $(document).ready(function () {
                var date_input = $('#date'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>
        <script src="<?php echo base_url('assets/frontend/libs/smooth-scroll/jquery-smoothscroll.js'); ?>"></script>
        <script src="<?php echo base_url('assets/frontend/libs/appear/jquery.appear.js'); ?>"></script>
        <script src="<?php echo base_url('assets/frontend/libs/wow-js/wow.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/frontend/libs/selectbox/js/jquery.selectbox-0.2.min.js'); ?>"></script>
    </body>
</html>