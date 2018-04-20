<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vprep | Home</title>
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
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.min.css">
		<script src="<?php echo base_url(); ?>assets/frontend/libs/jquery/jquery-2.1.4.min.js"></script>


    </head>
    <body>
        <header>
            <div class="header-topbar hidden-xs">
                <div class="container">
                    <div class="topbar-left pull-left">
                        <div class="smllogo" style="width:35% !important;">
                            <a href="#">
                                <img alt="" class="img-responsive" src="<?php echo base_url('assets/frontend/images/splash-logo.png'); ?>" style="width:100%;height: 50px;">
                            </a>
                        </div>
                        Welcome <?php echo!empty($this->session->userdata('userdata')) ? $this->session->userdata('userdata')['name'] : ''; ?>
                    </div>
                    <div class="topbar-right pull-right">
                        <div class="group-sign-in">
                            <?php echo anchor('frontend_logout', '<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', array("class" => "login")); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wsmenucontainer clearfix" style="background:#ef961e;">
            <div class="overlapblackbg"></div>
            <div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a> <a class="smallogo"> <img src="<?php echo base_url('assets/frontend/images/logo-color-1.png'); ?>" alt="" width="160"></a> <a class="callusicon" href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url('assets/frontend/images/tool.png'); ?>"> </a>
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
            <div class="container">
                <!--Main Menu HTML Code-->
                <div class="wsmain">
                  <!--  <div class="smllogo"><a href="#"><img alt="" src="<?php echo base_url('assets/frontend/images/logo-color-1.png'); ?>"></a></div>-->
                    <nav class="wsmenu clearfix">
                        <ul class="mobile-sub wsmenu-list">
                            <li>
                                <?php echo anchor('student_home','<i class="flaticon-building hidden-lg"></i> Home'); ?>
                            </li>
                            <li>
                                <?php echo anchor('search','<i class="flaticon-magnifying-glass hidden-lg"></i> Search'); ?>                                
                            </li>
                            <li>
                                <?php echo anchor('student_profile', '<i class="flaticon-social hidden-lg"></i> Profile'); ?>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-office hidden-lg"></i> Institutes </a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-notification-bell-outline-interface-symbol hidden-lg"></i> Notifications </a>
                            </li>
                            <li>
                                <?php echo anchor('ebooks', '<i class="flaticon-man hidden-lg"></i> Ebooks'); ?>
                            </li>
                            <li>
                                <?php echo anchor('select_exam', '<i class="flaticon-test-quiz hidden-lg"></i> Online Exams'); ?>
                            </li>
                            <li>
                                <?php echo anchor('my_score', '<i class="flaticon-man hidden-lg"></i> My Score'); ?>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-man hidden-lg"></i> My Leaderboard </a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-technology hidden-lg"></i> Support </a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-support-speech-bubble hidden-lg"></i> Post a question </a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-business-card-of-a-man-with-contact-info hidden-lg"></i> Contact us </a>
                            </li>
                            <!--  <li><a href="#"><i class="flaticon-logout hidden-lg"></i> Logout </a></li>-->

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
		

  
        <!-- HEADER-->
        <?php echo!empty($body) ? $body : ''; ?>
        <footer>
            <div class="footer-main">
                <div class="container">
                    <div class="hyperlink">
                        <div class="hyper-right">© 2016 AbsolutPrep</div>
                    </div>
                </div>
            </div>
        </footer>
 
<script src="<?php echo base_url('assets/frontend/js/custom.js'); ?>"></script>

<script src="<?php echo base_url(); ?>assets/frontend/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/libs/owl-carousel-2.0/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/webslidemenu.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/menu.js"></script>
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
