<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; 
										 ?>
                                
                                <div class="row">
                                    <div class="text-center col-xs-8 col-sm-6 col-md-6 col-lg-4">
										<div class="text-center">
											<img src="<?php echo base_url('uploads/ebook/cover/')."/".$book_info->book_cover_page; ?>" width="100%" />
										</div>
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                        <h4 style="#000;" class="alert alert-warning text-center"><?php echo $book_info->book_name; ?></h4>
                                        <p><b>Author: </b><?php echo $book_info->book_author; ?></p>
                                        <p><b>Publisher:</b> <?php echo $book_info->book_publisher; ?></p>
                                        <p><b>Published:</b> <?php echo date('d,M Y',strtotime($book_info->book_added_on)); ?></p>
                                        <p><b>Detail:</b> <?php echo $book_info->book_detail;?></p>
                                        <a href="#" class="btn btn-warning">Buy Now</a>
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