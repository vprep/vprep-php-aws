<div id="page-wrapper">
    <div class="main-content">
        <div class="content">
            <div class="page-register rlp">
                <div class="container">
                    <div class="register-wrapper rlp-wrapper">
                        <div class="register-table rlp-table">
                             
							
							<div class="register-title rlp-title">Add Existing Student</div>
							<form name="existing_student" method="post" action="<?php echo base_url("educational/searchstudent");?>">
							<div class="register-form bg-w-form rlp-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="regname" class="control-label form-label">Search by Email<span class="highlight">*</span></label>
                                        <input id="regname" type="email" name="search_email_id" <?php echo !empty(@$setEmail)?'value="'.@$setEmail.'" readonly':''; ?> placeholder="Enter Student Email" class="form-control form-input" style="background:#fff;" required="required">
                                        <input type="hidden" name="set_search_email" value="<?php echo @$setEmail; ?>" >
                                        <input type="hidden" name="set_user_id" value="<?php echo @$setUserId; ?>" >
                                        
                                        <?php echo '<div class="text-default" style="font-size:16px;">'.@$response_message.'</div>'; ?>
                                    </div>
									<?php if(@$setEmail) { 
									
									$studentInfo = (object) $this->stu->loadStudent($studentDetail->id);
									?>
									<div class="col-md-12" style="background-color:#242F3C;color:#fff;">
									<p>&nbsp;</p>
									<div class="col-md-6" >
										<?php if($studentInfo->image!="") { echo "<p><img src='".base_url('uploads/profile_pic/'.$studentInfo->image)."' style='height:180px;width:auto;border-radius:90px;'></p>"; } else {  echo "<p><img src='".base_url('uploads/profile_pic/profile-pic.png')."' style='height:180px;width:auto;'></p>"; }?>
									</div>
									<div class="col-md-6">
									
									<?php if($studentInfo->name!="") echo "<p>Name : ".$studentInfo->name."</p>"; ?>
									<?php if($studentInfo->email!="") echo "<p>Email : ".$studentInfo->email."</p>"; ?>
									<?php if($studentInfo->phone!="") echo "<p>Phone : ".$studentInfo->phone."</p>"; ?>
									<?php if($studentInfo->state!="") echo "<p>State : ".$studentInfo->state."</p>"; ?>
									<?php if($studentInfo->city!="") echo "<p>City : ".$studentInfo->city."</p>"; ?>
									<?php if($studentInfo->address!="") echo "<p>Address : ".$studentInfo->address."</p>"; ?>
									<?php if($studentInfo->zip!="") echo "<p>Zipcode : ".$studentInfo->zip."</p>"; ?>
									<?php if($studentInfo->created_at!="") echo "<p>User Since : ".date('d , M Y',$studentInfo->created_at)."</p>"; ?>
									<?php // if($studentInfo->current_institute!="") echo "<p>Current Institute : ".$studentInfo->current_institute."</p>"; ?>
									<?php // if($studentInfo->course_title!="") echo "<p>Course Selected : ".$studentInfo->course_title."</p>"; ?>
									</div>
									<?php
									// print_r($studentInfo);
									?>
									</div>
									<input type="hidden" name="set_student_id" value="<?php echo $studentInfo->id; ?>" >
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
									<?php } ?>
									<div class="col-md-12">
										<?php if(@$setEmail) { ?>
										
										
                                        <button type="submit" class="btn btn-register btn-green col-md-4"><span>Add Student</span></button>
										<?php } else { ?>
										<button type="submit" class="btn btn-register btn-green col-md-4"><span>Search Student</span></button>
										<?php } ?>
                                    </div>
								</div>
							</div>
							</form>
							 
							<div class="register-title rlp-title">Add New Student</div>
							
                            <?php $mes = $this->message->display();
                                echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                            <?php echo form_open('educational/save_student'); ?>
                            <?php echo form_hidden('id',!empty($post_data['id'])?$post_data['id']:''); ?>
							<input id="regname" type="hidden" name="current_institute" value="<?php echo !empty($this->session->userdata('userdata')['name'])?$this->session->userdata('userdata')['name']:''; ?>" class="form-control form-input" >
							<input type="hidden" name="password" value="<?php // echo rand(9999,99999999); ?>123456" >
							<input type="hidden" name="prepairing_for" value="" >
											   
                            <div class="register-form bg-w-form rlp-form">
                                <div class="row">
 
                                    <div class="col-md-6">
                                        <label for="regemail" class="control-label form-label">Email <span class="highlight">*</span></label>
                                        <input id="regemail" type="email" name="email" <?php echo !empty($post_data['email'])?'value="'.$post_data['email'].'" readonly':''; ?> placeholder="" 
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('email', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
        
									<div class="col-md-6">
                                        <label for="regemail" class="control-label form-label">Course <span class="highlight">*</span></label>
 
										<select name="course_name" class="form-control form-input" required="required">
										<option value="">Select Course</option>
										<?php
 
										
										// print_r($courseList);
										foreach($course_listing as $cor) 
										{
										?>
										<option value="<?php echo $cor['course_id'];?>"><?php echo $cor['course_title'];?></option>
										<?php } ?>
										
										</select>
											   
                                        <?php echo form_error('course_name', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
           
 
          
                                </div>
                            </div>
                            <div class="register-submit">
                                <button type="submit" class="btn btn-register btn-green"><span>Add Student</span></button>
                            </div>
                            <?php echo form_close(); ?>
						 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>