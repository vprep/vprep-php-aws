<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses" style="padding-top:20px;">
                    <div class="container">
                        <div class="group-title-index">
                            <h2 class="center-title">&nbsp; </h2>
                            <h2 class="center-title">Student's Result</h2>
                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
 
                                <div class="row">
                                    <div class="col-xs-12 showback">
                                        <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                        <div class="box box-primary">
                                            <div class="box-body table-responsive">
                                                <table class="table table-bordered table-hover text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">#</th>
                                                            <th class="text-center">Student Name</th>
                                                            <th class="text-center">Username</th>
                                                            <th class="text-center">Email</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(!empty($student_listing)): ?>
                                                        <?php 
														foreach($student_listing as $key=>$val): 
														
														if(true)
														{
														?>
                                                        <tr>
                                                            <td><?php echo $key+1; ?></td>
                                                            <td> <?php echo $val['name']; ?> </td>
                                                            <td>
                                                                <?php echo $val['username']; ?>
                                                            </td>
                                                            <td><?php echo $val['email']; ?></td>
                                                            <td>    
                                                                <?php echo anchor('educational/student_score/'.  urlencrypt($val['id']),'<i class="fa fa-search"></i>',array("class"=>"btn btn-warning btn-lg", "onclick"=>"")); ?>
                                                            </td>
                                                        </tr>
														<?php } ?>
														
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