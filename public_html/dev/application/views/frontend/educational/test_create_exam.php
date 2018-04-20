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
                                <?php echo form_open('save_test_questions'); ?>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-4" style="padding-bottom:10px;">
                                            <button name="save" type="submit" value="save" class="btn btn-success btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
                                                Save &amp; Add
                                            </button>
										</div>
										<div class="col-md-4" style="padding-bottom:10px;">
											<button name="save" type="submit" value="save" class="btn btn-warning btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
                                                Save &amp; Exit
                                            </button>
										</div>
										<div class="col-md-4" style="padding-bottom:10px;">
                                            <?php echo anchor('educational/test_questions','Discard',array("class"=>"btn btn-danger btn-lg")); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 showback">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="<?php echo !empty($test_ques['id'])?$test_ques['id']:''; ?>"> </div>
                                                    <div id="dynamic_course_wrap">
														<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
															<label class="pull-left">Select a Course</label>
															<?php echo form_dropdown('course[]',$test_cat_opt, !empty($test_ques['question_type'])?$test_ques['question_type']:'','class="form-control"') ?>
															<?php echo form_error('question_type', '<div class="text-red">* ', '</div>'); ?>
														</div>
													</div>
													<div id="dynamic_subject_wrap">
														<div class="form-group col-xs-7 col-sm-8 col-md-9 col-lg-9" style="padding:0px;">
															<label class="pull-left">Select a Subject | No of Questions</label>
															<?php echo form_dropdown('subject[]',$test_cat_opt, !empty($test_ques['question_type'])?$test_ques['question_type']:'','class="form-control"') ?>
															<?php echo form_error('question_type', '<div class="text-red">* ', '</div>'); ?>
														</div>
														<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="padding:25px 0px 0px 15px">
															<input type="number" name="question_no[]" class="form-control" min="0">
														</div>
														<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 text-center form-group">
															<a href="#" class="btn btn-primary btn-lg" style="margin-top:21px;" id="add_dynamic_subject"><i class="fa fa-plus-square"></i></a>
														</div>
													</div>
													<div class="form-group">
                                                        <label class="pull-left">Enter the Exam Name</label>
                                                        <input  type="text" name="title" class="form-control" placeholder="Enter Question" value="<?php echo !empty($test_ques['title'])?$test_ques['title']:''; ?>" data-title="Question">
                                                        <?php echo form_error('title', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Tutor/Institute Name</label>
                                                        <input  type="text" name="title" class="form-control" data-title="Question">
                                                        <?php echo form_error('ques_img', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Total Questions</label>
                                                        <input type="text" name="totalquestions" class="form-control" value="<?php echo !empty($test_ques['option1'])?$test_ques['option1']:''; ?>" data-title="Option 1">
                                                        <?php echo form_error('option1', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Total Time to Complete</label>
                                                        <input type="text" name="totaltime" class="form-control" value="<?php echo !empty($test_ques['option2'])?$test_ques['option2']:''; ?>" data-title="Option 2">
                                                        <?php echo form_error('option2', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Marks for correct answer</label>
                                                        <input type="text" name="correct_answer" class="form-control" value="<?php echo !empty($test_ques['option3'])?$test_ques['option3']:''; ?>" data-title="Option 3">
                                                        <?php echo form_error('option3', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Marks for wrong answer</label>
                                                        <input type="text" name="wrong_answer" class="form-control" value="<?php echo !empty($test_ques['option4'])?$test_ques['option4']:''; ?>" data-title="Option 4">
                                                        <?php echo form_error('option4', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
													<div class="form-group">
                                                        <label class="pull-left">Marks for unattempted answer</label>
                                                        <input type="text" name="unattempted_answer" class="form-control" value="<?php echo !empty($test_ques['option4'])?$test_ques['option4']:''; ?>" data-title="Option 4">
                                                        <?php echo form_error('option4', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group">

														<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="margin:0px; padding:0px;">
															<div class="col-xs-5 col-sm-5 col-md-3 col-lg-2" style="margin:0px; padding:0px;">
                                                                <label class="pull-left">Active :</label>
																<input type="radio" name="active" value="yes">
															</div>
															<div class="col-xs-5 col-sm-5 col-md-3 col-lg-2" style="margin:0px; padding:0px;">
                                                                <label class="pull-left">Inactive :</label>
																<input type="radio" name="active" value="no">
															</div>
														</div>
                                                    </div>
                                                    </br>
                                                    </br>
                                                    </br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-4" style="padding-bottom:10px;">
                                            <button name="save" type="submit" value="save" class="btn btn-success btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
                                                Save &amp; Add
                                            </button>
										</div>
										<div class="col-md-4" style="padding-bottom:10px;">
											<button name="save" type="submit" value="save" class="btn btn-warning btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
                                                Save &amp; Exit
                                            </button>
										</div>
										<div class="col-md-4" style="padding-bottom:10px;">
                                            <?php echo anchor('educational/test_questions','Discard',array("class"=>"btn btn-danger btn-lg")); ?>
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
/* DYNAMIC FORM FIELDS - SUBJECT */
$(document).ready(function() {
    var wrapper         = $("#dynamic_subject_wrap"); //Fields wrapper
    var add_button      = $("#add_dynamic_subject"); //Add button ID

    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
            $(wrapper).append('<div id="remove_parameter"><div class="form-group col-xs-7 col-sm-8 col-md-9 col-lg-9" style="padding:0px;"><label class="pull-left">Select a Subject | No of Questions</label><select name="subject[]" class="form-control"><option value="test">Test</option></select></div><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="padding:25px 0px 0px 15px"><input type="number" name="question_no[]" class="form-control" min="0"></div><div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 text-center form-group"><a href="#" class="btn btn-danger btn-lg" style="margin-top:21px;" id="remove_dynamic_subject"><i class="fa fa-times"></i></a></div></div>'); //add input box
    });
    
    $(wrapper).on("click","#remove_dynamic_subject", function(e){ //user click on remove text
        e.preventDefault();
		$(this).closest('#remove_parameter').remove();
    })
});

$("#image_question").css("display","none");
$("#text_question").css("display","block");
		
function QuesType(getinput)
{
	if(getinput==1)
	{
		$("#image_question").css("display","none");
		$("#text_question").css("display","block");
	}
	else
	{
		$("#image_question").css("display","block");
		$("#text_question").css("display","none");
	}
	
}


function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#show_img')
                    .attr('src', e.target.result)
                    .height(150);
					
					$("#show_img").css("display","block");
            };

            reader.readAsDataURL(input.files[0]);
        }
}
$("#show_img").error(function () { 
    $(this).hide();
    // or $(this).css({visibility:"hidden"}); 
});

</script>