<?php $mes= $this->message->display(); echo (isset($mes))?'<div class="alert"> '.$mes.'</div>':''; ?>       
<div class="row">
  <!-- right column -->
  <div class="col-md-12">
    <!-- general form elements disabled -->
    <div class="box box-warning">
      <div class="box-header">
        <h3 class="box-title">Edit Mail Settings</h3>
      </div><!-- /.box-header -->
      <?php echo form_open('save_mail_settings'); ?>
      <div class="box-body">
        <!-- text input -->
          <div class="form-group">
            <label>HOST</label>
            <?php 
            $options = array(
            'smtp.gmail.com'=> 'smtp.gmail.com',
            );
            echo form_dropdown('mail_host', $options,isset($mail_settings['mail_host'])?$mail_settings['mail_host']:'',array('class'=>'form-control'));
            ?>
          </div>
          <div class="form-group">
            <label>SMTPAuth </label>
            <?php 
            $options = array(
            '1'  =>  'True',
            '0' =>  'False'      
            );
            echo form_dropdown('mail_smtp_auth', $options,isset($mail_settings['mail_smtp_auth'])?$mail_settings['mail_smtp_auth']:'',array('class'=>'form-control'));
            ?>
          </div>
          <div class="form-group">
            <label>Username</label>
            <?php echo form_input(array('class'=>'form-control','name'=>'mail_username', 'value'=>isset($mail_settings['mail_username'])?$mail_settings['mail_username']:'', 'placeholder'=>'Enter ...','required'=>'required'));?>
          </div>
           <div class="form-group">
            <label>Password</label>
            <?php echo form_password(array('class'=>'form-control','name'=>'mail_password', 'value'=>'' ,'placeholder'=>'Enter ...'));?>
          </div>
          
          <div class="form-group">
            <label>SMTP Secure</label>
            <?php 
            $options = array(
            'tls'  =>  'tls',
            'ssl' =>  'ssl'      
            );
            echo form_dropdown('mail_smtp_secure', $options,isset($mail_settings['mail_smtp_secure'])?$mail_settings['mail_smtp_secure']:'',array('class'=>'form-control'));
            ?>
          </div>
          <div class="form-group">
            <label>Port </label>
            <?php 
            $options = array(
            '587'  =>  '587',
            '425' =>  '425'      
            );
            echo form_dropdown('mail_port', $options, isset($mail_settings['mail_port'])?$mail_settings['mail_port']:'',array('class'=>'form-control'));
            ?>
          </div>
          <div class="form-group">
            <label>From Email</label>
            <?php echo form_input(array('type'=>'email','class'=>'form-control','name'=>'mail_from', 'value'=>isset($mail_settings['mail_from'])?$mail_settings['mail_from']:'' ,'placeholder'=>'Enter ...'));?>
          </div>
          <div class="form-group">
            <label>From Name</label>
            <?php echo form_input(array('class'=>'form-control','name'=>'mail_from_name', 'value'=>isset($mail_settings['mail_from_name'])?$mail_settings['mail_from_name']:'' ,'placeholder'=>'Enter ...'));?>
          </div>
          <div class="form-group">
            <label>CC</label>
            <?php echo form_input(array('type'=>'email','class'=>'form-control','name'=>'mail_cc', 'value'=>isset($mail_settings['mail_cc'])?$mail_settings['mail_cc']:'' ,'placeholder'=>'Enter ...'));?>
          </div>
          <div class="form-group">
            <label>BCC</label>
            <?php echo form_input(array('type'=>'email','class'=>'form-control','name'=>'mail_bcc', 'value'=>isset($mail_settings['mail_bcc'])?$mail_settings['mail_bcc']:'' ,'placeholder'=>'Enter ...'));?>
          </div>
            
        <div class="box-footer">
            <?php echo form_submit(array('class'=>'btn btn-primary','value'=>'Save Details','name'=>'save_rcd')); ?>            
        </div>
        <?php echo form_close(); ?>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!--/.col (right) -->
</div>   <!-- /.row -->