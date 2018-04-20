<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vprep | Online Exam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/educational/font/font.css'); ?>">
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets/frontend/educational/font/font-icon/font-awesome-4.4.0/css/font-awesome.css'); ?>">
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets/frontend/educational/font/font-icon/font-svg/css/Glyphter.css'); ?>">
    <!-- LIBRARY CSS-->
    <link rel="stylesheet" type="text/css" href="flaticons/flaticon.css'); ?>">
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets/frontend/educational/libs/animate/animate.css'); ?>">
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets/frontend/educational/css/webslidemenu.css'); ?>">
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets/frontend/educational/libs/bootstrap-3.3.5/css/bootstrap.css'); ?>">
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets/frontend/educational/libs/owl-carousel-2.0/owl.carousel.css'); ?>">
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets/frontend/libs/bootstrap-3.3.5/css/bootstrap.css'); ?>">
	<link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets/frontend/css/multi-select.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/educational/css/style.css'); ?>">
    <script src="<?php echo base_url('assets/frontend/educational/libs/jquery/jquery-2.1.4.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/frontend/js/jquery.multi-select.js'); ?>"></script>
</head>
<body>
<!-- HEADER-->
<div class="wsmenucontainer clearfix">
    <div class="overlapblackbg"></div>
    <div class="wsmobileheader clearfix">
        <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
        <a class="smallogo">
            <img src="<?php echo base_url('assets/frontend/educational/images/splash-logo.png'); ?>" alt="" width="160">
        </a>
    </div>
    <div class="header">
        <div class="wrapper clearfix">
            <div class="logo clearfix"></div>
        </div>

        <nav class="wsmenu clearfix">
            <ul class="mobile-sub wsmenu-list">
                <li><?php echo anchor('change_password', '<i class="flaticon-password"></i> Change Password'); ?></li>
                <li><?php echo anchor('educational/students', '<i class="flaticon-upload"></i> Students'); ?></li>

                <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#">Course Management<span class="arrow"></span></a>
                    <ul class="wsmenu-submenu">
                        <li><?php echo anchor('educational/view_course', '<i class="flaticon-upload"></i> Create Course'); ?></li>
                        <li><?php echo anchor('educational/view_subject', '<i class="flaticon-upload"></i> Create Subject'); ?></li>
                        <li><?php echo anchor('educational/view_module', '<i class="flaticon-upload"></i> Create Module'); ?></li>
                        <li><?php echo anchor('educational/view_submodule', '<i class="flaticon-upload"></i> Create Sub Module'); ?></li>
                        <li><?php echo anchor('educational/test_question_bank', '<i class="flaticon-upload"></i> Manage Question Bank'); ?></li>
                    </ul>
                </li>

                <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#">Exam Management<span class="arrow"></span></a>
                    <ul class="wsmenu-submenu">
                        <li><?php echo anchor('educational/test_create_exam', '<i class="flaticon-upload"></i> Create Exam'); ?></li>
                        <li><?php echo anchor('educational/test_create_exam_select', '<i class="flaticon-upload"></i> Add Questions to the Exam'); ?></li>
                        <li><?php echo anchor('educational/exam_list', '<i class="flaticon-upload"></i> Manage Exam'); ?></li>
                    </ul>
                </li>

                <li><?php echo anchor('educational/test_categories', '<i class="flaticon-upload"></i> Exam Categories'); ?></li>



                <li><?php echo anchor('educational/check-result', '<i class="flaticon-graphic"></i> Check Result'); ?></li>


                <li><?php echo anchor('frontend_logout', '<i class="flaticon-sign-out-option"></i> Logout'); ?></li>


            </ul>
        </nav>


    </div>
</div>
<?php echo !empty($body) ? $body : ''; ?>
<script src="<?php echo base_url('assets/frontend/educational/libs/bootstrap-3.3.5/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/frontend/educational/libs/smooth-scroll/jquery-smoothscroll.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/frontend/educational/js/webslidemenu.js'); ?>"></script>
<script src="<?php echo base_url('assets/frontend/educational/js/main.js'); ?>"></script>
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
</body>
</html>
