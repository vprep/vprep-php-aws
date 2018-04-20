<div id="page-wrapper">
    <div class="main-content">
        <div class="content">
            <div class="page-register rlp">
                <div class="container">
                    <div class="register-wrapper rlp-wrapper">
                        <div class="register-table rlp-table">
                           <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url('assets/frontend/images/splash-logo-tutor.png');?>" alt="" class="login img-responsive">
                            </a>
                            <div class="register-title rlp-title">&nbsp;</div>
                            <?php echo form_open('add_tutor'); ?>
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
                                        <input id="regname" type="text" name="username" value="<?php echo !empty($post_data['username'])?$post_data['username']:''; ?>" placeholder=""
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('username', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
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
                                    <div class="col-md-6">
                                        <label for="reregpassword" class="control-label form-label">Confirm password <span class="highlight">*</span></label>
                                        <input id="reregpassword" name="conf_password" type="password" placeholder="" class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('conf_password', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                    <div class="col-md-6" style="margin-top:20px;">
                                        <label for="regname" class="control-label form-label">Phone <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="phone" required="" placeholder="" class="form-control form-input">
                                    </div>
                                    <div class="col-md-6" style="margin-top:20px;">
                                        <label for="regname" class="control-label form-label">Address <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="address" required="" placeholder="" class="form-control form-input">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="regname" class="control-label form-label">City <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="city" value="<?php echo !empty($post_data['city'])?$post_data['city']:''; ?>" placeholder=""
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('city', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="regname" class="control-label form-label">State <span class="highlight">*</span></label>
                                        <select name="state" id="regname" class="form-control form-input" style="background:#fff;" required="required">
											<option value="">Select State</option>
											<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
											<option value="Andhra Pradesh">Andhra Pradesh</option>
											<option value="Arunachal Pradesh">Arunachal Pradesh</option>
											<option value="Assam">Assam</option>
											<option value="Bihar">Bihar</option>
											<option value="Chandigarh">Chandigarh</option>
											<option value="Chhattisgarh">Chhattisgarh</option>
											<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
											<option value="Daman and Diu">Daman and Diu</option>
											<option value="Delhi">Delhi</option>
											<option value="Goa">Goa</option>
											<option value="Gujarat">Gujarat</option>
											<option value="Haryana">Haryana</option>
											<option value="Himachal Pradesh">Himachal Pradesh</option>
											<option value="Jammu and Kashmir">Jammu and Kashmir</option>
											<option value="Jharkhand">Jharkhand</option>
											<option value="Karnataka">Karnataka</option>
											<option value="Kerala">Kerala</option>
											<option value="Lakshadweep">Lakshadweep</option>
											<option value="Madhya Pradesh">Madhya Pradesh</option>
											<option value="Maharashtra">Maharashtra</option>
											<option value="Manipur">Manipur</option>
											<option value="Meghalaya">Meghalaya</option>
											<option value="Mizoram">Mizoram</option>
											<option value="Nagaland">Nagaland</option>
											<option value="Orissa">Orissa</option>
											<option value="Pondicherry">Pondicherry</option>
											<option value="Punjab">Punjab</option>
											<option value="Rajasthan">Rajasthan</option>
											<option value="Sikkim">Sikkim</option>
											<option value="Tamil Nadu">Tamil Nadu</option>
											<option value="Tripura">Tripura</option>
											<option value="Uttaranchal">Uttaranchal</option>
											<option value="Uttar Pradesh">Uttar Pradesh</option>
											<option value="West Bengal">West Bengal</option>
										</select>
                                        <?php echo form_error('state', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                    <div class="col-md-6" style="margin-top:20px;">
                                        <label for="regname" class="control-label form-label">Zip <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="zip" value="<?php echo !empty($post_data['zip'])?$post_data['zip']:''; ?>" required="" placeholder="" class="form-control form-input">
                                        <?php echo form_error('zip', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                    <div class="col-md-6" style="margin-top:50px;">
                                        <label for="regname" class="control-label form-label">Gender <span class="highlight">*</span></label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" id="inlineRadio1" value="male" checked="checked">
                                            Male </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" id="inlineRadio1" value="female">
                                            Female </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="regname" class="control-label form-label">Date of birth <span class="highlight">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"> <i class="fa fa-calendar"> </i> </div>
                                            <input type="text" placeholder="mm/dd/yyyy" name="dob" id="date" value="<?php echo !empty($post_data['dob'])?$post_data['dob']:''; ?>" 
                                                   class="form-control form-input" style="background:#fff;" readonly="readonly" required="required"> 
                                            <?php echo form_error('dob', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="regname" class="control-label form-label">Institute Name</label>
                                        <input id="regname" type="text" name="institute" placeholder="" class="form-control form-input"/>
                                        <?php echo form_error('institute', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="regname" class="control-label form-label">Subjects Taught <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="subjects" placeholder="" class="form-control form-input"/>
                                        <?php echo form_error('subjects', '<div class="text-red">* ', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="register-submit">
                                <button type="submit" class="btn btn-register btn-green"><span>Create account</span></button>
                            </div>
                            <?php form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>