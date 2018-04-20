<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="group-title-index">
                            <h2 class="center-title">&nbsp; </h2>
                            <h2 class="center-title">Select your exam</h2>
                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="list-categories-wrapper">
                            <div class="list-categories-content row">
                                <div class="customs-row">
                                    <?php if(!empty($test_cat)): ?>
                                    <?php foreach($test_cat as $key=>$val): ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="edugate-layout-1">
                                            <div class="media">
                                                <div class="">
                                                    <h5> <strong><?php echo $val['title']; ?></strong> </h5>
                                                    <p> <?php echo date('d M Y', $val['updated_at']); ?></p>
                                                    <?php echo anchor('about_exam/'.  urlencrypt($val['id']),'<span>Start</span>',array("class"=>"btn btn-green btn-bold btn-sm")); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


