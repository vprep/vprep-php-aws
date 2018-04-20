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
                                <?php echo form_open('educational/save_new_exam'); ?>
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
															<label class="pull-left">Exam Category</label>
															<?php
																$userid=$this->session->userdata('userdata')['userid'];
																$exam_cat_opt=$this->edu->getMainExamCat($userid);
															?>
															<select name="parent" class="form-control">
																<option value="" selected="selected">Choose Category</option>
																<?php 
																	if(count($exam_cat_opt)>0)
																	{
																	   foreach($exam_cat_opt as $tec){
																		
																?>
																<option value="<?php  echo $tec['id'];?>" style="font-weight:bold;"><?php   echo $tec['title']; ?></option>
																<?php 
																$getSubData = $this->edu->getSubExamCat($tec['id']);
																if(count($getSubData)>0)
																{
																   foreach($getSubData as $sub){
																	   
																	   
																?>
																	<option value="<?php echo $sub['id'];?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sub['title']; ?></option>
																		<?php } } ?>
																<?php
																	} }
																?>
																 
															</select>
														</div>
														
                                                        <div class="form-group">
                                                            <label class="pull-left">Exam Title</label>
                                                            <input type="text" name="title" class="form-control" placeholder="Enter Exam Title" value="<?php echo !empty($test_cat['title'])?$test_cat['title']:''; ?>" data-title="Title"> 
                                                            <?php echo form_error('title', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="pull-left">Test Time (In Minutes)</label>
                                                            <?php $min_arr=array(10=>10,20=>20,30=>30,40=>40,45=>45,50=>50,60=>60); ?>
                                                            <?php echo form_dropdown('test_time',$min_arr,!empty($test_cat['test_time'])?$test_cat['test_time']:'','class="form-control"'); ?>
                                                            
                                                            <?php echo form_error('title', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="pull-left">Description</label>
                                                            <textarea class="textarea form-control" name="description" placeholder="Place some text here" rows="10" cols="80" value="" data-title="Description">
                                                                <?php echo !empty($test_cat['description'])?$test_cat['description']:''; ?>
                                                            </textarea>
                                                            <?php echo form_error('description', '<div class="text-red">* ', '</div>'); ?>
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