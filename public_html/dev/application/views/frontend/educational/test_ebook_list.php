<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                <?php echo form_open('save_test_questions'); ?>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3" style="margin-bottom:30px;">
                                        <img src="<?php echo base_url('assets/dist/img/photo1.png'); ?>" width="100%" />
                                        <h4 style="#000;">Photography</h4>
                                        <p>Author: Person</p>
                                        <p>Publisher: Some Publisher</p>
                                        <p>Published: 24/03/2017</p>
										<p>Price: Rs 1234</p>
                                        <a href="#" class="btn btn-warning">Download</a>
                                    </div>
									<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3" style="margin-bottom:30px;">
                                        <img src="<?php echo base_url('assets/dist/img/photo2.png'); ?>" width="100%" />
                                        <h4 style="#000;">Photography</h4>
                                        <p>Author: Person</p>
                                        <p>Publisher: Some Publisher</p>
                                        <p>Published: 24/03/2017</p>
										<p>Price: Rs 1234</p>
                                        <a href="#" class="btn btn-warning">Download</a>
                                    </div>
									<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3" style="margin-bottom:30px;">
                                        <img src="<?php echo base_url('assets/dist/img/photo1.png'); ?>" width="100%" />
                                        <h4 style="#000;">Photography</h4>
                                        <p>Author: Person</p>
                                        <p>Publisher: Some Publisher</p>
                                        <p>Published: 24/03/2017</p>
										<p>Price: Rs 1234</p>
                                        <a href="#" class="btn btn-warning">Download</a>
                                    </div>
									<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3" style="margin-bottom:30px;">
                                        <img src="<?php echo base_url('assets/dist/img/photo2.png'); ?>" width="100%" />
                                        <h4 style="#000;">Photography</h4>
                                        <p>Author: Person</p>
                                        <p>Publisher: Some Publisher</p>
                                        <p>Published: 24/03/2017</p>
										<p>Price: Rs 1234</p>
                                        <a href="#" class="btn btn-warning">Download</a>
                                    </div>
									<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3" style="margin-bottom:30px;">
                                        <img src="<?php echo base_url('assets/dist/img/photo1.png'); ?>" width="100%" />
                                        <h4 style="#000;">Photography</h4>
                                        <p>Author: Person</p>
                                        <p>Publisher: Some Publisher</p>
                                        <p>Published: 24/03/2017</p>
										<p>Price: Rs 1234</p>
                                        <a href="#" class="btn btn-warning">Download</a>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$('#pre-selected-options').multiSelect();

$( "#leftall" ).click(function() {
	$('#pre-selected-options').multiSelect('deselect_all');
});

$( "#rightall" ).click(function() {
	$('#pre-selected-options').multiSelect('select_all');
});
</script>