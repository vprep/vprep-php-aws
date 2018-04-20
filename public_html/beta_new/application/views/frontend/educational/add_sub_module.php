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
                                
                                    <form action="<?php echo base_url('educational/saveSubModule'); ?>" method="post" id="save_test_questions">
                                    <div class="row" style="background-color:#f7f7f7; padding:10px;margin:10px;">
									<div class="form-group"><h3>Add Sub Module</h3></div>
                                        <div class="col-md-8 showback col-md-offset-2">
                                            <div class="box box-primary">
                                                <div class="box-body" style="display: block;">
                                                    <div class="box-body">
			
														<div class="form-group">
                                                            <label class="pull-left">Subject *</label>
															<select name="subject_id" class="form-control" onchange="getModule();">
																<option value="">Select Subject</option>
																<?php 
																if(count($subject_list)){
																	foreach($subject_list as $subject){
																?>
																<option value="<?php echo $subject->subject_id;?>" <?php if(set_value("subject_id")==$subject->subject_id) echo "selected"; ?>><?php echo $subject->subject_title;?></option>
																<?php }} ?>
															</select>
														    <?php echo form_error('subject_id', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
														<div class="form-group">
                                                            <label class="pull-left">Module </label>
															<select name="module_id" class="form-control" id="show_module_id">
																
																<?php 
														
																	if(!empty($mi)){
																	
																	$mn = '';
																	
																	$sarr = array();
																	
																	foreach($marr as $te){
																		if($te->module_id === $mi){
																			$mn = $te->module_title;
																		} else{
																			$sarr[] = $te;
																		}
																	}
																	
																	if(!empty($mi)) { ?>
																
																	<option value="<?php echo $mi; ?>" selected="selected"><?php echo $mn; ?></option>
																	
																	<?php 
																	if(count($sarr)>0)
																	{
																	   foreach($sarr as $tec){ ?>
																<option value="<?php  echo $tec->module_id; ?>" ><?php   echo $tec->module_title; ?></option>
																 <?php
																	} }
																?>
																	
																	<?php } else { ?>
																
																	<option value="">Select Module</option>
																
																	<?php } }else if(!empty($si)){  ?>
																
																	<option value="" selected>Choose Module</option>
																
																		<?php 
																	if(count($marr)>0)
																	{
																	   foreach($marr as $tec){ ?>
																<option value="<?php  echo $tec->module_id; ?>" ><?php   echo $tec->module_title; ?></option>
																 <?php
																	} }
																?>
																
																	<?php }else { ?>
																	
																		<option value="">Select Module</option>
																
																	<?php }   ?>
																
															</select>
														    <?php echo form_error('module_id', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
														<div class="col-md-10">
															<div class="form-group">
																<label class="pull-left">Module Name *</label>
																<input type="text" name="module_name[]" class="form-control" placeholder="Enter Module Name" value="" pattern="[a-zA-Z0-9_.&, -]+"> 
																<?php echo form_error('module_name[]', '<div class="text-red">* ', '</div>'); ?>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
                                                            <a href="javascript:;" class="btn btn-warning" style="margin-top:20px;" id="add_more_module"> <i class="fa fa-plus"></i></a>
															</div>
														</div>
														<div id="add_more_module_box"> </div>
														<div class="col-md-12">
															<div class="form-group">
																<button name="save" type="submit" value="save" class="btn btn-success btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save">
																	<i class="fa fa-save"></i>
																</button>
																<?php   echo anchor('educational/submodule','<i class="fa fa-times"></i>',array("class"=>"btn btn-danger btn-lg")); ?>
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
<?php
if(set_value("subject_id")!=""){
	
	?>
 
getModule();
<?php } ?>
</script>
<script>
$(document).ready(function() {
    var max_fields      = 100; //maximum input boxes allowed
    var wrapper         = $("#add_more_module_box"); //Fields wrapper
    var add_button      = $("#add_more_module"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
			var subId = "subject_"+x;
			var subOnClick = "removeSubject('"+subId+"')";
            $(wrapper).append('<div id="'+subId+'"><div class="col-md-10" > <div class="form-group"> <label class="pull-left">Module Name</label> <input type="text" name="module_name[]" class="form-control" placeholder="Enter Module Name" value="" required pattern="[a-zA-Z0-9_.-,& ]+" ></div> </div><div class="col-md-2"><label>&nbsp;</label><a href="javascript:;" style="margin-top:20px;" class="remove_field btn btn-danger" onclick="'+subOnClick+'"><i class="fa fa-trash"></i></a></div></div>'); //add input box
        }
    });
    
  
});

function removeSubject(row)
{
	$("#"+row).remove();
}


</script>