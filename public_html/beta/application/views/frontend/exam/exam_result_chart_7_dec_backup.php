<div id="wrapper-content">
  <div id="page-wrapper">
    <div class="main-content">
      <div class="content">
        <div class="section section-padding top-courses" style="text-align:left; padding-top:20px;">
          <div class="container">
            <div class="register-form bg-w-form rlp-form">
                  <div class="row">
                                   <div class="col-md-8 col-md-offset-2">
                                        <div class="group-title-index">
											<h2 class="center-title"> Question Attempted Module wise</h2>
									</div>
										  <div class="col-md-12">
											<div id="chartContainer1" style="height: 300px; width: 100%;"></div>
											<br>
											<br>
											<br>
											<div class="group-title-index"><h2 class="center-title"> Percentage of Correct Answers - Module Wise </h2> </div>
											<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
											<br>
											<br>
											<br>
											 

										 
											 <div class="group-title-index"> <h2 class="center-title"> % of Correct Answers - Difficulty Level wise </h2> </div>
											<div id="chartContainer4" style="height: 300px; width: 100%;"></div>
											<br>
											<br>
											<br>
											 <div class="group-title-index"> <h2 class="center-title"> Total Questions are Unattemped / Correct /  Wrong </h2> </div>
											<div id="chartContainer5" style="height: 300px; width: 100%;"></div>
											<br>
											<br>
											<br>        
												<!--
												<div class="group-title-index"> <h2 class="center-title"> Average Time taken for each subject </h2> </div>
												<div id="chartContainer3" style="height: 300px; width: 100%;"></div>
												<br>
												<br>
												<br> 
												-->
											</div>
											<div style="height:50px;"> </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 

 
         
<script src="<?php echo base_url('assets/frontend/js/canvas.min.js'); ?>"></script>
<script src="assets/js/canvas.min.js"></script>

<?php
$sub_ques_total = array();
$sub_ans_total = array();
$sub_correct_answer = array();
$total_attept_ques = array();
$sub_wrong_answer = array();

$total_ques_data  = $this->stu->graph_question_total($result['result_id']);

$total_answer_data =  json_decode(stripslashes($result['answered_id']),true);

foreach($total_answer_data as $adk => $val)
{
	$sub_ans_total[$adk] = str_replace('option','',$val);
	
	$attept_ques_id[] = $adk;
}

// print_r($total_ques_data);

foreach($total_ques_data as $row)
{
	if($row['correct_ans']==$sub_ans_total[$row['id']])
	{
		// echo $row['correct_ans']."#".$sub_ans_total[$row['id']]."<br>";
		
		@$sub_correct_answer[$row['module_id']]++;
	}
	else
	{
		@$sub_wrong_answer[$row['module_id']]++;
	}
	
	if(in_array($row['id'],$attept_ques_id))
	{
		@$total_attept_ques[$row['module_id']]++;
	}
	 
	

	@$sub_ques_total[$row['module_id']]++;
 
}

// print_r($sub_ques_total);

foreach($sub_ques_total as $subkey => $subVal)
{
 	 
	
	$moduleInfo = $this->stu->getModuleDetail($subkey);
	// echo $total_attept_ques[$subkey];
	// echo $subVal."#".$total_attept_ques[$subkey];
	// print_r($sub_ans_total);
	// echo $sub_ans_total[$subkey];
	
	 // echo (($total_attept_ques[$subkey]*100)/$subVal); 
	// echo ((10*100)/100); 
}
?>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer1",
	{
		title:{
			text: "",
			fontFamily: "SEGOEUIL",
			fontWeight: "normal"
		},

		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		data: [
		{
			//startAngle: 45,
			indexLabelFontSize: 20,
			indexLabelFontFamily: "SEGOEUIL",
			indexLabelFontColor: "darkgrey",
			indexLabelLineColor: "darkgrey",
			indexLabelPlacement: "outside",
			type: "spline",
			showInLegend: true,
			dataPoints: [
			<?php foreach($sub_ques_total as $subkey => $subVal) { 
			$moduleInfo = $this->stu->getModuleDetail($subkey);
			?>
			{  y: <?php  echo (($total_attept_ques[$subkey]*100)/$subVal); ?>, legendText:"<?php echo $moduleInfo->title; ?> <?php  echo (($total_attept_ques[$subkey]*100)/$subVal) ?>%", indexLabel: "<?php echo $moduleInfo->title; ?> <?php  echo (($total_attept_ques[$subkey]*100)/$subVal) ?>%" },
			<?php } ?>
			]
		}
		]
	});

	chart.render();
