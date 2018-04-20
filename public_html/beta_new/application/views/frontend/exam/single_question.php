<?php
	$color = "btn btn-warning";
	$exam_id = urldecrypt($this->uri->segment(2));
	$getFlag = $this->session->userdata('flag_question');
	$getAnsData = $this->session->userdata('not_answer_ques');
	$testAns = $this->session->userdata('test_answers');
	if(count($getFlag) > 0)	{
		$getRow = $this->edu->get_test_exam_questions($exam_id, $page);
		if(@$this->session->userdata('test_answers')[$getRow['id']] != "")
		{
			$color =  "btn btn-default";
		} else if(in_array($getRow['id'], $getFlag)) 
		{
			$color =  "btn btn-info";
		} else {
			$color =  "btn btn-warning";
		}
	}	
?>

<button style="margin-top: -70px;    margin-left: 95px;display:none;" data-color="primary" class="<?php echo $color; ?>" type="button" id="addQuesFlag"><i aria-hidden="true" class="fa fa-flag-o"></i></button>

<div class="edugate-layout-1">
    <div class="col-xs-12">
        <h5 style="padding:0px; margin:0px;">  
            <label class="btn btn-success btn-circle"><?php echo $page+1; ?></label>
            <strong> 
			<?php  echo !empty($test_question['title']) ? $test_question['title'] : ''; ?>
			<?php if($test_question['ques_img']!=""){ ?>
				 <div><img src="<?php echo base_url(); ?>/uploads/<?php echo $test_question['ques_img']; ?>" style="height:100px;"></div>
			<?php }?>

			</strong>
			<br><br>
           
			<input name="question_id" value="<?php echo $test_question['id']; ?>" type="hidden" id="quesId">
			<?php 
			$getAnsData = $this->session->userdata('not_answer_ques');
			
			if(count($getAnsData)>0)
			{
				foreach($getAnsData as $gnd)
				{
					$ansData[] = $gnd;
				}
				
				if(!in_array($test_question['id'],$ansData))
				{
					$ansData[]=$test_question['id'];
				}
				
			}
			else{
				$ansData[]=$test_question['id'];
			}
			
		  
			$this->session->set_userdata('not_answer_ques', $ansData);   
		
			
			?>
 
        </h5>  
    </div>
    <div class="clearfix" style="height:80px;"> </div>
    <div class="col-md-12 down">
        <button class="btn btn-warning btn-circle" type="button">A</button>
        <input type="radio" value="option1" name="option" id="checkbox1" <?php echo (!empty($sl_option) && $sl_option=='option1')?'checked="checked"':''; ?>>
        <label for="checkbox1">
		<?php if($test_question['option1_type']==1){ ?>
			<img src="<?php echo base_url(); ?>/uploads/<?php echo $test_question['option1']; ?>" style="height:80px;">
		<?php } else { 	echo  $test_question['option1']; }	?>
		</label>
    </div>
    <div  class="col-md-12 down">
        <button class="btn btn-warning btn-circle" type="button">B</button>
        <input type="radio"  value="option2" name="option" id="checkbox1" <?php echo (!empty($sl_option) && $sl_option=='option2')?'checked="checked"':''; ?>>
        <label for="checkbox2"><span></span> 
		<?php if($test_question['option2_type']==1){ ?>
			<img src="<?php echo base_url(); ?>/uploads/<?php echo $test_question['option2']; ?>" style="height:80px;">
		<?php } else { 	echo  $test_question['option2']; }	?>
		</label>
    </div>

    <div  class="col-md-12 down">
        <button class="btn btn-warning btn-circle" type="button">C</button>
        <input type="radio"  value="option3" name="option" id="checkbox1" <?php echo (!empty($sl_option) && $sl_option=='option3')?'checked="checked"':''; ?>>
        <label for="checkbox3"><span></span>
		<?php if($test_question['option3_type']==1){ ?>
			<img src="<?php echo base_url(); ?>/uploads/<?php echo $test_question['option3']; ?>" style="height:80px;">
		<?php } else { 	echo  $test_question['option3']; }	?>
		</label>
    </div>
    <div  class="col-md-12 down">
        <button class="btn btn-warning btn-circle" type="button">D</button>
        <input type="radio"  value="option4" name="option" id="checkbox1" <?php echo (!empty($sl_option) && $sl_option=='option4')?'checked="checked"':''; ?>>
        <label for="checkbox4"><span></span>
		<?php if($test_question['option4_type']==1){ ?>
			<img src="<?php echo base_url(); ?>/uploads/<?php echo $test_question['option4']; ?>" style="height:80px;">
		<?php } else { 	echo  $test_question['option4']; }	?>
		</label>
    </div>
    	 
	<div id="ques_page1">
        <?php if(isset($page) && $page==0): ?>
        <a style="max-width:100px;min-width:80px;" class="btn icon-btn btn-success btn-contact btn-block" 
           data-exam-id='<?php echo isset($test_question['exam_id'])?urlencrypt($test_question['exam_id']):''; ?>' 
           data-page-num='<?php echo isset($page)?$page+1:0; ?>'>Next</a>
        <?php elseif(isset($page) && isset($total_exam_question) && $total_exam_question==$page+1): ?>
            <a style="max-width:100px;min-width:80px;" class="btn icon-btn btn-success btn-contact btn-block" 
               data-exam-id='<?php echo isset($test_question['exam_id'])?urlencrypt($test_question['exam_id']):''; ?>' 
               data-page-num='<?php echo isset($page)?$page-1:0; ?>'>Previous </a>
        <?php else: ?>
            <a style="max-width:100px;min-width:80px;" class="btn icon-btn btn-success btn-contact pull-left" 
               data-exam-id='<?php echo isset($test_question['exam_id'])?urlencrypt($test_question['exam_id']):''; ?>' 
               data-page-num='<?php echo isset($page)?$page-1:0; ?>'>Previous </a>
            <a style="max-width:100px;min-width:80px;" class="btn icon-btn btn-success btn-contact pull-right"
               data-exam-id='<?php echo isset($test_question['exam_id'])?urlencrypt($test_question['exam_id']):''; ?>' 
               data-page-num='<?php echo isset($page)?$page+1:0; ?>'>Next</a>
        <?php endif; ?>
    </div>
	
	
	
