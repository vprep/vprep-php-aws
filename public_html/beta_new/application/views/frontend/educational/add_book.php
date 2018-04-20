<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                                <?php echo validation_errors(); ?>
								<form name="addBook" action="<?php echo base_url("educational/addBook"); ?>" method="post" id="addBook" enctype="multipart/form-data">
                                  
                                    <div class="row">
									
                                        <div class="col-md-12 showback">
										<div class="group-title-index">
											<h2 class="center-title">&nbsp; </h2>
											<h2 class="center-title">Books</h2>
											<div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
										</div>
                                            <div class="box box-primary">
                                                <div class="box-body" style="display: block;">
                                                    <div class="box-body">
                                                        
														 
                                                        <div class="form-group">
                                                            <label class="pull-left">Book Name</label>
                                                            <input type="text" name="book_name" class="form-control" required="required" placeholder="Enter Book Name" value=""> 
                                                            <?php echo form_error('book_name', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="pull-left">Choose Cover Page</label>
                                                            <input type="file" name="cover_image" required="required" class="form-control" placeholder="Choose Cover Page" > 
                                                            <?php echo form_error('cover_image', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>                                                        
														<div class="form-group">
                                                            <label class="pull-left">Choose eBook File</label>
                                                            <input type="file" name="ebook_file" required="required" class="form-control" placeholder="Choose Book File" > 
                                                            <?php echo form_error('ebook_file', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
 
														<div class="form-group">
															<label class="pull-left">Author</label>
															<input type="text" name="book_author" class="form-control" value="">
															<?php echo form_error('book_author', '<div class="text-red">* ', '</div>'); ?>
														</div>
														 
															<div class="form-group">
																<label class="pull-left">Publisher</label>
																<input type="text" name="book_publisher" class="form-control" value="">
																<?php echo form_error('book_publisher', '<div class="text-red">* ', '</div>'); ?>
															</div>
													 
													 
														<div class="form-group">
															<label class="pull-left">MRP Price</label>
															<input type="text" name="book_mrp" class="form-control" value="">
															<?php echo form_error('book_mrp', '<div class="text-red">* ', '</div>'); ?>
														</div>
														<div class="form-group">
															<label class="pull-left">Sale Price</label>
															<input type="text" name="book_sale_price" class="form-control" value="">
															<?php echo form_error('book_sale_price', '<div class="text-red">* ', '</div>'); ?>
														</div>
													 
													
														<div class="form-group">
														 <label class="pull-left">Description</label>
														 <br>
														</div>
                                                        <div class="form-group">
                                                           
                                                            <textarea class="textarea form-control" name="book_detail" rows="10" cols="80" id="book_detail">
                                                                <?php echo !empty($test_cat['book_detail'])?$test_cat['book_detail']:''; ?>
                                                            </textarea>
															<script>
															// Replace the <textarea id="editor1"> with a CKEditor
															// instance, using default configuration.
															CKEDITOR.replace( 'book_detail' );
															</script>
						
                                                            <?php echo form_error('description', '<div class="text-red">* ', '</div>'); ?>
                                                        </div>
														 
															<div class="col-md-12">
																<div class="col-md-2">
																	<button name="save" type="submit" value="save_add" class="btn btn-success btn-lg custom-margin-5" onclick="return confirm('Do you want Save this record')">
																		Save
																	</button>
																</div>

																<div class="col-md-2">
																	<?php echo anchor('educational/exam_list','Discard',array("class"=>"btn btn-danger btn-lg")); ?>
																</div>
															</div>
														 
								
                                                    </div>
                                                </div>
                                            </div>
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

function getSubjectData()
{ 
 // alert(course);

 var options = $("#show_subject_id");
 
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/getSubject');?>',
		data: $('#save_new_exam').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		 
		 
		 
		var optionsValues = jQuery.parseJSON(responseMess);
		 		 
		// alert(optionsValues);
		options.append(optionsValues);
		 

		},
		error: function(request, status, err) {

			if(status == "timeout") {

				alert('Oops !! There might me network error, please try one more time !!');
			}

		 }
	});
	
}

function getMoreSubjectData()
{ 
 // alert(course);

 var options = $("#show_subject_id");
 
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/getMoreSubject');?>',
		data: $('#save_new_exam').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		 
		 
		 
		var optionsValues = jQuery.parseJSON(responseMess);
		 		 
		// alert(optionsValues);
		options.append(optionsValues);
		 

		},
		error: function(request, status, err) {

			if(status == "timeout") {

				alert('Oops !! There might me network error, please try one more time !!');
			}

		 }
	});
	
}
	
	
function removeSubjectBox(subjectRowId)
{
	$('#'+subjectRowId).remove();
}


$(document).ready(function() {
    var wrapper         = $("#dynamic_subject_wrap"); //Fields wrapper
    var add_button      = $("#add_dynamic_subject"); //Add button ID

    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
		    getSubjectData();
            $(wrapper).append('<div id="remove_parameter"><div class="form-group col-xs-7 col-sm-8 col-md-9 col-lg-9" style="padding:0px;"><label class="pull-left">Select a Subject | No of Questions</label><select name="subject[]" class="form-control"><option value="test">Test</option></select></div><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="padding:25px 0px 0px 15px"><input type="number" name="question_no[]" class="form-control" min="0"></div><div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 text-center form-group"><a href="#" class="btn btn-danger btn-lg" style="margin-top:21px;" id="remove_dynamic_subject"><i class="fa fa-times"></i></a></div></div>'); //add input box
    });
    
    $(wrapper).on("click","#remove_dynamic_subject", function(e){ //user click on remove text
        e.preventDefault();
		$(this).closest('#remove_parameter').remove();
    })
});
</script>