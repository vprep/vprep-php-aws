<script>
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
//test

    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}


</script>

<style>
span {
    font-size: 14px !important;
        font-weight:bold;
}


</style>    
<script>window.MathJax = { MathML: { extensions: ["mml3.js", "content-mathml.js"]}};</script>
    <script type="text/javascript" async src="http://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=MML_HTMLorMML"></script>
    <script>

        var startTime = Math.round(new Date() / 1000);
        $(document).ready(function() {
            var jsonObj_71 = new Object();
            var ansJson2_71 = new Object();
            var lastDivId_71 = 'div-71-1';
            var obj_71 = new Object();
            var jsonObj_72 = new Object();
            var ansJson2_72 = new Object();
            var lastDivId_72 = 'div-72-1';
            var obj_72 = new Object();
            var jsonObj_73 = new Object();
            var ansJson2_73 = new Object();
            var lastDivId_73 = 'div-73-1';
            var obj_73 = new Object();

            $('.global-loader').show();

    //        var exam_progress_71 = '<?php $this->session->userdata('exam_progress_71'); ?>';
    //        var exam_progress_72 = '<?php $this->session->userdata('exam_progress_72'); ?>';
    //        var exam_progress_73 = '<?php $this->session->userdata('exam_progress_73'); ?>';

	    var exam_progress_71 = 1;
            var exam_progress_72 = 1;
            var exam_progress_73 = 1;


            if(exam_progress_71 < 2){
                $.ajax({
                    url: "http://test.vprep.in/read_ans_json?exam_id="+<?php echo $exam_1;?>,
                    method: "GET",
                    success: function(data) {
                        $('.global-loader').show();

                        var resumeTime_71 = 0;
                        if(data != null && data.length > 0){

                            jsonObj_71 = JSON.parse(data);

                            $.each(jsonObj_71, function (key,value) {
                                resumeTime_71 += value["time"];
                            });
                        }
                         $.ajax({
                            url: "http://test.vprep.in/read_exam_data?exam_id="+<?php echo $exam_1;?>,
                            method: "GET",
                            success: function(data) {
                                min=25;

                                if(resumeTime_71 != null && resumeTime_71 >0 ){

                                    min = (25 - Math.floor(resumeTime_71/60));

                                }

                                sec = 0;
                                activeExam1();
                                var index = 1;
                                var obj = jQuery.parseJSON(data);
                                obj_71 = jQuery.parseJSON(data);
                                var startTime = Math.round(new Date() / 1000);
                                var html = "";



                                html += '<input type="hidden" id="71" value="15"> ';
                                $.each(obj.total_questions, function(key,value) {

                                    if(jsonObj_71[value.id]!= null) {
                                        $('.jump-71-'+index).removeClass("btn-default");
                                        $('.jump-71-'+index).addClass("btn-success");
                                    }

                                    ansJson2_71[value.id] = value.correct_ans;
                                    html += ' <div class="edugate-layout-1 all-div div-71-'+index+'" data-value="div-'+ index +'" data-start_time="'+startTime +'" data-ques_id="'+value.id+'" data-total_time="'+0+'" data-current_exam="'+71+'"  style="display: none;">' +
                                        '    <div class="col-xs-12"> ' +
                                        '   <h5 style="padding:0px; margin:0px;"> ' +
                                        '     <label class="btn btn-success btn-circle">'+index+'</label>' +
                                        ' <strong> ' +value.title ;
                                    if(value.ques_img != null && value.ques_img.length >0){
                                        html += '<div><img src="<?php echo base_url(); ?>/uploads/'+ value.ques_img +'" style="height:auto;width:auto;"></div>'
                                    }
                                    html +=        ' </strong>' +
                                        '  <br><br> ' +
                                        '   <input name="question_id" value="1" type="hidden" id="quesId"> ' +
                                        '       </h5> ' +
                                        '       </div> ' +
                                        '       <div class="clearfix" style="height:80px;"> </div> ' +
                                        '      <div class="col-md-12 down"> '+
                                        '      <button class="btn btn-warning btn-circle" type="button">A</button> ' ;
                                    if(jsonObj_71[value.id]!= null && "option1"==jsonObj_71[value.id]['option']){
                                        html +=  '     <input class="'+value.id+'" type="radio" checked value="option1" name="'+value.id+'-option" id="'+value.id+'-1"> ' +
                                            '     <label for="'+value.id+'-1"> ';
                                    } else {
                                        html +=  '     <input class="'+value.id+'" type="radio" value="option1" name="'+value.id+'-option" id="'+value.id+'-1"> ' +
                                            '     <label for="'+value.id+'-1"> ';
                                    }

                                    if(value.option1_type != null && value.option1_type.length>0 && value.option1_type == 1) {
                                        html +=    '<img src="<?php echo base_url(); ?>/uploads/'+   value.option1_type + '" style="height:80px;"> ' ;
                                    } else {
                                        html +=     value.option1 ;

                                        html += ' </label> ' +
                                            ' </div> ' +
                                            '  <div  class="col-md-12 down"> ' +
                                            '     <button class="btn btn-warning btn-circle" type="button">B</button> ' ;
                                        if(jsonObj_71[value.id]!= null && "option2"==jsonObj_71[value.id]['option']){
                                            html +=  '     <input class="'+value.id+'" type="radio" checked value="option2" name="'+value.id+'-option" id="'+value.id+'-2"> ' +
                                                '     <label for="'+value.id+'-2"> ';
                                        } else {
                                            html +=  '     <input class="'+value.id+'" type="radio" value="option1" name="'+value.id+'-option" id="'+value.id+'-2"> ' +
                                                '     <label for="'+value.id+'-2"> ';
                                        }

                                        if(value.option2_type != null && value.option2_type.length>0 && value.option2_type == 1) {
                                            html +=  '<img src="<?php echo base_url(); ?>/uploads/'+ value.option2_type + '" style="height:80px;"> ' ;
                                        } else {
                                            html +=    value.option2 ;
                                        }
                                        html +=     '  </label> ' +
                                            '  </div> ' +
                                            '   <div  class="col-md-12 down"> ' +
                                            '      <button class="btn btn-warning btn-circle" type="button">C</button> ' ;
                                        if(jsonObj_71[value.id]!= null && "option3"==jsonObj_71[value.id]['option']){
                                            html +=  '     <input class="'+value.id+'" type="radio" checked value="option3" name="'+value.id+'-option" id="'+value.id+'-3"> ' +
                                                '     <label for="'+value.id+'-3"> ';
                                        } else {
                                            html +=  '     <input class="'+value.id+'" type="radio" value="option3" name="'+value.id+'-option" id="'+value.id+'-3"> ' +
                                                '     <label for="'+value.id+'-3"> ';
                                        }

                                        if(value.option3_type != null && value.option3_type.length>0 && value.option3_type == 1) {
                                            html +=  '<img src="<?php echo base_url(); ?>/uploads/' +value.option3_type + '" style="height:80px;"> ' ;
                                        } else {
                                            html += value.option3 ;
                                        }
                                        html += '      </label> ' +
                                            ' </div> ' +
                                            '   <div  class="col-md-12 down"> ' +
                                            '       <button class="btn btn-warning btn-circle" type="button">D</button> ' ;
                                        if(jsonObj_71[value.id]!= null &&  "option4"==jsonObj_71[value.id]['option']){
                                            html +=  '     <input class="'+value.id+'" type="radio" checked value="option4" name="'+value.id+'-option" id="'+value.id+'-4"> ' +
                                                '     <label for="'+value.id+'-4"> ';
                                        } else {
                                            html +=  '     <input class="'+value.id+'" type="radio" value="option4" name="'+value.id+'-option" id="'+value.id+'-4"> ' +
                                                '     <label for="'+value.id+'-4"> ';
                                        }
                                        if(value.option4_type != null && value.option4_type.length>0 && value.option4_type == 1) {
                                            html += '<img src="<?php echo base_url(); ?>/uploads/'+ value.option4_type + '" style="height:80px;"> ' ;
                                        } else {
                                            html += value.option4 ;
                                        }

                                        html += '   </label>    </div> ' +
                                            '   <div id="ques_page1"> ' +
                                            '       <a style="max-width:100px;min-width:80px;float: left;text-align: center;margin-left: 38%;" class="btn icon-btn btn-success btn-contact btn-block nxt-btn" ' +
                                            '    data-exam-id="1" ' +
                                            '    data-page-num="1" id="nxt-1" data-next="'+ index +'">Next</a> ' +
                                            '     <a style="max-width:100px;min-width:80px; display: none !important;margin-top:0px !important;margin-right:43%;float:right" class="btn icon-btn btn-success btn-contact btn-block  prev-btn" ' +
                                            '    data-exam-id="1" ' +
                                            '   data-page-num="1" id="prev-1" data-prev="'+index+'" >Previous </a> ' +
                                            '     </div> ' +
                                            '    </div> ' ;
                                        index++;
                                    }});


                                $("#exam1_question").append(html);
                                var toggleJump = "";

                                var shownDiv = 1;
                                $(".nxt-btn").click(function(){
                                    var currentVal = parseInt($(this).attr("data-next"));


                                    shownDiv = (currentVal+1);
                                    var visitVal = currentVal;
                                    var currentDiv = 'div-71-'+currentVal;
                                    lastDivId_71 = currentDiv;
                                    var startTime = parseInt($('.'+currentDiv).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+currentDiv).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+currentDiv).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    if(selectedOption != null && selectedOption.length >0 ){

                                        jsonObj_71[currentQueId] = {time: totalTime, option:selectedOption};
                                        $('.jump-71-'+currentVal).removeClass("btn-default");
                                        $('.jump-71-'+currentVal).addClass("btn-success");
                                        if(min%5==0 && sec%5==0){
                                            $("#saveAns_1").click();
                                        }

                                    }
                                    $('.'+currentDiv).data("total_time",totalTime);
                                    var nextDiv = 'div-71-'+(currentVal + 1);
                                    $('.'+nextDiv).data('start_time',Math.round(new Date()/1000));

                                    var questionCount = $('#71').val();
                                    if(currentVal == 15){
                                        $(".nxt-btn").hide();
                                    }
                                    if((currentVal-2)==0){
                                        $(".prev-btn").hide();
                                    }
                                    if((currentVal+1)==(questionCount)){
                                        $(".nxt-btn").hide();
                                    } else {
                                        $(".nxt-btn").show();
                                        if((currentVal) >0 ){
                                            $(".prev-btn").show();
                                        }
                                    }
                                    $('.'+currentDiv).hide();
                                    $('.'+nextDiv).show();

                                });

                                $(".prev-btn").click(function(){
                                    var currentVal = parseInt($(this).attr("data-prev"));
                                    shownDiv = currentVal-1;
                                    var currentDiv = 'div-71-'+currentVal;
                                    var prevDiv = 'div-71-'+(currentVal -1);
                                    lastDivId_71 = prevDiv;
                                    var startTime = parseInt($('.'+currentDiv).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+currentDiv).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+currentDiv).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    var ansJson = [];
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_71[currentQueId] = {time: totalTime, option:selectedOption};
                                        $('.jump-71-'+(currentVal)).removeClass("btn-default");
                                        $('.jump-71-'+(currentVal)).addClass("btn-success");
                                        if(min%5==0 && sec%5==0){
                                            $("#saveAns_1").click();
                                        }

                                    }
                                    $('.'+currentDiv).data("total_time",totalTime);
                                    $('.'+prevDiv).data("start_time",Math.round(new Date()/1000));
                                    if((currentVal-2)==0){
                                        $(".prev-btn").hide();
                                    }
                                     else {
                                        $(".prev-btn").show();
                                        $(".nxt-btn").show();
                                    }

                                        $('.'+currentDiv).hide();
                                        $('.'+prevDiv).show();



                                });
                                $(".jump-btn").click(function(){

                                    var currentVal = parseInt($(this).attr("data-jump"));
                                    var visitVal = currentVal;
                                    var currentDiv = 'div-71-'+shownDiv;
                                    var startTime = parseInt($('.'+currentDiv).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+currentDiv).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+currentDiv).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    var ansJson = [];
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_71[currentQueId] = {time: totalTime, option:selectedOption};
                                        $('.jump-71-'+shownDiv).removeClass("btn-default");
                                        $('.jump-71-'+shownDiv).addClass("btn-success");
                                        if(min%5==0 && sec%5==0){
                                            $("#saveAns_1").click();
                                        }

                                    }

                                    var selectedDiv = 'div-71-'+(currentVal);
                                    lastDivId_71 = selectedDiv;


                                    $('.'+currentDiv).hide();
                                    $('.'+selectedDiv).show();
                                    $('.'+selectedDiv).data("start_time",Math.round(new Date()/1000));
                                    var questionCount = $('#71').val();
                                    if(currentVal==questionCount){
                                        $(".nxt-btn").hide();
                                        $(".prev-btn").show();
                                    } else if(currentVal == 1){
                                        $(".nxt-btn").show();
                                        $(".prev-btn").hide();
                                }
                                    else {
                                        $(".nxt-btn").show();
                                        $(".prev-btn").show();
                                    }

                                    shownDiv = currentVal;


                                });



                                $("#saveAns_1").click(function () {
                                    var startTime = parseInt($('.'+lastDivId_71).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+lastDivId_71).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+lastDivId_71).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_71[currentQueId] = {time: totalTime, option:selectedOption};
                                    }
                                    var score = calculateScore(jsonObj_71,ansJson2_71, obj.marks_for_wrong,obj.marks_for_unattempt, obj.marks_for_correct);
                                    $.ajax({
                                        url: "http://test.vprep.in/save_exam_json?exam_id="+<?php echo $exam_1;?>+"&ans_json="+JSON.stringify(jsonObj_71)+"&score="+score+"&start_at="+startTime+"&taken_status=1",
                                        method: "GET",
                                        success: function(data) {

                                        }
                                        ,
                                        error: function (jqXHR, textStatus) {
                                            console.log("Advertiser detail Request failed: ", textStatus);
                                        }
                                    })
                                });





                                $("#examSubmitId").click(function () {
                                    var startTime = parseInt($('.'+lastDivId_71).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+lastDivId_71).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+lastDivId_71).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_71[currentQueId] = {time: totalTime, option:selectedOption};
                                    }
                                    var score = calculateScore(jsonObj_71,ansJson2_71, obj.marks_for_wrong,obj.marks_for_unattempt, obj.marks_for_correct);
                                <?php $this->session->set_userdata('exam_progress_71',"2"); ?>
                                    $('#progress_71').val('2');
                                    exam_progress_71 =2;

                                    $('.all-div').hide();
                                   // $('.global-loader').show();
                                    alert("successfully submitted");
                                            $('.div-72-1').show();
                                            $(".nxt-btn-2").show();
                                            //$(".prev-btn-2").show();
                                            $('.div-72-1').data("start_time",Math.round(new Date()/1000));
                                            activeExam2();
                                            min = 35;
                                            sec = 0;
                                    $.ajax({
                                        url: "http://test.vprep.in/save_exam_json?exam_id="+<?php echo $exam_1;?>+"&ans_json="+JSON.stringify(jsonObj_71)+"&score="+score+"&start_at="+startTime+"&taken_status=2",
                                        method: "GET",
                                        success: function(data) {
                                            
                              
                                        }
                                        ,
                                        error: function (jqXHR, textStatus) {
                                            console.log("Advertiser detail Request failed: ", textStatus);
                                        }
                                    }).always(function () {
                                        $('.global-loader').hide();
                                        $('.div-72-1').show();
                                    });

                                })



                            }

                            ,
                            error: function (jqXHR, textStatus) {
                                console.log("Advertiser detail Request failed: ", textStatus);
                            }
                        }).always(function () {
                            $('.global-loader').hide();
                            $('.div-71-1').show();
                        });



                    }

                    ,
                    error: function (jqXHR, textStatus) {
                        console.log("Advertiser detail Request failed: ", textStatus);
                    }
                });

            }
            if(exam_progress_72 < 2){
                if(exam_progress_71==2){
                    activeExam2();
                }
                $.ajax({
                    url: "http://test.vprep.in/read_ans_json?exam_id="+<?php echo $exam_2;?>,
                    method: "GET",
                    success: function(data) {
                        var jsonObj_72 = new Object();
                        var resumeTime_72 = new Object();
                        if(data != null && data.length > 0){

                            jsonObj_72 = JSON.parse(data);
                            $.each(jsonObj_72, function (key,value) {
                                resumeTime_72 += value["time"];
                            });
                        }


                        $.ajax({
                            url: "http://test.vprep.in/read_exam_data?exam_id="+<?php echo $exam_2;?>,
                            method: "GET",
                            success: function(data) {
                                if((exam_progress_71 == 2)){
                                    min = 35;
                                    if( resumeTime_72 != null && resumeTime_72 >0 ){

                                        min = (35 - Math.floor(resumeTime_72/60));

                                    }
                                }


                                var index = 1;
                                var obj = jQuery.parseJSON(data);
                                obj_72 = jQuery.parseJSON(data);
                                var html = "";


                                startTime = Math.round(new Date() / 1000);
                                var savedStart2 =  Math.round(new Date() / 1000);

                                html += '<input type="hidden" id="72" value="10"> ';
                                $.each(obj.total_questions, function(key,value) {

                                    if(jsonObj_72[value.id]!= null) {
                                        $('.jump-72-'+index).removeClass("btn-default");
                                        $('.jump-72-'+index).addClass("btn-success");
                                    }

                                    ansJson2_72[value.id] = value.correct_ans;
                                    html += ' <div class="edugate-layout-1 all-div div-72-'+index+'" data-value="div-'+ index +'" data-start_time="'+startTime +'" data-ques_id2="'+value.id+'" data-total_time="'+0+'" data-current_exam="'+71+'"  style="display: none;">' +
                                        '    <div class="col-xs-12"> ' +
                                        '   <h5 style="padding:0px; margin:0px;"> ' +
                                        '     <label class="btn btn-success btn-circle">'+index+'</label>' +
                                        ' <strong> ' +value.title ;
                                    if(value.ques_img != null && value.ques_img.length >0){
                                        html += '<div><img src="<?php echo base_url(); ?>/uploads/'+ value.ques_img +'" style="height:auto;width:auto;"></div>'
                                    }
                                    html +=        ' </strong>' +
                                        '  <br><br> ' +
                                        '   <input name="question_id" value="1" type="hidden" id="quesId2"> ' +
                                        '       </h5> ' +
                                        '       </div> ' +
                                        '       <div class="clearfix" style="height:80px;"> </div> ' +
                                        '      <div class="col-md-12 down"> '+
                                        '      <button class="btn btn-warning btn-circle" type="button">A</button> ' ;
                                    if(jsonObj_72[value.id]!= null && "option1"==jsonObj_72[value.id]['option']){
                                        html +=  '     <input class="'+value.id+'" type="radio" checked value="option1" name="'+value.id+'-option" id="'+value.id+'-1"> ' +
                                            '     <label for="'+value.id+'-1"> ';
                                    } else {
                                        html +=  '     <input class="'+value.id+'" type="radio" value="option1" name="'+value.id+'-option" id="'+value.id+'-1"> ' +
                                            '     <label for="'+value.id+'-1"> ';
                                    }


                                    if(value.option1_type != null && value.option1_type.length>0 && value.option1_type == 1) {
                                        html +=    '<img src="<?php echo base_url(); ?>/uploads/'+   value.option1_type + '" style="height:80px;"> ' ;
                                    } else {
                                        html +=     value.option1 ;

                                        html += ' </label> ' +
                                            ' </div> ' +
                                            '  <div  class="col-md-12 down"> ' +
                                            '     <button class="btn btn-warning btn-circle" type="button">B</button> ' ;
                                        if(jsonObj_72[value.id]!= null && "option2"==jsonObj_72[value.id]['option']){
                                            html +=  '     <input class="'+value.id+'" type="radio" checked value="option2" name="'+value.id+'-option" id="'+value.id+'-2"> ' +
                                                '     <label for="'+value.id+'-1"> ';
                                        } else {
                                            html +=   '     <input class="'+value.id+'" type="radio"  value="option2" name="'+value.id+'-option" id="'+value.id+'-2"> ' +
                                                '    <label for="'+value.id+'-2"><span></span> ' ;
                                        }


                                        if(value.option2_type != null && value.option2_type.length>0 && value.option2_type == 1) {
                                            html +=  '<img src="<?php echo base_url(); ?>/uploads/'+ value.option2_type + '" style="height:80px;"> ' ;
                                        } else {
                                            html +=    value.option2 ;
                                        }
                                        html +=     '  </label> ' +
                                            '  </div> ' +
                                            '   <div  class="col-md-12 down"> ' +
                                            '      <button class="btn btn-warning btn-circle" type="button">C</button> ' ;
                                        if(jsonObj_72[value.id]!= null && "option3"==jsonObj_72[value.id]['option']){
                                            html +=  '     <input class="'+value.id+'" type="radio" checked value="option3" name="'+value.id+'-option" id="'+value.id+'-3"> ' +
                                                '     <label for="'+value.id+'-3"> ';
                                        } else {
                                            html +=   '     <input class="'+value.id+'" type="radio"  value="option3" name="'+value.id+'-option" id="'+value.id+'-3"> ' +
                                                '    <label for="'+value.id+'-3"><span></span> ' ;
                                        }

                                        if(value.option3_type != null && value.option3_type.length>0 && value.option3_type == 1) {
                                            html +=  '<img src="<?php echo base_url(); ?>/uploads/' +value.option3_type + '" style="height:80px;"> ' ;
                                        } else {
                                            html += value.option3 ;
                                        }
                                        html += '      </label> ' +
                                            ' </div> ' +
                                            '   <div  class="col-md-12 down"> ' +
                                            '       <button class="btn btn-warning btn-circle" type="button">D</button> ' ;
                                        if(jsonObj_72[value.id]!= null && "option4"==jsonObj_72[value.id]['option']){
                                            html +=  '     <input class="'+value.id+'" type="radio" checked value="option4" name="'+value.id+'-option" id="'+value.id+'-4"> ' +
                                                '     <label for="'+value.id+'-4"> ';
                                        } else {
                                            html +=   '     <input class="'+value.id+'" type="radio"  value="option4" name="'+value.id+'-option" id="'+value.id+'-4"> ' +
                                                '    <label for="'+value.id+'-4"><span></span> ' ;
                                        }
                                        if(value.option4_type != null && value.option4_type.length>0 && value.option4_type == 1) {
                                            html += '<img src="<?php echo base_url(); ?>/uploads/'+ value.option4_type + '" style="height:80px;"> ' ;
                                        } else {
                                            html += value.option4 ;
                                        }

                                        html += '   </label>    </div> ' +
                                            '   <div id="ques_page1"> ' +
                                            '       <a  style="max-width:100px;min-width:80px;float: left;text-align: center;margin-left: 38%;" class="btn icon-btn btn-success btn-contact btn-block nxt-btn-2" ' +
                                            '    data-exam-id="1" ' +
                                            '    data-page-num="1" id="nxt-1" data-next="'+ index +'">Next</a> ' +
                                            '     <a style="max-width:100px;min-width:80px; display: none !important;margin-top:0px !important;margin-right:43%;float:right;" class="btn icon-btn btn-success btn-contact btn-block prev-btn-2" ' +
                                            '    data-exam-id="1" ' +
                                            '   data-page-num="1" id="prev-1" data-prev="'+index+'" >Previous </a> ' +
                                            '     </div> ' +
                                            '    </div> ' ;
                                        index++;
                                    }});


                                $("#exam2_question").append(html);
                                var toggleJump = "";

                                var shownDiv = 1;

                                $(".nxt-btn-2").click(function() {

                                    var currentVal = parseInt($(this).attr("data-next"));
                                    var currentExam = parseInt($(this).data("current_exam"));

                                    shownDiv = (currentVal+1);
                                    var visitVal = currentVal;
                                    var currentDiv = 'div-72-'+currentVal;
                                    lastDivId_72 = currentDiv;
                                    var startTime = parseInt($('.'+currentDiv).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+currentDiv).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+currentDiv).data("ques_id2");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    var ansJson = [];
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_72[currentQueId] = {time: totalTime, option:selectedOption};
                                        $('.jump-72-'+currentVal).removeClass("btn-default");
                                        $('.jump-72-'+currentVal).addClass("btn-success");
                                        if(min%5==0 && sec%5==0){
                                            $("#saveAns_2").click();
                                        }
                                    }
                                    $('.'+currentDiv).data("total_time",totalTime);
                                    var nextDiv = 'div-72-'+(currentVal + 1);
                                    $('.'+nextDiv).data('start_time',Math.round(new Date()/1000));
                                    var questionCount = $('#72').val();

                                    if((currentVal-2)==0){
                                        $(".prev-btn-2").hide();
                                    }
                                    if((currentVal+1)==(questionCount)){
                                        $(".nxt-btn-2").hide();
                                    } else {
                                        $(".nxt-btn-2").show();
                                        if((currentVal) >0 ){
                                            $(".prev-btn-2").show();
                                        }
                                    }
                                    $('.'+currentDiv).hide();
                                    $('.'+nextDiv).show();


                                });

                                $(".prev-btn-2").click(function(){
                                    var currentVal = parseInt($(this).attr("data-prev"));
                                    shownDiv = currentVal-1;
                                    var currentDiv = 'div-72-'+currentVal;
                                    var prevDiv = 'div-72-'+(currentVal -1);
                                    lastDivId_72 = prevDiv;
                                    var startTime = parseInt($('.'+currentDiv).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+currentDiv).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+currentDiv).data("ques_id2");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_72[currentQueId] = {time: totalTime, option:selectedOption};
                                        $('.jump-72-'+(currentVal)).removeClass("btn-default");
                                        $('.jump-72-'+(currentVal)).addClass("btn-success");
                                        if(min%5==0 && sec%5==0){
                                            $("#saveAns_2").click();
                                        }
                                    }
                                    $('.'+currentDiv).data("total_time",totalTime);
                                    $('.'+prevDiv).data("start_time",Math.round(new Date()/1000));
                                    if((currentVal-2)==0){
                                        $(".prev-btn-2").hide();
                                    }
                                    else {
                                        $(".prev-btn-2").show();
                                        $(".nxt-btn-2").show();
                                    }

                                    $('.'+currentDiv).hide();
                                    $('.'+prevDiv).show();



                                });
                                $(".jump-btn-2").click(function(){
                                    var currentVal = parseInt($(this).attr("data-jump-2"));
                                    var visitVal = currentVal;
                                    var currentDiv = 'div-72-'+shownDiv;

                                    var startTime = parseInt($('.'+currentDiv).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+currentDiv).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+currentDiv).data("ques_id2");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    var ansJson = [];
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_72[currentQueId] = {time: totalTime, option:selectedOption};
                                        $('.jump-72-'+shownDiv).removeClass("btn-default");
                                        $('.jump-72-'+shownDiv).addClass("btn-success");
                                        if(min%5==0 && sec%5==0){
                                            $("#saveAns_2").click();
                                        }

                                    }

                                    var selectedDiv = 'div-72-'+(currentVal);
                                    lastDivId_72 = selectedDiv;
                                    $('.'+currentDiv).hide();
                                    $('.'+selectedDiv).show();
                                    $('.'+selectedDiv).data("start_time",Math.round(new Date()/1000));
                                    var questionCount = $('#72').val();

                                    if(currentVal==questionCount){
                                        $(".nxt-btn-2").hide();
                                        $(".prev-btn-2").show();
                                    } else if(currentVal == 1){
                                        $(".nxt-btn-2").show();
                                        $(".prev-btn-2").hide();
                                    }
                                    else {
                                        $(".nxt-btn-2").show();
                                        $(".prev-btn-2").show();
                                    }


                                    shownDiv = currentVal;


                                });

                                $("#saveAns_2").click(function () {
                                    var startTime = parseInt($('.'+lastDivId_72).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+lastDivId_72).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+lastDivId_72).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_72[currentQueId] = {time: totalTime, option:selectedOption};
                                    }
                                    var score = calculateScore(jsonObj_72,ansJson2_72, obj.marks_for_wrong,obj.marks_for_unattempt, obj.marks_for_correct);
                                    $.ajax({
                                        url: "http://test.vprep.in/save_exam_json?exam_id="+<?php echo $exam_2;?>+"&ans_json="+JSON.stringify(jsonObj_72)+"&score="+score+"&start_at="+savedStart2+"&taken_status=1",
                                        method: "GET",
                                        success: function(data) {

                                        }
                                        ,
                                        error: function (jqXHR, textStatus) {
                                            console.log("Advertiser detail Request failed: ", textStatus);
                                        }
                                    })
                                });



                                $("#examSubmitId_2").click(function () {
                                    var startTime = parseInt($('.'+lastDivId_72).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+lastDivId_72).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+lastDivId_72).data("ques_id2");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_72[currentQueId] = {time: totalTime, option:selectedOption};
                                    }
                                    var score = calculateScore(jsonObj_72,ansJson2_72, obj.marks_for_wrong,obj.marks_for_unattempt, obj.marks_for_correct);
                                <?php $this->session->set_userdata('exam_progress_72',"2"); ?>
                                    $('#progress_72').val('2');
                                    exam_progress_72 =2;

                                    $('.all-div').hide();
                                    //$('.global-loader').show();
                                    alert("successfully submitted");
                                            $('.div-73-1').show();
                                            $('.div-73-1').data("start_time",Math.round(new Date()/1000));
                                            activeExam3();
                                            $(".nxt-btn-3").show();
                                            //$(".prev-btn-3").show();
                                            min = 35;
                                            sec = 0;
                                     $.ajax({
                                        url: "http://test.vprep.in/save_exam_json?exam_id="+<?php echo $exam_2;?>+"&ans_json="+JSON.stringify(jsonObj_72)+"&score="+score+"&start_at="+savedStart2+"&taken_status=2",
                                        method: "GET",
                                        success: function(data) {
                                           // alert("successfully submitted");
                                           // $('.div-73-1').show();
                                           // $('.div-73-1').data("start_time",Math.round(new Date()/1000));
                                           // activeExam3();
                                           // $(".nxt-btn-3").show();
                                            //$(".prev-btn-3").show();
                                           // min = 35;
                                           // sec = 0;
                                        }
                                        ,
                                        error: function (jqXHR, textStatus) {
                                            console.log("Advertiser detail Request failed: ", textStatus);
                                        }
                                    }).always(function () {
                                        $('.global-loader').hide();
                                        $('.div-73-1').show();
                                    });

                                })


                            }

                            ,
                            error: function (jqXHR, textStatus) {
                                console.log("Advertiser detail Request failed: ", textStatus);
                            }
                        }).always(function () {
                            $('.global-loader').hide();
                            $('.div-72-1').show();
                        });
                    }

                    ,
                    error: function (jqXHR, textStatus) {
                        console.log("Advertiser detail Request failed: ", textStatus);
                    }
                });

            }

            if(exam_progress_73 < 3) {
                if(exam_progress_72==2){
                    activeExam3();
                }
                $.ajax({
                    url: "http://test.vprep.in/read_ans_json?exam_id="+<?php echo $exam_3;?>,
                    method: "GET",
                    success: function(data) {
                        var resumeTime_73 = new Object();
                        if(data != null && data.length > 0){

                            jsonObj_73 = JSON.parse(data);
                            $.each(jsonObj_73, function (key,value) {
                                resumeTime_73 += value["time"];
                            });
                        }

                        $.ajax({
                            url: "http://test.vprep.in/read_exam_data?exam_id="+<?php echo $exam_3;?>,
                            method: "GET",
                            success: function(data) {
                                    if((exam_progress_72 == 2)){
                                        min = 35;
                                        if( resumeTime_73 != null && resumeTime_73 >0 ){

                                            min = (35 - Math.floor(resumeTime_73/60));

                                        }
                                    }

                                var index = 1;
                                var obj = jQuery.parseJSON(data);
                                obj_73 = jQuery.parseJSON(data);
                                var startTime = Math.round(new Date() / 1000);
                                var html = "";
                                var savedStart3 = Math.round(new Date() / 1000);


                                html += '<input type="hidden" id="73" value="40"> ';
                                $.each(obj.total_questions, function(key,value) {

                                    if(jsonObj_73[value.id]!= null) {
                                        $('.jump-73-'+index).removeClass("btn-default");
                                        $('.jump-73-'+index).addClass("btn-success");
                                    }

                                    ansJson2_73[value.id] = value.correct_ans;
                                    html += ' <div class="edugate-layout-1 all-div div-73-'+index+'" data-value="div-'+ index +'" data-start_time="'+startTime +'" data-ques_id="'+value.id+'" data-total_time="'+0+'" data-current_exam="'+73+'"  style="display: none;">' +
                                        '    <div class="col-xs-12"> ' +
                                        '   <h5 style="padding:0px; margin:0px;"> ' +
                                        '     <label class="btn btn-success btn-circle">'+index+'</label>' +
                                        ' <strong> ' +value.title ;
                                    if(value.ques_img != null && value.ques_img.length >0){
                                        html += '<div><img src="<?php echo base_url(); ?>/uploads/'+ value.ques_img +'" style="height:auto;width:auto;"></div>'
                                    }
                                    html +=        ' </strong>' +
                                        '  <br><br> ' +
                                        '   <input name="question_id" value="1" type="hidden" id="quesId"> ' +
                                        '       </h5> ' +
                                        '       </div> ' +
                                        '       <div class="clearfix" style="height:80px;"> </div> ' +
                                        '      <div class="col-md-12 down"> '+
                                        '      <button class="btn btn-warning btn-circle" type="button">A</button> ' ;
                                    if(jsonObj_73[value.id]!= null && "option1"==jsonObj_73[value.id]['option']){
                                        html +=  '     <input class="'+value.id+'" type="radio" checked value="option1" name="'+value.id+'-option" id="'+value.id+'-1"> ' +
                                            '     <label for="'+value.id+'-1"> ';
                                    } else {
                                        html +=  '     <input class="'+value.id+'" type="radio" value="option1" name="'+value.id+'-option" id="'+value.id+'-1"> ' +
                                            '     <label for="'+value.id+'-1"> ';
                                    }

                                    if(value.option1_type != null && value.option1_type.length>0 && value.option1_type == 1) {
                                        html +=    '<img src="<?php echo base_url(); ?>/uploads/'+   value.option1_type + '" style="height:80px;"> ' ;
                                    } else {
                                        html +=     value.option1 ;

                                        html += ' </label> ' +
                                            ' </div> ' +
                                            '  <div  class="col-md-12 down"> ' +
                                            '     <button class="btn btn-warning btn-circle" type="button">B</button> ' ;
                                        if(jsonObj_73[value.id]!= null && "option2"==jsonObj_73[value.id]['option']){
                                            html +=  '     <input class="'+value.id+'" type="radio" checked value="option2" name="'+value.id+'-option" id="'+value.id+'-2"> ' +
                                                '     <label for="'+value.id+'-2"> ';
                                        } else {
                                            html +=  '     <input class="'+value.id+'" type="radio" value="option2" name="'+value.id+'-option" id="'+value.id+'-2"> ' +
                                                '     <label for="'+value.id+'-2"> ';
                                        }

                                        if(value.option2_type != null && value.option2_type.length>0 && value.option2_type == 1) {
                                            html +=  '<img src="<?php echo base_url(); ?>/uploads/'+ value.option2_type + '" style="height:80px;"> ' ;
                                        } else {
                                            html +=    value.option2 ;
                                        }
                                        html +=     '  </label> ' +
                                            '  </div> ' +
                                            '   <div  class="col-md-12 down"> ' +
                                            '      <button class="btn btn-warning btn-circle" type="button">C</button> ' ;
                                        if(jsonObj_73[value.id]!= null && "option3"==jsonObj_73[value.id]['option']){
                                            html +=  '     <input class="'+value.id+'" type="radio" checked value="option3" name="'+value.id+'-option" id="'+value.id+'-3"> ' +
                                                '     <label for="'+value.id+'-3"> ';
                                        } else {
                                            html +=  '     <input class="'+value.id+'" type="radio" value="option3" name="'+value.id+'-option" id="'+value.id+'-3"> ' +
                                                '     <label for="'+value.id+'-3"> ';
                                        }

                                        if(value.option3_type != null && value.option3_type.length>0 && value.option3_type == 1) {
                                            html +=  '<img src="<?php echo base_url(); ?>/uploads/' +value.option3_type + '" style="height:80px;"> ' ;
                                        } else {
                                            html += value.option3 ;
                                        }
                                        html += '      </label> ' +
                                            ' </div> ' +
                                            '   <div  class="col-md-12 down"> ' +
                                            '       <button class="btn btn-warning btn-circle" type="button">D</button> ' ;
                                        if(jsonObj_73[value.id]!= null && "option1"==jsonObj_73[value.id]['option']){
                                            html +=  '     <input class="'+value.id+'" type="radio" checked value="option4" name="'+value.id+'-option" id="'+value.id+'-4"> ' +
                                                '     <label for="'+value.id+'-4"> ';
                                        } else {
                                            html +=  '     <input class="'+value.id+'" type="radio" value="option4" name="'+value.id+'-option" id="'+value.id+'-4"> ' +
                                                '     <label for="'+value.id+'-4"> ';
                                        }

                                        if(value.option4_type != null && value.option4_type.length>0 && value.option4_type == 1) {
                                            html += '<img src="<?php echo base_url(); ?>/uploads/'+ value.option4_type + '" style="height:80px;"> ' ;
                                        } else {
                                            html += value.option4 ;
                                        }

                                        html += '   </label>    </div> ' +
                                            '   <div id="ques_page1"> ' +
                                            '       <a style="max-width:100px;min-width:80px;float: left;text-align: center;margin-left: 38%;" class="btn icon-btn btn-success btn-contact btn-block nxt-btn-3" ' +
                                            '    data-exam-id="1" ' +
                                            '    data-page-num="1" id="nxt-1" data-next="'+ index +'">Next</a> ' +
                                            '     <a style="max-width:100px;min-width:80px;display: none !important;margin-top:0px !important;margin-right:43%;float:right;" class="btn icon-btn btn-success btn-contact btn-block prev-btn-3" ' +
                                            '    data-exam-id="1" ' +
                                            '   data-page-num="1" id="prev-1" data-prev="'+index+'" style="display: none !important;" >Previous </a> ' +
                                            '     </div> ' +
                                            '    </div> ' ;
                                        index++;
                                    }});


                                $("#exam3_question").append(html);
                                var toggleJump = "";

                                var shownDiv = 1;

                                $(".nxt-btn-3").click(function(){
                                    var currentVal = parseInt($(this).attr("data-next"));
                                    var currentExam = parseInt($(this).data("current_exam"));

                                    shownDiv = (currentVal+1);
                                    var visitVal = currentVal;
                                    var currentDiv = 'div-73-'+currentVal;
                                    lastDivId_73 = currentDiv;
                                    var startTime = parseInt($('.'+currentDiv).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+currentDiv).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+currentDiv).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    var ansJson = [];
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_73[currentQueId] = {time: totalTime, option:selectedOption};
                                        $('.jump-73-'+currentVal).removeClass("btn-default");
                                        $('.jump-73-'+currentVal).addClass("btn-success");
                                        if(min%5==0 && sec%5==0){
                                            $("#saveAns_3").click();
                                        }
                                    }
                                    $('.'+currentDiv).data("total_time",totalTime);
                                    var nextDiv = 'div-73-'+(currentVal + 1);
                                    $('.'+nextDiv).data('start_time',Math.round(new Date()/1000));
                                    var questionCount = $('#73').val();

                                    if((currentVal-2)==0){
                                        $(".prev-btn-3").hide();
                                    }
                                    if((currentVal+1)==(questionCount)){
                                        $(".nxt-btn-3").hide();
                                    } else {
                                        $(".nxt-btn-3").show();
                                        if((currentVal) >0 ){
                                            $(".prev-btn-3").show();
                                        }
                                    }
                                    $('.'+currentDiv).hide();
                                    $('.'+nextDiv).show();


                                });

                                $(".prev-btn-3").click(function(){
                                    var currentVal = parseInt($(this).attr("data-prev"));
                                    shownDiv = currentVal-1;
                                    var currentDiv = 'div-73-'+currentVal;
                                    var prevDiv = 'div-73-'+(currentVal -1);
                                    lastDivId_73 = prevDiv;
                                    var startTime = parseInt($('.'+currentDiv).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+currentDiv).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+currentDiv).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    var ansJson = [];
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_73[currentQueId] = {time: totalTime, option:selectedOption};
                                        $('.jump-73-'+(currentVal)).removeClass("btn-default");
                                        $('.jump-73-'+(currentVal)).addClass("btn-success");
                                        if(min%5==0 && sec%5==0){
                                            $("#saveAns_2").click();
                                        }
                                    }
                                    $('.'+currentDiv).data("total_time",totalTime);
                                    $('.'+prevDiv).data("start_time",Math.round(new Date()/1000));

                                    if((currentVal-2)==0){
                                        $(".prev-btn-3").hide();
                                    }
                                    else {
                                        $(".prev-btn-3").show();
                                        $(".nxt-btn-3").show();
                                    }

                                    $('.'+currentDiv).hide();
                                    $('.'+prevDiv).show();


                                });
                                $(".jump-btn-3").click(function(){

                                    var currentVal = parseInt($(this).attr("data-jump-3"));
                                    var visitVal = currentVal;
                                    var currentDiv = 'div-73-'+shownDiv;

                                    var startTime = parseInt($('.'+currentDiv).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+currentDiv).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+currentDiv).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    var ansJson = [];
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_73[currentQueId] = {time: totalTime, option:selectedOption};
                                        $('.jump-73-'+shownDiv).removeClass("btn-default");
                                        $('.jump-73-'+shownDiv).addClass("btn-success");

                                        if(min%5==0 && sec%5==0){
                                            $("#saveAns_3").click();
                                        }

                                    }

                                    var selectedDiv = 'div-73-'+(currentVal);
                                    lastDivId_73 = selectedDiv;
                                    $('.'+currentDiv).hide();
                                    $('.'+selectedDiv).show();
                                    $('.'+selectedDiv).data("start_time",Math.round(new Date()/1000));
                                    var questionCount = $('#73').val();

                                    if(currentVal==questionCount){
                                        $(".nxt-btn-3").hide();
                                        $(".prev-btn-3").show();
                                    } else if(currentVal == 1){
                                        $(".nxt-btn-3").show();
                                        $(".prev-btn-3").hide();
                                    }
                                    else {
                                        $(".nxt-btn-3").show();
                                        $(".prev-btn-3").show();
                                    }


                                    shownDiv = currentVal;


                                });

                                $("#saveAns_3").click(function () {
                                    var startTime = parseInt($('.'+lastDivId_73).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+lastDivId_73).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+lastDivId_73).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_73[currentQueId] = {time: totalTime, option:selectedOption};
                                    }
                                    var score = calculateScore(jsonObj_73,ansJson2_73, obj.marks_for_wrong,obj.marks_for_unattempt, obj.marks_for_correct);
                                    $.ajax({
                                        url: "http://test.vprep.in/save_exam_json?exam_id="+<?php echo $exam_3;?>+"&ans_json="+JSON.stringify(jsonObj_73)+"&score="+score+"&start_at="+savedStart3+"&taken_status=1",
                                        method: "GET",
                                        success: function(data) {

                                        }
                                        ,
                                        error: function (jqXHR, textStatus) {
                                            console.log("Advertiser detail Request failed: ", textStatus);
                                        }
                                    })
                                });

                                $("#examSubmitId_3").click(function () {
		if(1) {
 
var atjid=getParameterByName("atjid");
var cdid=getParameterByName("cdid");
var score = calculateScore(jsonObj_73,ansJson2_73, obj.marks_for_wrong,obj.marks_for_unattempt, obj.marks_for_correct);
		       $.ajax({
  type: "POST",
  url: "http://api.passivereferral.com/index.php/api/submittestresult/?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE1MjQzMzU0MDAsImFjY291bnQiOiJhdHMiLCJzdWIiOjE4MiwiaXNzIjoiaHR0cDovL2FwaS5wYXNzaXZlcmVmZXJyYWwuY29tL2luZGV4LnBocC9hcGkvYXV0aGVudGljYXRlIiwiaWF0IjoxNTI0MDM5NTA3LCJuYmYiOjE1MjQwMzk1MDcsImp0aSI6IjJVdGdXemZ2Rkc0NjEwdGwifQ.kzxSOGl4e88OsbP5tQFSB2a050R3IqrgGIHgFlSvL6Y",
  data: {"atjid":atjid,"cdid":cdid,"score":score},
  dataType: "json",
  success:{}
});	
                       alert("successfully submitted");
			window.location.href = "http://passivereferral.com";
			
}                                   
                                    var startTime = parseInt($('.'+lastDivId_73).data("start_time"));
                                    var endTime = Math.round(new Date() / 1000);
                                    var totalTime = parseInt($('.'+lastDivId_73).data("total_time"));
                                    totalTime += (endTime-startTime);
                                    var currentQueId = $('.'+lastDivId_73).data("ques_id");
                                    var selectedOption = $('.'+currentQueId+':checked').val();
                                    if(selectedOption != null && selectedOption.length >0 ){
                                        jsonObj_73[currentQueId] = {time: totalTime, option:selectedOption};
                                    }
                                    var score = calculateScore(jsonObj_73,ansJson2_73, obj.marks_for_wrong,obj.marks_for_unattempt, obj.marks_for_correct);
                                <?php $this->session->set_userdata('exam_progress_73',"2"); ?>
                                    $('#progress_73').val('2');
                                    exam_progress_73 =2;

                                    $('.all-div').hide();
                                    $('.global-loader').show();
                                    $.ajax({
                                        url: "http://test.vprep.in/save_exam_json?exam_id="+<?php echo $exam_3;?>+"&ans_json="+JSON.stringify(jsonObj_73)+"&score="+score+"&start_at="+savedStart3+"&taken_status=2",
                                        method: "GET",
                                        success: function(data) {
                                            alert("successfully submitted");
                                            document.location.href = "http://test.vprep.in/my_score.html";

                                        }
                                        ,
                                        error: function (jqXHR, textStatus) {
                                            console.log("Advertiser detail Request failed: ", textStatus);
                                        }
                                    }).always(function () {
                                        $('.global-loader').hide();
                                    });

                                })



                            }

                            ,
                            error: function (jqXHR, textStatus) {
                                console.log("Advertiser detail Request failed: ", textStatus);
                            }
                        }).always(function () {
                            $('.global-loader').hide();
                            $('.div-73-1').show();
                        });
                    }

                    ,
                    error: function (jqXHR, textStatus) {
                        console.log("Advertiser detail Request failed: ", textStatus);
                    }
                });

            }


            function calculateScore(jsonObj,correctAns,marksForWrong,marksForUnattempt,marksForCorrect) {
                var ansCount = 0;
                $.each(jsonObj, function(key,value) {
                    var correctOption = 'option'+correctAns[key];
                    if(correctOption == value.option){
                        ansCount++;
                    }

                });
                return marksForCorrect*ansCount;

            }

            function activeExam1() {
                $("#exam-tab-id-1").css( "background-color", "green");
                $("#exam-tab-id-2").css( "background-color", "white");
                $("#exam-tab-id-3").css( "background-color", "white");
                $("#exam-detail-id-1").show();
                $("#exam-detail-id-2").hide();
                $("#exam-detail-id-3").hide();

            }

            function activeExam2() {
                $("#exam-tab-id-2").css( "background-color", "green");
                $("#exam-tab-id-1").css( "background-color", "grey");
                $("#exam-tab-id-3").css( "background-color", "white");
                $("#exam-detail-id-1").hide();
                $("#exam-detail-id-2").show();
                $("#exam-detail-id-3").hide();
            }

            function activeExam3() {
                $("#exam-tab-id-3").css( "background-color", "green");
                $("#exam-tab-id-2").css( "background-color", "grey");
                $("#exam-tab-id-1").css( "background-color", "grey");
                $("#exam-detail-id-1").hide();
                $("#exam-detail-id-2").hide();
                $("#exam-detail-id-3").show();
            }


        });
    </script>
    <style>
        .btn-default {
            color: #333;
            background-color: #FFFFFF;
            border-color: #adadad;
        }
    </style>
    <div id="o-wrapper" class="o-wrapper">
        <main class="o-content">
            <div class="o-container">
                <div class="c-buttons">
                    <!--    <button id="c-button--push-right" class="btn btn-success c-button" type="submit">Jump</button>-->
                </div>
                <div id="github-icons"></div>
            </div>
        </main>
    </div>


    <div id="c-mask" class="c-mask"></div>
    <div class="container">
        <ul class="nav">
            <li class="col-sm-4" id="exam-tab-id-1" style="position: relative;display: block;width: 33%;float: left;">  <a style="
    color: lightsalmon;
