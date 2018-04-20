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
											<br>               <div class="group-title-index"><h2 class="center-title"> Percentage of Correct Answers - Module Wise </h2> </div>
											<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
											<br>
											<br>
											<br>
											<div class="group-title-index"> <h2 class="center-title"> Average Time taken for each subject </h2> </div>
											<div id="chartContainer3" style="height: 300px; width: 100%;"></div>
											<br>
											<br>
											<br>
											 <div class="group-title-index"> <h2 class="center-title"> % of Correct Answers - Difficulty Level wise </h2> </div>
											<div id="chartContainer4" style="height: 300px; width: 100%;"></div>
											<br>
											<br>
											<br>
											 <div class="group-title-index"> <h2 class="center-title"> Time Spent in minutes on Questions- Attempt / Correctness wise </h2> </div>
											<div id="chartContainer5" style="height: 300px; width: 100%;"></div>
											<br>
											<br>
											<br>        </div>
											<div style="height:50px;"> </div>
                  </div>
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
			type: "doughnut",
			showInLegend: true,
			dataPoints: [
				{  y: 53.37, legendText:"Mechanics 53%", indexLabel: "Mechanics 53%" },
				{  y: 35.0, legendText:"Optics 35%", indexLabel: "Optics 35%" },
				{  y: 7, legendText:"Quantum Physics 7%", indexLabel: "Quantum Physics 7%" },
				{  y: 2, legendText:"Electronics 2%", indexLabel: "Electronics 2%" },
				{  y: 5, legendText:"Thermodynamics 5%", indexLabel: "Thermodynamics 5%" }
			]
		}
		]
	});

	chart.render();

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
				{ label: "Mechanics",  y: 85  },
				{ label: "Optics", y: 40  },
				{ label: "Quantum Physics", y: 70  },
				{ label: "Electronics",  y: 25 },
				{ label: "Thermodynamics",  y: 60  }
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
var chart = new CanvasJS.Chart("chartContainer4", {
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
				{ label: "Easy",  y: 80  },
				{ label: "Medium", y: 85  },
				{ label: "Hard", y: 60  },
				
			]
		}
		]
	});
	chart.render();

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
				{ label: "Unattempted Questions",  y: 20  },
				{ label: "Correct Questions", y: 80 },
				{ label: "Wrong Questions", y: 50  },
				
			]
		}
		]
	});
	chart.render();



}
</script>
