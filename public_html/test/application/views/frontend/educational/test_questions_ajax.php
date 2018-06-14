<script>window.MathJax = { MathML: { extensions: ["mml3.js", "content-mathml.js"]}};</script>
<script type="text/javascript" async src="http://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=MML_HTMLorMML"></script>

<div style="margin-left: 72px;" >Total Questions <?php echo $total_no_of_question ?> </div>

<style>
span{

font-size:12px !important;
}


</style>

<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses" style="padding-top:20px;">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-sm-12">
                                
								<div style="overflow-x: scroll;"><!-- style="overflow-x: scroll;" -->
                                <div class="row">
                                    <div class="col-xs-12 showback">
                                        <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <table class="table table-bordered table-hover text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th class="text-center" width="40%">Question</th>
                                                            <th class="text-center">Subject</th>
                                                            <th class="text-center">Module</th>
                                                            <th class="text-center">Sub Module</th>
                                                            <?php if($user_id!=1126): ?>
                                                            <th class="text-center">Action</th>
                                                            <?php endif; ?>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(!empty($test_ques)): ?>
                                                        <?php foreach($test_ques as $key=>$val): ?>
                                                        <tr>
                                                            <td><?php echo $val['id']; ?></td>
                                                            <td>
                                                                <!DOCTYPE html>
                                                                <html>
                                                                <head>
                                                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                                                    <style>
                                                                        body {
                                                                            font-family: 'Lato', sans-serif;
                                                                        }

                                                                        .overlay {
                                                                            height: 80%;
                                                                            width: 0%;
                                                                            position: fixed;
                                                                            z-index: 1;
                                                                            top: 0;
                                                                            left: 100;
                                                                            background-color: rgb(0,0,0);
                                                                            background-color: rgba(0,0,0, 0.9);
                                                                            overflow-x: hidden;
                                                                            transition: 0.5s;
                                                                        }

                                                                        .overlay-content {
                                                                            position: relative;
                                                                            top: 25%;
                                                                            width: 100%;
                                                                            text-align: center;
                                                                            margin-top: 30px;
                                                                        }

                                                                        .overlay a {
                                                                            padding: 8px;
                                                                            text-decoration: none;
                                                                            font-size: 36px;
                                                                            color: #818181;
                                                                            display: block;
                                                                            transition: 0.3s;
                                                                        }

                                                                        .overlay a:hover, .overlay a:focus {
                                                                            color: #f1f1f1;
                                                                        }

                                                                        .overlay .closebtn {
                                                                            position: absolute;
                                                                            top: 20px;
                                                                            right: 45px;
                                                                            font-size: 60px;
                                                                        }

                                                                        @media screen and (max-height: 450px) {
                                                                            .overlay a {font-size: 20px}
                                                                            .overlay .closebtn {
                                                                                font-size: 40px;
                                                                                top: 15px;
                                                                                right: 35px;
                                                                            }
                                                                        }
                                                                    </style>
                                                                </head>
                                                                <body>

                                                                <div id="myNav" class="overlay">
                                                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                                                    <div class="overlay-content">

                                                                        <div style="color:white; text-align: left;"> <?php echo $val['id']; ?>: <?php echo $val['title']; ?></div>
                                                                        <div style="color:white;text-align: left;"> Solution: <?php echo $val['solution']; ?></div>

                                                                        <div style="color:white;text-align: left;">Option1:<?php echo $val['option1']; ?></div>
                                                                        <div style="color:white;text-align: left;">Option2:<?php echo $val['option1']; ?></div>
                                                                        <div style="color:white;text-align: left;">Option3:<?php echo $val['option1']; ?></div>
                                                                        <div style="color:white;text-align: left;">Option4:<?php echo $val['option1']; ?></div>
                                                                    </div>
                                                                </div>



                                                                <script>
                                                                    function openNav() {
                                                                        document.getElementById("myNav").style.width = "80%";
                                                                    }

                                                                    function closeNav() {
                                                                        document.getElementById("myNav").style.width = "0%";
                                                                    }
                                                                </script>

                                                                </body>
                                                                </html>
                                                                <div style="cursor:pointer" onclick="openNav()">
                                                                <?php
																if($val['question_type']==1){?>
																<img src="<?php echo base_url();?>/uploads/<?php echo $val['ques_img'];?>" style="
    width: auto;
    height: auto;
" height="50">
															<?php 
															}
															else if($val['question_type']==2){ 
															echo  $val['title'];
															?>
															<img src="<?php echo base_url();?>/uploads/<?php echo $val['ques_img'];?>" height="50" style="
    width: auto;
    height: auto;
">

															<?php }
															else
															{  
																echo  $val['title'];
															}
															?></div>
                                                            </td>

                                                            <td>
                                                                <?php echo $val['subject_title']; ?>
                                                            </td>
                                                            <td><?php echo $val['module_title']; ?></td>
                                                            <td><?php echo $val['sb_module_title']; ?></td>

                                                            <?php if($user_id!=1126): ?>
                                                            <td>
															
															<?php echo anchor('edit_test_questions/'.$val['id'],'<i class="fa fa-pencil-square-o"></i>',array("class"=>"btn btn-warning btn-lg")); ?>
															
															<?php echo anchor('delete_test_question/'.urlencrypt($val['id']),'<i class="fa fa-trash-o"></i>',array("class"=>"btn btn-danger btn-lg")); ?>
															
															</td>
                                                            <?php endif; ?>
                                                            <!-- <td><?php echo anchor('delete_test_question/'.urlencrypt($val['id']),'<i class="fa fa-edit"></i>',array("class"=>"btn btn-success btn-lg")); ?></td> -->
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
                                                            <ul class="pagination">
   
   
   <?php $number_of_question_remaining= (int)$total_no_of_question;
   $page_num = array();
   $count=1;
   if (isset($current_page)){
   
   $page_start=$current_page;
   $next_page=$current_page+1;
   }
   else{
   $page_start=1;
   $next_page=$page_start+1;
   
   }
   $first_page=1;
   $last_page=intval($number_of_question_remaining/20) +1;
   
   if($page_start>1){
   $first_page=1;
   }
   if($page_start==""||$page_start<1){
   $page_start=1;
   }
   
   while($number_of_question_remaining-20>0&&$count<5&&$page_start<=$last_page){
   $page_num[$count]=$page_start;
   $page_start=$page_start+1;
   $count=$count+1;
   $number_of_question_remaining=$number_of_question_remaining-20;
   
   }
   if($current_page==$last_page){
   $last_page=-1;
   $next_page=-1;
   }
   if (isset($page_num[1]))
   if($page_num[1]<=1){
   $previous=-1;
   }else{
   $previous=1;
   }
   else 
   $previous=-1;
   
   
     ?>  
     <?php if($first_page==1 && (int)$total_no_of_question>20) : ?>
    <li><a  onclick="PageLoad(this)" class="current" value="<?php  echo $first_page ?>"><?php  echo "FIRST" ?>
    </a></li>
