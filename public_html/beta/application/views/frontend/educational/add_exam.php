<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses" style="
    padding-top: 47px;
">
<?php 
if(isset($is_mock)): ?>
<div style="
    font-size: 20px;
    font-weight: bold;
">Create Mock Test</div>
<?php else : ?>
<div style="
    font-size: 20px;
    font-weight: bold;
">Create Exam</div>

<?php endif; ?>


                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                <?php // echo validation_errors(); ?>
								<form name="save_new_exam" action="<?php echo base_url("educational/save_new_exam"); ?>" method="post" id="save_new_exam">
								
								<?php 
if(isset($is_mock)): ?>
<div class="form-group"> <input type="hidden" name="is_mock" value="1"></div>
<?php else : ?>
<div class="form-group"> <input type="hidden" name="is_mock" value="0"></div>

<?php endif; ?>
								
								
								
								
								
								
								
                                  
                                    <div class="row">
                                        <div class="col-md-12 showback">
                                            <div class="box box-primary">
                                                <div class="box-body" style="display: block;">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?php echo !empty($test_cat['id'])?$test_cat['id']:''; ?>"> 
                                                        </div>
														<div class="form-group" style="
    width: 20%;
    float: left;
    
">
															<label class="pull-left" style="width:100%; text-align:left">Select Course</label>
															<select name="course" class="form-control" required="required" onchange="getSubjectData(this.value)" >
																<option value="" selected="selected">Choose Course</option>
																<?php 
																	if(count($course_listing)>0)
																	{
																	   foreach($course_listing as $tec){
																		
																?>
																<option value="<?php  echo $tec['course_id'];?>" ><?php   echo $tec['course_title']; ?></option>
																 <?php
																	} }
																?>
															</select>
														</div>
														
														<div class="form-group" style="
    width: 20%;
    float: left;
    padding-left: 2%;
">
                                                            <label class="pull-left">Exam Name</label>
                                                            <input type="text" name="title" class="form-control" required="required" placeholder="Enter Exam Name" value="<?php echo set_value("title"); ?>" data-title="Title"> 
                                                            <?php echo form_error('title', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group" style="
    width: 20%;
    float: left;
    padding-left: 2%;
">
                                                            <label class="pull-left">Total Question</label>
                                                            <input type="number" id="tq" name="total_question" required="required" class="form-control" placeholder="Total Question" value="<?php echo set_value("total_question"); ?>" data-title="Total Question" readonly> 
                                                            <?php echo form_error('total_question', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
														
														
														
														
														<div class="form-group">
															<div id="show_subject_id" class="col-md-12" style="margin-bottom:25px;"></div> 
														</div>
														
														<div class="form-group">
															<div id="show_subject_id_more" class="col-md-12"></div> 
														</div>
														
														
														 
                                                        

                                                        <div class="form-group" style="width:17%;float:left;">
                                                            <label class="pull-left">Test Time ( 5 to 240 In Minutes )</label>
                                                            <?php $min_arr=array(10=>10,20=>20,30=>30,40=>40,45=>45,50=>50,60=>60); ?>
                                                            <?php // echo form_dropdown('test_time',$min_arr,!empty($test_cat['test_time'])?$test_cat['test_time']:'','class="form-control"'); ?>
                                                            <input type="number" name="test_time" class="form-control" required="required" placeholder="Test Time" value="<?php echo set_value("test_time"); ?>" data-title="Test Time" min="5" max="240"> 
                                                            <?php echo form_error('test_time', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
												
														<div class="col-md-6" style="width:17%;float:left;">
															<div class="form-group">
																<label class="pull-left">Start Date</label>
																<input type="date" id="start_date" name="start_date" class="form-control" value="<?php echo set_value("start_date"); ?>" onchange="dateLis()">
																<?php echo form_error('start_date', '<div class="text-red">* ', '</div>'); ?>
															</div>
														</div>
														<div class="col-md-6" style="width:17%;float:left;">
															<div class="form-group">
																<label class="pull-left">End Date</label>
																<input type="date" id="end_date" name="end_date" class="form-control" value="<?php echo set_value("end_date"); ?>" onchange="dateLis()">
																<?php echo form_error('end_date', '<div class="text-red">* ', '</div>'); ?>
															</div>
														</div>
														<div class="form-group" style="
    width: 14%;
    float: left;
">
															<label class="pull-left">Marks for Correct Answer</label>
															<input type="number" name="correct_answer" class="form-control" value="<?php echo set_value("correct_answer"); ?>" onchange="check_correct()">
															<?php echo form_error('correct_answer', '<div class="text-red">* ', '</div>'); ?>
														</div>
														<div class="form-group" style="
    width: 14%;
    float: left;
    margin-left: 2%;
">
															<label class="pull-left">Marks for Wrong Answer</label>
															<input type="number" name="wrong_answer" class="form-control" value="<?php echo set_value("wrong_answer"); ?>" onchange="check_wrong()">
															<?php echo form_error('wrong_answer', '<div class="text-red">* ', '</div>'); ?>
														</div>
														<div class="form-group" style="
    width: 17%;
    float: left;
    margin-left: 2%;
    
">
															<label class="pull-left">Marks for Unattempted Answer</label>
															<input type="number" name="unattempted_answer" class="form-control" value="<?php echo set_value("unattempted_answer"); ?>" onchange="check_unattempted()">
															<?php echo form_error('unattempted_answer', '<div class="text-red">* ', '</div>'); ?>
														</div>
													
														
                                                        <div class="form-group" style="
    width: 20%;
    float: left;
    
">											 <label class="pull-left">Description</label>
                                                           
                 <textarea class="textarea form-control" name="description" rows="10" cols="80" id="description" style="
    width: 426px;
    height: 50px;
"> 
                                                                <?php echo set_value("description"); ?>
                                                            </textarea>
															<script>
															// Replace the <textarea id="editor1"> with a CKEditor
															// instance, using default configuration.
															CKEDITOR.replace( 'description' );
															</script>
						
                                                            <?php echo form_error('description', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
														 
															<div class="col-md-12">
																<div class="col-md-2">
																	<button name="save" type="submit" value="save_add" class="btn btn-success btn-lg custom-margin-5">
																		Save
																	</button>
																</div>

																<div class="col-md-2">
																	<?php echo anchor('educational/exam_list','Discard',array("class"=>"btn btn-danger btn-lg")); ?>
																</div>
															</div>
														 
								
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

function getSubjectData(id)
{ 
if(id != ''){
 var options = $("#show_subject_id");
 options.empty();
 $("#show_subject_id_more").empty();
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/getSubject');?>',
		data: $('#save_new_exam').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		var optionsValues = jQuery.parseJSON(responseMess);
		options.append(optionsValues);
		},
		error: function(request, status, err) {
			if(status == "timeout") {
				alert('Oops !! There might me network error, please try one more time !!');
			}
		 }
	});
}else{
		var mo = $("#show_subject_id");
		mo.html('');
		var mo = $("#show_subject_id_more");
		mo.html('');
	}
}

function getMoreSubjectData()
{ 
 // alert(course);

 var options = $("#show_subject_id_more");
 
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/getMoreSubject');?>',
		data: $('#save_new_exam').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		 
		 
		 
		var optionsValues = jQuery.parseJSON(responseMess);
		 		 
		// alert(optionsValues);
		options.append(optionsValues);
		 

		},
		error: function(request, status, err) {

			if(status == "timeout") {

				alert('Oops !! There might me network error, please try one more time !!');
			}

		 }
	});
	
}
	
