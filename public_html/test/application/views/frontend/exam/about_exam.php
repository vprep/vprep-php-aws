<script>
    $(document).ready(function() {
        if(window.performance.navigation.type == 2){
            console.log("back button called");
      //      document.location.href = "http://test.vprep.in/exam_result";
            if($('#examGivenId').val() > 0){
                <?php $this->session->set_userdata('attempt_exam',0); ?>
                alert("You have clicked back button after attempting exam. So auto submitting your exam");
                document.location.href = "http://test.vprep.in/exam_result";
            } else {
                alert("You clicked back button without attempting exam. Please start exam again");
            }



        }
    });
    function popup()
    {
        url = $('#exam_url').val();
        params  = 'width='+screen.width;
        params += ', height='+screen.height;
        params += ', top=0, left=0'
        params += ', fullscreen=yes';

        newwin=window.open(url,'windowname4', params);
        if (window.focus) {newwin.focus()}
        return false;


    }
    
    function popup2()
    {
        url = $('#exam_url2').val();
        params  = 'width='+screen.width;
        params += ', height='+screen.height;
        params += ', top=0, left=0'
        params += ', fullscreen=yes';

        newwin=window.open(url,'windowname4', params);
        if (window.focus) {newwin.focus()}
        return false;


    }
    
</script>

<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding">
                    <div class="container">
                        <div class="edugate-layout-1">
                            <div class="col-md-6"> <div class="group-title-index">
                                    <h2 class="center-title">Exam Instruction</h2>
                                    <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h5 style="padding:0px; margin:0px;">
                                    <strong>
                                        <p><?php echo $test_cat['exam_detail']; ?></p>
                                    </strong>
                                </h5>
                                <?php if($test_cat['exam_id']>130) { ?>
                                <input id=exam_url type="hidden" value="<?php echo 'http://test.vprep.in/sample_test/'.urlencrypt1($test_cat['exam_id']);?>">
                                <?php }else {?>
                                <input id=exam_url type="hidden" value="<?php echo 'http://test.vprep.in/sample_test/'.urlencrypt1($test_cat['exam_id']);?>">
                                <?php } ?>
                                <input id=exam_url2 type="hidden" value="<?php echo 'http://test.vprep.in/progress_exam/'.urlencrypt1($test_cat['exam_id']);?>">
                                <input id="examGivenId" type="hidden" value="<?php echo $exam_given; ?>">
                              <!--  <?php /*if(!count($progress)>0) { */?>
                                <a href="<?php /*echo 'http://test.vprep.in/sample_test/'.urlencrypt($test_cat['exam_id']);*/?>" class="btn icon-btn btn-success btn-contact btn-block"
                                   "><strong>Start Now</strong></a>
                                    <?php /*}*/?>
                                   <?php /*if(count($progress)>0) { */?>
                                
                                   <a href="javascript: void(0)" class="btn icon-btn btn-success btn-contact btn-block"
                                   onclick="popup2()"><strong>Resume Exam</strong></a> 
                                   --><?php /*}*/?>
                               <!-- --><?php /*echo anchor('sample_test/' . urlencrypt($test_cat['exam_id']),
                                    '<strong>Start Now</strong>', array("class" => "btn icon-btn btn-success btn-contact btn-block")); */?>
                                <a href="javascript: void(0)" class="btn icon-btn btn-success btn-contact btn-block"
                                   onclick="popup()"><strong>Start Now</strong></a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
