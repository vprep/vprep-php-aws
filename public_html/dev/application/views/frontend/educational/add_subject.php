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
                                <?php echo form_open('educational/save_subject'); ?>
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-md-5">
                                        <div class="box">
                                            <div class="box-body" style="text-align: left;">
                                                Add a new Subject :
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-7 col-sm-7 col-md-7">
                                        <div class="box">
                                            <div class="box-body text-right">
                                                <button name="save" type="submit" value="save"
                                                        class="btn btn-success btn-lg custom-margin-5"
                                                        data-toggle="tooltip" data-original-title="Save"
                                                        onclick="return confirm('Do you want Save this record')">
                                                    Save
                                                </button>
                                                <?php echo anchor('educational/subject', 'Discard', array("class" => "btn btn-danger btn-lg")); ?>
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

                                                        <div class="form-group">
                                                            <label class="pull-left">Select a course :</label>
                                                            <select class="form-control">
                                                                <option id="disabled" selected disabled>Select</option>
                                                            </select>
                                                            <?php echo form_error('course_name', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
                                                        </div>

                                                        <br/>

                                                        <div class="row">
                                                            <div class="col-xs-5 col-sm-5 col-md-5">

                                                            </div>
                                                            <div class="col-xs-7 col-sm-7 col-md-7">
                                                                <div class="box">
                                                                    <div class="box-body text-right">
                                                                        <a class="btn btn-primary btn-lg"
                                                                           id="add_dynamic"><i
                                                                                class="fa fa-plus-square"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="dynamic_wrapper">
                                                            <div class="row">
                                                                <div class="col-xs-5 col-sm-5 col-md-5">
                                                                    <div class="box">
                                                                        <div class="box-body" style="text-align: left;">
                                                                            <label class="pull-left">Enter the Subject
                                                                                Name</label>
                                                                            <input type="text" name="subject_name"
                                                                                   class="form-control"
                                                                                   placeholder="Enter Subject Name"
                                                                                   value="<?php echo set_value("course_name"); ?>"
                                                                                   data-title="Title">
                                                                            <?php echo form_error('subject_name', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5 col-sm-6 col-md-6">
                                                                    <div class="box">
                                                                        <div class="box-body text-right">
                                                                            <label class="pull-left">Subject
                                                                                Description</label>
                                                                            <input type="text"
                                                                                   name="subject_description"
                                                                                   class="form-control"
                                                                                   placeholder="Enter Subject Description"
                                                                                   value="<?php echo set_value("subject_description"); ?>"
                                                                                   data-title="Title">
                                                                            <?php echo form_error('subject_description', '<div class="text-danger" style="text-align:left;">* ', '</div>'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </br>
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
                                                        <button name="save" type="submit" value="save"
                                                                class="btn btn-success btn-lg custom-margin-5"
                                                                data-toggle="tooltip" data-original-title="Save"
                                                                onclick="return confirm('Do you want Save this record')">
                                                            Save
                                                        </button>
                                                        <?php echo anchor('educational/subject', 'Discard', array("class" => "btn btn-danger btn-lg")); ?>
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
            var wrapper = $("#dynamic_wrapper"); //Fields wrapper
            var add_button = $("#add_dynamic"); //Add button ID

            $(add_button).click(function (e) { //on add input button click
                e.preventDefault();
                $(wrapper).append("<div id='remove_parameter'>  <div class='row'>     <div class='col-xs-5 col-sm-5 col-md-5'>         <div class='box'> <div class='box-body' style='text-align: left;'>    <input type='text' name='subject_name'            class='form-control'            placeholder='Enter Subject Name'            value='<?php echo set_value('course_name'); ?>'            data-title='Title'>     <?php echo form_error('subject_name', "<div class='text-danger' style='text-align:left;'>* ", '</div>'); ?> </div>         </div>     </div>     <div class='col-xs-5 col-sm-6 col-md-6'>         <div class='box'> <div class='box-body text-right'>     <input type='text'            name='subject_description'            class='form-control'            placeholder='Enter Subject Description'            value='<?php echo set_value('subject_description'); ?>'            data-title='Title'>     <?php echo form_error('subject_description', "<div class='text-danger' style='text-align:left;'>* ", '</div>'); ?> </div>         </div>     </div>   <div style='margin-bottom:0px;' class='col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center'><a href='#' class='btn btn-danger btn-sm form-control' id='remove_dynamic_subject'><i style='font-size: initial;' class='fa fa-times'></i></a></div></div></br></div> "); //add input box
            });

            $(wrapper).on("click", "#remove_dynamic_subject", function (e) { //user click on remove text
                e.preventDefault();
                $(this).closest('#remove_parameter').remove();
            })
        </script>
