<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vprep.in | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->


    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/font/font.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->

    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/webslidemenu.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css">
    <script>base_url = "<?php echo base_url(); ?>"</script>
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/'); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.min.css">
    <script src="<?php echo base_url(); ?>assets/frontend/libs/jquery/jquery-2.1.4.min.js"></script>
    <style>
        .menu-bar > li > a{
            color: black;
            font-weight: bold;
        }
    </style>

</head>
<body >
<header>

    <div class="header-topbar hidden-xs" style="background:#081025;color:white;font-weight: bold">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="smllogo">
                    <a href="<?php echo base_url('student_home.html'); ?>">
                        <img alt="" class="img-responsive" src="<?php echo base_url('assets/frontend/images/frontend-logo.png'); ?>" style="height:50px;width:auto;">
                    </a>
                </div>

            </div>

            <div id=liveNavId class="topbar-right pull-right">
                Welcome <?php echo!empty($this->session->userdata('userdata')) ? $this->session->userdata('userdata')['name'] : ''; ?>
                <div style="color:white; font-weight:bold;line-height: 0px;">Account Type: Basic</div>
                <a href="<?php echo base_url("frontend_logout");?>"><i class="flaticon-logout hidden-lg" style="color: white!important;font-weight:bold;"></i> <span style="color:white!important">Logout</span> </a>

                <?php
                /*
                <div class="group-sign-in">
                    <?php echo anchor('frontend_logout', '<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', array("class" => "login")); ?>
                </div>
                */ ?>
            </div>
            <div id=engageNavId class="topbar-right pull-right" style="display: none;">
                Welcome <?php echo!empty($this->session->userdata('userdata')) ? $this->session->userdata('userdata')['name'] : ''; ?>
                <!--<a href="<?php /*echo base_url("frontend_logout");*/?>"><i class="flaticon-logout hidden-lg" style="color: white!important;font-weight:bold;"></i> <span style="color:white!important">Logout</span> </a>-->

                <?php
                /*
                <div class="group-sign-in">
                    <?php echo anchor('frontend_logout', '<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', array("class" => "login")); ?>
                </div>
                */ ?>
            </div>
        </div>
    </div>
</header>

<div class="wsmenucontainer clearfix" style="background:#57ad22 !important;"><?php if(isset($test))echo $test; ?>
    <div class="overlapblackbg"></div>
    <div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a> <a class="smallogo"> <img src="http://test.vprep.in/assets/frontend/images/frontend-logo.png" alt="" width="120" style="
    width: 20%;
