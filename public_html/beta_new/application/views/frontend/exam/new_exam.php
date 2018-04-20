<script>window.MathJax = { MathML: { extensions: ["mml3.js", "content-mathml.js"]}};</script>
<script type="text/javascript" async src="http://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=MML_HTMLorMML"></script>

<div id="o-wrapper" class="o-wrapper">
		<main class="o-content">
		  <div class="o-container">
			<div class="c-buttons">
			  <!--    <button id="c-button--push-right" class="btn btn-success c-button" type="submit">Jump</button>-->
			</div>
			<div id="github-icons"></div>
		  </div>
		</main>
</div>


<div id="c-mask" class="c-mask"></div>
<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding">
                    <div class="container">
					 
                        <span class="button-checkbox">
						
                            <!--<button data-color="primary" class="btn btn-warning" type="button" id="addQuesFlag"><i aria-hidden="true" class="fa fa-flag-o"></i></button>-->
                        
						<input type="checkbox" checked="" class="hidden">
							<?php /*<button class="btn btn-warning text-center" type="button"> 00:17 <i aria-hidden="true" class="fa fa-hourglass-start"></i></button> <?php */ ?>
							<button id="c-button--push-right" class="btn btn-warning c-button" type="submit" onclick="toggleJump()">Jump</button>
                        </span>
                        
                        <button class="btn btn-warning pull-right" type="button"> 
                            <span id="strclock" style="font-size: 14px;"></span><i aria-hidden="true" class="fa fa-hourglass-start"></i>
                        </button>
                        <?php echo form_open('submit_exam',array('id'=>'ol_exam_form')); ?>
                        <div id="question">
                            <?php $this->load->view('frontend/exam/question'); ?>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-12">
                                <button class="btn btn-warning pull-right" type="submit">
                                    Submit Test
                                </button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

var hour = <?php echo !empty($test_time) ? $test_time : 0; ?>;
var min = <?php echo !empty($test_time2) ? $test_time2 : 0; ?>;
var sec = <?php echo !empty($test_time3) ? $test_time3 : 0; ?>;
//var sec = 0;
//var min = 0;
//var sec = <?php echo !empty($test_time) ? $test_time : 1000; ?>;

function countdown() {
	
	if(sec <= 0 && min > 0) {
		sec = 59;
		min -= 1;
	} else if(min <= 0 && sec <= 0) {
		min = 0;
		sec = 0;
	} else {
		sec -= 1;
	}
 
	if(min <= 0 && hour > 0) {
		min = 59;
		hour -= 1;
	}
 
	var pat = /^[0-9]{1}$/;
	sec = (pat.test(sec) == true) ? '0' + sec : sec;
	min = (pat.test(min) == true) ? '0' + min : min;
	hour = (pat.test(hour) == true) ? '0' + hour : hour;

	document.getElementById('strclock').innerHTML = hour + ":" + min + ":" + sec;
 
	if(sec == 0 && min == 0 && hour == 0){
		$("#ol_exam_form").submit(); 
	}
 
	setTimeout("countdown()", 1000); 
}

countdown();

</script>

<script>

function updateTimer(){
	var timer = document.getElementById('strclock').innerHTML;
	var tt = timer.split(":");
	var t = tt[0] * 3600 + tt[1] * 60 + tt[2] * 1;
	console.log('updateTimer - ' + timer + ' tt - ' + tt + ' t - ' + t);
	$.ajax({
		type: 'POST',
		url: '<?php echo base_url('updateDB'); ?>',
		data: {'t': t},
		dataType: 'text',
		timeout: 30000,
		success: function(res) { console.log('success - ', res); },
		error: function(request, status, err) { console.log('error - ', err); }
	});
	
	setTimeout('updateTimer()', 1000);
}

updateTimer();

</script>

<script>
function toggleJump()
{
	if($('#c-menu--push-right').hasClass('is-active')){
		$('#c-menu--push-right').removeClass('is-active');
		$( "#c-button--push-right" ).prop( "disabled", false);
	}else{
		$('#c-menu--push-right').addClass('is-active');
		$( "#c-button--push-right" ).prop("disabled", false);
	} 
}
</script>