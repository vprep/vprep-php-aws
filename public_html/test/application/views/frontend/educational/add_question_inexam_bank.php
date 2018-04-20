<script>window.MathJax = { MathML: { extensions: ["mml3.js", "content-mathml.js"]}};</script>
<script type="text/javascript" async src="http://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=MML_HTMLorMML"></script>


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
								<form name="search_question" action="<?php echo base_url("educational/saveExamQuestion"); ?>" method="post" id="search_question" style="width:84%">
								  <input type="hidden" name="exam_id" value="<?php echo $exam_id; ?>">
								  <input type="hidden" name="course" value="<?php echo $course; ?>">
								  <input type="hidden" name="subject_id" value="<?php echo $subject_id; ?>">
								  <input type="hidden" name="module" value="<?php echo $module; ?>">
								  <div class="subject_id_num" style="display:none"><?php echo $subject_id; ?></div>
								  <div class="row">
                                    <div class="col-xs-12 showback">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <table class="table table-bordered table-hover text-center bank-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" width="10%">Choose</th>
                                                            <th class="text-center" width="10%">#</th>
                                                            <th class="text-center" width="80%" >Question</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                   <tbody>
                                                        <?php if(!empty($test_ques)): ?>
                                                        <?php foreach($test_ques as $key=>$val): ?>
                                                        <tr>
                                                        <td>
															<div class="form-group">
															
															<img src="http://test.vprep.in/assets/frontend/images/logo/download_right_left.jpeg" style="
    width: 45px;
    
    position: absolute;
    clip: rect(0px,24px,153px,0px);
    left: 33px;
    cursor: pointer;
" onclick="addQuestion(this)">
															
															
															
															
															
															</div>
															</td>
                                                            <td><?php echo $val['id'] ?></td>
                                                            <td>
															<?php
																if($val['question_type'] == 1){?>
																<img src="<?php echo base_url();?>/uploads/<?php echo $val['ques_img'];?>" style="width:auto;height:auto" height="50">
															<?php 
															}else if($val['question_type'] == 2){
																echo  $val['title'];
															?>

															<img src="<?php echo base_url();?>/uploads/<?php echo $val['ques_img'];?>" style="width:auto;height:auto" height="50">
															
															<?php 	
															}else
															{  
																echo  $val['title'];
															}
															?>
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
function addQuestion(e){

    subject_id_num=$(".subject_id_num").text();
    subject_total=$("."+subject_id_num+"num").text();
    subject_total_al=$("."+subject_id_num+"Al").text();
    
    
    if(parseInt(subject_total_al)<parseInt(subject_total) ){
    
    title=$(e).closest('tr').children('td:eq(2)').html();
    id=$(e).closest('tr').children('td:eq(1)').text();
    
    
  for(var i=0; i<$(".id_user").length;i++){
  if($(".id_user")[i].textContent==id){
  alert("This question "+id+" is already in Your exam.");
  return 0;
  }
  }
  $("."+subject_id_num+"Al").text(parseInt(subject_total_al)+1);
    $('.user-table tr:last').after('<tr><td class="id_user">'+id +'</td><input type="hidden" name="add_Question[]" value="'+id +'"><td>'+title+'</td><td><div onclick="deleteQuestion(this,'+subject_id_num+')" style="FONT-SIZE: 20PX; FONT-WEIGHT: BOLD; COLOR: RED; CURSOR: POINTER;">X</div></td></tr>');
    
   // $(e).closest('tr').remove();
    $(".no_record_found").hide();
    $(".addedAlready").text(parseInt($(".addedAlready").text())+1);
    
    }
    else {
    alert("You can't add more than allowed for this subject.")}

}


</script>
