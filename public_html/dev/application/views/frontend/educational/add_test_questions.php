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
                                                    <div class="form-group">
                                                        <label class="pull-left">Select a Subject</label>
                                                        <select class="form-control">

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Select a Module</label>
                                                        <select class="form-control">

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Select a Sub Module</label>
                                                        <select class="form-control">

                                                        </select>
                                                    </div>

													<div class="form-group">
                                                        <label class="pull-left">Question Type</label>
														<select name="Ques_type" class="form-control" onchange="QuesType(this.value)" >
															<option value="1">Text</option>
															<option value="2">Image</option>
															<option value="3">Both</option>
														</select>
                                                         
                                                    </div>

                                                    <div class="form-group" id="text_question">
                                                        <label class="pull-left">Enter Question</label>
                                                        <input  type="text" name="title" class="form-control" placeholder="Enter Question" value="<?php echo !empty($test_ques['title'])?$test_ques['title']:''; ?>" data-title="Question">
                                                        <?php echo form_error('title', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group" id="image_question">
                                                        <label class="pull-left">Enter Question</label>
                                                        <input  type="file" name="ques_img" class="form-control" data-title="Question" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
                                                        <?php echo form_error('ques_img', '<div class="text-red">* ', '</div>'); ?>
                                                        <div id="blah" style="text-align:left;margin-top:10px"><img id="show_img" src="#" alt="your image" /></div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="pull-left">Options :</label>
                                                    </div>

                                                    </br>
                                                    </br>

                                                    <div class="form-group">
                                                        <label class="pull-left">Options Type 1 to 4 :</label>
                                                        <select name="options_type" class="form-control" onchange="OptionsType(this.value)" >
                                                            <option value="1">Text</option>
                                                            <option value="2">Image</option>
                                                            <option value="3">Both</option>
                                                        </select>

                                                    </div>

                                                    <div class="form-group" id="answer_1">
                                                        <label class="pull-left">Option 1</label>
                                                        <input type="text" name="option1" class="form-control" placeholder="Enter Option 1" value="<?php echo !empty($test_ques['option1'])?$test_ques['option1']:''; ?>" data-title="Option 1">
                                                        <?php echo form_error('option1', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group" id="image_answer_1">
                                                        <label class="pull-left">Option 1</label>
                                                        <input  type="file" name="answer_img_1" class="form-control" data-title="Answer 1" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
                                                        <?php echo form_error('ques_img', '<div class="text-red">* ', '</div>'); ?>
                                                        <div id="blah" style="text-align:left;margin-top:10px"><img id="show_img_answer_1" class="hidden" src="#" alt="your image" /></div>
                                                    </div>
                                                    <div class="form-group" id="answer_2">
                                                        <label class="pull-left">Option 2</label>
                                                        <input type="text" name="option2" class="form-control" placeholder="Enter Option 2" value="<?php echo !empty($test_ques['option2'])?$test_ques['option2']:''; ?>" data-title="Option 2">
                                                        <?php echo form_error('option2', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group" id="image_answer_2">
                                                        <label class="pull-left">Option 2</label>
                                                        <input  type="file" name="answer_img_2" class="form-control" data-title="Answer 2" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
                                                        <?php echo form_error('ques_img', '<div class="text-red">* ', '</div>'); ?>
                                                        <div id="blah" style="text-align:left;margin-top:10px"><img id="show_img_answer_2" class="hidden" src="#" alt="your image" /></div>
                                                    </div>
                                                    <div class="form-group" id="answer_3">
                                                        <label class="pull-left">Option 3</label>
                                                        <input type="text" name="option3" class="form-control" placeholder="Enter Option 3" value="<?php echo !empty($test_ques['option3'])?$test_ques['option3']:''; ?>" data-title="Option 3">
                                                        <?php echo form_error('option3', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group" id="image_answer_3">
                                                        <label class="pull-left">Option 3</label>
                                                        <input  type="file" name="answer_img_3" class="form-control" data-title="Answer 3" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
                                                        <?php echo form_error('ques_img', '<div class="text-red">* ', '</div>'); ?>
                                                        <div id="blah" style="text-align:left;margin-top:10px"><img id="show_img_answer_3" class="hidden" src="#" alt="your image" /></div>
                                                    </div>
                                                    <div class="form-group" id="answer_4">
                                                        <label class="pull-left">Option 4</label>
                                                        <input type="text" name="option4" class="form-control" placeholder="Enter Option 4" value="<?php echo !empty($test_ques['option4'])?$test_ques['option4']:''; ?>" data-title="Option 4">
                                                        <?php echo form_error('option4', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group" id="image_answer_4">
                                                        <label class="pull-left">Option 4</label>
                                                        <input  type="file" name="answer_img_4" class="form-control" data-title="Answer 4" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
                                                        <?php echo form_error('ques_img', '<div class="text-red">* ', '</div>'); ?>
                                                        <div id="blah" style="text-align:left;margin-top:10px"><img id="show_img_answer_4" class="hidden" src="#" alt="your image" /></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Difficulty Level</label>
                                                        <?php
                                                        $dl_opt=array(
                                                            'easy'      => 'Easy',
                                                            'medium'    => 'Medium',
                                                            'difficult' => 'Difficult'
                                                        );
                                                        echo form_dropdown('difficulty_level',$dl_opt,!empty($test_ques['difficulty_level'])?$test_ques['difficulty_level']:'','class="form-control"') ?>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Correct Answer</label>
                                                        <?php 
                                                        $opt=array(
                                                            ''=>'Select',
                                                            '1'=>'Option 1',
                                                            '2'=>'Option 2',
                                                            '3'=>'Option 3',
                                                            '4'=>'Option 4',
                                                        );
                                                        echo form_dropdown('correct_ans',$opt,!empty($test_ques['correct_ans'])?$test_ques['correct_ans']:'','class="form-control"'); ?>
                                                        <?php echo form_error('correct_ans', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
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

$("#image_question").css("display","none");
$("#image_answer_1").css("display","none");
$("#image_answer_2").css("display","none");
$("#image_answer_3").css("display","none");
$("#image_answer_4").css("display","none");
$("#text_question").css("display","block");
		
function QuesType(getinput)
{
	if(getinput==1)
	{
		$("#image_question").css("display","none");
		$("#text_question").css("display","block");
	}
    if(getinput==2)
	{
		$("#image_question").css("display","block");
		$("#text_question").css("display","none");
	}
    if(getinput==3)
    {
        $("#image_question").css("display","block");
        $("#text_question").css("display","block");
    }
}

function OptionsType(getinput)
{
	if(getinput==1)
	{
		$("#image_answer_1").css("display","none");
		$("#answer_1").css("display","block");
        $("#image_answer_2").css("display","none");
		$("#answer_2").css("display","block");
        $("#image_answer_3").css("display","none");
		$("#answer_3").css("display","block");
        $("#image_answer_4").css("display","none");
		$("#answer_4").css("display","block");
	}
    if(getinput==2)
	{
		$("#image_answer_1").css("display","block");
		$("#answer_1").css("display","none");
        $("#image_answer_2").css("display","block");
        $("#answer_2").css("display","none");
        $("#image_answer_3").css("display","block");
        $("#answer_3").css("display","none");
        $("#image_answer_4").css("display","block");
        $("#answer_4").css("display","none");

	}
    if(getinput==3)
    {
        $("#image_answer_1").css("display","block");
        $("#answer_1").css("display","block");
        $("#image_answer_2").css("display","block");
        $("#answer_2").css("display","block");
        $("#image_answer_3").css("display","block");
        $("#answer_3").css("display","block");
        $("#image_answer_4").css("display","block");
        $("#answer_4").css("display","block");

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