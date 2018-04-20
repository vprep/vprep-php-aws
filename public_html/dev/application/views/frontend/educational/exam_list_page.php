<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses" style="padding-top:20px;">
                    <div class="container">
                        <div class="group-title-index">
                            <h2 class="center-title">&nbsp; </h2>
                            <h2 class="center-title">Manage Exams</h2>
                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row ">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="box">
                                            <div class="box-body text-right">
                                                <?php echo anchor('educational/test_create_exam','<i class="fa fa-plus-square"></i>',array("class"=>"btn btn-primary btn-lg")); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-xs-12 showback">
                                        <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                        <div class="box box-primary">
                                            <div class="box-body table-responsive">
                                                <table class="table table-bordered table-hover text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">SI No.</th>
                                                            <th class="text-center">Exam Name</th>
                                                            <th class="text-center">Course</th>
                                                            <th class="text-center">Subject</th>
                                                            <th class="text-center">Start Date</th>
                                                            <th class="text-center">End Date</th>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(!empty($test_cat)): ?>
                                                        <?php foreach($test_cat as $key=>$val): ?>
                                                        <tr>
                                                            <td><?php echo $key+1; ?></td>
                                                            <td>
                                                                <?php echo anchor('edit_test_categories/'.$val['id'],$val['title']); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo !empty($val['parent'])?anchor('edit_test_categories/'.$val['parent'],$val['parent_title']):'-'; ?>
                                                            </td>
                                                            <td><?php echo $val['test_time']." Minutes"; ?></td>
                                                            <td>    
                                                                <?php echo anchor('educational/delete_exam/'.  urlencrypt($val['id']),'<i class="fa fa-trash-o"></i>',array("class"=>"btn btn-danger btn-lg", "onclick"=>"return confirm('Do you want delete this record')")); ?>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
                                                        <tr><td colspan="10"><div class="alert alert-info alert-dismissible">
                                                                <h4><i class="icon fa fa-info"></i> Information!</h4>
                                                                No Record Found.
                                                            </div>
                                                        </td></tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-xs-6 text-right">
                                                        <div class="dataTables_paginate paging_bootstrap">
                                                            <?php //echo $pages; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>