<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses" style="padding-top:20px;">
                    <div class="container">
                        <div class="group-title-index" style="margin-bottom:20px !important">
                            <h2 class="center-title">&nbsp; </h2>
                            <h2 class="center-title">Create / Manage Question Bank</h2>
                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<label class="text-center">Course:</label><br>
								<select class="form-control" name="coursefilter">
									<option value="" selected>&nbsp;</option>
								</select>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<label class="text-center">Subject:</label><br>
								<select class="form-control" name="subjectfilter">
									<option value="" selected>&nbsp;</option>
								</select>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<label class="text-center">Module:</label><br>
								<select class="form-control" name="modulefilter">
									<option value="" selected>&nbsp;</option>
								</select>
							</div>
							<div class="col-md-12 text-center" style="margin:10px 0px 20px 0px;">
								<a href="#" class="btn btn-warning btn-lg"><i class="fa fa-search"></i></a>
							</div>
						</div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row ">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="box">
                                            <div class="box-body text-right">
                                                <?php echo anchor('add_test_questions','<i class="fa fa-plus-square"></i>',array("class"=>"btn btn-primary btn-lg", "style"=>"margin-bottom:10px;")); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 showback">
                                        <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                        <div class="box box-primary">
                                            <div class="box-body table-responsive">
                                                <table class="table table-bordered table-hover text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">SI No</th>
                                                            <th class="text-center">Questions</th>
                                                            <th class="text-center">Subject</th>
                                                            <th class="text-center">Module</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(!empty($test_ques)): ?>
                                                        <?php foreach($test_ques as $key=>$val): ?>
                                                        <tr>
                                                            <td><?php echo $key+1; ?></td>
                                                            <td>
                                                                <?php echo anchor('edit_test_questions/'.$val['id'],$val['title']); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo anchor('edit_test_categories/'.$val['test_category_id'],$val['test_category']); ?>
                                                            </td>
                                                            <td><?php echo $val['id']; ?></td>
                                                            <td>
                                                                <?php echo anchor('delete_test_question/'.  urlencrypt($val['id']),'<i class="fa fa-trash-o"></i>',array("class"=>"btn btn-danger btn-lg", "onclick"=>"return confirm('Do you want delete this record')")); ?>    
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
                                                            <?php echo $pages; ?>
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