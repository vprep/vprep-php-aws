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
                                <?php echo form_open('save_test_categories'); ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="box">
                                                <div class="box-body text-right">
                                                    <button name="save" type="submit" value="save" class="btn btn-success btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
                                                        <i class="fa fa-save"></i>
                                                    </button>
                                                    <?php echo anchor('educational/test_categories','<i class="fa fa-times"></i>',array("class"=>"btn btn-danger btn-lg")); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 showback">
                                            <div class="box box-primary">
                                                <div class="box-body" style="display: block;">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?php echo !empty($test_cat['id'])?$test_cat['id']:''; ?>"> 
                                                        </div>
														 
														<div class="form-group">
                                                            <label class="pull-left">Exam</label>
															<select name="exam_id" class="form-control" required>
																<option value="">Select Exam</option>
																<?php 
																if(count($exam_list)){
																	foreach($exam_list as $exam){
																?>
																<option value="<?php echo $exam["exam_id"];?>"><?php echo $exam["exam_name"];?></option>
																<?php }} ?>
															</select>
														   
                                                        </div>
														<div class="form-group">
                                                            <label class="pull-left">Select Parent Module only if you are creating a Sub Module</label>
                                                            <?php // echo form_dropdown('parent',$test_cat_opt,!empty($test_cat['parent'])?$test_cat['parent']:'','class="form-control"') ?>
															<select name="parent" class="form-control" onchange="getSubModule(this.value)">
																<option value="">Select Module</option>
																<?php 
																// print_r($test_cat_opt);
																
																	if($test_cat_opt)
																	{
																		foreach($test_cat_opt as $cat)
																		{
	
																		?>
																		<option value="<?php echo $cat['id'];?>"><?php echo $cat['title'];?></option>
																		<?php
																		}
																	}
																?>
																
															
															</select>
															
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="pull-left">Module Name</label>
                                                            <input type="text" name="title" class="form-control" placeholder="Enter Module Title" value="<?php echo !empty($test_cat['title'])?$test_cat['title']:''; ?>" data-title="Title"> 
                                                            <?php echo form_error('title', '<div class="text-red">* ', '</div>'); ?>
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