<?php endif; ?>  
<?php if($previous!=-1) : ?>
    <li><a  onclick="PageLoad(this)" class="current" value="<?php  echo $page_num[1]-1 ?>"><?php  echo "PREVIOUS" ?>
    </a></li>
<?php endif; ?> 

     <?php if(isset($page_num[1])) : ?>
    <li><span   class="current" style="background: #3b5998;
    color: white;" value="<?php  echo $page_num[1] ?>"><?php  echo $page_num[1] ?>
    </span></li>
<?php endif; ?>
<?php if(isset($page_num[2])) : ?>
    <li><a  onclick="PageLoad(this)" class="current" value="<?php  echo $page_num[2] ?>"><?php  echo $page_num[2] ?>
    </a></li>
<?php endif; ?>
<?php if(isset($page_num[3])) : ?>
    <li><a onclick="PageLoad(this)" class="current" value="<?php  echo $page_num[3] ?>"><?php  echo $page_num[3] ?>
    </a></li>
<?php endif; ?>
<?php if(isset($page_num[4])) : ?>
    <li><a  onclick="PageLoad(this)" class="current" value="<?php  echo $page_num[4] ?>"><?php  echo $page_num[4] ?>
    </a></li>
<?php endif; ?>
<?php if(isset($page_num[4])&&$next_page!=-1) : ?>
    <li><a  onclick="PageLoad(this)" class="current" value="<?php  echo $next_page ?>"><?php  echo "NEXT" ?>
    </a></li>
<?php endif; ?>
<?php if(isset($page_num[1])&&$last_page!=-1) : ?>
    <li><a  onclick="PageLoad(this)" class="current" value="<?php  echo $last_page ?>"><?php  echo "LAST >" ?>
    </a></li>
<?php endif; ?>






                                                     
    
</ul>
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
</div>
<style>
td {
max-width:600px !important;

}
.MJXp-math {

white-space:normal !important;
}

</style>

