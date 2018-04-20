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
                                <?php echo form_open('educational/update_subject'); ?>
								<input type="hidden" name="subject_id" value="<?php echo $subject_detail->subject_id;?>">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="box">
                                            <div class="box-body text-right">
                                                <button name="save" type="submit" value="save" class="btn btn-success btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
                                                    <i class="fa fa-save"></i>
                                                </button>
                                                <?php echo anchor('educational/subject','<i class="fa fa-times"></i>',array("class"=>"btn btn-danger btn-lg")); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
								<br>
 
                                    <div class="col-md-12 showback" style="padding:10px;">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                     <div class="form-group">
                                                        <label class="pull-left">Select Course</label>
														<select class="form-control" name="course_name" required="required">
															<option value="">Select Course</option>
															<?php 
															if(count($course_listing)>0){
																foreach($course_listing as $course){
															?>
															<option value="<?php echo $course['course_id'];?>" <?php if($subject_detail->course_id==$course['course_id']) echo "selected"; ?>><?php echo $course['course_title'];?></option>
															<?php } }?> 
														</select>
                                                        <?php echo form_error('course_name', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="pull-left">Subject Name</label>
                                                        <input type="text" name="subject_name" class="form-control" placeholder="Enter Subject Name" value="<?php echo $subject_detail->subject_title;?>" pattern="[a-zA-Z0-9_.&, -]+">
                                                        <?php echo form_error('subject_name', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div>&nbsp;</div>
								 
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>