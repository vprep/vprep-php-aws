<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="row" >
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
								<div class="row">
									<div class="col-sm-12 pull-right">
										<a href="<?php echo base_url("educational/addsubject.html"); ?>" class="btn btn-success pull-right"><i class="fa fa-plus"></i> New Subject</a>
									</div>
									<div class="clearfix">&nbsp;</div>
                                    <div class="col-xs-12 showback">
 
                                        <div class="box box-primary">
                                            <div class="box-body table-responsive">
                                                <table class="table table-bordered table-hover text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">#</th>
                                                            <th class="text-center">Course</th>
                                                            <th class="text-center">Subject Name</th>
 
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
														 
														
														if(!empty($subject_listing)): ?>
                                                        <?php foreach($subject_listing as $key=>$val): ?>
                                                        <tr>
                                                            <td><?php echo $key+1; ?></td>
                                                            <td> <?php echo $val['course_title']; ?> </td>
                                                            <td> <?php echo $val['subject_title']; ?> </td>
 
                                                            <td>    
                                                             <?php echo anchor('educational/delete_subject/'.  urlencrypt($val['subject_id']),'<i class="fa fa-trash-o"></i>',array("class"=>"btn btn-danger btn-lg", "onclick"=>"return confirm('Do you want delete this record')")); ?>
                                                             <a href="<?php echo base_url('educational/edit-subject/'.urlencrypt($val['subject_id'])); ?>" class="btn btn-warning btn-lg"><i class="fa fa-pencil-square-o"></i></a>
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