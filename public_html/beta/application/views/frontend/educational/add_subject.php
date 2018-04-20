<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="row" >
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>    
                                <?php echo form_open('educational/save_subject'); ?>
                                
                                <div class="row" style="background-color:#f7f7f7; padding:10px;margin:10px;">
								  <div class="form-group"><h3>Add Subject</h3></div>
 
                                    <div class="col-md-12 col-md-offset-0 pull-left showback" >
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div class="box-body">
                                                   
                                                    <div class="col-md-5">
														 <div class="form-group">
															<label class="pull-left">Select Course</label>
															<select class="form-control" name="course_name" required="required">
																<option value="">Select Course</option>
																<?php 
																if(count($course_listing)>0){
																	foreach($course_listing as $course){
																?>
																<option value="<?php echo $course['course_id'];?>"><?php echo $course['course_title'];?></option>
																<?php } }?> 
															</select>
															<?php echo form_error('course_name', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
														</div>
													</div>
													<div class="col-md-2">
														 
														<label class="pull-left">Add More Subject</label>
														 
														<button name="add_more" type="button" value="Add" id="add_more_subject" class="form-control btn btn-warning btn-lg" >
															<i class="fa fa-plus"></i>
														</button>
													 
													</div>
													<div class="clearfix">&nbsp;</div>
													<div class="col-md-5">
														<div class="form-group">
															<label class="pull-left">Subject Name</label>
															<input type="text" name="subject_name[]" class="form-control" placeholder="Enter Subject Name" value="" pattern="[a-zA-Z0-9_.&, -]+" >
															<?php echo form_error('subject_name[]', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
														</div>
													</div>
													<div class="col-md-5">
														<div class="form-group">
															<label class="pull-left">Subject Description</label>
															<input type="text" name="subject_desc[]" class="form-control" placeholder="Enter Subject Description" value="" >
															<?php echo form_error('subject_desc[]', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
														</div>
													</div>
													<div class="clearfix">&nbsp;</div>
													<div id="add_more_subject_box"></div>
													
													<div class="col-md-6" style=" margin-top: 10px;">
													<button name="save" type="submit" value="save" class="btn btn-success btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save">
														<i class="fa fa-save"></i>
													</button>
													<?php   echo anchor('educational/subject','<i class="fa fa-times"></i>',array("class"=>"btn btn-danger btn-lg")); ?>
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
$(document).ready(function() {
    var max_fields      = 100; //maximum input boxes allowed
    var wrapper         = $("#add_more_subject_box"); //Fields wrapper
    var add_button      = $("#add_more_subject"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
			var subId = "subject_"+x;
			var subOnClick = "removeSubject('"+subId+"')";
            $(wrapper).append('<div id="'+subId+'"><div class="col-md-5" > <div class="form-group"> <label class="pull-left">Subject Name</label> <input type="text" name="subject_name[]" class="form-control" placeholder="Enter Subject Name" value="" data-title="Title" required pattern="[a-zA-Z0-9_.-,& ]+"></div> </div> <div class="col-md-5"> <div class="form-group"> <label class="pull-left">Subject Description</label> <input type="text" name="subject_desc[]" class="form-control" placeholder="Enter Subject Description" value="" data-title="Title" required > </div> </div> <div class="col-md-2"><label>&nbsp;</label><a href="javascript:;" style="margin-top:20px;" class="remove_field btn btn-danger" onclick="'+subOnClick+'"><i class="fa fa-trash"></i></a></div></div>'); //add input box
        }
    });
    
  
});

function removeSubject(row)
{
	$("#"+row).remove();
}


</script>