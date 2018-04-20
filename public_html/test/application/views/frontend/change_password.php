<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="page-register rlp">
                    <div class="container">
                        <div class="register-wrapper rlp-wrapper">
                            <div class="register-table rlp-table">
							 
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                <div class="register-title rlp-title">&nbsp;</div>
                                <?php echo form_open('change_password'); ?>
                                <div class="register-form bg-w-form rlp-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="regpassword" class="control-label form-label">Current Password </label>
                                            <input id="regpassword" type="password" name="curr_password" placeholder="" class="form-control form-input"/>
                                            <?php echo form_error('curr_password', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="reregpassword" class="control-label form-label">New password </label>
                                            <input id="reregpassword" type="password" name="password" placeholder="" class="form-control form-input"/>
                                            <?php echo form_error('password', '<div class="text-red">* ', '</div>'); ?>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="reregpassword" class="control-label form-label">Re-type password </label>
                                            <input id="reregpassword" type="password" name="conf_password" placeholder="" class="form-control form-input"/>
                                            <?php echo form_error('conf_password', '<div class="text-red">* ', '</div>'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="register-submit">
                                    <button type="submit" class="btn btn-register btn-green"><span>Change Password</span></button>
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