<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="group-title-index">
                            <h2 class="center-title">&nbsp; </h2>
                            <h2 class="center-title">My Exam Score</h2>
                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="row">
                            <?php if (!empty($my_score)): ?>
                                <?php foreach ($my_score as $val): ?>
                                    <div class="edugate-layout-1"> 
                                        <div class="col-lg-12">
                                            <div class="media text-left">
                                                <div class="media-body">
                                                    <h3>
                                                        <?php echo anchor('show_result/' . urlencrypt($val['id']), $val['title']); ?>
                                                    </h3>
                                                    <hr style="margin:8px auto">
                                                    <p> 
                                                        <i aria-hidden="true" class="fa fa-calendar"></i> 
                                                        <strong>Exam given on : <?php echo date('d M Y H:i:s', $val['test_date']); ?></strong> 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <h2 class="text-center"> <img src="<?php echo base_url('assets/frontend/educational/images/thank-you.png'); ?>" style="text-align:center;"> <br>
                                            <strong>No Record Found..</strong></h2>
                                        <br>
                                        <br>

                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>