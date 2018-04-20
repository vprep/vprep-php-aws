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
                                        <?php echo '<div class="text-default">'.@$response_message.'</div>'; ?>
                                    </div>
									<div class="col-md-12">
										<?php if(@$setEmail) { ?>
                                        <button type="submit" class="btn btn-register btn-green"><span>Add Student</span></button>
										<?php } else { ?>
										<button type="submit" class="btn btn-register btn-green"><span>Search Student</span></button>
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
                                        <label for="regname" class="control-label form-label">First Name <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="first_name" value="<?php echo !empty($post_data['first_name'])?$post_data['first_name']:''; ?>" placeholder="" 
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('first_name', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="regname" class="control-label form-label">Last Name <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="last_name" placeholder="" value="<?php echo !empty($post_data['last_name'])?$post_data['last_name']:''; ?>" 
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('last_name', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                     


                                    <div class="col-md-6">
                                        <label for="regname" class="control-label form-label">Username <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="username" <?php echo !empty($post_data['username'])?'value="'.$post_data['username'].'" readonly':''; ?> placeholder=""
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('username', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="regemail" class="control-label form-label">Email <span class="highlight">*</span></label>
                                        <input id="regemail" type="email" name="email" <?php echo !empty($post_data['email'])?'value="'.$post_data['email'].'" readonly':''; ?> placeholder="" 
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('email', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
        
									<div class="col-md-12">
                                        <label for="regemail" class="control-label form-label">Course <span class="highlight">*</span></label>
 
										<select name="course_name" class="form-control form-input" required="required">
										<option value="">Select Course</option>
										<?php
										
										$instituteId = $this->edu->getInstitute($this->session->userdata('userdata')['userid'])->institute_id;
										
										$courseList = $this->edu->getAllCourse($instituteId);
										
										// print_r($courseList);
										foreach($courseList as $cor) 
										{
										?>
										<option value="<?php echo $cor['course_id'];?>"><?php echo $cor['course_title'];?></option>
										<?php } ?>
										
										</select>
											   
                                        <?php echo form_error('email', '<div class="text-red">* ', '</div>'); ?>
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