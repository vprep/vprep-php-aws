<style>
	#example_iframe
	{
		width:100%;
		display:none;
	}
</style>

<script>window.MathJax = { MathML: { extensions: ["mml3.js", "content-mathml.js"]}};</script>
<script type="text/javascript" async src="http://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=MML_HTMLorMML"></script>


<script type="text/javascript">
	String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g, '');};
	function getParameter(name) {
		var value = new RegExp(name+"=([^&]*)","i").exec(window.location);
		if (value!=null && value.length>1) {
			value = decodeURIComponent(value[1].replace(/\+/g,' '));
		} else {
			value = null;
		}
		return value;
	}
	function insertHtml(content) {
		if (content!=null && content.length>0) {
			document.write(content);
		}
	}
	function setValue(id, content) {
		if (content!=null && content.length>0) {
			document.getElementById(id).value = content;
		}
	}

	var con = new XMLHttpRequest();
	con.open("GET", "tech.txt", false);
	con.send(null);
	var s = con.responseText;
	WIRISplugins_js = "integration/WIRISplugins.js";
	tech = s.split("#")[0].trim();
	window._wrs_int_path = window._wrs_int_path == null ? "" : window._wrs_int_path;
	if (tech=="php") {
		_wrs_int_conf_file_override = _wrs_int_path > 0 ?
		_wrs_int_path + "/configurationjs.php" :
			"integration/configurationjs.php";
	} else if (tech=="aspx") {
		_wrs_int_conf_file_override = _wrs_int_path > 0 ?
		_wrs_int_path + "/configurationjs.aspx" :
			"integration/configurationjs.aspx";
	} else if (tech=="local-java") {
		_wrs_int_conf_file_override = "app/configurationjs";
	} else if (tech=="java") {
		_wrs_int_conf_file_override = "/pluginwiris_engineapp/configurationjs";
	} else if (tech=="nodejs") {
		_wrs_int_conf_file_override = "integration/configurationjs";
		WIRISplugins_js = "/integration/WIRISplugins.js";
	}
	var script = document.createElement('script');
	script.type = 'text/javascript';
	script.src = WIRISplugins_js + "?viewer=image";
	document.getElementsByTagName('head')[0].appendChild(script);

	var content = getParameter("content");
</script>
<script type="text/javascript" src="<?php echo base_url('assets/tiny_mce_wiris/core/display.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/tiny_mce_wiris/wirisplugin-generic.js'); ?>"></script>

<script type="text/javascript">
	function wrs_addEvent(element, event, func) {
		if (element.addEventListener) {
			element.addEventListener(event, func, false);
		}
		else if (element.attachEvent) {
			element.attachEvent('on' + event, func);
		}
	}

	wrs_addEvent(window, 'load', function () {
		// Hide the textarea
		var textarea = document.getElementById('example');
		textarea.style.display = 'none';

		// Create the toolbar
		var toolbar = document.createElement('div');
		toolbar.id = textarea.id + '_toolbar';

		// Create the WYSIWYG editor
		var iframe = document.createElement('iframe');
		iframe.id = textarea.id + '_iframe';

		wrs_addEvent(iframe, 'load', function () {
			// Setting design mode ON
			iframe.contentWindow.document.designMode = 'on';

			// Setting the content
			if (iframe.contentWindow.document.body) {
				iframe.contentWindow.document.body.innerHTML = textarea.value;

				// WE INIT THE WIRIS PLUGIN HERE
				wrs_int_init(iframe,toolbar);
			}
		});

		// We set an empty document instead of about:blank for use relative paths for images
		iframe.src = 'tests/generic_demo.html';
		iframe.width = 500;
		iframe.height = 200;

		// Insert the WYSIWYG editor before the textarea
		textarea.parentNode.insertBefore(iframe, textarea);

		// Insert the toolbar before the WYSIWYG editor
		iframe.parentNode.insertBefore(toolbar, iframe);

		// When the user submits the form, set the textarea value with the WYSIWYG editor content
		var form = document.getElementById('exampleForm');

		wrs_addEvent(form, 'submit', function () {
			// Set the textarea content and call "wrs_endParse"
			textarea.value = wrs_endParse(iframe.contentWindow.document.body.innerHTML);
		});
	});

	function changeDPI() {
		ls = document.getElementsByClassName('Wirisformula');
		for (i=0;i<ls.length;i++) {
			img = ls[i];
			img.width = img.clientWidth;
			img.src = img.src + "&dpi=600";
		}
	}
