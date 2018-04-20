<style>
.col-lg-3 {
    width: 18%;
}
</style>


									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="show_subject_id">
										<label class="pull-left">Select Subject</label>
										<select name="subject_id" class="form-control" required="required" id="subject_id" onchange="gMF()" >
										<option value="" selected="selected">Choose Subject</option>
										<?php 
											if(count($subjects_list) > 0)
											{
												foreach($subjects_list as $sl){
											?>
											<option value="<?php echo $sl['subject_id']; ?>"><?php echo $sl['subject_title']; ?></option>
											<?php } } ?>
										</select>
									</div>
									
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="show_module_id">
										<label>Select Module</label><br>
										<select name="modulefilter" class="form-control" style="width:100%;">
											<option value="" selected>&nbsp;</option>
										</select>
									</div>
									
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="show_sub_module_id">
										<label>Select Sub-Module</label><br>
										<select name="submodulefilter" class="form-control" style="width:100%;">
											<option value="" selected>&nbsp;</option>
										</select>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="show_sub_module_id">
										<label>Select Source</label><br>
										<select name="source_filter" class="form-control" style="width:100%;">
											<option value="my" selected>My Question Bank</option>
											<option value="vprep" selected>Vprep Quesion Bank</option>
										</select>
									</div>
									
								

<script>

function gSF()
{ 
	var options = $("#show_subject_id");
	var post = "exam_id="+<?php echo $exam_course['exam_id']; ?>+"&course="+<?php echo $exam_course['course_id']; ?>;
	$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/gSF');?>',
		//data: $('#search_question').serialize(),
		data: post,
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
			//console.log(responseMess);
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

function gMF()
{
	var options = $("#show_module_id");
	$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/gMF');?>',
		data: $('#search_question').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
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
 
function gSMF()
{
	var options = $("#show_sub_module_id");
	$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/gSMF');?>',
		data: $('#search_question').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
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
 