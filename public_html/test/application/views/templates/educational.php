a
<!DOCTYPE html>
<html lang="en">
<head>
<title>VPrep.in | Online Exam</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- LIBRARY FONT-->
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/educational/font/font.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/educational/font/font-icon/font-awesome-4.4.0/css/font-awesome.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/educational/font/font-icon/font-svg/css/Glyphter.css'); ?>">
<!-- LIBRARY CSS-->
<link rel="stylesheet" type="text/css" href="flaticons/flaticon.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/educational/libs/animate/animate.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/educational/css/webslidemenu.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/educational/libs/bootstrap-3.3.5/css/bootstrap.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/educational/libs/owl-carousel-2.0/owl.carousel.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/libs/bootstrap-3.3.5/css/bootstrap.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/frontend/educational/css/style.css'); ?>">
<script src="<?php echo base_url('assets/frontend/educational/libs/jquery/jquery-2.1.4.min.js'); ?>"></script>
<?php $user_id = $this->session->userdata('userdata')['userid']; $user_name = $this->session->userdata('userdata')['name'];  ?>

<style>
.wsmenu-list > li > a {
background-color: #3b5998;	
color:#fff;
}
</style>

<script>
$(document).ready(function() {
	$("#datepicker").datepicker();     
});
</script>
<style>
.footer-main {   
    background-color: #242f3c;
    overflow-x: hidden;
    position: fixed;
   // bottom: 0px;
    WIDTH: 100%;
    display:none;
    }
    </style>


</head>
<body>
<!-- HEADER-->
<div class="wsmenucontainer clearfix" style="<?php if(isset($test))echo $test; ?>" >
  <div class="overlapblackbg"></div>
  <div class="wsmobileheader clearfix"> 
      <a id="wsnavtoggle" class="animated-arrow"><span></span></a> 
      <a class="smallogo" href="<?php echo base_url("educational.html");?>"> 
          <img src="<?php echo base_url('assets/frontend/images/splash-logo-tutor.png'); ?>" alt="" width="160">
      </a> 
  </div>
  <header>
	<div class="hidden-xs" style="background:#081025;color:#fff">
		<div class="container">
			<div class="topbar-left pull-left">
				<div class="smllogo">
					<a href="<?php echo base_url('educational'); ?>">
						<img alt="" class="img-responsive" src="<?php echo base_url('assets/frontend/images/splash-logo-tutor.png'); ?>" style="height:50px;margin-top:10px;width:auto">
					</a>
				</div>
				
			</div>
			<div class="topbar-right pull-right">
				<div class="group-sign-in" style="padding-top:10px;">
					<span>Welcome <?php echo $user_name; ?></span>
				</div>
			</div>
		</div>
	</div>
