<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo !empty($id)?$subject:'No Subject'; ?></h3>                
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td><strong>Message For:</strong></td>
                            <td class="text-capitalize"><?php echo !empty($message_for)?str_replace('_', ' ', $message_for):'No Name'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Name:</strong></td>
                            <td class="text-capitalize"><?php echo !empty($name)?$name:'No Name'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td class="text-capitalize"><?php echo !empty($email)?$email:'No Email'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Message:</strong></td>
                            <td class="text-capitalize"><?php echo !empty($messages)?$messages:'No Message'; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Message Date:</strong></td>
                            <td class="text-capitalize">
                                <?php 
                                    $date = new DateTime();
                                    $date->setTimestamp($created_at);
                                    echo $date->format('d M Y H:i:s') . "\n";
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                <?php echo anchor('mails_manager','Close',array("class"=>"btn btn-danger")); ?>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>