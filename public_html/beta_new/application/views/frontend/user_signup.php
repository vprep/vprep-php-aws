<div id="page-wrapper">
    <div class="main-content">
        <div class="content">
            <div class="page-register rlp">
                <div class="container">
                    <div class="register-wrapper rlp-wrapper">
                        <div class="register-table rlp-table">
                            <a href="<?php echo base_url(); ?>">
                                <img style="width:30%" src="<?php echo base_url('assets/frontend/images/frontend-logo.png');?>" alt="" class="login img-responsive">
                            </a>
                            <div class="register-title rlp-title">Create your account and join with us!</div>
                            <?php echo form_open('add_student'); ?>
                            <div class="register-form bg-w-form rlp-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="regname" class="control-label form-label">Full Name <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="first_name" value="<?php echo !empty($post_data['first_name'])?$post_data['first_name']:''; ?>" placeholder="" 
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('first_name', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                    <div class="col-md-6">
											<label for="regname" class="control-label form-label">Username <span class="highlight">*</span></label>
											<input id="regname" type="text" name="username" value="<?php echo !empty($post_data['username'])?$post_data['username']:''; ?>" placeholder=""
												   class="form-control form-input" style="background:#fff;" required="required">
											<?php echo form_error('username', '<div class="text-red">* ', '</div>'); ?>
										</div>
									</div>
									
									
									<div class="row">
										
										<div class="col-md-6">
											<label for="regemail" class="control-label form-label">Email <span class="highlight">*</span></label>
											<input id="regemail" type="email" name="email" value="<?php echo !empty($post_data['email'])?$post_data['email']:''; ?>" placeholder="" 
												   class="form-control form-input" style="background:#fff;" required="required">
											<?php echo form_error('email', '<div class="text-red">* ', '</div>'); ?>
										</div>
									
										<div class="col-md-6">
											<label for="regpassword" class="control-label form-label">Password <span class="highlight">*</span></label>
											<input id="regpassword" type="password" name="password" placeholder="" class="form-control form-input" style="background:#fff;" required="required">
											<?php echo form_error('password', '<div class="text-red">* ', '</div>'); ?>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-6" >
											<label for="regname" class="control-label form-label">Phone <span class="highlight">*</span></label>
											<input id="regname" type="text" name="phone" required="" value="<?php echo !empty($post_data['phone'])?$post_data['phone']:''; ?>" placeholder="" class="form-control form-input">
										</div>
										
									
                                    <div class="col-md-6">
                                        <label for="regname" class="control-label form-label">City <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="city" value="<?php echo !empty($post_data['city'])?$post_data['city']:''; ?>" placeholder=""
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('city', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                    
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<label for="regname" class="control-label form-label">Gender <span class="highlight">*</span></label>
											<div>
											<label class="radio-inline">
												<input type="radio" name="gender" id="inlineRadio1" value="male" checked="checked">
												Male </label>
											<label class="radio-inline">
												<input type="radio" name="gender" id="inlineRadio1" value="female">
												Female </label>
											</div>
										</div>
									</div>
									<div class="row">
										<div><br></div>
										<div class="register-submit">
											<button type="submit" class="btn btn-register btn-green"><span>Create account</span></button>
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