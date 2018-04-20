<div id="page-wrapper">
    <div class="main-content">
        <div class="content">
            <div class="page-register rlp">
                <div class="container">
                    <div class="register-wrapper rlp-wrapper">
                        <div class="register-table rlp-table">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url('assets/frontend/images/splash-logo.png'); ?>" alt="" class="login img-responsive">
                            </a>
                            <div class="register-title rlp-title">&nbsp;</div>
                            <?php echo form_open('add_institute'); ?>
                            <div class="register-form bg-w-form rlp-form">
                                <div class="row">

                                       <div class="col-md-12">
                                            <label for="regname" class="control-label form-label">
                                                <h4> Institute Name</h4>
                                            </label>
                                            <hr>
                                            <input id="regname" type="text" name="name" value="<?php echo !empty($post_data['name'])?$post_data['name']:''; ?>" required="" placeholder="" class="form-control form-input">
                                            <?php echo form_error('name', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-12" style="margin-top:20px; margin-bottom:20px;">
                                            <label for="exampleInputFile">Institute Logo</label>
                                            <input type="file" name="institue_logo" required="" title="Search for a file to add">
                                            <?php echo form_error('institue_logo', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="regname" class="control-label form-label">Institute URL (Branch) <span class="highlight">*</span></label>
                                            <input id="regname" type="text" name="branchurl" value="<?php echo !empty($post_data['branchurl'])?$post_data['branchurl']:''; ?>" required="" placeholder="" class="form-control form-input">
                                            <?php echo form_error('branchurl', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="regemail" class="control-label form-label">Username <span class="highlight">*</span></label>
                                            <input id="regemail" type="text" name="username" value="<?php echo !empty($post_data['username'])?$post_data['username']:''; ?>" required="" placeholder="" class="form-control form-input">
                                            <?php echo form_error('username', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="regemail" class="control-label form-label">Email <span class="highlight">*</span></label>
                                            <input id="regemail" type="email" name="email" value="<?php echo !empty($post_data['email'])?$post_data['email']:''; ?>" required="" placeholder="" class="form-control form-input">
                                            <?php echo form_error('email', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6" style="margin-top:20px;">
                                            <label for="regpassword" class="control-label form-label">Password <span class="highlight">*</span></label>
                                            <input id="regpassword" type="password" name="password" required="" placeholder="" class="form-control form-input">
                                            <?php echo form_error('password', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6" style="margin-top:20px;">
                                            <label for="reregpassword" class="control-label form-label">Confirm password <span class="highlight">*</span></label>
                                            <input id="reregpassword" type="password" name="conf_password" required="" placeholder="" class="form-control form-input">
                                            <?php echo form_error('conf_password', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6" style="margin-top:20px;">
                                            <label for="regname" class="control-label form-label">Phone <span class="highlight">*</span></label>
                                            <input id="regname" type="text" name="phone" value="<?php echo !empty($post_data['phone'])?$post_data['phone']:''; ?>" required="" placeholder="" class="form-control form-input">
                                            <?php echo form_error('phone', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6" style="margin-top:20px;">
                                            <label for="regname" class="control-label form-label">Address <span class="highlight">*</span></label>
                                            <input id="regname" type="text" name="address" value="<?php echo !empty($post_data['address'])?$post_data['address']:''; ?>" required="" placeholder="" class="form-control form-input">
                                            <?php echo form_error('address', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="regname" class="control-label form-label">City <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="city" value="<?php echo !empty($post_data['city'])?$post_data['city']:''; ?>" placeholder=""
                                               class="form-control form-input" style="background:#fff;" required="required">
                                            <?php echo form_error('city', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">State <span class="highlight">*</span></label>
                                            <input id="regname" type="text" name="state" value="<?php echo !empty($post_data['state'])?$post_data['state']:''; ?>" placeholder="" 
                                                   class="form-control form-input" style="background:#fff;" required="required">
                                            <?php echo form_error('state', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6" style="margin-top:20px;">
                                            <label for="regname" class="control-label form-label">Zip <span class="highlight">*</span></label>
                                            <input id="regname" type="text" name="zip" value="<?php echo !empty($post_data['zip'])?$post_data['zip']:''; ?>" required="" placeholder="" class="form-control form-input">
                                            <?php echo form_error('zip', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6" style="margin-top:20px;">
                                            <label for="regname" class="control-label form-label">Exams Model <span class="highlight">*</span></label>
                                            <input id="regname" type="text" name="examsmodel" value="<?php echo !empty($post_data['examsmodel'])?$post_data['examsmodel']:''; ?>" required="" placeholder="" class="form-control form-input">
                                        <?php echo form_error('examsmodel', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6" style="margin-top:20px;">
                                            <label for="regname" class="control-label form-label">Course Detail <span class="highlight">*</span></label>
                                            <textarea class="form-control" name="coursedetail" value="" required="" rows="3"><?php echo !empty($post_data['coursedetail'])?$post_data['coursedetail']:''; ?></textarea>
                                            <?php echo form_error('coursedetail', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-6" style="margin-top:20px;">
                                            <label for="regname" class="control-label form-label">History of Institution <span class="highlight">*</span></label>
                                            <textarea class="form-control" name="history" value="" required="" rows="3"><?php echo !empty($post_data['history'])?$post_data['history']:''; ?></textarea>
                                            <?php echo form_error('history', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-12" style="margin-top:20px;">
                                            <label for="regname" class="control-label form-label">Registered Institutes <span class="highlight">*</span></label>
                                            <input id="regname" type="text" name="registerdinstitutes" value="<?php echo !empty($post_data['registerdinstitutes'])?$post_data['registerdinstitutes']:''; ?>" required="" placeholder="" class="form-control form-input">
                                            <?php echo form_error('registerdinstitutes', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="register-submit">
                                <button type="submit" class="btn btn-register btn-green"><span>Sign up</span></button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>