"></a> <a class="callusicon" href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url('assets/frontend/images/tool.png'); ?>"> </a>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="search-input">
                            <div class="container">
                                <div class="search-input-wrapper">
                                    <form>
                                        <input type="text" class="form-input" placeholder="Exams" >
                                        <input type="text" class="form-input" placeholder="Subjects" >
                                        <input type="text" class="form-input" placeholder="Location">
                                        <div class="clearfix" style="height:50px;"> </div>
                                        <div class="register-submit"> <a class="btn btn-blue" href="list.html" role="button" ><span>Search <i class="fa fa-search"></i></span></a> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            highlightHeader();

            function highlightHeader() {
                var urls = document.URL.split('/');
                if (urls[(urls.length - 1)] == 'engage_home.html') {
                    $('#liveId').hide();
                    $('#testingId').show();
                    $('#liveNavId').hide();
                    $('#engageNavId').show();
                    $("#homeId").css("background-image", "linear-gradient(-180deg, #6D92C9 0%, #3B5998 100%)");
                    $("#homeId").css("border","1px solid #979797");
                    $('#homeId').children().css("color","white");
                    $('body').css("background-color","#d6e9c6");
                }
            };
        });
    </script>
    <div class="row-fluid" id="liveId" style="background-color: #8CC63E;">
        <!--Main Menu HTML Code-->
        <div class="wsmain" style="background-color: #8CC63E;">
            <!--  <div class="smllogo"><a href="#"><img alt="" src="<?php echo base_url('assets/frontend/images/logo-color-1.png'); ?>"></a></div>-->
            <nav class="wsmenu clearfix">
                <ul class="mobile-sub wsmenu-list menu-bar ">
                    <li>
                        <?php echo anchor('student_home','<i class="flaticon-building hidden-lg"></i> Home'); ?>
                    </li>
                    <?php /* <li> <?php echo anchor('search','<i class="flaticon-magnifying-glass hidden-lg"></i> Search'); ?></li> */ ?>
                    <li>

                        <a href="javascript:;" ><i class="flaticon-social hidden-lg"></i>Profile </a>

                        <ul class="wsmenu-submenu">
                            <li><a href="<?php echo base_url("student_profile"); ?>"><i class="flaticon-social hidden-lg"></i> My Profile </a></li>
                            <li><a href="<?php echo base_url("manage-profile"); ?>"><i class="flaticon-social hidden-lg"></i> Manage Profile </a></li>
                        </ul>

                    </li>


                    <li>
                        <?php echo anchor('select_exam', '<i class="flaticon-test-quiz hidden-lg"></i> Online Exams'); ?>

                    </li>
                    <li>
                        <?php echo anchor('educational/engage_home', '<i class="flaticon-test-quiz hidden-lg"></i> Engagement Platform'); ?>

                    </li>
                    <li>
                        <a href="http://vprep.in/materials.php">Study Material</a>

                    </li>
                    <!--<li>
                       <?php /*echo anchor('student/leaderboard', '<i class="flaticon-test-quiz hidden-lg"></i> Leaderboard'); */?>

                    </li>-->
                    <li>
                        <?php echo anchor('student/pricing', '<i class="flaticon-test-quiz hidden-lg"></i> Upgrades'); ?>

                    </li>

                    <li>
                        <?php echo anchor('my_score', '<i class="flaticon-man hidden-lg"></i> My Score'); ?>
                    </li>
                    <li>
                        <?php echo anchor('student/community', '<i class="flaticon-man hidden-lg"></i> Vprep Community'); ?>
                    </li>
                    <li>
                        <?php echo anchor('student/uploadresume', '<i class="flaticon-man hidden-lg"></i> Upload Resume'); ?>
                    </li>
                    <li>
                        <?php echo anchor('student/feedback_form', '<i class="flaticon-man hidden-lg"></i> Feedback'); ?>

                    </li>
                    <?php
                    
                    /*
                    <li>
                        <a href="#"><i class="flaticon-man hidden-lg"></i> My Leaderboard </a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-technology hidden-lg"></i> Support </a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-support-speech-bubble hidden-lg"></i> Post a question </a>
                    </li>

                    */ ?>
                    <li>
                        <?php echo anchor('student/contact_us', '<i class="flaticon-man hidden-lg"></i> Contact Us'); ?>
                    </li>

                    <!--<li><a href="<?php /*echo base_url("frontend_logout");*/?>"><i class="flaticon-logout hidden-lg"></i> Logout </a></li>-->

                </ul>
            </nav>
        </div>
    </div>
    <div class="row-fluid" id="testingId" style="display: none;background-color: #8CC63E;">
        <!--Main Menu HTML Code-->
        <div class="wsmain" style="background-color: #8CC63E;">
            <!--  <div class="smllogo"><a href="#"><img alt="" src="<?php echo base_url('assets/frontend/images/logo-color-1.png'); ?>"></a></div>-->
            <nav class="wsmenu clearfix">
                <ul class="mobile-sub wsmenu-list menu-bar" style="background-image: linear-gradient(-180deg, #C0E572 0%, #8CC63E 100%);
border: 1px solid #979797;">
                    <li id="homeId" style="width: 11.11%;">
                        <?php echo anchor('student_home','<i class="flaticon-building hidden-lg"></i> Home '); ?>
                    </li>
                    <?php /* <li> <?php echo anchor('search','<i class="flaticon-magnifying-glass hidden-lg"></i> Search'); ?></li> */ ?>
                    <li style="width: 11.11%;">

                        <a href="javascript:;" ><i class="flaticon-social hidden-lg"></i>Profile </a>

                        <ul class="wsmenu-submenu">
                            <li><a href="<?php echo base_url("student_profile"); ?>"><i class="flaticon-social hidden-lg"></i> My Profile </a></li>
                            <li><a href="<?php echo base_url("manage-profile"); ?>"><i class="flaticon-social hidden-lg"></i> Manage Profile </a></li>
                        </ul>

                    </li>


                    <li style="width: 11.11%;">
                        <?php echo anchor('select_exam', '<i class="flaticon-test-quiz hidden-lg"></i> Assignments'); ?>

                    </li>
                    <li style="width: 11.11%;">
                        <a href="http://vprep.in/materials.php">Study Material</a>

                    </li>
                    <!--<li>
                       <?php /*echo anchor('student/leaderboard', '<i class="flaticon-test-quiz hidden-lg"></i> Leaderboard'); */?>

                    </li>-->
                    <!-- <li>
                        <?php /*echo anchor('student/pricing', '<i class="flaticon-test-quiz hidden-lg"></i> Upgrade'); */?>

                    </li>-->

                    <li style="width: 11.11%;">
                        <?php echo anchor('my_score', '<i class="flaticon-man hidden-lg"></i> My Score'); ?>
                    </li>
                    <li style="width: 11.11%;">
                        <?php echo anchor('student/vprep_home', '<i class="flaticon-man hidden-lg"></i> Notifications'); ?>
                    </li>
                    <li style="width: 11.11%;">
                        <?php echo anchor('student/vprep_home', '<i class="flaticon-man hidden-lg"></i> Messages'); ?>
                    </li>
                    <li style="width: 11.11%;">
                        <?php echo anchor('student/community', '<i class="flaticon-man hidden-lg"></i> Community'); ?>
                    </li>
                    <li style="width: 11.11%">
                        <?php echo anchor('frontend_logout', '<i class="flaticon-logout hidden-lg"></i> Logout'); ?>
                    </li>

                    <?php
                    /*
                    <li>
                        <a href="#"><i class="flaticon-man hidden-lg"></i> My Leaderboard </a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-technology hidden-lg"></i> Support </a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-support-speech-bubble hidden-lg"></i> Post a question </a>
                    </li>

                    */ ?>
                    <!-- <li>
                        <?php /*echo anchor('student/contact_us', '<i class="flaticon-man hidden-lg"></i> Contact Us'); */?>
                    </li>-->

                    <!--<li><a href="<?php /*echo base_url("frontend_logout");*/?>"><i class="flaticon-logout hidden-lg"></i> Logout </a></li>-->

                </ul>
            </nav>
        </div>
    </div>
