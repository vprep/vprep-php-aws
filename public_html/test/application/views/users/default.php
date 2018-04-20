<?php $mes= $this->message->display(); echo (isset($mes))?'<div class="alert"> '.$mes.'</div>':''; ?>       
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="col-xs-6">
                    <h3 class="box-title">User's Detail</h3>
                </div> 
                <div class="col-xs-6 text-right">
                    <?php echo anchor('users/add_user','Add User',array('class'=>'btn btn-success btn-flat','data-toggle'=>'tooltip', 'title'=>'Add New User')); ?>
                </div> 
            </div><!-- /.box-header -->
            
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">
                    <div class="row">
                        <div class="col-xs-6"></div>
                        <div class="col-xs-6"></div>
                    </div>
                    <?php if(!empty($users)): ?>
                    <table id="example2" class="table table-bordered table-hover dataTable" aria-describedby="example2_info">
                        <thead>
                          <tr role="row">
                              <th>#</th>
                              <th>User Type</th>
                              <th>Name</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Is Active</th>
                              <th>User ID</th>
                              <th colspan="2">Action</th>
                          </tr>
                        </thead>

                        <tfoot>
                          <tr>
                              <th>#</th>
                              <th>User Type</th>
                              <th>Name</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Is Active </th>
                              <th>User ID</th>
                              <th colspan="2">Action</th>
                          </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($users as $key=>$value): ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo anchor('users/edit_user_type_list/' . urlencrypt($value['user_type']), $value['user_type_name']); ?></td>
                                <td><?php echo anchor('users/profile/'.urlencrypt($value['id']),$value['name']);?></td>
                                <td><?php echo $value['username'];?></td>
                                <td><?php echo $value['email'];?></td>
                                <td><?php echo $value['phone'];?></td>
                                <td><?php echo empty($value['is_active'])?'<span class="btn btn-danger btn-xs">Inactive</span>':'<span class="btn btn-success btn-xs">Active</span>'; ?></td>
                                <td><?php echo $value['id'];?></td>
                                <td><?php echo anchor('users/profile/'.urlencrypt($value['id']),'<i class="fa fa-edit"></i>',array('data-toggle'=>'tooltip', 'title'=>'Edit User Details')); ?></td>
                                <td><?php echo anchor('delete_user/'.urlencrypt($value['id']),'<i class="fa fa-trash-o"></i>',array('data-toggle'=>'tooltip', 'title'=>'Delete User')); ?></td>
                            </tr>                
                            <?php endforeach;?>
                        </tbody>
                    </table> 
                    <?php else: ?>
                    <div class="alert alert-info alert-dismissible">
                        <h4><i class="icon fa fa-info"></i> Information!</h4>
                        No Record Found.
                    </div>
                    <?php endif; ?> 
                </div>
            </div><!-- /.box-body -->
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <?php echo $pages; ?>
            </div>
        </div>
    </div>    
</div>