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
                                <?php echo form_open('educational/save_course'); ?>
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-md-5">
                                        <div class="box">
                                            <div class="box-body" style="text-align: left;">
                                                Add a new course :
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-7 col-sm-7 col-md-7">
                                        <div class="box">
                                            <div class="box-body text-right">
                                                <button name="save" type="submit" value="save" class="btn btn-success btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
                                                    Save
                                                </button>
                                                <?php echo anchor('educational/course','Discard',array("class"=>"btn btn-danger btn-lg")); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-12 showback">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div class="box-body">

                                                    <div class="form-group">
                                                        <label class="pull-left">Enter the course</label>
                                                        <input type="text" name="course_name" class="form-control"
                                                               placeholder="Enter Course Name"
                                                               value="<?php echo set_value("course_name"); ?>"
                                                               data-title="Title">
                                                        <?php echo form_error('course_name', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="pull-left">Course Description</label>
                                                        <textarea rows="3" name="course_description"
                                                                  class="form-control" placeholder="Course Description"
                                                                  value="<?php echo set_value("course_description"); ?>"
                                                                  data-title="Title"></textarea>
                                                        <?php echo form_error('course_description', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>&nbsp;</div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 pull-right">
                                        <div class="box">
                                            <div class="box-body text-right">

                                                <button name="save" type="submit" value="save" class="btn btn-success btn-lg custom-margin-5" data-toggle="tooltip" data-original-title="Save" onclick="return confirm('Do you want Save this record')">
                                                    Save
                                                </button>
                                                <?php echo anchor('educational/course','Discard',array("class"=>"btn btn-danger btn-lg")); ?>
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