<?php
$text = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis";
?>
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
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<label class="text-center">Course</label><br>
										<select name="coursefilter" class="form-control" style="width:100%;">
											<option value="" selected>&nbsp;</option>
										</select>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<label class="text-center">Subject</label><br>
										<select name="subjectfilter" class="form-control" style="width:100%;">
											<option value="" selected>&nbsp;</option>
										</select>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<label class="text-center">Module</label><br>
										<select name="modulefilter" class="form-control" style="width:100%;">
											<option value="" selected>&nbsp;</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="margin:10px 0px 20px 0px;">
										<a href="#" class="btn btn-warning btn-lg"><i class="fa fa-search"></i></a>
									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12 showback">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="<?php echo !empty($test_ques['id'])?$test_ques['id']:''; ?>">
													</div>
													<div class="form-group" style="margin:0px auto 15px auto;">
														<select id='pre-selected-options' multiple='multiple' name="questions[]" style="display:none;">
															<option value='elem_1'><?php echo $text; ?></option>
															<option value='elem_2'><?php echo $text; ?></option>
															<option value='elem_3'><?php echo $text; ?></option>
															<option value='elem_4'><?php echo $text; ?></option>
															<option value='elem_5'><?php echo $text; ?></option>
														</select>
													</div>
													<div class="form-group">
														<a href="#" class="btn btn-primary" id="leftall" style="font-weight:bold;"><<</a><a href="#" class="btn btn-primary" id="rightall" style="font-weight:bold;">>><a>
													</div>
													<div class="form-group">
													<button name="save" type="submit" value="save" class="btn btn-primary btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
														Save
													</button>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
										<button name="save_submit" type="submit" value="save" class="btn btn-primary btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
											Save &amp; Submit
										</button>
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