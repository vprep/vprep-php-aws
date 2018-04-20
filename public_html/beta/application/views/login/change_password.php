<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>29</b>Kreativ</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Reset your password to start your session</p>
        <?php echo form_open('reset_password'); ?>
            <div class="form-group has-feedback">
                <?php echo form_input(array('type'=>'password', 'class'=>'form-control', 'placeholder'=>'New Password','name'=>'new_password','required'=>'required')); ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php echo form_error('password', '<div class="text-red">* ', '</div>'); ?>
            </div>
            <div class="form-group has-feedback">
                <?php echo form_input(array('type'=>'password', 'class'=>'form-control', 'placeholder'=>'Confirm Password','name'=>'conf_password','required'=>'required')); ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php echo form_error('password', '<div class="text-red">* ', '</div>'); ?>
            </div>            
            <?php $mes= $this->message->display(); echo (isset($mes))?'<div class="alert"> '.$mes.'</div>':''; ?>        
            <?php echo form_hidden(array('userid'=>$user_details['userid'],'token'=>$user_details['token']));?>
            <div class="row">
                <div class="col-xs-offset-8 col-xs-4">
                    <?php echo form_submit(array('class'=>'btn btn-primary btn-block btn-flat','name'=>'signin', 'value'=>'Sign In')); ?>                    
                </div><!-- /.col -->
            </div>
        <?php echo form_close(); ?>        

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->