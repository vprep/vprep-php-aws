<div class="row">
    <div class="col-xs-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Messages Listing</h3>
            </div>
            <?php if(!empty($messages_list)): ?>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                            <th>#</th>
                            <th>Message From</th>
                            <th>To</th>
                            <th>Subject</th>
                            <th>From</th>
                            <th>Date Time</th>
                        </tr>
                        <?php foreach($messages_list as $key=>$val): ?>
                        <tr>
                            <td><?php echo $key+1; ?>.</td>
                            <td class="text-capitalize"><?php echo str_replace('_', ' ', $val['message_for']); ?></td>
                            <td><?php echo $val['name']; ?></td>
                            <td><strong><?php echo anchor('mails_manager/view_message/'.urlencrypt($val['id']),$val['subject']); ?></strong></td>
                            <td><?php echo $val['email']; ?></td>
                            <td>
                            <?php 
                                $date = new DateTime();
                                $date->setTimestamp($val['created_at']);
                                echo $date->format('d M Y H:i:s') . "\n";
                            ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <?php echo !empty($pages)?$pages:''; ?>
            </div>
            <?php else: ?>
            <div class="alert alert-info alert-dismissible">
                <h4><i class="icon fa fa-info"></i> Information!</h4>
                No Record Found.
            </div>
            <?php endif; ?>
        </div>
        <!-- /.box -->
    </div>
</div>