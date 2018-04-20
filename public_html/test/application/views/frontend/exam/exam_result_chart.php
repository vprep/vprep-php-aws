    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <script>
         $(document).ready(function () {
       $("#resultChartId").hide();
        var score = "<?php echo $result['score'] ; ?>";
  
        if(score < 1){
        $("#resultChartId").hide();
        $("#analyticId").show();
        } else {
            $("#resultChartId").show();
        }



});


     </script>
<div id="wrapper-content">
    <div id="page-wrapper">
       <!-- <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses" style="text-align:left; padding-top:20px;">
                    <div class="container">
                        <div class="register-form bg-w-form rlp-form">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="group-title-index">
                                        <h3 class="center-title"> Question  Attempted Time</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="chartContainer0" style="height: 300px; width: 100%;"></div>

                                        <h3 class="center-title"> Question Attempted Module Testing wise</h3>
                                        <div id="chartContainer1" style="height: 300px; width: 100%;"></div>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="group-title-index"><h3 class="center-title"> Percentage of Correct Answers - Module Wise </h3> </div>
                                        <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                                        <br>
                                        <br>
                                        <br>



                                        <div class="group-title-index"> <h2 class="center-title"> % of Correct Answers - Difficulty Level wise </h2> </div>
                                        <div>

                                        </div>
                                        <div id="chartContainer4" style="height: 300px; width: 100%;"></div>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="group-title-index"> <h2 class="center-title"> Total Questions are Unattemped / Correct /  Wrong </h2> </div>
                                        <div id="chartContainer5" style="height: 300px; width: 100%;"></div>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                    <div style="height:50px;"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="container">
            <div class="row-fluid" id="resultChartId">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading filterContainer">
                            <h3 class="panel-title">Questions Attempted Time</h3>
                        </div>
                        <div class="panel-body">
                            <div class="img-responsive" id="chartContainer0" style="height: 300px;width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading filterContainer">
                            <h3 class="panel-title">Questions Attempted Module wise</h3>
                        </div>
                        <div class="panel-body">
                            <div class="img-responsive" id="chartContainer1" style="height: 300px;width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading filterContainer">
                            <h3 class="panel-title">Percentage of Correct Answers - Module Wise</h3>
                        </div>
                        <div class="panel-body">
                            <div class="img-responsive" id="chartContainer2" style="height: 300px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading filterContainer">
                            <h3 class="panel-title">% of Correct Answers - Difficulty Level wise</h3>
                        </div>
                        <div class="panel-body" >
                            <div class="img-responsive" id="chartContainer4" style="height: 300px;width: 100%">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading filterContainer">
                            <h3 class="panel-title">Total Questions are Unattemped / Correct /  Wrong</h3>
                        </div>
                        <div class="panel-body">
                            <div class="img-responsive" id="chartContainer5" style="height: 300px;width: 100%">
                        </div>
                    </div>
                    </div>
                </div>
    </div>
    <div id="analyticId" style="display:none;">
        <div class="panel panel-default" style="margin-top: 12%;border:none;">
                   
                    <div class="panel-body"><div style="text-align: center;
    width: 100%;
    font-size: 28px;
    font-weight: bold;">Do not have enough data to show detailed analytics. Please check the solution to see the time spent in questions.</div></div>
                  
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



$total_ques_data  = $this->stu->graphQuestionTotal($result['result_id']);


    $total_answer_data =  json_decode(stripslashes($result['answered_id']),true);

    $total_answer_data_time =  json_decode(stripslashes($result['answered_id_time']),true);

    foreach($total_answer_data as $adk => $val)
    {
    $sub_ans_total[$adk] = str_replace('option','',$val);

    $attept_ques_id[] = $adk;
    }

    // print_r($total_ques_data);

    foreach($total_ques_data as $row)
    {
    if($row['correct_ans']==@$sub_ans_total[$row['id']])
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


    foreach($sub_ques_total as $subkey => $subVal)
    {


    $moduleInfo = $this->stu->getModuleDetail($subkey);

    }
    ?>
   
    <script type="text/javascript">


        window.onload = function () {
           
            var chart = new CanvasJS.Chart("chartContainer0",
                {
                    title:{
                        text: "",
                        fontFamily: "SEGOEUIL",
                        fontWeight: "normal"
                    },

                    legend:{
                        verticalAlign: "center"
                    },
                    data: [
                        {
                            startAngle: 45,
                            indexLabelFontSize: 20,
                            indexLabelFontFamily: "SEGOEUIL",
                            indexLabelFontColor: "darkgrey",
                            indexLabelLineColor: "darkgrey",
                            indexLabelPlacement: "outside",
                            type: "column",
                            legendText: "Seconds",
                            showInLegend: true,
                            dataPoints: [
                            <?php $counter=0; foreach($total_answer_data_time as $subkey => $subVal) {
                $moduleInfo = $this->stu->getModuleDetail($subkey);
                    ?>
                { label: "<?php $counter= $counter +1; echo $counter; ?>", y: <?php  echo  $subVal; ?>, legendText:"<?php echo 's'; ?>", indexLabel: "<?php echo ""; ?> " },
            <?php } ?>
        ]
        }
        ]
        });

            chart.render();




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
                            type: "column",
                            showInLegend: true,
                            dataPoints: [
                            <?php foreach($sub_ques_total as $subkey => $subVal) {
                $moduleInfo = $this->stu->getModuleDetail($subkey);
                    ?>
                { label: "<?php echo $moduleInfo->title; ?>", y: <?php  echo round(($total_attept_ques[$subkey]*100)/$subVal,2); ?>, legendText:"<?php echo $moduleInfo->title; ?>", indexLabel: "<?php echo $moduleInfo->title; ?> " },
            <?php } ?>
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
                        type: "column",
                        dataPoints: [
                        <?php
                            foreach($sub_ques_total as $subkey => $subVal) {
                $moduleInfo = $this->stu->getModuleDetail($subkey);
                    ?>
                { label: "<?php echo $moduleInfo->title; ?>",  y: <?php if(array_key_exists($subkey, $sub_correct_answer)) echo round(($sub_correct_answer[$subkey]*100)/$subVal,2); else echo 0;?>  },
            <?php
            }
                ?>
        ]
        }
        ]
        });
            chart.render();

            var easy = "<?php echo $result['easy']; ?>";
            var medium = "<?php echo $result['medium']; ?>";
            var difficult = "<?php echo $result['difficult']; ?>";

            console.log('e - ', easy);
            console.log('m - ', medium);
            console.log('d - ', difficult);

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
                            { label: "Easy",  y: <?php echo round($result['easy']); ?>  },
            { label: "Medium", y: <?php echo round($result['medium']); ?>  },
            { label: "Hard", y: <?php echo round($result['difficult']); ?>  },

        ]
        }
        ]
        });
        
            chart.render();

            <!-- -------------------------------------  -->

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
            { label: "Wrong Questions", y: <?php echo ((int)$result['attempted_questions']-(int)$result['correct_question']); ?> },
            { label: "Correct Questions", y: <?php echo $result['correct_question']; ?> }
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