</div>



<!-- HEADER-->
<?php echo!empty($body) ? $body : ''; ?>
<footer style="position:fixed; bottom:-30px;">
    <div class="footer-main">
        <div class="container">
            <div class="hyperlink">
                <div class="hyper-right">© 2016 Vprep.in</div>
            </div>
        </div>
    </div>
</footer>

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
        });
    })
</script>
<script src="<?php echo base_url('assets/frontend/js/custom.js'); ?>"></script>

<script src="<?php echo base_url(); ?>assets/frontend/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/webslidemenu.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/menu.js"></script>

<script>

    function getSub(course)
    {
        // alert(course);

        var options = $("#show_subject_id");

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('educational/getSubject');?>',
            data: $('#save_test_questions').serialize(),
            dataType: 'text',
            timeout: 30000,
            success: function(responseMess) {



                var optionsValues = jQuery.parseJSON(responseMess);

                // alert(optionsValues);
                options.html(optionsValues);

            },
            error: function(request, status, err) {

                if(status == "timeout") {

                    alert('Oops !! There might me network error, please try one more time !!');
                }

            }
        });

    }

    function getExam(subject)
    {

        // alert(subject);

        var options = $("#show_exam_id");

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('educational/getExam');?>',
            data: $('#save_test_questions').serialize(),
            dataType: 'text',
            timeout: 30000,
            success: function(responseMess) {



                var optionsValues = jQuery.parseJSON(responseMess);

                //  alert(optionsValues);
                options.html(optionsValues);

            },
            error: function(request, status, err) {

                if(status == "timeout") {

                    alert('Oops !! There might me network error, please try one more time !!');
                }

            }
        });

    }

    function getModule(exam)
    {

        // alert(exam);

        var options = $("#show_module_id");

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('educational/getModule');?>',
            data: $('#save_test_questions').serialize(),
            dataType: 'text',
            timeout: 30000,
            success: function(responseMess) {



                var optionsValues = jQuery.parseJSON(responseMess);

                //  alert(optionsValues);
                options.html(optionsValues);

            },
            error: function(request, status, err) {

                if(status == "timeout") {

                    alert('Oops !! There might me network error, please try one more time !!');
                }

            }
        });

    }

    function getSubModule(module)
    {

        // alert(module);

        var options = $("#show_sub_module_id");

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('educational/getSubModule');?>',
            data: $('#save_test_questions').serialize(),
            dataType: 'text',
            timeout: 30000,
            success: function(responseMess) {



                var optionsValues = jQuery.parseJSON(responseMess);

                //   alert(optionsValues);
                options.html(optionsValues);

            },
            error: function(request, status, err) {

                if(status == "timeout") {

                    alert('Oops !! There might me network error, please try one more time !!');
                }

            }
        });

    }

</script>

<script>
    var pushRight = new Menu({
        wrapper: '#o-wrapper',
        type: 'push-right',
        menuOpenerClass: '.c-button',
        maskId: '#c-mask'
    });

    var pushRightBtn = document.querySelector('#c-button--push-right');

    pushRightBtn.addEventListener('click', function(e) {
        e.preventDefault;
        pushRight.open();
    });

</script>

</body>
</html>
