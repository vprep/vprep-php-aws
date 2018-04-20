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
                                        <div class="group-title-index"> <h2 class="center-title"> % of Correct Answers - Difficulty Level wise </h2> </div>
                                        <div id="chartContainer4" style="height: 300px; width: 100%;"></div>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="group-title-index"> <h2 class="center-title"> Time Spent in minutes on Questions- Attempt / Correctness wise </h2> </div>
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
        </div>
    </div>

    <script src="<?php echo base_url('assets/frontend/js/canvas.min.js'); ?>"></script>
    <script type="text/javascript">

        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer4", {
                theme: "theme2", //theme1
                title: {
                    text: ""
                },
                animationEnabled: false, // change to true
                data: [
                    {
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [
                            {label: "Easy", y: <?php echo $result['easy']; ?>},
                            {label: "Medium", y: <?php echo $result['medium']; ?>},
                            {label: "Hard", y: <?php echo $result['difficult']; ?>},
                        ]
                    }
                ]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chartContainer5", {
                theme: "theme2", //theme1
                title: {
                    text: ""
                },
                animationEnabled: false, // change to true
                data: [
                    {
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [
                            {label: "Unattempted Questions", y: <?php echo ((int)$result['total_questions']-(int)$result['attempted_questions']); ?>},
                            {label: "Correct Answers", y: <?php echo $result['correct_question']; ?>},
                            {label: "Wrong Answers", y: <?php echo ((int)$result['attempted_questions']-(int)$result['correct_question']); ?>},
                        ]
                    }
                ]
            });
            chart.render();
        }
    </script>