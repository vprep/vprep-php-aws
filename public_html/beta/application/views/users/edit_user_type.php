<?php $mes= $this->message->display(); echo (isset($mes))?'<div class="alert"> '.$mes.'</div>':''; ?>       
<div class="row">
  <!-- right column -->
  <div class="col-md-12">
    <!-- general form elements disabled -->
    <div class="box box-warning">
      <div class="box-header">
        <h3 class="box-title"><?=$this->session->sub_title;?></h3>
      </div><!-- /.box-header -->
      <?php echo form_open('users/save_user_type'); ?>
      <div class="box-body">
        <!-- text input -->
            <div class="form-group">
                <label>ID :</label>
                <?php echo isset($user_type_detail['id'])?$user_type_detail['id']:'';?>
                <?php echo form_hidden(array('id'=>$user_type_detail['id'])); ?>
            </div>
            <div class="form-group">
                <label>User Type Name :</label>
                <?php echo form_input(array('class'=>'form-control','name'=>'user_type', 'value'=>isset($user_type_detail['user_type'])?$user_type_detail['user_type']:'' ,'placeholder'=>'Enter ...','required'=>'required'));?>
                <?php echo form_error('user_type', '<div class="text-red">* ', '</div>'); ?>
            </div>
            <!-- textarea -->
            <div class="form-group">
                <label>Description</label>
                <?php echo form_textarea(array('class'=>'form-control','name'=>'description','value'=>isset($user_type_detail['description'])?$user_type_detail['description']:'', 'rows'=>'3', 'placeholder'=>'Enter ...')); ?>            
            </div>
            <div class="form-group">
                <label>Status</label>
                <?php echo form_dropdown('is_active',array('1'=>'Active','0'=>'Inactive'),$user_type_detail['is_active'],'class="form-control"') ?>
            </div>
        <div class="box-footer">
            <?php echo form_submit(array('class'=>'btn btn-primary','value'=>'Save Details','name'=>'save_rcd')); ?> 
            <?php echo anchor('users/user_type_list','Close',array('class'=>'btn btn-danger btn-flat')); ?>
        </div>
        <?php echo form_close(); ?>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!--/.col (right) -->
</div>   <!-- /.row -->