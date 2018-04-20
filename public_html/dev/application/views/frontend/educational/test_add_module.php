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
                                <?php echo form_open('save_test_categories'); ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="box">
                                            <div class="box-body text-right">

                                                <button name="save" type="submit" value="save"
                                                        class="btn btn-success btn-lg custom-margin-5"
                                                        data-toggle="tooltip" data-original-title="Save"
                                                        onclick="return confirm('Do you want Save this record')">
                                                    Save
                                                </button>
                                                <?php echo anchor('educational/test_categories', 'Discard', array("class" => "btn btn-danger btn-lg")); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 showback">
                                        <div class="box box-primary">
                                            <div class="box-body" style="display: block;">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id"
                                                               value="<?php echo !empty($test_cat['id']) ? $test_cat['id'] : ''; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="pull-left">Subject</label>
                                                        <select name="subject_id" class="form-control" required>
                                                            <option value="">Select Subject</option>
                                                            <?php
                                                            if (count($subject_list)) {
                                                                foreach ($subject_list as $subject) {
                                                                    ?>
                                                                    <option
                                                                        value="<?php echo $subject["subject_id"]; ?>"><?php echo $subject["subject_name"]; ?></option>
                                                                <?php }
                                                            } ?>
                                                        </select>

                                                    </div>

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
                                                            <div class="col-xs-11">
                                                                <div class="form-group">
                                                                    <label class="pull-left">Module Name</label>
                                                                    <input type="text" name="title[]"
                                                                           class="form-control"
                                                                           placeholder="Enter Module Title"
                                                                           value="<?php echo !empty($test_cat['title']) ? $test_cat['title'] : ''; ?>"
                                                                           data-title="Title">
                                                                    <?php echo form_error('title', '<div class="text-red">* ', '</div>'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="box">
                                            <div class="box-body text-right">

                                                <button name="save" type="submit" value="save"
                                                        class="btn btn-success btn-lg custom-margin-5"
                                                        data-toggle="tooltip" data-original-title="Save"
                                                        onclick="return confirm('Do you want Save this record')">
                                                    Save
                                                </button>
                                                <?php echo anchor('educational/test_categories', 'Discard', array("class" => "btn btn-danger btn-lg")); ?>

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
        $(wrapper).append("<div id='remove_parameter'>  <div class='row'> <div class='col-xs-11'>         <div class='form-group'>             <label class='pull-left'>Module Name</label>             <input type='text' name='title[]'                    class='form-control'                    placeholder='Enter Module Title'                    value='<?php echo !empty($test_cat['title']) ? $test_cat['title'] : ''; ?>'                    data-title='Title'>             <?php echo form_error('title', '<div class="text-red">* ', '</div>'); ?>         </div>     </div>   <div style='margin-bottom:0px;' class='col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center'><label class='pull-left'>&nbsp;</label><a href='#' class='btn btn-danger btn-sm form-control' id='remove_dynamic_subject'><i style='font-size: initial;' class='fa fa-times'></i></a></div></div></div> "); //add input box
    });

    $(wrapper).on("click", "#remove_dynamic_subject", function (e) { //user click on remove text
        e.preventDefault();
        $(this).closest('#remove_parameter').remove();
    })

    function getSubModule(val) {
        $.ajax({
            type: "POST",
            url: "get_state.php",
            data: 'parent=' + val,
            success: function (data) {

                alert(data);
                $("#state-list").html(data);
            }
        });
    }
</script>