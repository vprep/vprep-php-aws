<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">

                        <div class="group-title-index">
                            <h2 class="center-title">&nbsp; </h2>
                            <h2 class="center-title">My Overall Score</h2>
                            <div class="bottom-title"><i class="bottom-icon icon-globe"></i></div>
                        </div>

                        <div class="col-md-7"><div id="piechart"></div><h3> Overview </h3></div>
                        <div class="col-md-4"><div id="attemptedquestion"></div><h3> Overall Marks</h3></div>
                        <div class="col-md-12"> 
                            <div class="col-md-3 marks2"> 
                                <p> 
                                    <img src="<?php echo base_url('assets/frontend/images/social.png');?>"> 
                                    Attempted = <?php echo $result['attempted_questions']; ?>
                                </p>
                            </div>
                            <div class="col-md-3 marks2">  
                                <p> 
                                    <img src="<?php echo base_url('assets/frontend/images/social-3.png');?>"> 
                                    Not attempted = <?php echo $result['total_questions']-$result['attempted_questions']; ?>
                                </p> 
                            </div>
                            <div class="col-md-3 marks2">  
                                <p> 
                                    <img src="<?php echo base_url('assets/frontend/images/correct.png');?>"> 
                                    Correct Answers = <?php echo $result['correct_question']; ?>
                                </p> 
                            </div>
                            <div class="col-md-3 marks2">  
                                <p> 
                                    <img src="<?php echo base_url('assets/frontend/images/wrong.png');?>"> 
                                    Wrong Answers = <?php echo  $result['attempted_questions']-$result['correct_question'];?>
                                </p>
                            </div>
                            <div class="col-md-3 marks2">  
                                <p> 
                                    <img src="<?php echo base_url('assets/frontend/images/social-1.png');?>"> 
                                    Score = <?php echo !empty($result['correct_question'])?( $result['correct_question'] / $result['total_questions'] ) * 100:'0'; ?>%</p> 
                            </div>
                            <div class="col-md-3 marks2">   
                                <p> 
                                    <img src="<?php echo base_url('assets/frontend/images/rewind-time.png');?>"> 
                                    Total Time = <?php echo $result['total_time']; ?>:00
                                </p> 
                            </div>
                            <div class="col-md-3 marks2">
                                <p> 
                                    <img src="<?php echo base_url('assets/frontend/images/clock.png');?>"> 
                                    Time Taken = <?php echo $result['time_taken']; ?>
                                </p> 
                            </div>
                        </div>
                        <?php echo anchor('exam_result_chart/'.  urlencrypt($result['result_id']), '<i aria-hidden="true" class="fa fa-clock-o"></i> <strong>Detailed Analysis of your Results</strong>',array('class'=>'btn btn-warning')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="http://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['correct',     <?php echo $result['correct_question']; ?>],
          ['wrong',      <?php echo  $result['attempted_questions']-$result['correct_question'];?>],
          ['not attempted',  <?php echo $result['total_questions']-$result['attempted_questions']; ?>],
          ['attempted', <?php echo $result['attempted_questions']; ?>]
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
<script>
    $(document).ready(function () { // 6,32 5,38 2,34
        $("#attemptedquestion").circliful({
            animation: 1,
            animationStep: 5,
            foregroundBorderWidth: 15,
            backgroundBorderWidth: 15,
            percent: <?php echo ( $result['correct_question'] / $result['total_questions'] ) * 100; ?>,
            textSize: 28,
            textStyle: 'font-size: 14px;',
            textColor: '#666',
            multiPercentage: 1,
            percentages: [10, 20, 30]
        });
    });

</script>
<script src="<?php echo base_url('assets/frontend/js/circles.js'); ?>"></script>