function onQC(){
	var inps = document.getElementsByName('subject_ques_num[]');
	var c = 0;
	for (var i = 0; i <inps.length; i++) {
		var inp = parseInt(inps[i].value);
		c += inp;
		console.log("pname["+i+"].value="+inp+" c - "+c);
	}
	$('#tq').val(c);
}	
	
function removeSubjectBox(subjectRowId)
{
	$('#'+subjectRowId).remove();
	onQC();
}

function dateLis(){
	var sd = $("#start_date").val();
	var ed = $("#end_date").val();
	if(sd != ''){
	var startDate = new Date(sd);	
	
	var todayDate = new Date(new Date().setDate(new Date().getDate() - 1));
	if(todayDate > startDate){
		$("#start_date").val('');
			$("#end_date").val('');
			alert('You can not select date older than today.');
			return;
		}
		}
	if(sd != '' && ed != ''){
		var endDate = new Date(ed);
		var startDate = new Date(sd);	
	var todayDate = new Date(new Date().setDate(new Date().getDate() -1 ));
		if(startDate > endDate){
			$("#start_date").val('');
			$("#end_date").val('');
			alert('Invalid dates selected');
			return;
		}
		if(todayDate > startDate){
		$("#start_date").val('');
			$("#end_date").val('');
			alert('Invalid dates selected');
		}	
	}
}

$(document).ready(function() {
    var wrapper         = $("#dynamic_subject_wrap"); //Fields wrapper
    var add_button      = $("#add_dynamic_subject"); //Add button ID

    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
		    getSubjectData();
            $(wrapper).append('<div id="remove_parameter"><div class="form-group col-xs-7 col-sm-8 col-md-9 col-lg-9" style="padding:0px;"><label class="pull-left">Select a Subject | No of Questions</label><select name="subject[]" class="form-control"><option value="test">Test</option></select></div><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="padding:25px 0px 0px 15px"><input type="number" name="question_no[]" class="form-control" min="0"></div><div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 text-center form-group"><a href="#" class="btn btn-danger btn-lg" style="margin-top:21px;" id="remove_dynamic_subject"><i class="fa fa-times"></i></a></div></div>'); //add input box
    });
    
    $(wrapper).on("click","#remove_dynamic_subject", function(e){ //user click on remove text
        e.preventDefault();
		$(this).closest('#remove_parameter').remove();
    })
});


function check_correct(){
if($("input[name=correct_answer]").val()<=0){
alert("Correct answer will have positive marks");
$("input[name=correct_answer]").val('');
}
}
function check_unattempted(){
if($("input[name=unattempted_answer]").val()>0){
alert("unattempted questions will not have positive marks");
$("input[name=unattempted_answer]").val('');
}
}
function check_wrong(){
if($("input[name=wrong_answer]").val()>0){
alert("wrong answer will not have positive marks");
$("input[name=wrong_answer]").val('');
}
}

</script>