</header>
<!--
Profile,
My Students
Course Management
Exam Management
View Scores
Logout. 
Course management will have sub menus Add Courses , Add Subjects and Add Modules. 
Exam management menu will have sub menus Add Exams, Add Questions
-->

 <div class="wsmenucontainer clearfix" style="background:#3b5998;">
    <nav class="wsmenu clearfix" style="background:none;" >
      <ul class="mobile-sub wsmenu-list">
	    <li>
		<?php echo anchor('educational/profile','<i class="flaticon-password"></i> Profile'); ?>
					 
			 <ul class="wsmenu-submenu">
				<li><a href="<?php echo base_url("educational/profile"); ?>"><i class="flaticon-social hidden-lg"></i> My Profile </a></li>
				<li><a href="<?php echo base_url("educational/manage-profile"); ?>"><i class="flaticon-social hidden-lg"></i> Manage Profile </a></li>
			 </ul>
		</li>
		
      <!-- <li><?php echo anchor('change_password','<i class="flaticon-password"></i> Change Password'); ?></li>  -->
        <li><?php echo anchor('educational/add_new_student','<i class="flaticon-upload"></i> My Students'); ?></li>
        <?php if($user_id==1 or $user_id==343): ?>
        <li>
		<?php echo anchor('educational/course','<i class="flaticon-upload"></i> Course Management'); ?>
		<ul class="wsmenu-submenu">
			
			 <li><?php echo anchor('educational/course','<i class="flaticon-upload"></i> Manage Courses'); ?></li>
			 <li><?php echo anchor('educational/subject','<i class="flaticon-upload"></i> Manage Subjects'); ?></li>
			 <li><?php echo anchor('educational/module','<i class="flaticon-upload"></i> Manage Modules'); ?></li>
			 <li><?php echo anchor('educational/submodule','<i class="flaticon-upload"></i> Manage Sub Modules'); ?></li>
			 
			 <li><?php echo anchor('educational/questionbank','<i class="flaticon-upload"></i> Manage Question Bank'); ?></li>
			
			 
		</ul>
		</li>
		 <li>
		<?php echo anchor('educational/addstudymaterial','<i class="flaticon-upload"></i> Study Material'); ?>
		<ul class="wsmenu-submenu">
			
			 <li><?php echo anchor('educational/addstudymaterial','<i class="flaticon-upload"></i> Add Material'); ?></li>
			 
			
			 
		</ul>
		</li>
		<?php else: ?>
		<li><?php echo anchor('educational/questionbank','<i class="flaticon-upload"></i> My Question Bank'); ?></li>
		<?php endif; ?>
       <?php // Exam Management will have , Creat Exams, Manage Exams, Question Bank Management, Add questions to Question Bank, Add questions to Exam (From Question Bank) ?>
		<li>
		<?php echo anchor('educational/exam_list','<i class="flaticon-upload"></i> Exam Management'); ?>
		<ul class="wsmenu-submenu">
			<li><?php echo anchor('educational/create_new_exam','<i class="flaticon-upload"></i> Create Exams'); ?></li>
			<li><?php echo anchor('educational/addExamQuestion','<i class="flaticon-upload"></i> Add Question to Exams'); ?></li>
			<li><?php echo anchor('educational/exam_list','<i class="flaticon-upload"></i> Manage Exams'); ?></li>
		 
		</ul>
		
		</li>
		<?php if($user_id==1 or $user_id==4 or $user_id==315): ?>
		<li>
		<?php echo anchor('educational/exam_list','<i class="flaticon-upload"></i> Mock Test Management'); ?>
		<ul class="wsmenu-submenu">
			<li><?php echo anchor('educational/create_new_exam_mock','<i class="flaticon-upload"></i> Create Mock Test'); ?></li>
			
			<li><?php echo anchor('educational/exam_list_mock','<i class="flaticon-upload"></i> Manage Mock Test'); ?></li>
		 
		</ul>
		
		</li>
		<?php endif; ?>

        <li><?php echo anchor('educational/addstudymaterial','<i class="flaticon-upload"></i> Add Material'); ?></li>
        <li><?php echo anchor('educational/check-result','<i class="flaticon-graphic"></i> View Scores'); ?></li>
        <li><?php echo anchor('educational/notification','<i class="flaticon-graphic"></i> Notifications');?></li>
        <li><?php echo anchor('frontend_logout','<i class="flaticon-sign-out-option"></i> Logout'); ?></li>
      </ul>
    </nav>
  </div>
</div>

<?php echo !empty($body)?$body:''; ?>
<?php if(!isset($test)): ?>
<footer>
	<div class="footer-main">
		<div class="container">
			<div class="hyperlink">
				<div class="hyper-right">© 2016 VPrep.in</div>
			</div>
		</div>
	</div>
</footer>
<?php endif; ?>

<script src="<?php echo base_url('assets/frontend/educational/libs/bootstrap-3.3.5/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/frontend/educational/libs/smooth-scroll/jquery-smoothscroll.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/frontend/educational/js/webslidemenu.js'); ?>"></script>
<script src="<?php echo base_url('assets/frontend/educational/js/main.js'); ?>"></script>
<script src="<?php echo base_url('assets/frontend/js/date-picker.js'); ?>"></script>
<script src="<?php echo base_url('assets/frontend/js/bootstrap-datepicker.min.js'); ?>"></script>
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
	
	$("#show_sub_module_id").css("display", "none");

 var options = $("#show_module_id");
 
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/getModuleList');?>',
		data: $('#save_test_questions').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
	  //  alert(responseMess);
		 
		// console.log(responseMess);
		var optionsValues = jQuery.parseJSON(responseMess);
		 		 
		//console.log(optionsValues);
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
	
	$("#show_sub_module_id").css("display", "block");

 var options = $("#show_sub_module_id");
 
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/getSubModuleList');?>',
		data: $('#save_test_questions').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		 
		 //  alert(responseMess);
		 
		var optionsValues = jQuery.parseJSON(responseMess);
		 		 
		 
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
