<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses" style="padding-top:20px;">
                    <div class="container">
                        <div class="group-title-index" style="
    height: 100px;
">
                            <h2 class="center-title">&nbsp; </h2>
                            
                            <?php 
if(isset($is_mock)): ?>
<h2 class="center-title">Mock Tests</h2>
<?php else : ?>
<h2 class="center-title">Exams</h2>

<?php endif; ?>
                            
                            
                            
                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row ">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="box">
                                            <div class="box-body text-right">
                                            
                                             <?php 
if(isset($is_mock)): ?>
                       <?php echo anchor('educational/create_new_exam_mock','<i class="fa fa-plus-square"></i>',array("class"=>"btn btn-primary btn-lg")); ?>
<?php else : ?>
                       <?php echo anchor('educational/create_new_exam','<i class="fa fa-plus-square"></i>',array("class"=>"btn btn-primary btn-lg")); ?>

<?php endif; ?>
                                            
                                            
                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 showback">
                                        <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <table class="table table-bordered table-hover text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">#</th>
                                                            <th class="text-center">Exam Name</th>
                                                            <th class="text-center">Course</th>
                                                            <th class="text-center">Subject</th>
                                                            <th class="text-center">Duration</th>
                                                            <th class="text-center">Start</th>
                                                            <th class="text-center">End</th>
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
                                                                <?php echo  $val['exam_name']; ?>
                                                            </td>
															<td><?php echo $val['course_title'];?></td>
															<td><?php echo $val['subject_title'];?></td>
                                                             
                                                            <td><?php echo $val['exam_time']." Minutes"; ?></td>
                                                            <td><?php echo date('d,M Y',strtotime($val['start_date'])); ?></td>
                                                            <td><?php echo date('d,M Y',strtotime($val['end_date'])); ?></td>
                                                            <td><?php if($val['exam_status']==0){?>
															 <a href="<?php echo base_url("educational/examstatusupdate")."/".urlencrypt($val['exam_id'])."/1"; if(isset($is_mock)) echo "/1"; else echo "/0";       ?>" class='label label-danger'>Inactive</a>
															 
															 
															 
															 
															<?php } else { ?>
<a href="<?php echo base_url("educational/examstatusupdate")."/".urlencrypt($val['exam_id'])."/0";if(isset($is_mock)) echo "/1"; else echo "/0"; ?>" class='label label-success'>Active</label>
															 
															<?php } ?></td>
												
                                                            
                                                            <td>   
                                                            <a href="http://test.vprep.in/educational/exam/leaderboard/<?php echo $val['exam_id'];?>"><img src="http://png.icons8.com/color/50/000000/positive-dynamic.png"></a>
                                                         <?php    if(isset($is_mock)): ?>
                                                           <a href="http://test.vprep.in/educational/show_snap_shot/<?php echo $val['exam_id']?>"> <img src="http://test.vprep.in/assets/frontend/images/logo/icon1.png" style="
    width: 64px;
    height: 40px;
"></a>
<a href="add_test_questions_mock/<?php echo $val['exam_id']?>/<?php echo $val['course_id']?>" class="btn btn-warning btn-lg"><i class="fa fa-pencil-square-o"></i></a>

 <?php else: ?>

<?php echo anchor('educational/edit_test_exam/'.$val['exam_id'],'<i class="fa fa-pencil-square-o"></i>',array("class"=>"btn btn-warning btn-lg")); ?>
<?php endif; ?> 
                                                            
																
																
															

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
