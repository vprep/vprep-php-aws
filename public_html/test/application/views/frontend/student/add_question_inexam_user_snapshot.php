<script>window.MathJax = { MathML: { extensions: ["mml3.js", "content-mathml.js"]}};</script>
<script type="text/javascript" async src="http://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=MML_HTMLorMML"></script>
<style>
html *
{
   font-size:14px !important;
   
}
html * {
    font-size: 13px !important;
    font-family: serif !important;
    font-weight: 400 !important;
    color: black !important;
}


</style>

<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                <?php echo validation_errors(); ?>
								<form name="search_question" action="<?php echo base_url("educational/saveExamQuestion"); ?>" method="post" id="search_question" >
								  <input type="hidden" name="exam_id" value="<?php echo $exam_id; ?>">
								  <input type="hidden" name="course" value="<?php echo $course; ?>">
								  <input type="hidden" name="subject_id" value="<?php echo $subject_id; ?>">
								  <input type="hidden" name="module" value="<?php echo $module; ?>">
								  
								  <div class="row">
                                    <div class="col-xs-12 showback">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <table class="table table-bordered table-hover">
                                                    
                                                   <tbody>
                                                
                                                   
                                                   
                                                   
                                                        <?php if(!empty($test_ques)): ?>
                                                        <?php $idq = 0;  foreach($test_ques as $key=>$val): ?>
                                                        <style>
                                                        .question_container{
                                                        border-style: solid;
    border-bottom-style: dashed;
    border-color: green;
    border-width: 1px;padding-left:1%;
                                                            
                                                            margin-bottom: 10px;
                                                        } .padding-left{padding-left:1%;}
                                                        </style>
                                                        <tr>
                                                            <td style="font-size: 18px !important;
    font-weight: bold !important;"><?php $idq =$idq +1;echo $idq ?></td>
                                                            <td><div class="question_container"><span style="font-size:18px !important;color:black;font-weight:bold;">Question:</span>
                                                
                                               <?php if(isset($test_answer[$val['id']])) if($test_answer[$val['id']]['option']=="option".$val['correct_ans']){?>
                                               
                                                <img src="<?php echo base_url();?>/uploads/correct-question.png" height="50" style="width: 33px;
    float: right;
    margin-left: 11px;">
<?php 
															}else { ?>
														<img src="<?php echo base_url();?>/uploads/wrong-question.png" height="50" style="
    width: 33px;
    float: right;
    margin-left: 11px;
">	
															
												<?php 			} ?>
                                                
                                                
                                                           
                                                <span style="
    
    float: right;
">Time Spent:															<?php 		if(isset($test_answer[$val['id']]))echo $test_answer[$val['id']]['time']." Sec"; else echo "Not Attempt";?> 
                                                
                                                
                                                
                                                </span>        
                                                <span style="
    float: right;
    /* font-size: 19px !important; */
    font-weight: bold !important;
    padding-right: 10px;
    text-transform: capitalize;
">
                                                	<?php 		echo $val['difficulty_level']; ?>
                                                	</span>
                                                
                                                           
                                                            
                                                            
                                                            
															<?php
																if($val['question_type'] == 1){?>
																<img src="<?php echo base_url();?>/uploads/<?php echo $val['ques_img'];?>" height="50">
															<?php 
															}else if($val['question_type'] == 2){
																echo  $val['title'];
															?>
															

															<img src="<?php echo base_url();?>/uploads/<?php echo $val['ques_img'];?>" height="50">
															
															<?php 	
															}else
															{  
																echo  $val['title'];
															}
															?>
                                                           
                                                            </div>
                                                            
														
															<div class="form-group correct_ans padding-left">
															<span style="float:left; <?php if($val['correct_ans']==1) echo "background:lightgreen" ?>">Option 1  :</span> <span><?php echo  $val['option1']; ?></span>
															</div>
															<div class="form-group correct_ans padding-left">
															<span style="float:left; <?php if($val['correct_ans']==2) echo "background:lightgreen" ?>">Option 2 : </span> <?php echo  $val['option2']; ?>
															</div>
															<div class="form-group correct_ans padding-left">
															<span style="float:left; <?php if($val['correct_ans']==3) echo "background:lightgreen" ?>">Option 3 : </span> <?php echo  $val['option3']; ?>
															</div>
															<div class="form-group correct_ans padding-left">
															<span style="float:left; <?php if($val['correct_ans']==4) echo "background:lightgreen" ?>">Option 4 :</span> <?php echo  $val['option4']; ?>
															</div>
															
											<div style="
    text-transform: capitalize;
    font-weight: bold !important;
    padding-left: 1%;
    padding-bottom: 10px;
"> Your Answer:			<?php if(isset($test_answer[$val['id']])) echo $test_answer[$val['id']]['option']; else echo "Not Attempt" ?>
												</div>
															
															
															
															
                                                            
                                                            
                                                            
                                                            
															<div class="question_container"><span style="font-size:18px !important;color:black;font-weight:bold;">Solution:</span>
															<?php
																if($val['solution_type'] == 1){?>
																<img src="<?php echo base_url();?>/uploads/<?php echo $val['solution_img'];?>" height="50">
															<?php 
															}else if($val['solution_type'] == 2){
																echo  $val['solution'];
															?>

															<img src="<?php echo base_url();?>/uploads/<?php echo $val['solution_img'];?>" height="50">
															
															<?php 	
															}else
															{  
																echo  $val['solution'];
															}
															?>
                                                           
                                                            </div>
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
								
								
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

function saving(){
	
	//var arr = "<?php json_encode($this->input->post("add_Question")); ?>";
	
	//console.log('arr - ', arr);
	
	//alert(arr);
	
	//confirm('Do you want Save this record');
}

function getSubFilter()
{ 
 
 var options = $("#show_subject_id");
 
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/getSubjectFilter');?>',
		data: $('#search_question').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		 
		//  alert(responseMess);
		 
		var optionsValues = jQuery.parseJSON(responseMess);
		 		 
		 
		options.html(optionsValues);

		},
		error: function(request, status, err) {

			if(status == "timeout") {

				alert('Oops !! There might me network error, please try one more time !!');
			}

		 }
	});
	
}

function getModuleFilter()
{ 

	// alert(exam);

 var options = $("#show_module_id");
 
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/getModuleList');?>',
		data: $('#search_question').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
	  //  alert(responseMess);
		 
		 
		var optionsValues = jQuery.parseJSON(responseMess);
		 		 
		
		options.html(optionsValues);

		},
		error: function(request, status, err) {

			if(status == "timeout") {

				alert('Oops !! There might me network error, please try one more time !!');
			}

		 }
	});
	
}


</script>
