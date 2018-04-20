<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                           
                                <div class="row">
								<?php 
								if(count($book_list)>0){
								foreach($book_list as $book){
								?>
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3" style="margin-bottom:30px;">
                                        <img src="<?php echo base_url('uploads/ebook/cover/')."/".$book->book_cover_page; ?>" width="100%" />
                                        <h4 style="#000;"><?php echo $book->book_name; ?></h4>
                                        <p>Author: <?php echo $book->book_author; ?></p>
                                        <p>Publisher: <?php echo $book->book_publisher; ?></p>
                                        <p>Published: <?php echo date('d,M Y h:i',strtotime($book->book_added_on)); ?></p>
										<p>Price: Rs <?php echo $book->book_sale_price; ?></p>
                                        <a href="<?php echo base_url("student/bookdetail")."/".urlencrypt($book->book_id);?>" class="btn btn-warning">View Detail</a>
                                    </div>
								<?php } } else { ?>
								<div class="col-xs-12" style="margin-bottom:130px;">
									<h1>Sorry, Books Not available.</h1>
								</div>
								<?php } ?>								
                                </div>
                                
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