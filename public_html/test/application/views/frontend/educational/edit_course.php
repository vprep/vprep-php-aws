<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php 
									$mes = $this->message->display();
									echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; 
								?>    
                                <?php echo form_open('educational/update_course'); ?>
                             
                                <div class="row" style="background-color:#f7f7f7; padding:10px;margin:10px;">
                                    <div class="col-md-6 col-md-offset-3 pull-left showback">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div class="box-body">
														<div class="form-group">
															<h3>Edit Course</h3>
														</div>
                                                    
 
                                                    <div class="form-group">
                                                        <label class="pull-left">Course Name</label>
                                                        <input type="text" name="course_name" class="form-control" pattern="[a-zA-Z0-9_.&, -]+" placeholder="Enter Course Name" value="<?php echo $getCourse->course_title;?>" data-title="Title">
                                                        <input type="hidden" name="course_id" value="<?php echo $getCourse->course_id;?>">
														<?php echo form_error('course_name', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
                                                    </div>
													<div class="form-group">
                                                        <label class="pull-left">Course Description</label>
                                                        <textarea name="course_desc" class="form-control" rows="4" placeholder="Enter Course Description"><?php echo $getCourse->course_desc;?></textarea>
														<?php echo form_error('course_desc', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
                                                    </div>
													<div class="form-group">
														<button name="save" type="submit" value="save" class="btn btn-success btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save">
															<i class="fa fa-save"></i>
														</button>
													<?php   echo anchor('educational/course','<i class="fa fa-times"></i>',array("class"=>"btn btn-danger btn-lg")); ?>
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