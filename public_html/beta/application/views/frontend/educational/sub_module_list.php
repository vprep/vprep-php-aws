<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses" style="padding-top:20px;">
                    <div class="container">
                        <div class="group-title-index">
                            <h2 class="center-title">&nbsp; </h2>
                            <h2 class="center-title">Sub Modules</h2>
                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row ">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="box">
                                            <div class="box-body text-right">
                                                <?php echo anchor('educational/new-sub-module','<i class="fa fa-plus-square"></i> New Module',array("class"=>"btn btn-primary btn-lg")); ?>
                                            </div>
                                        </div>
                                    </div>
									<div class="clearfix">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 showback">
                                        <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <table class="table table-bordered table-hover text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">S.No.</th>
                                                            <th class="text-center">Module Name</th>
                                                            <th class="text-center">Parent Module</th>
                                                           
                                                            <th class="text-center">Subject Name</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(!empty($test_cat)): ?>
                                                        <?php foreach($test_cat as $key=>$val): ?>
                                                        <tr>
                                                            <td><?php echo $key+1; ?></td>
                                                            <td> <?php echo $val['module_title']; ?></td>
                                                            <td> 
															<?php 
															$modName = @$this->edu->getModuleInfo($val['module_parent_id']);
															
															if(@$modName->module_title=="") 
															{ 
																echo "NA";
															}
															else 
															{
																echo @$modName->module_title;
															}

															?></td>
                                                           
                                                            <td><?php echo $val['subject_title']; ?></td>
                                                            <td>    
																<?php echo anchor('educational/editsubmodule/'.  urlencrypt($val['module_id']),'<i class="fa fa-edit"></i>',array("class"=>"btn btn-success btn-lg")); ?>
                                                                <?php echo anchor('educational/deletesubmodule/'.  urlencrypt($val['module_id']),'<i class="fa fa-trash-o"></i>',array("class"=>"btn btn-danger btn-lg", "onclick"=>"return confirm('Do you want delete this record')")); ?>
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
                                                            <?php  echo $pages; ?>
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