/*
var chart = new CanvasJS.Chart("chartContainer2", {
		theme: "theme2",//theme1
		title:{
			text: ""              
		},
		animationEnabled: false,   // change to true
		data: [              
		{
			// Change type to "bar", "area", "spline", "pie",etc.
			type: "bar",
			dataPoints: [
			<?php
			 foreach($sub_ques_total as $subkey => $subVal) { 
			$subInfo = $this->stu->getSubjectDetail($subkey);
			?>
				{ label: "<?php // echo $subInfo->subject_title; ?>",  y: <?php  // echo (($sub_correct_answer[$subkey]*100)/$subVal) ?>  },
			<?php
				}
			?>
 
			]
		}
		]
	});
	chart.render();
*/

<!-- -------------------------------------  -->

var chart = new CanvasJS.Chart("chartContainer2",
	{
		title:{
			text: ""
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		data: [
		{        
			indexLabelFontSize: 20,
			indexLabelFontFamily: "Monospace",       
			indexLabelFontColor: "darkgrey", 
			indexLabelLineColor: "darkgrey",        
			indexLabelPlacement: "outside",
			type: "pie",       
			showInLegend: true,
			toolTipContent: "{y} - <strong>#percent%</strong>",
			dataPoints: [
			<?php
			 foreach($sub_ques_total as $subkey => $subVal) { 
			$moduleInfo = $this->stu->getModuleDetail($subkey);
			?>
				{  y: "<?php echo (($sub_correct_answer[$subkey]*100)/$subVal); ?>", legendText:"<?php echo $moduleInfo->title; ?>", indexLabel: "<?php echo $moduleInfo->title; ?>" },
				{  y: "<?php echo (($sub_wrong_answer[$subkey]*100)/$subVal); ?>", legendText:"<?php echo $moduleInfo->title; ?>", indexLabel: "<?php echo $moduleInfo->title; ?>" },
			<?php
				}
			?>
			
			]
		}
		]
	});
	chart.render();
	
<!-- -------------------------------------  -->	
/* 
var chart = new CanvasJS.Chart("chartContainer4", {
		theme: "theme6",//theme1
		title:{
			text: ""              
		},
		animationEnabled: false,   // change to true
		data: [              
		{
			// Change type to "bar", "area", "spline", "pie",etc.
			type: "column",
			dataPoints: [
				{ label: "Easy",  y: <?php echo round($result['easy'],2); ?>  },
				{ label: "Medium", y: <?php echo round($result['medium'],2); ?>  },
				{ label: "Hard", y: <?php echo round($result['difficult'],2); ?>  },
				
			]
		}
		]
	});
	chart.render();
 */
<!-- -------------------------------------  -->

var chart = new CanvasJS.Chart("chartContainer4",
	{
		title:{
			text: ""
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		data: [
		{        
			indexLabelFontSize: 20,
			indexLabelFontFamily: "Monospace",       
			indexLabelFontColor: "darkgrey", 
			indexLabelLineColor: "darkgrey",        
			indexLabelPlacement: "outside",
			type: "pie",       
			showInLegend: true,
			toolTipContent: "{y} - <strong>#percent%</strong>",
			dataPoints: [
				 
				{  y: <?php echo round($result['easy'],2); ?>, legendText:"Easy", indexLabel: "Easy" },
				{  y: <?php echo round($result['medium'],2); ?>, legendText:"Medium", indexLabel: "Medium" },
				{  y: <?php echo round($result['difficult'],2); ?>, legendText:"Hard", indexLabel: "Hard" },
			 
			]
		}
		]
	});
	chart.render();
	
<!-- -------------------------------------  -->	
	

var chart = new CanvasJS.Chart("chartContainer5", {
		theme: "theme2",//theme1
		title:{
			text: ""              
		},
		animationEnabled: false,   // change to true
		data: [              
		{
			// Change type to "bar", "area", "spline", "pie",etc.
			type: "column",
			dataPoints: [
				{ label: "Unattempted Questions",  y: <?php echo ((int)$result['total_questions']-(int)$result['attempted_questions']); ?>  },
				{ label: "Correct Questions", y: <?php echo $result['correct_question']; ?> },
				{ label: "Wrong Questions", y: <?php echo ((int)$result['attempted_questions']-(int)$result['correct_question']); ?> },
				
			]
		}
		]
	});
	chart.render();

var chart = new CanvasJS.Chart("chartContainer3", {
		theme: "theme2",//theme1
		title:{
			text: ""              
		},
		animationEnabled: false,   // change to true
		data: [              
		{
			// Change type to "bar", "area", "spline", "pie",etc.
			type: "area",
			dataPoints: [
				{ label: "Mechanics",  y: 15  },
				{ label: "Optics", y: 10  },
				{ label: "Quantum Physics", y: 25  },
				{ label: "Electronics",  y: 20 },
				{ label: "Thermodynamics",  y: 40  }
			]
		}
		]
	});
	chart.render();

}
</script>
