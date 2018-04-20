<?php $mes = $this->message->display();
echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>       
<div class="row">
    <!-- right column -->
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title"><?php echo $this->session->sub_title; ?></h3>
            </div><!-- /.box-header -->
            <?php echo form_open('save_user'); ?>
            <div class="box-body">
                <!-- text input -->
                <div class="form-group">
                    <label>ID :</label>
                    <?php echo isset($user_detail['id']) ? $user_detail['id'] : get_latest_table_id('users'); ?>
                </div>
                <div class="form-group">
                    <label>Username :</label>
                    <?php echo form_input(array('class' => 'form-control', 'name' => 'username', 'value'=>isset($user_detail['username']) ? $user_detail['username'] : '')); ?>
                </div>
                <div class="form-group">
                    <label>Email :</label>
                    <?php echo form_input(array('class' => 'form-control', 'name' => 'email', 'value'=>isset($user_detail['email']) ? $user_detail['email'] : '')); ?>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <?php echo form_input(array('class' => 'form-control', 'name' => 'name', 'value' => isset($user_detail['name']) ? $user_detail['name'] : '', 'placeholder' => 'Enter ...')); ?>
                    <?php echo form_error('name', '<div class="text-red">* ', '</div>'); ?>
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label>Address</label>
                    <?php echo form_textarea(array('class' => 'form-control', 'name' => 'address', 'value' => isset($user_detail['address']) ? $user_detail['address'] : '', 'rows' => '3', 'placeholder' => 'Enter ...')); ?>            
                </div>
                <div class="form-group">
                    <label>Phone</label>
                <?php echo form_input(array('class' => 'form-control', 'name' => 'phone', 'value' => isset($user_detail['phone']) ? $user_detail['phone'] : '', 'placeholder' => 'Enter ...')); ?>
                </div>
                <?php /* if ($this->session->sub_title != 'Add User'): ?>
                <div class="form-group">
                    <label>Old Password</label>
                <?php echo form_password(array('class' => 'form-control', 'name' => 'old_password', 'value' => '', 'placeholder' => 'Enter ...')); ?>
                </div>
                <?php endif; */ ?>
                <div class="form-group">
                    <label>New Password</label>
                    <?php echo form_password(array('class' => 'form-control', 'name' => 'new_password', 'value' => '', 'placeholder' => 'Enter ...')); ?>
                    <?php echo form_error('new_password', '<div class="text-red">* ', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <?php echo form_password(array('class' => 'form-control', 'name' => 'conf_password', 'value' => '', 'placeholder' => 'Enter ...')); ?>
                    <?php echo form_error('conf_password', '<div class="text-red">* ', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label>Joining Date :</label>
                    <?php echo isset($user_detail['join_date']) ? $user_detail['join_date'] : mdate('%Y-%m-%d'); ?>                
                </div>
                <div class="form-group">
                    <label>User Type</label>
                    <?php echo form_dropdown('user_type',$user_type,isset($user_detail['user_type'])?$user_detail['user_type']:'1','class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <?php echo form_dropdown('is_active',array('1'=>'Active','0'=>'Inactive'),!empty($user_detail['is_active'])?$user_detail['is_active']:'','class="form-control"') ?>
                </div>
                <div class="box-footer">
                    <?php echo form_submit(array('class' => 'btn btn-primary', 'value' => 'Save Details', 'name' => 'save_rcd')); ?>
                    <?php echo anchor('users','Close',array('class'=>'btn btn-danger btn-flat')); ?>
                </div>
            <?php echo form_close(); ?>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->