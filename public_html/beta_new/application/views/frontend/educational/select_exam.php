<?php
$text = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis";
?>
<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>    
                                <form id="search_question" action="http://test.vprep.in/educational/filterQuestion" method="post" accept-charset="utf-8">
								 
                                <div class="row">
                                    <div class="col-md-12 showback">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div class="box-body">
                                                    <div class="col-md-6 col-md-offset-3" style="
    margin-left: 0px;
    width: 17%;
">
													<div class="form-group" >
														<label>Choose Exam</label>
														<select id="pre-selected-options" name="exam_id" class="form-control" required onchange="getSubjectExam()">
															<option value="">Choose Exam</option>
															<?php 
															if(count($exam_list)>0){
																foreach($exam_list as $exam){ ?>
															<option value="<?php echo $exam['exam_id'];?>"><?php echo $exam['exam_name'];?></option>
															<?php } } ?>
															 
														</select>
													</div>
													</div>
													
													<div id="subject_exam">
													<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="show_subject_id">
										<label class="pull-left">Select Subject</label>
										<select name="subject_id" class="form-control" required="required" id="subject_id" onchange="gMF()">
										
																					
																					</select>
									</div>
									
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="show_module_id">
										<label>Select Module</label><br>
										<select name="modulefilter" class="form-control" style="width:100%;">
											<option value="" selected="">&nbsp;</option>
										</select>
									</div>
									
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="show_sub_module_id">
										<label>Select Sub-Module</label><br>
										<select name="submodulefilter" class="form-control" style="width:100%;">
											<option value="" selected="">&nbsp;</option>
										</select>
									</div>
									
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="show_sub_module_id">
										<label>Select Source</label><br>
										<select name="source_filter" class="form-control" style="width:100%;">
											<option value="my" selected="">My Question Bank</option>
											<option value="vprep" selected="">Vprep Quesion Bank</option>
										</select>
									</div>
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													
													</div>
													<button onclick="getQuestionsBoth()" type=button name="save"  value="Start" class="btn btn-primary btn-lg custom-margin-5" style="
    float: right;
    margin-top: 20px;
">
														Add Question
													</button>
													
													
													
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <?php echo form_close(); ?>
								<div class="col-md-12">&nbsp;<br><br><br><br><br><br></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <div id="loading-gif-1" style="display:none; margin-left:200px; margin-top:-100px;width:50%;float:left;">
<img class="_3QcZOBs-_0PFoUjz21NMOt" src="http://media0.giphy.com/media/3oEjI6SIIHBdRxXI40/200w.webp#0-grid1" width="148" height="148" loop="infinite" alt="Mashable loading GIF">

</div>
<div id="questions_to_exam_user" style="width: 50%;
    float: left;
    margin-top: -224px;">
  
    
    
    </div>
  <div id="loading-gif-2" style="display:none; margin-left:200px; margin-top:-100px;float:left;">
<img class="_3QcZOBs-_0PFoUjz21NMOt" src="http://media0.giphy.com/media/3oEjI6SIIHBdRxXI40/200w.webp#0-grid1" width="148" height="148" loop="infinite" alt="Mashable loading GIF">

</div>
<div id="questions_to_exam" style="width: 50%;
    float: right;
    margin-top: -224px;">
  
    
    
    
    </div>
    
    <div class="is_user_loaded" style="display:none"></div>

<script>
$('#pre-selected-options').multiSelect();

$( "#leftall" ).click(function() {
	$('#pre-selected-options').multiSelect('deselect_all');
});

$( "#rightall" ).click(function() {
	$('#pre-selected-options').multiSelect('select_all');
});
</script>


<script>
function getSubjectExam(){

options= $("#subject_exam");
	$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/chooseExamQuestion');?>',
		data: $('#search_question').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		
		 
                console.log(responseMess);
		
		 		 
		
		options.html(responseMess);
		

		},
		error: function(request, status, err) {

			if(status == "timeout") {

				alert('Oops !! There might me network error, please try one more time !!');
			}

		 }
	});

}
function getQuestionsBoth(){


options= $("#questions_to_exam");
$("#loading-gif-2").show(); 
options.hide();
	$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/filterQuestion');?>',
		data: $('#search_question').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		
		 
                console.log(responseMess);
		
		 		 
		$("#loading-gif-2").hide(); 
		options.html(responseMess);
		options.show();
		

		},
		error: function(request, status, err) {

			if(status == "timeout") {

				alert('Oops !! There might me network error, please try one more time !!');
			}

		 }
	});
	
	if(!$(".is_user_loaded").text()==1){
	$("#loading-gif-1").show(); 
options_user= $("#questions_to_exam_user");
options_user.hide();
	$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/filterQuestionUser');?>',
		data: $('#search_question').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess1) {
		
		 
                console.log(responseMess1);
		
		 		 
		
		$("#loading-gif-1").hide(); 
		options_user.html(responseMess1);
		options_user.show();
		$(".is_user_loaded").text(1);
		

		},
		error: function(request, status, err) {

			if(status == "timeout") {

				alert('Oops !! There might me network error, please try one more time !!');
			}

		 }
	});
	}	

}

</script>


<style>
.col-lg-3 {
    width: 16%;
}
</style>