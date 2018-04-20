<div class="edugate-layout-1">
    <div class="col-xs-12">
        <h5 style="padding:0px; margin:0px;">  
            <a class="btn btn-success btn-circle"><?php echo $page+1; ?></a>
            <strong> <?php echo!empty($test_question['title']) ? $test_question['title'] : 'No Question'; ?> </strong>
           
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
        <label for="checkbox1"><span></span><?php echo!empty($test_question['option1']) ? $test_question['option1'] : ''; ?></label>
    </div>
    <div  class="col-md-12 down">
        <button class="btn btn-warning btn-circle" type="button">B</button>
        <input type="radio"  value="option2" name="option" id="checkbox1" <?php echo (!empty($sl_option) && $sl_option=='option2')?'checked="checked"':''; ?>>
        <label for="checkbox2"><span></span> <?php echo!empty($test_question['option2']) ? $test_question['option2'] : ''; ?> </label>
    </div>

    <div  class="col-md-12 down">
        <button class="btn btn-warning btn-circle" type="button">C</button>
        <input type="radio"  value="option3" name="option" id="checkbox1" <?php echo (!empty($sl_option) && $sl_option=='option3')?'checked="checked"':''; ?>>
        <label for="checkbox3"><span></span><?php echo!empty($test_question['option3']) ? $test_question['option3'] : ''; ?></label>
    </div>
    <div  class="col-md-12 down">
        <button class="btn btn-warning btn-circle" type="button">D</button>
        <input type="radio"  value="option4" name="option" id="checkbox1" <?php echo (!empty($sl_option) && $sl_option=='option4')?'checked="checked"':''; ?>>
        <label for="checkbox4"><span></span><?php echo!empty($test_question['option4']) ? $test_question['option4'] : ''; ?></label>
    </div>
    
    <div id="ques_page1">
        <?php if(isset($page) && $page==0): ?>
        <a class="btn icon-btn btn-success btn-contact btn-block" 
           data-exam-id='<?php echo isset($test_question['question_type'])?urlencrypt($test_question['question_type']):''; ?>' 
           data-page-num='<?php echo isset($page)?$page+1:0; ?>'>Next</a>
        <?php elseif(isset($page) && isset($total_exam_question) && $total_exam_question==$page+1): ?>
            <a class="btn icon-btn btn-success btn-contact btn-block" 
               data-exam-id='<?php echo isset($test_question['question_type'])?urlencrypt($test_question['question_type']):''; ?>' 
               data-page-num='<?php echo isset($page)?$page-1:0; ?>'>Previous </a>
        <?php else: ?>
            <a class="btn icon-btn btn-success btn-contact pull-left" 
               data-exam-id='<?php echo isset($test_question['question_type'])?urlencrypt($test_question['question_type']):''; ?>' 
               data-page-num='<?php echo isset($page)?$page-1:0; ?>'>Previous </a>
            <a class="btn icon-btn btn-success btn-contact pull-right"
               data-exam-id='<?php echo isset($test_question['question_type'])?urlencrypt($test_question['question_type']):''; ?>' 
               data-page-num='<?php echo isset($page)?$page+1:0; ?>'>Next </a>
        <?php endif; ?>
    </div>
	
	
<nav id="c-menu--push-right" class="c-menu c-menu--push-right" >
<button class="c-menu__close"><i aria-hidden="true" class="fa fa-times-circle-o fa-3x"></i></button>
<div class="edugate-layout-1">
<div class="ScrollStyle" >
  <h4> Question Palette</h4>
   
  <?php
   $exam_id=urldecrypt($this->uri->segment(2));
 
   // echo $test_question['question_type'];
   $getFlag = $this->session->userdata('flag_question');
   $getAnsData = $this->session->userdata('not_answer_ques');
	
  
	if($total_exam_question>0)
	{
		for($kp=0;$kp < $total_exam_question;$kp++){
			$getRow = $this->edu->get_test_category_questions($exam_id,$kp);
 			
			 if(in_array($getRow['id'],$getAnsData))
			  {
				  $color =  "btn btn-default";
				  $style =  'style="background:#fff; border:1px solid #ccc; color:#737373;"';
			  }
			  
			  else if(@$this->session->userdata('test_answers')[$getRow['id']]!="")
			  {
				  $color =  "btn btn-success";
				  $style =  '';
			  }
			  else if(@in_array($getRow['id'],$getFlag))
			  {
				  $color =  "btn btn-info";
				  $style =  '';
			  }
			  
			  else if((@$this->session->userdata('test_answers')[$getRow['id']]=="") && (@in_array($getRow['id'],$getAnsData)))
			  {
				  $color =  "btn btn-danger";
				  $style =  '';
			  }
 

	?>
	<a data-exam-id="<?php echo isset($test_question['question_type'])?urlencrypt($test_question['question_type']):''; ?>" data-page-num="<?php echo $kp; ?>" ><button type="button" class="<?php echo $color; ?> btn-circle" <?php echo  $style; ?> ><?php echo $kp+1; ?></button></a>
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