">Arithmetic Reasoning and Analytical Thinking</a></li>
            <li class="col-sm-4"> <a style="
    color: lightsalmon;
" id="exam-tab-id-2" >Mathematical Critical Thinking and Logical Reasoning</a></li>
            <li class="col-sm-4"> <a style="
    color: lightsalmon;
" id="exam-tab-id-3" >Test of Communicative English</a></li>
        </ul>


        <div class="tab-content">
            <input id ="progress_71" value="1" type="hidden"/>
            <input id="progress_72" value="1" type="hidden"/>
            <input id="progress_73" value="1" type="hidden"/>

            <div id="exam-detail-id-1" style="display: none;" >
                <div id="wrapper-content">
                    <div id="page-wrapper">
                        <div class="main-content">
                            <div class="content">
                                <div class="section section-padding">
                                    <div class="container">

                            <span class="button-checkbox">

                            <input type="checkbox" checked="" class="hidden">
                                <button id="c-button--push-right" class="btn btn-warning c-button" type="submit" onclick="toggleJump()">Jump</button>
                            </span>

                                        <button class="btn btn-warning pull-right" type="button">
                                            <span id="strclock" style="font-size: 14px;"></span><i aria-hidden="true" class="fa fa-hourglass-start"></i>
                                        </button>
                                        <div id="exam1_question">

                                        </div>
                                        <div class="row" style="margin-top: 20px;">
                                            <div class="col-sm-12">
                                                <button class="btn btn-warning pull-right" id="examSubmitId" type="submit">
                                                    Submit Test
                                                </button>
                                                <button class="btn btn-warning pull-right" id="saveAns_1" type="submit" style="display: none;">

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav id="c-menu--push-right" class="c-menu c-menu--push-right" >
                        <span class="c-menu__close" onclick="toggleJump()"><i aria-hidden="true" class="fa fa-times-circle-o fa-3x"></i></span>
                        <div class="edugate-layout-1">
                            <div class="ScrollStyle" >
                                <h4> Question Palette</h4>


                                <?php

                                for($kp = 0; $kp < 15; $kp++){

                                ?>
                                <button type="button" class="btn btn-default btn-circle jump-71-<?php echo $kp+1; ?> jump-btn" data-jump="<?php echo $kp+1;?>"><?php echo $kp+1; ?></button>
                                <?php
                            ?>
                                <?php }  ?>

                            </div>
                            <div class="clearfix"> </div>
                            <hr>
                            <span class="label label-success">Answered</span> <!-- <span class="label label-danger">Not Answered</span> <span class="label label-info">Marked</span> -->  <span class="label label-default" style="background:#fff; border:1px solid #ccc; color:#737373;">Not Answered</span> </div>
                    </nav>
                </div>
                <div class="text-center global-loader" style="display: none;">
                    <img src="http://vprep.in/wp-content/uploads/2018/03/load.gif"
                         style="height: 50px;position: relative;top:45%;"/>
                </div>
            </div>
            <div id="exam-detail-id-2" style="display: none;" >
                <div id="wrapper-content_2">
                    <div id="page-wrapper_2">
                        <div class="main-content">
                            <div class="content">
                                <div class="section section-padding">
                                    <div class="container">

                            <span class="button-checkbox">

                                <!--<button data-color="primary" class="btn btn-warning" style="display:none;" type="button" id="addQuesFlag"><i aria-hidden="true" class="fa fa-flag-o"></i></button>-->

                            <input type="checkbox" checked="" class="hidden">
                                <button id="c-button--push-right-2" class="btn btn-warning c-button" type="submit" onclick="toggleJump2()">Jump</button>
                            </span>

                                        <button class="btn btn-warning pull-right" type="button">
                                            <span  id="strclock_2" style="font-size: 14px;"></span><i aria-hidden="true" class="fa fa-hourglass-start"></i>
                                        </button>
                                        <div id="exam2_question">

                                        </div>
                                        <div class="row" style="margin-top: 20px;">
                                            <div class="col-sm-12">
                                                <button class="btn btn-warning pull-right" id="examSubmitId_2" type="submit">
                                                    Submit Test
                                                </button>
                                                <button class="btn btn-warning pull-right" id="saveAns_2" type="submit" style="display: none;">

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav id="c-menu--push-right-2" class="c-menu c-menu--push-right" >
                        <span class="c-menu__close" onclick="toggleJump2()"><i aria-hidden="true" class="fa fa-times-circle-o fa-3x"></i></span>
                        <div class="edugate-layout-1">
                            <div class="ScrollStyle" >
                                <h4> Question Palette</h4>

                                <?php

                                for($kp = 0; $kp < 10; $kp++){

                                ?>
                                <button type="button" class="btn btn-default btn-circle jump-72-<?php echo $kp+1; ?> jump-btn-2" data-jump-2="<?php echo $kp+1;?>"><?php echo $kp+1; ?></button>
                                <?php
                            ?>
                                <?php }  ?>

                            </div>
                            <div class="clearfix"> </div>
                            <hr>
                            <span class="label label-success">Answered</span> <!-- <span class="label label-danger">Not Answered</span> <span class="label label-info">Marked</span> -->  <span class="label label-default" style="background:#fff; border:1px solid #ccc; color:#737373;">Not Answered</span> </div>
                    </nav>
                </div>
                <div class="text-center global-loader" style="display: none;">
                    <img src="http://vprep.in/wp-content/uploads/2018/03/load.gif"
                         style="height: 50px;position: relative;top:45%;"/>
                </div>
            </div>
            <div id="exam-detail-id-3" style="display: none;">
                <div id="wrapper-content_3">
                    <div id="page-wrapper_3">
                        <div class="main-content">
                            <div class="content">
                                <div class="section section-padding">
                                    <div class="container">

                            <span class="button-checkbox">

                                <!--<button data-color="primary" class="btn btn-warning" style="display:none;" type="button" id="addQuesFlag"><i aria-hidden="true" class="fa fa-flag-o"></i></button>-->

                            <input type="checkbox" checked="" class="hidden">
                                <button id="c-button--push-right-3" class="btn btn-warning c-button" type="submit" onclick="toggleJump3()">Jump</button>
                            </span>

                                        <button class="btn btn-warning pull-right" type="button">
                                            <span id="strclock_3" style="font-size: 14px;"></span><i aria-hidden="true" class="fa fa-hourglass-start"></i>
                                        </button>
                                        <div id="exam3_question">

                                        </div>
                                        <div class="row" style="margin-top: 20px;">
                                            <div class="col-sm-12">
                                                <button class="btn btn-warning pull-right" id="examSubmitId_3" type="submit">
                                                    Submit Test
                                                </button>
                                                <button class="btn btn-warning pull-right" id="saveAns_3" type="submit" style="display: none;">

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav id="c-menu--push-right-3" class="c-menu c-menu--push-right" >
                        <span class="c-menu__close" onclick="toggleJump3()"><i aria-hidden="true" class="fa fa-times-circle-o fa-3x"></i></span>
                        <div class="edugate-layout-1">
                            <div class="ScrollStyle" >
                                <h4> Question Palette</h4>

                                <?php

                                for($kp = 0; $kp < 40; $kp++){

                                ?>
                                <button type="button" class="btn btn-default btn-circle jump-73-<?php echo $kp+1; ?> jump-btn-3" data-jump-3="<?php echo $kp+1;?>"><?php echo $kp+1; ?></button>
                                <?php
                            ?>
                                <?php }  ?>

                            </div>
                            <div class="clearfix"> </div>
                            <hr>
                            <span class="label label-success">Answered</span> <!-- <span class="label label-danger">Not Answered</span> <span class="label label-info">Marked</span> -->  <span class="label label-default" style="background:#fff; border:1px solid #ccc; color:#737373;">Not Answered</span> </div>
                    </nav>
                </div>
                <div class="text-center global-loader" style="display: none;">
                    <img src="http://vprep.in/wp-content/uploads/2018/03/load.gif"
                         style="height: 50px;position: relative;top:45%;"/>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        var hour =0;
        var min =25;

        var sec =0;

        var progress_71 = parseInt($('#progress_71').val());
        var progress_72 = parseInt($('#progress_72').val());
        var progress_73 = parseInt($('#progress_73').val());


        function countdown() {
            if(sec <= 0 && min > 0) {
                sec = 59;
                min -= 1;
            }
            else if(min <= 0 && sec <= 0) {
                min = 0;
                sec = 0;
            }
            else {
                sec -= 1;
            }

            if(min <= 0 && hour > 0) {
                min = 59;
                hour -= 1;
            }

            var pat = /^[0-9]{1}$/;
            sec = (pat.test(sec) == true) ? '0'+sec : sec;
            min = (pat.test(min) == true) ? '0'+min : min;
            hour = (pat.test(hour) == true) ? '0'+hour : hour;



            document.getElementById('strclock').innerHTML = hour+":"+min+":"+sec;
            document.getElementById('strclock_2').innerHTML = hour+":"+min+":"+sec;
            document.getElementById('strclock_3').innerHTML = hour+":"+min+":"+sec;



            setTimeout("countdown()",1000);
            if(sec==0 && min==0 && hour==0)
            {   progress_71 = parseInt($('#progress_71').val());
                progress_72 = parseInt($('#progress_72').val());
               progress_73 = parseInt($('#progress_73').val());
                if(progress_71<2){
                    $("#examSubmitId").click();
                } else if(progress_72 < 2){
                    $("#examSubmitId_2").click();
            }
                else if(progress_73 < 2) {
                    $("#examSubmitId_3").click();
                }

            }

        }

        countdown();




    </script>
    <script>
        $("#addQuesFlag").click(function(){

            if(!($('#addQuesFlag').hasClass('btn btn-default'))){

                $('#addQuesFlag').removeClass('btn btn-warning');
                $('#addQuesFlag').addClass('btn btn-info');

                var quizId = $('#quesId').val().trim();
                var myKeyVals = { 'quesId' : quizId}

                $.ajax({
                    type: 'POST',
                    url: 'http://www.google.com',
                    data: myKeyVals,
                    dataType: 'text',
                    timeout: 30000,
                    success: function(responseMess) {

                    },
                    error: function(request, status, err) {


                    }
                });

            }

        });
    </script>
    <script>

    </script>
    <script>

        //$('#c-menu--push-right').removeClass('is-active');
        //$( "#c-button--push-right" ).prop( "disabled", false);

        function toggleJump()
        {

            if($('#c-menu--push-right').hasClass('is-active')){
                $('#c-menu--push-right').removeClass('is-active');
                $( "#c-button--push-right" ).prop( "disabled", false);
            }else{
                $('#c-menu--push-right').addClass('is-active');
                $( "#c-button--push-right" ).prop("disabled", false);
            }
            //return false;
        }
        function toggleJump2()
        {
            if($('#c-menu--push-right-2').hasClass('is-active')){
                $('#c-menu--push-right-2').removeClass('is-active');
                $( "#c-button--push-right-2" ).prop( "disabled", false);
            }else{
                $('#c-menu--push-right-2').addClass('is-active');
                $( "#c-button--push-right-2" ).prop("disabled", false);
            }
            //return false;
        }
        function toggleJump3()
        {
            if($('#c-menu--push-right-3').hasClass('is-active')){
                $('#c-menu--push-right-3').removeClass('is-active');
                $( "#c-button--push-right-3" ).prop( "disabled", false);
            }else{
                $('#c-menu--push-right-3').addClass('is-active');
                $( "#c-button--push-right-3" ).prop("disabled", false);
            }
            //return false;
        }


    </script>






