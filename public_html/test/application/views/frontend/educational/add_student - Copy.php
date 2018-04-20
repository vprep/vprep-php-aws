<div id="page-wrapper">
    <div class="main-content">
        <div class="content">
            <div class="page-register rlp">
                <div class="container">
                    <div class="register-wrapper rlp-wrapper">
                        <div class="register-table rlp-table">
                            <div class="register-title rlp-title">Add your student..!</div>
                            <?php $mes = $this->message->display();
                                echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                            <?php echo form_open('educational/save_student'); ?>
                            <?php echo form_hidden('id',!empty($post_data['id'])?$post_data['id']:''); ?>
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
                                    <div class="col-md-12">
                                        <label for="regname" class="control-label form-label">Current Institute <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="current_institute" placeholder="" 
                                               value="<?php echo !empty($this->session->userdata('userdata')['name'])?$this->session->userdata('userdata')['name']:''; ?>"
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('current_institute', '<div class="text-red">* ', '</div>'); ?>
                                    </div>


                                    <div class="col-md-12">
                                        <label for="regname" class="control-label form-label">Preparing for <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="prepairing_for" value="<?php echo !empty($post_data['prepairing_for'])?$post_data['prepairing_for']:''; ?>" placeholder="" 
                                               class="form-control form-input" style="background:#fff;" required="required">
                                        <?php echo form_error('prepairing_for', '<div class="text-red">* ', '</div>'); ?>
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
                                        <input id="regname" type="text" value="<?php echo !empty($post_data['phone'])?$post_data['phone']:''; ?>" name="phone" required="" placeholder="" class="form-control form-input">
                                    </div>
                                    <div class="col-md-6" style="margin-top:20px;">
                                        <label for="regname" class="control-label form-label">Address <span class="highlight">*</span></label>
                                        <input id="regname" type="text" name="address" required="" value="<?php echo !empty($post_data['address'])?$post_data['address']:''; ?>" placeholder="" class="form-control form-input">
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
                                    <div class="col-md-6">
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
                                            <input type="text" placeholder="mm/dd/yyyy" name="dob" id="date" value="<?php echo !empty($post_data['dob'])?$post_data['dob']:'2016-10-01'; ?>" 
                                                   class="form-control form-input" style="background:#fff;" readonly="readonly" required="required"> 
                                            <?php echo form_error('dob', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
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