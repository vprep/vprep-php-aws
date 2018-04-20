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
                                    <div class="col-md-12 showback">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="<?php echo !empty($test_ques['id'])?$test_ques['id']:''; ?>">
													</div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Select an exam to add question</label>
                                                        <?php echo form_dropdown('question_type',$test_cat_opt, !empty($test_ques['question_type'])?$test_ques['question_type']:'','class="form-control"') ?>
														<?php echo form_error('question_type', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
										<button name="start" type="submit" value="start" class="btn btn-primary btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
											Start
										</button>
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