<?php $mes = $this->message->display();
echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>       
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="col-xs-6">
                    <h3 class="box-title">Users Types Listing</h3>
                </div> 
            </div><!-- /.box-header -->

            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">
                    <div class="row">
                        <div class="col-xs-6"></div>
                        <div class="col-xs-6"></div>
                    </div>
                    <?php if (!empty($user_types)): ?>
                    <table id="example2" class="table table-bordered table-hover dataTable" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th>#</th>
                                <th>User Type</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>User Type ID</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>User Type</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>User Type ID</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($user_types as $key => $value): ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><?php echo anchor('users/edit_user_type_list/' . urlencrypt($value['id']), $value['user_type']); ?></td>
                                <td><?php echo empty($value['is_active'])?'<span class="btn btn-danger btn-xs">Inactive</span>':'<span class="btn btn-success btn-xs">Active</span>'; ?></td>
                                <td ><?php echo anchor('users/edit_user_type_list/' . urlencrypt($value['id']), '<i class="fa fa-edit"></i>', array('data-toggle' => 'tooltip', 'title' => 'Edit User Details')); ?></td>
                                <td><?php echo $value['id']; ?></td>
                            </tr>                
                            <?php endforeach; ?>
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
        </div>
    </div>    
</div>