<nav id="c-menu--push-right" class="c-menu c-menu--push-right" >
<span class="c-menu__close" onclick="toggleJump()"><i aria-hidden="true" class="fa fa-times-circle-o fa-3x"></i></span>
<div class="edugate-layout-1">
<div class="ScrollStyle" >
  <h4> Question Palette</h4>
   
  <?php
   $exam_id=urldecrypt($this->uri->segment(2));
 
   // echo $test_question['question_type'];
   $getFlag = $this->session->userdata('flag_question');
   $getAnsData = $this->session->userdata('not_answer_ques');
   $answered = $this->session->userdata('test_answers');
	  
	if($total_exam_question>0)
	{
		for($kp = 0; $kp < $total_exam_question; $kp++){
			$getRow = $this->edu->get_test_exam_questions($exam_id, $kp);
 			
			if(/*count($answered) > 0 && in_array($getRow['id'], $answered) &&*/ @$answered[$getRow['id']] != "")
			{
				$color =  "btn btn-success";
				$style =  '';
			}
			else if(/*count($getFlag) > 0 &&*/ @in_array($getRow['id'], $getFlag))
			{
				$color =  "btn btn-info";
				$style =  '';
			}
			else if(/*count($getAnsData) > 0 &&*/ @in_array($getRow['id'], $getAnsData))
			{
				$color =  "btn btn-default";
				$style =  'style="background:#fff; border:1px solid #ccc; color:#737373;"';
			}
			else if(/*count($answered) > 0 && in_array($getRow['id'], $answered) &&*/ @$answered[$getRow['id']] == "" && @in_array($getRow['id'], $getAnsData))
			{
				$color =  "btn btn-danger";
				$style =  '';
			}else
			{
				$color =  "btn btn-default";
				$style =  'style="background:#fff; border:1px solid #ccc; color:#737373;"';
			}

	?>
	<a data-exam-id="<?php echo isset($test_question['exam_id'])?urlencrypt($test_question['exam_id']):''; ?>" data-page-num="<?php echo $kp; ?>" ><button type="button" class="<?php echo $color; ?> btn-circle" <?php echo  $style; ?> ><?php echo $kp+1; ?></button></a>
	<?php
		/*
		<a href="#"><button type="button" class="btn btn-danger btn-circle">2</button></a>
		<a href="#"><button type="button" class="btn btn-default btn-circle" style="background:#fff; border:1px solid #ccc; color:#737373;">8</button></a> 
		*/ 
	?>
	<?php } } ?>

  </div>
  <div class="clearfix"> </div>
  <hr>
  <span class="label label-success">Answered</span> <span class="label label-danger">Not Answered</span> <span class="label label-info">Marked</span> <span class="label label-default" style="background:#fff; border:1px solid #ccc; color:#737373;">Not Visited</span> </div>
</nav>
</div>

<script>
$("#addQuesFlag").click(function(){
 
	if(!($('#addQuesFlag').hasClass('btn btn-default'))){
 
	$('#addQuesFlag').removeClass('btn btn-warning');
	$('#addQuesFlag').addClass('btn btn-info');
 
	var quizId = $('#quesId').val().trim();
	var myKeyVals = { 'quesId' : quizId}
	
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('addFlag');?>',
		data: myKeyVals,
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		 
		},
		error: function(request, status, err) {
 

		 }
	});
	
	}
 
});
</script>