</script>

<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
				<div>&nbsp;</div>
                <div class="section top-courses">
                    <div class="container">
                        <div class="row">
							 
								<div class="group-title-index">
									<h2 class="center-title">Add Questions</h2>
									<div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
								</div>

							<div>
								<button type="button" class="btn btn-info btn-lg" data-toggle="modal" style="float:right;" data-target="#myModal">Equations Creator</button>

							</div>

							 
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>    
                               
								<form name="save_edited_test_questions" action="<?php echo base_url("save_edited_test_questions"); ?>" method="post" id="save_edited_test_questions" enctype="multipart/form-data">
                                
                                <div class="row">
                                    <div class="col-md-12 showback">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="<?php echo !empty($test_ques['id'])?$test_ques['id']:''; ?>"> </div>
													 <?php 
													 
													 echo form_error('subject_id', '<div class="text-red">* ', '</div>');
													 echo form_error('exam', '<div class="text-red">* ', '</div>');
													 echo form_error('module', '<div class="text-red">* ', '</div>');


													 ?>
													 
													<div class="form-group">
                                                        <label class="pull-left">Choose Subject</label>
                                                        <select name="subject_id" class="form-control" required onchange="getModule(this.value)">
														<?php 
														
														$ssi = $test_ques['subject_id'];
														$ssn = '';
														
														$sarr = array();
														
														foreach($subject_listing as $te){
															if($te->subject_id === $ssi)
																$ssn = $te->subject_title;
															else{
																$sarr[] = $te;
															}
														}
														
														if(!empty($ssi)) { ?>
																<option value="<?php echo $ssi; ?>" selected="selected"><?php echo $ssn; ?></option>
																<?php } else { ?>
																<option value="" selected="selected">Choose Subject</option>
																<?php }  ?>
																<?php 
																	if(count($sarr)>0)
																	{
																	   foreach($sarr as $tec){
																		
																?>
																<option value="<?php  echo $tec->subject_id; ?>" ><?php   echo $tec->subject_title; ?></option>
																 <?php
																	} }
																?>
															</select>
															
														<?php echo form_error('subject_id', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
													<div class="form-group" id="show_subject_id"></div>
													<div class="form-group" id="show_exam_id"></div>	
													<div class="form-group" id="show_module_id">
													
													<?php
													
													if(!empty($test_ques) && !empty($test_ques['module'])){
													
														$mi = $test_ques['module'];
														$mn = '';
													
													$marr = array();
													
														if(!empty($mi)){
															
														foreach($smods as $te){
															if($te->module_id === $mi)
																$mn = $te->module_title;
															else{
																$marr[] = $te;
															}
														}
													
													?>
													
													<label class="pull-left">Select Module</label>
													<select name="module" class="form-control" required="required" id="module_id" onchange="getSubModule(this.value)" >
													
													<option value="<?php echo $mi; ?>" selected="selected"><?php echo $mn; ?></option>
																<?php } else { ?>
																<option value="" selected="selected">Choose Module</option>
																<?php }  ?>
																<?php 
																	if(count($marr)>0)
																	{
																	   foreach($marr as $tec){
																		
																?>
																<option value="<?php  echo $tec->module_id; ?>" ><?php   echo $tec->module_title; ?></option>
																 <?php
													} } }
																?>
																
													</select>			
													
													</div>
													<div class="form-group" id="show_sub_module_id">
													
													<?php
													
													if(!empty($test_ques) && !empty($test_ques['sub_module'])){
													
														$smi = $test_ques['sub_module'];
														$smn = '';
													
													$smarr = array();
													
														if(!empty($smi)){
															
														foreach($ssmods as $te){
															if($te->module_id === $smi)
																$smn = $te->module_title;
															else{
																$smarr[] = $te;
															}
														}
													
													?>
													
													<label class="pull-left">Select Sub Module</label>
													<select name="sub_module" class="form-control" required="required" id="module_id" >
													
													<option value="<?php echo $smi; ?>" selected="selected"><?php echo $smn; ?></option>
																<?php } else { ?>
																<option value="" selected="selected">Choose Module</option>
																<?php }  ?>
																<?php 
																	if(count($smarr)>0)
																	{
																	   foreach($smarr as $tec){
																		
																?>
																<option value="<?php  echo $tec->module_id; ?>" ><?php   echo $tec->module_title; ?></option>
																 <?php
													} } }
																?>
																
													</select>
													
													</div>
		 
													

													<div class="form-group">
                                                        <label class="pull-left">Question Type</label>
														
														<select name="question_type" class="form-control" onchange="QuesType(this.value)" >
														
														<?php
															
															if(!empty($test_ques) && array_key_exists('question_type', $test_ques)){
													
															$qt = $test_ques['question_type'];
															
															if($qt === "") { ?>
															<option value="" disabled selected>Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
															<option value="2">Both</option>
															<?php }else if($qt === "0") { ?>
															<option value="">Choose Type</option>
															<option value="0" selected>Text</option>
															<option value="1">Image</option>
															<option value="2">Both</option>
															<?php }else if($qt === "1") { ?>
															<option value="">Choose Type</option>
															<option value="0">Text</option>
															<option value="1" selected>Image</option>
															<option value="2">Both</option>
															<?php }else if($qt === "2") { ?>
															<option value="">Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
															<option value="2" selected>Both</option>
															<?php } ?>
																
															<script type="text/javascript">
																var qusty = "<?php echo $qt; ?>";
															</script>
																
															<?php 
															
															} else {
															
														?>
															<option value="" disabled selected>Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
															<option value="2">Both</option>
															
															<script type="text/javascript">
																var qusty = -1;
															</script>
															
															<?php } ?>
															
														</select>
                                                         <?php echo form_error('question_type', '<div class="text-red">* ', '</div>'); ?> 
                                                    </div>
											
															<div class="form-group" id="text_question">
                                                        <label class="pull-left">Question ?</label>
                                                        
                                                        <textarea name="title" class="form-control" placeholder="Enter Question" rows="2"><?php echo $test_ques["title"]; ?></textarea>
                                                        <?php echo form_error('title', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
													
                                                    <div class="form-group" id="image_question">
                                                        <label class="pull-left">Question Image ?</label>
														<input  type="file" name="ques_img" class="form-control" data-title="Question" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
                                                        <?php echo form_error('ques_img', '<div class="text-red">* ', '</div>'); ?>
														<div id="blah" style="text-align:left;margin-top:10px">
														<?php if($test_ques['question_type'] == 1 || $test_ques['question_type'] == 2) { ?>
															<img id="show_img" src="<?php echo '/uploads/'.$test_ques['ques_img']; ?>" alt="your image" height="200" width="200"/>
														<?php } else { ?>
															<img id="show_img" src="#" alt="your image" />
														<?php }  ?>
														</div>
                                                    </div>
													
													<script>
														var quim = "<?php if(!empty($test_ques) && array_key_exists('ques_img', $test_ques)){ echo $test_ques['ques_img']; } else { echo -1; }?>";
													</script>
													
													
													<div class="col-md-12" style="background-color:#eee;padding:10px;">
													<div class="col-md-12 text-left" style="background-color:#EF961E;color:#fff;"><label><h4>Options</h4></label></div>
													<div class="col-md-12">&nbsp;</div>
													<div class="col-md-6">
													
													<div class="form-group">
                                                        <label class="pull-left">Option 1 Type</label>
														<select name="option_type_1" class="form-control" onchange="optionType(1,this.value)" >
														
														<?php
														if(!empty($test_ques) && array_key_exists('option_type_1', $test_ques)){
													
														$ot1 = $test_ques['option_type_1'];
															
														if($ot1 === "") { ?>
															<option value="" disabled selected>Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
														<?php }else if($ot1 === "0") {?>	
															<option value="">Choose Type</option>
															<option value="0" selected>Text</option>
															<option value="1">Image</option>
														<?php }else if($ot1 === "1") {?>	
															<option value="">Choose Type</option>
															<option value="0">Text</option>
															<option value="1" selected>Image</option>
														<?php } ?>
															
															<script type="text/javascript">
																var opty1 = "<?php echo $ot1; ?>";
															</script>
															
														<?php } else {?>
														    <option value="" disabled selected>Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
															
															<script type="text/javascript">
																var opty1 = -1;
															</script>
															
														<?php } ?>
														</select>
														 <?php echo form_error('option_type_1', '<div class="text-red">* ', '</div>'); ?> 
                                                    </div>
													
													
													
                                                    <div class="form-group" id="text_option1">
                                                        <label class="pull-left">Option 1</label>
                                                        <input type="text" name="option1" class="form-control" placeholder="Enter Option 1" value="<?php echo !empty($test_ques['option1'])?$test_ques['option1']:''; ?>" data-title="Option 1">
                                                        <?php echo form_error('option1', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
													<div class="form-group" id="image_option1">
                                                        <label class="pull-left">Option 1</label>
                                                        <input  type="file" name="option1_img" class="form-control" data-title="Question" accept="image/gif, image/jpeg, image/png" onchange="readURL1(this);">
                                                        <?php echo form_error('option1_img', '<div class="text-red">* ', '</div>'); ?>
														<div id="blah" style="text-align:left;margin-top:10px">
														<?php if($test_ques['option_type_1'] == 1 || $test_ques['option_type_1'] == 2) { ?>
															<img id="show_img_option1" src="<?php echo '/uploads/'.$test_ques['option1']; ?>" alt="your image" height="200" width="200"/>
														<?php } else { ?>
															<img id="show_img_option1" src="#" alt="your image" />
														<?php }  ?>
														</div>
                                                    </div>
													</div>
													<div class="col-md-6">
													
													
													<div class="form-group">
                                                        <label class="pull-left">Option 2 Type</label>
														<select name="option_type_2" class="form-control" onchange="optionType(2,this.value)" >
															
															<?php
														if(!empty($test_ques) && array_key_exists('option_type_2', $test_ques)){
													
														$ot2 = $test_ques['option_type_2'];
															
														if($ot2 === "") { ?>
															<option value="" disabled selected>Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
														<?php }else if($ot2 === "0") {?>	
															<option value="">Choose Type</option>
															<option value="0" selected>Text</option>
															<option value="1">Image</option>
														<?php }else if($ot2 === "1") {?>	
															<option value="">Choose Type</option>
															<option value="0">Text</option>
															<option value="1" selected>Image</option>
														<?php } ?>
															
															<script type="text/javascript">
																var opty2 = "<?php echo $ot2; ?>";
															</script>
															
														<?php } else {?>
														    <option value="" disabled selected>Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
															
															<script type="text/javascript">
																var opty2 = -1;
															</script>
															
														<?php } ?>
															
														</select>
														 <?php echo form_error('option_type_2', '<div class="text-red">* ', '</div>'); ?> 
                                                    </div>
													
													
													
                                                    <div class="form-group" id="text_option2">
                                                        <label class="pull-left">Option 2</label>
                                                        <input type="text" name="option2" class="form-control" placeholder="Enter Option 2" value="<?php echo !empty($test_ques['option2'])?$test_ques['option2']:''; ?>" data-title="Option 2">
                                                        <?php echo form_error('option2', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
													<div class="form-group" id="image_option2">
                                                        <label class="pull-left">Option 2</label>
                                                        <input  type="file" name="option2_img" class="form-control" data-title="Question" accept="image/gif, image/jpeg, image/png" onchange="readURL2(this);">
                                                        <?php echo form_error('option2_img', '<div class="text-red">* ', '</div>'); ?>
														<div id="blah" style="text-align:left;margin-top:10px">
														<?php if($test_ques['option_type_2'] == 1 || $test_ques['option_type_2'] == 2) { ?>
															<img id="show_img_option2" src="<?php echo '/uploads/'.$test_ques['option2']; ?>" alt="your image" height="200" width="200"/>
														<?php } else { ?>
															<img id="show_img_option2" src="#" alt="your image" />
														<?php }  ?>
														</div>
                                                    </div>
													</div>
													<div class="col-md-6">
													
													
													<div class="form-group">
                                                        <label class="pull-left">Option 3 Type</label>
														<select name="option_type_3" class="form-control" onchange="optionType(3,this.value)" >
															
															<?php
														if(!empty($test_ques) && array_key_exists('option_type_3', $test_ques)){
													
														$ot3 = $test_ques['option_type_3'];
															
														if($ot3 === "") { ?>
															<option value="" disabled selected>Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
														<?php }else if($ot3 === "0") {?>	
															<option value="">Choose Type</option>
															<option value="0" selected>Text</option>
															<option value="1">Image</option>
														<?php }else if($ot3 === "1") {?>	
															<option value="">Choose Type</option>
															<option value="0">Text</option>
															<option value="1" selected>Image</option>
														<?php } ?>
															
															<script type="text/javascript">
																var opty3 = "<?php echo $ot3; ?>";
															</script>
															
														<?php } else {?>
														    <option value="" disabled selected>Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
															
															<script type="text/javascript">
																var opty3 = -1;
															</script>
															
														<?php } ?>
															
														</select>
														<?php echo form_error('option_type_3', '<div class="text-red">* ', '</div>'); ?> 
                                                    </div>
													
													
                                                    <div class="form-group" id="text_option3" >
                                                        <label class="pull-left">Option 3</label>
                                                        <input type="text" name="option3" class="form-control" placeholder="Enter Option 3" value="<?php echo !empty($test_ques['option3'])?$test_ques['option3']:''; ?>" data-title="Option 3">
                                                        <?php echo form_error('option3', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
													<div class="form-group" id="image_option3">
                                                        <label class="pull-left">Option 3</label>
                                                        <input  type="file" name="option3_img" class="form-control" data-title="Question" accept="image/gif, image/jpeg, image/png" onchange="readURL3(this);">
                                                        <?php echo form_error('option3_img', '<div class="text-red">* ', '</div>'); ?>
														<div id="blah" style="text-align:left;margin-top:10px">
														<?php if($test_ques['option_type_3'] == 1 || $test_ques['option_type_3'] == 2) { ?>
															<img id="show_img_option3" src="<?php echo '/uploads/'.$test_ques['option3']; ?>" alt="your image" height="200" width="200"/>
														<?php } else { ?>
															<img id="show_img_option3" src="#" alt="your image" />
														<?php }  ?>
														</div>
                                                    </div>
													</div>
													<div class="col-md-6">
													
													
													<div class="form-group">
                                                        <label class="pull-left">Option 4 Type</label>
														<select name="option_type_4" class="form-control" onchange="optionType(4,this.value)" >
															
															<?php
														if(!empty($test_ques) && array_key_exists('option_type_4', $test_ques)){
													
														$ot4 = $test_ques['option_type_4'];
															
														if($ot4 === "") { ?>
															<option value="" disabled selected>Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
														<?php }else if($ot4 === "0") {?>	
															<option value="">Choose Type</option>
															<option value="0" selected>Text</option>
															<option value="1">Image</option>
														<?php }else if($ot4 === "1") {?>	
															<option value="">Choose Type</option>
															<option value="0">Text</option>
															<option value="1" selected>Image</option>
														<?php } ?>
															
															<script type="text/javascript">
																var opty4 = "<?php echo $ot4; ?>";
															</script>
															
														<?php } else {?>
														    <option value="" disabled selected>Choose Type</option>
															<option value="0">Text</option>
															<option value="1">Image</option>
															
															<script type="text/javascript">
																var opty4 = -1;
															</script>
															
														<?php } ?>
															
														</select>
														<?php echo form_error('option_type_4', '<div class="text-red">* ', '</div>'); ?> 
                                                    </div>
													
													
                                                    <div class="form-group" id="text_option4" >
                                                        <label class="pull-left">Option 4</label>
                                                        <input type="text" name="option4" class="form-control" placeholder="Enter Option 4" value="<?php echo !empty($test_ques['option4'])?$test_ques['option4']:''; ?>" data-title="Option 4">
                                                        <?php echo form_error('option4', '<div class="text-red">* ', '</div>'); ?>
                                                    </div>
													<div class="form-group" id="image_option4">
                                                        <label class="pull-left">Option 4</label>
                                                        <input  type="file" name="option4_img" class="form-control" data-title="Question" accept="image/gif, image/jpeg, image/png" onchange="readURL4(this);">
                                                        <?php echo form_error('option4_img', '<div class="text-red">* ', '</div>'); ?>
														<div id="blah" style="text-align:left;margin-top:10px">
														<?php if($test_ques['option_type_4'] == 1 || $test_ques['option_type_4'] == 2) { ?>
															<img id="show_img_option4" src="<?php echo '/uploads/'.$test_ques['option4']; ?>" alt="your image" height="200" width="200"/>
														<?php } else { ?>
															<img id="show_img_option4" src="#" alt="your image" />
														<?php }  ?>
														</div>
                                                    </div>
													</div>
													 </div>
													<div class="col-md-12">&nbsp;</div>
													<div class="col-md-12">
														<div class="col-md-6">
															<div class="form-group">
																<label class="pull-left">Difficulty Level</label>
																<?php
																$dl_opt=array(
																	'easy'      => 'Easy',
																	'medium'    => 'Medium',
																	'difficult' => 'Difficult'
																);
																echo form_dropdown('difficulty_level',$dl_opt,!empty($test_ques['difficulty_level'])?$test_ques['difficulty_level']:'','class="form-control"') ?>
																 
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="pull-left">Correct Answer</label>
																<?php 
																$opt=array(
																	''=>'Select',
																	'1'=>'Option 1',
																	'2'=>'Option 2',
																	'3'=>'Option 3',
																	'4'=>'Option 4',
																);
																echo form_dropdown('correct_ans',$opt,!empty($test_ques['correct_ans'])?$test_ques['correct_ans']:'','class="form-control"'); ?>
																<?php echo form_error('correct_ans', '<div class="text-red">* ', '</div>'); ?>
															</div>
														</div>
														<div class="clearfix">&nbsp;</div>
														<div class="col-md-12 pull-left">
														
															<button name="save" type="submit" value="save_add" class="btn btn-success btn-lg custom-margin-5">Save & Add</button>
															<button name="save" type="submit" value="save_exit" class="btn btn-success btn-lg custom-margin-5">Save & Exit </button>
															<a href="<?php echo base_url("educational/questionbank"); ?>" class="btn btn-danger btn-lg custom-margin-5">Discard</a>
														</div>
														<div class="clearfix">&nbsp;</div>
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

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog" style="width:90%;">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Maths & Chemistry Equations Builder</h4>
					<p>Please copy the equation and paste it in the question / answer field where it needs to be shown</p>
				</div>
				<div class="modal-body">
					<form id="exampleForm" method="GET">
						<textarea id="example" name="content" cols="50" rows="10"><!-- content value --></textarea>
						<br />
						<script>setValue("example",content);</script>
					</form>
				</div>
				<div class="modal-footer">

					<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

<script>

$("#image_question").css("display","none");
$("#text_question").css("display","none");

for(var op=1;op<=4;op++)
{
	$("#image_option"+op).css("display","none");
	$("#text_option"+op).css("display","none");
}	

function QuesType(getinput)
{
	if(getinput==0)
	{
		$("#image_question").css("display","none");
		$("#text_question").css("display","block");
	}
	else if(getinput==1)
	{
		$("#image_question").css("display","block");
		$("#text_question").css("display","none");
	}
	else if(getinput==2)
	{
		$("#image_question").css("display","block");
		$("#text_question").css("display","block");
	}
}

if(qusty != -1){
	QuesType(qusty);
}

function optionType(option, getinput)
{
	if(getinput==0)
	{
		$("#image_option"+option).css("display","none");
		$("#text_option"+option).css("display","block");
	}
	else
	{
		$("#image_option"+option).css("display","block");
		$("#text_option"+option).css("display","none");
	}
}

console.log('edit qusty - ', qusty);
console.log('edit op ty 1 - ', opty1);
console.log('edit op ty 2 - ', opty2);
console.log('edit op ty 3 - ', opty3);
console.log('edit op ty 4 - ', opty4);
console.log('edit quim - ', quim);

if(opty1 != -1){
	optionType(1, opty1);
}
if(opty2 != -1){
	optionType(2, opty2);
}
if(opty3 != -1){
	optionType(3, opty3);
}
if(opty4 != -1){
	optionType(4, opty4);
}

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#show_img').attr('src', e.target.result).height(150);
				$("#show_img").css("display","block");
            };
            reader.readAsDataURL(input.files[0]);
        }
}

function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#show_img_option1').attr('src', e.target.result).height(150);
				$("#show_img_option1").css("display","block");
            };
            reader.readAsDataURL(input.files[0]);
        }
}

function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#show_img_option2').attr('src', e.target.result).height(150);
				$("#show_img_option2").css("display","block");
            };
            reader.readAsDataURL(input.files[0]);
        }
}

function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#show_img_option3').attr('src', e.target.result).height(150);
				$("#show_img_option3").css("display","block");
            };
            reader.readAsDataURL(input.files[0]);
        }
}

function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#show_img_option4').attr('src', e.target.result).height(150);
				$("#show_img_option4").css("display","block");
            };
            reader.readAsDataURL(input.files[0]);
        }
}

$("#show_img").error(function () { 
    $(this).hide();
    // or $(this).css({visibility:"hidden"}); 
});

</script>