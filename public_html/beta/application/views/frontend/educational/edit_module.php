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
                                <?php echo form_open('educational/updateModule'); ?>
                                    
                                    <div class="row" style="background-color:#f7f7f7; padding:10px;margin:10px;">
									<div class="form-group"><h3>Edit Module</h3></div>
                                        <div class="col-md-8 showback col-md-offset-2">
                                            <div class="box box-primary">
                                                <div class="box-body" style="display: block;">
                                                    <div class="box-body">
													 
													<input type="hidden" name="module_id" value="<?php echo urlencrypt($module_info->module_id); ?>">
 
														<div class="form-group">
                                                            <label class="pull-left">Subject *</label>
															<select name="subject_id" class="form-control">
																<option value="">Select Subject</option>
																<?php 
																if(count($subject_list)){
																	foreach($subject_list as $subject){
																?>
																<option value="<?php echo $subject->subject_id;?>" <?php if($module_info->module_subject_id==$subject->subject_id) echo "selected"; ?>><?php echo $subject->subject_title;?></option>
																<?php }} ?>
															</select>
														    <?php echo form_error('subject_id', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
														 
                                                        <div class="form-group">
                                                            <label class="pull-left">Module Name *</label>
                                                            <input type="text" name="module_name" class="form-control" placeholder="Enter Module Name" value="<?php echo $module_info->module_title;?>" pattern="[a-zA-Z0-9_.&, -]+" > 
                                                            <?php echo form_error('module_name', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
													    <div class="form-group">
															<button name="save" type="submit" value="save" class="btn btn-success btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save">
																<i class="fa fa-save"></i>
															</button>
															<?php   echo anchor('educational/module','<i class="fa fa-times"></i>',array("class"=>"btn btn-danger btn-lg")); ?>
															 
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
function getSubModule(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'parent='+val,
	success: function(data){
		
		alert(data);
		$("#state-list").html(data);
	}
	});
}
</script>