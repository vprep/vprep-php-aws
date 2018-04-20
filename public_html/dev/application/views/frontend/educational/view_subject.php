<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses" style="padding-top:20px;">
                    <div class="container">
                        <div class="group-title-index" style="margin-bottom:20px !important">
                            <h2 class="center-title">&nbsp; </h2>
                            <h2 class="center-title">Create / Manage Subjects</h2>
                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 pull-right form-group">
                                    <a href="add_subject" class="btn btn-primary btn-lg" id="add_dynamic_subject"><i class="fa fa-plus-square"></i></a>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 showback">

                                        <div class="box box-primary">
                                            <div class="box-body table-responsive">
                                                <table class="table table-bordered table-hover text-center">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Subject Name</th>

                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php if (!empty($course_listing)): ?>
                                                        <?php foreach ($course_listing as $key => $val): ?>
                                                            <tr>
                                                                <td><?php echo $key + 1; ?></td>
                                                                <td>
                                                                    <?php echo anchor('#' . urlencrypt($val['course_id']), $val['course_title']); ?>
                                                                </td>

                                                                <td>
                                                                    <?php echo anchor('educational/delete_course/' . urlencrypt($val['course_id']), '<i class="fa fa-trash-o"></i>', array("class" => "btn btn-danger btn-lg", "onclick" => "return confirm('Do you want delete this record')")); ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="10">
                                                                <div class="alert alert-info alert-dismissible">
                                                                    <h4><i class="icon fa fa-info"></i> Information!
                                                                    </h4>
                                                                    No Record Found.
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>