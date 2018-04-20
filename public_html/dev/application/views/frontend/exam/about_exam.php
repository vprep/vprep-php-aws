<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding">
                    <div class="container">
                        <div class="edugate-layout-1"> 
                            <div class="col-md-6"> <div class="group-title-index">
                                    <h2 class="center-title">Exam Instruction</h2>
                                    <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 style="padding:0px; margin:0px;">  
                                    <strong> 
                                        <p><?php echo $test_cat['description']; ?></p>
                                    </strong>
                                </h5> 
                                <?php echo anchor('start_exam/' . urlencrypt($test_cat['id']), 
                                        '<strong>Start Now</strong>', array("class" => "btn icon-btn btn-success btn-contact btn-block")); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>