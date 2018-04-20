<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                <?php // echo validation_errors(); ?>
								<form name="save_new_exam" action="<?php echo base_url("educational/save_edited_exam"); ?>" method="post" id="save_new_exam">
                                  
                                    <div class="row">
                                        <div class="col-md-12 showback">
                                            <div class="box box-primary">
                                                <div class="box-body" style="display: block;">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?php echo !empty($test_cat['id'])?$test_cat['id']:''; ?>"> 
                                                        </div>
														
														<div class="form-group">
                                                            <input type="hidden" name="eid" value="<?php echo !empty($eid)?$eid:''; ?>" readonly> 
                                                        </div>
														
														<div class="form-group">
															<label class="pull-left">Select Course</label>
															<select name="course" class="form-control" required="required" onchange="getSubjectData(this.value)">
																<option value="" selected="selected">Choose Course</option>
																<?php 
																	if(count($course_listing)>0)
																	{
																		
																		$ci = $exam_details['course_id'];
																		
																	   foreach($course_listing as $tec){
																		
																		if($ci === $tec['course_id']){
																		
																?>
																<option value="<?php  echo $tec['course_id'];?>" selected><?php   echo $tec['course_title']; ?></option>
																 
																		<?php } else {?>
																 <option value="<?php  echo $tec['course_id'];?>" ><?php   echo $tec['course_title']; ?></option>
																 <?php
																	}
																	   }
																	}
																?>
															</select>
														</div>
														
														<div class="form-group">
															<div id="show_subject_id" class="col-md-12">
																
																<?php
																	
																	$subs = $this->edu->loadSubject($exam_details['course_id']);
																	
																	$sub1 = $exam_subjects[0];
																	
																?>
																
																<div class="col-md-6">
																<label class="pull-left">Select Subject</label>
																<select name="subject[]" class="form-control" required="required" id="subject_id" onchange="getExam(this.value)" >
																
																<option value="" selected="selected">Choose Subject</option>
																
																<?php 
																	foreach($subs as $su){
																		if($su->subject_id == $sub1['subject_id']){
																?>
																<option value="<?php echo $su->subject_id; ?>" selected="selected"><?php echo $su->subject_title; ?></option>
																<?php } else { ?>
																<option value="<?php echo $su->subject_id; ?>"><?php echo $su->subject_title; ?></option>
																<?php }  }?>
																
																</select>
																</div>
																
																<div class="col-md-3">
																	<label class="pull-left">Number of Question</label>
																	<input type="number" min="1" value="<?php echo $sub1['num_question']; ?>" name="subject_ques_num[]" required class="form-control" onchange="onQC()">
																</div>
																
																<div class="col-md-3">
																	<a href="javascript:;" class="btn btn-primary btn-lg" style="margin-top:21px;" id="add_dynamic_subject" onclick="getMoreSubjectData();">
																	<i class="fa fa-plus-square"></i>
																	</a>
																</div>
															
															</div> 
														</div>
														
														<div class="form-group">
															<div id="show_subject_id_more" class="col-md-12">
															
															<?php
															
																$subs = $this->edu->loadSubject($exam_details['course_id']);
																
																$esc = count($exam_subjects);
																
																if($esc > 1){
																
																for($i = 1; $i < $esc; $i++){
																	
																	$ran = rand(111111, 999999);
																	
																	$sz = $exam_subjects[$i];
																
															?>
															
															<div id='<?php echo $ran; ?>'>
															<div class="col-md-6">
																<label class="pull-left">Select Subject</label>
																<select name="subject[]" class="form-control" required="required" id="subject_id" onchange="getExam(this.value)" >
																
																<option value="" selected="selected">Choose Subject</option>
															
																<?php 
																	foreach($subs as $su){
																		if($su->subject_id == $sz['subject_id']){
																?>
																<option value="<?php echo $su->subject_id; ?>" selected="selected"><?php echo $su->subject_title; ?></option>
																<?php } else { ?>
																<option value="<?php echo $su->subject_id; ?>"><?php echo $su->subject_title; ?></option>
																<?php }  }?>
															
																</select>
																</div>
																
																<div class="col-md-3">
																<label class="pull-left">Number of Question</label>
																<input type="number" min="1" value="<?php echo $sz['num_question']; ?>" name="subject_ques_num[]" required class="form-control" onchange="onQC()">
																</div>
																	<div class="col-md-3">
																	<a href="javascript:;" class="btn btn-danger btn-lg" style="margin-top:21px;" onclick="removeSubjectBox('<?php echo $ran; ?>');">
																		<i class="fa fa-trash"></i>
																	</a>
																	</div>
																</div>
																
																<div class="clearfix"><br>&nbsp;</div>
																
															<?php } } ?>
															
															</div> 
														</div>
														
														<div class="clearfix">&nbsp;</div>
														
														<div class="form-group">
															<label class="pull-left">Tutor/Institute Name</label>
															<input  type="text" name="tutor_name" value="<?php echo $exam_details['exam_tutor_name']; ?>" class="form-control" data-title="Question">
															<?php echo form_error('tutor_name', '<div class="text-red">* ', '</div>'); ?>
														</div>
														 
                                                        <div class="form-group">
                                                            <label class="pull-left">Exam Name</label>
                                                            <input type="text" name="title" class="form-control" required="required" placeholder="Enter Exam Name" value="<?php echo !empty(set_value("title")) ? set_value('title') : $exam_details['exam_name']; ?>" data-title="Title"> 
                                                            <?php echo form_error('title', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="pull-left">Total Question</label>
                                                            <input type="number" id="tq" name="total_question" required="required" class="form-control" placeholder="Total Question" value="<?php echo !empty(set_value("total_question")) ? set_value('total_question') : $exam_details['exam_max_ques']; ?>" data-title="Total Question" readonly> 
                                                            <?php echo form_error('total_question', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="pull-left">Test Time ( 5 to 240 In Minutes )</label>
                                                            <?php $min_arr=array(10=>10,20=>20,30=>30,40=>40,45=>45,50=>50,60=>60); ?>
                                                            <?php // echo form_dropdown('test_time',$min_arr,!empty($test_cat['test_time'])?$test_cat['test_time']:'','class="form-control"'); ?>
                                                            <input type="number" name="test_time" class="form-control" required="required" placeholder="Test Time" value="<?php echo !empty(set_value("test_time")) ? set_value('test_time') : $exam_details['exam_time']; ?>" data-title="Test Time" min="5" max="240"> 
                                                            <?php echo form_error('test_time', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
												
														<div class="col-md-6">
															<div class="form-group">
																<label class="pull-left">Start Date</label>
																<input type="date" name="start_date" class="form-control" value="<?php echo !empty(set_value("start_date")) ? set_value('start_date') : $exam_details['start_date']; ?>">
																<?php echo form_error('start_date', '<div class="text-red">* ', '</div>'); ?>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="pull-left">End Date</label>
																<input type="date" name="end_date" class="form-control" value="<?php echo !empty(set_value("end_date")) ? set_value('end_date') : $exam_details['end_date']; ?>">
																<?php echo form_error('end_date', '<div class="text-red">* ', '</div>'); ?>
															</div>
														</div>
														<div class="form-group">
															<label class="pull-left">Marks for Correct Answer</label>
															<input type="number" name="correct_answer" class="form-control" value="<?php echo !empty(set_value("correct_answer")) ? set_value('correct_answer') : $exam_details['marks_for_correct']; ?>">
															<?php echo form_error('correct_answer', '<div class="text-red">* ', '</div>'); ?>
														</div>
														<div class="form-group">
															<label class="pull-left">Marks for Wrong Answer</label>
															<input type="number" name="wrong_answer" class="form-control" value="<?php echo !empty(set_value("wrong_answer")) ? set_value('wrong_answer') : $exam_details['marks_for_wrong']; ?>">
															<?php echo form_error('wrong_answer', '<div class="text-red">* ', '</div>'); ?>
														</div>
														<div class="form-group">
															<label class="pull-left">Marks for Unattempted Answer</label>
															<input type="number" name="unattempted_answer" class="form-control" value="<?php echo !empty(set_value("unattempted_answer")) ? set_value('unattempted_answer') : $exam_details['marks_for_unattemp']; ?>">
															<?php echo form_error('unattempted_answer', '<div class="text-red">* ', '</div>'); ?>
														</div>													
														<div class="form-group">
														 <label class="pull-left">Description</label>
														 <br>
														</div>
                                                        <div class="form-group">
                                                           
                                                            <textarea class="textarea form-control" name="description" rows="10" cols="80" id="description">
                                                                <?php echo !empty(set_value("description")) ? set_value('description') : $exam_details['exam_detail']; ?>
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
		$.ajax({
			type: 'POST',
			url: '<?php echo base_url('educational/getSubject');?>',
			data: $('#save_new_exam').serialize(),
			dataType: 'text',
			timeout: 30000,
			success: function(responseMess) {
				var optionsValues = jQuery.parseJSON(responseMess);
				options.html(optionsValues);
			},
			error: function(request, status, err) {
				if(status == "timeout") {
					alert('Oops !! There might me network error, please try one more time !!');
				}
			}
		});
		var mo = $("#show_subject_id_more");
		mo.html('');
	}else{
		var mo = $("#show_subject_id");
		mo.html('');
		var mo = $("#show_subject_id_more");
		mo.html('');
	}
}

//var sci = '<?php echo $exam_details['course_id']; ?>';
//if(sci != ''){
//	getSubjectData(sci);
//}

function onQC(){
	var inps = document.getElementsByName('subject_ques_num[]');
	var c = 0;
	for (var i = 0; i <inps.length; i++) {
		var inp = parseInt(inps[i].value);
		c += inp;
		console.log("pname["+i+"].value="+inp+" c - "+c);
	}
	$('#tq').val(c);
	//document.getElementsByName('total_question').innerHTML = c;
}

function getMoreSubjectData()
{ 
	var options = $("#show_subject_id_more");
	$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/getMoreSubject');?>',
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
}
	
	
function removeSubjectBox(subjectRowId)
{
	$('#'+subjectRowId).remove();
	onQC();
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
</script>emove text
        e.preventDefault();
		$(this).closest('#remove_parameter').remove();
    })
});
</script>