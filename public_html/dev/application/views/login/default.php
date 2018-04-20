<div class="custom-slider container-fluid ">
    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel" data-pause="none" data-interval="6000">
          <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
              <div class="container custom-container-center">
                <div class="carousel-caption col-lg-5 col-sm-6">
                    <h1>Hello iMobileWeb</h1>
                    <p>As you have already registered an email address and chosen your password combination with us, you can use them to log in here.  Once you’ve logged in, you can add/update content for frontend.</p>
                </div>
              </div>   
          </div>
        </div>
         
        <!-- Indicators -->
        <ol class="carousel-indicators hidden-xs">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        </ol>
    </div>
          
</div>
<div class="custom-login-wrapper">
    <div class="container">
        <div class="row custom-logo">
            <p><b>iMobileWeb</b> Web</p>
        </div>
        <div class="row">
            <div class="custom-login-box col-lg-4 col-md-5 col-sm-offset-7 col-sm-5">
                <div class="login-box-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                       <?php $mes= $this->message->display(); echo (isset($mes))?'<div class="alert"> '.$mes.'</div>':''; ?>        
                    <?php echo form_open('check-details'); ?>
                        <div class="form-group has-feedback">
                            <?php echo form_input(array('type'=>'text','value'=>($this->session->userdata('username')!=null)?$this->session->userdata('username'):null , 'class'=>'form-control', 'placeholder'=>'Username','name'=>'username','autocomplete' => 'off','required'=>'required')); ?>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            <?php echo form_error('username', '<div class="text-red">* ', '</div>'); ?>
                        </div>
                        <div class="form-group has-feedback">
                            <?php echo form_input(array('type'=>'password', 'class'=>'form-control', 'placeholder'=>'password','name'=>'password','required'=>'required')); ?>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            <?php echo form_error('password', '<div class="text-red">* ', '</div>'); ?>
                        </div>            
                        <div class="row">
                            <div class="col-xs-8">    

                                <label>
                                      <?php echo form_checkbox(); ?> Remember Me                        
                                </label>

                            </div><!-- /.col -->
                            <div class="col-xs-4">
                                <?php echo form_submit(array('class'=>'btn btn-primary btn-block btn-flat','name'=>'signin', 'value'=>'Sign In')); ?>                    
                            </div><!-- /.col -->
                        </div>
                    <?php echo form_close(); ?>
                    <a href="#" data-toggle="modal" data-target="#myModal">I forgot my details</a><br>        
                    <a href="register">New User? Register here.</a><br> 
                </div><!-- /.login-box-body -->
                <div class="login-box-footer">
                    <p>Copyright 2015 ,  iMobileWeb </p> 
                    <p><a href="www.29kreativ.com">www.imobileweb.co.uk</a>, <a href="mailto:marketing@imobileweb.co.uk">marketing@imobileweb.co.uk</a> </p> 
                </div><!-- /.login-box-footer -->
            </div><!-- /.login-box -->
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade forgot-details-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Please enter your registered email address.</h4>
      </div>
        <?php echo form_open('forget_password',array('id'=>'forget_password')); ?>
        <div class="modal-body">
              <label>Email</label>
              <?php echo form_input(array('type'=>'email','name'=>'user_email','class'=>'form-control user_email', 'placeholder'=>'Enter..','required'=>'required')); ?>             
              <div class="forgot-detail-error"></div>
        </div>
        <div class="modal-footer">            
          <div class="be-overlay col-xs-12 text-center hide"><i class="fa fa-refresh fa-spin"></i></div>
            <button type="button" class="btn btn-primary btn-flat" data-dismiss="modal">Close</button>
          <?php echo form_button(array('class'=>'btn btn-primary btn-flat user_forget','name'=>'user_forget', 'value'=>'Send Request','content'=>'Send Request')); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
  </div>
</div>