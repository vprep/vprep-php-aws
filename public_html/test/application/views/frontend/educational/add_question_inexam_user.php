<script>window.MathJax = { MathML: { extensions: ["mml3.js", "content-mathml.js"]}};</script>
<script type="text/javascript" async src="http://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=MML_HTMLorMML"></script>

<style>
.table_user_css {
   border: 1px solid black;
   margin-left:5px;
   margin-bottom:5px;
   text-align: center;
   
}
</style>

<div id="wrapper-content main_page_save">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding">
                <div style="width:300px; float:left; margin-left:30px;">
                <table class="table_user_css" style="width:250px;">
                <tr class="table_user_css" >
                <th class="table_user_css" >Subject</th>
                <th class="table_user_css" >Max</th>
                <th class="table_user_css">Added</th>
                </tr>
                <?php
                foreach($subject_num as $subnum){
                  echo "<tr><td class='table_user_css'><span class=";
                  echo $subnum["title_id"];
                  echo ">";
                  echo $subnum["title"];
                  echo "</span></td>";
                  echo "<td class='table_user_css'><span class=";
                  echo $subnum["title_id"];
                  echo "num";
                  
                  echo ">";
                  echo $subnum["num"][0]['num_question'];
                  echo "</span></td>";
                  
                  
                  echo "<td class='table_user_css'><span class=";
                  echo $subnum["title_id"];
                  echo "Al";
                  echo ">";
                  echo $subnum["count"];
                  echo "</span></td>";
                  echo "</tr>";
                  echo "";
                }
                ?>
                </table>
                </div>
              <div class="col-md-2" style="
    float: right;
    margin-right: 48px;
    /* margin-bottom: 10px; */
">
														<button name="save" type="button" value="save_add" class="btn btn-success btn-lg custom-margin-5" onclick="save_saving()">
															Save
														</button>
													</div>
                
                
                
                
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                <?php echo validation_errors(); ?>
								<form name="search_question_user" action="<?php echo base_url("educational/addQuestionToExamUser"); ?>" method="post" id="search_question_user" style="width:84%">
								  <input type="hidden" name="exam_id" value="<?php echo $exam_id; ?>">
								  <input type="hidden" name="course" value="<?php echo $course; ?>">
								  <input type="hidden" name="subject_id" value="<?php echo $subject_id; ?>">
								  <input type="hidden" name="module" value="<?php echo $module; ?>">
								  
								  <div class="row">
                                    <div class="col-xs-12 showback">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <table class="table table-bordered table-hover text-center user-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" width="10%">#</th>
                                                            <th class="text-center" width="80%" >Question</th>
                                                            <th class="text-center" width="10%">Choose</th>
                                                        </tr>
                                                    </thead>
                                                   <tbody>
                                                        <?php if(!empty($test_ques)): ?>
                                                        <?php foreach($test_ques as $key=>$val): ?>
                                                        <tr>
                                                            <td class="id_user"><?php echo $val['id'] ?></td>
                                                            <input type="hidden" name="add_Question[]" value="<?php echo $val['id'] ?>">
                                                            <td>
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
                                                            </td>
                                                            
                                                            <td>
															<div class="form-group">
															<div onclick="deleteQuestion(this,<?php echo $val['subject_id']?>)" style="FONT-SIZE: 20PX;
    FONT-WEIGHT: BOLD;
    COLOR: RED;
    CURSOR: POINTER;">X</div>
															</div>
															</td>
                                                           
                                                        </tr>
                                                        <?php endforeach; ?>
													
                                                         <?php else: ?>
                                                        <tr class="no_record_found"><td colspan="10"><div class="alert alert-info alert-dismissible">
                                                                <h4><i class="icon fa fa-info"></i> Information!</h4>
                                                                No Record Found.
                                                            </div>
                                                        </td></tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
												<?php if(!empty($test_ques)){ ?>
												<div class="col-md-12">
													

													<div class="col-md-2">
														<a href="javascript:;" onclick="window.history.back();" class="btn btn-danger btn-lg">Discard</a>
													</div>
												</div>
												<?php } else { ?>
												<div class="col-md-12">
												 
<div class="col-md-2">
														
													</div>
													<div class="col-md-2">
														<a href="javascript:;" onclick="window.history.back();" class="btn btn-danger btn-lg">Discard</a>
													</div>
												</div>
												<?php }?>
												
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
function deleteQuestion(e,idi){


    
    
    title=$(e).closest('tr').children('td:eq(1)').html();
    id=$(e).closest('tr').children('td:eq(0)').text();
    
    
    
    
    $(e).closest('tr').remove();
    
    
    $("."+idi+"Al").text(parseInt($("."+idi+"Al").text())-1);
    

}
function save_saving()
{ 
 
 var options = $("#main_page_save");
 
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/addQuestionToExamUser');?>',
		data: $('#search_question_user').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		 
		//  alert(responseMess);
		 
		//var optionsValues = jQuery.parseJSON(responseMess);
		document.body.innerHTML='';
		document.body.innerHTML=responseMess;
		
		 
		//options.html("question is added");

		},
		error: function(request, status, err) {

			if(status == "timeout") {

				alert('Oops !! There might me network error, please try one more time !!');
			}

		 }
	});
	
}







</script>
