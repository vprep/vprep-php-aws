<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script
        src="http://code.jquery.com/jquery-migrate-3.0.1.min.js"
        integrity="sha256-F0O1TmEa4I8N24nY0bya59eP6svWcshqX1uzwaWC4F4="
        crossorigin="anonymous"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-noty/2.4.1/packaged/jquery.noty.packaged.min.js"/>
    <script type='text/javascript' src='http://vprep.in/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" media="all">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .need-collapse{
            cursor: pointer;
        }
        .side-bar-tab{
            font-size: 11px!important;
        }
        .side-bar-panel{
            height:4%!important;
        }
        .side-bar-inside-panel{
            height: 40%!important;
        }
        .content-bar-panel{
            height: 10%;
        }
        .need-pointer{
            cursor:pointer;
        }

    </style>
    <script>
        var initialCount = '<?php echo count($current_week)?>';
        $(document).on('click', '.need-collapse', function(e){
            var $this = $(this);
            if(!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
            }
        });
        $(document).on('click','#newPostId',function (e) {
            $(".post-content").hide();
            $(".new-post-body").show();
        });
        $(document).on('click','#newPostCancelId',function (e) {
            $('.new-post-body').hide();
            $('.post-content').show();
        });
        $(document).on('click','#postQuestionId',function (e) {
            $('#poll-body').hide();
            $('#question-body').show();
        });
        $(document).on('click','#postPollId',function (e) {
            $('#question-body').hide();
            $('#poll-body').show();
        });
        $(document).on('click','#postId',function (e) {
            if($('#postPollId').prop("checked")){
                addPoll();
            }else {
                addPost();
            }
        });
        $(document).on('click','.inside-que',function (e) {
            var post_id = $(this).attr("data-id");
            $.ajax({
                url: "test_json?post_id="+post_id,
                method: "GET",
                contentType: "application/json",
                dataType: "json",
                success: function (data) {
                    var postHtml = '<div  class="row post-content"> ' +
                        '                <div class="panel panel-default" style="border: none; background-color: #d6e9c6;"> ' +
                        '                    <div class="panel-body"> ' +
                        '                        <div class="panel panel-default"> ' +
                        '                            <div class="panel-heading"> ' +
                        '                                <div class="row"> ' +
                        '                                    <div class="col-sm-5"><span style="font-size: 15px;">Question</span> </div> ' +
                        '                                    <div class="col-sm-5"><span style="font-size: 15px;">'+data.post_que.subject+'</span></div> ' +
                        '                                    <div class="col-sm-2"><button type="button" class="btn btn-primary" style="background-color: lightgray;color: black;font-weight: bold;border: grey;">'+data.post_que.view_count+' Views</button></div> ' +
                        '                                </div> ' +
                        '                            </div> ' +
                        '                            <div class="panel-body"> ' +
                        '                                <h3>'+data.post_que.heading+'</h3> ' +
                        '                                <p>'+data.post_que.details+'</p> ' +
                        '                            </div> ' +
                        '                        </div> ' ;
                    $.each(data.post_ans, function(i, obj) {
                        postHtml +='                <div class="panel panel-default"> ' +
                            '                    <div class="panel-heading need-collapse"> ' +
                            '                        <div class="row"> ' +
                            '                            <span class="col-sm-10" style="float: left"><button type="button" class="btn btn-success">S</button>'+' '+data.post_ans[i].name+'\'s answer</span> ' +
                            '                        </div> ' +
                            '                    </div> ' +
                            '                    <div class="panel-body">'+data.post_ans[i].post_response+'</div> ' +
                            '                </div> ';
                    });

                    postHtml+=
                        '                <div class="panel panel-default"> ' +
                        '                    <div class="panel-heading need-collapse"> ' +
                        '                        <div class="row"> ' +
                        '                            <span class="col-sm-10" style="float: left"><button type="button" class="btn btn-success">S</button>'+' '+data.post_user_name.name+'\'s answer</span> ' +
                        '                        </div> ' +
                        '                    </div> ' +
                        '                    <div class="panel-body"> ' +
                        '                        <div class="col-sm-11"> ' +
                        '                            <input id=inputAnsId type="text" style="width: 100%;"> ' +
                        '                        </div> ' +
                        '                        <div class="col-sm-1"> ' +
                        '                            <button id="submitAnsId" type="button" class="btn btn-primary">Submit</button> ' +
                        '                        </div> ' +
                        '                    </div> ' +
                        '                </div> ' +
                        '            </div>' +
                        '</div></div>';
                    postHtml += "<div class=\"row new-post-body\" style=\"display: none;padding:1px;\">\n" +
                        "                <div class=\"panel panel-default\">\n" +
                        "                    <div class=\"panel-heading\">\n" +
                        "                        <div class=\"row\">\n" +
                        "                            <div class=\"col-sm-2\"><span style=\"font-size: 12px;\">Post type</span></div>\n" +
                        "                            <div class=\"col-sm-5\"><span style=\"font-size: 12px;\"><input id='postQuestionId' type=\"radio\" name=\"question\" value=\"male\" checked> Question </br>\n" +
                        "                                [When you need an answer]</span></div>\n" +
                        "                            <div class=\"col-sm-5\"><span style=\"font-size: 12px;\"><input id=\"postPollId\" type=\"radio\" name=\"question\" value=\"male\"> Poll </br>[When you need Votes from others]</span></div>\n" +
                        "                        </div>\n" +
                        "                    </div>\n" +
                        "                    <div id=\"question-body\" class=\"panel-body\"  style=\"margin-top: 1%;\">\n" +
                        "                        <div class=\"row\">\n" +
                        "                            <div class=\"col-sm-2\">\n" +
                        "                                <span>Heading</span>\n" +
                        "                            </div>\n" +
                        "                            <div class=\"col-sm-10\">\n" +
                        "                                <span><input id=queHeading  type=\"text\" style=\"width: 100%;\"></span>\n" +
                        "                            </div>\n" +
                        "                        </div>\n" +
                        "                        <div class=\"row\" style=\"margin-top: 5%;\">\n" +
                        "                            <div class=\"col-sm-2\">\n" +
                        "                                <span>Details</span>\n" +
                        "                            </div>\n" +
                        "                            <div class=\"col-sm-10\">\n" +
                        "                                <span><textarea id=queDetail rows=\"6\" style=\"width: 100%;\"></textarea></span>\n" +
                        "                            </div>\n" +
                        "                        </div>\n" +
                        "                        <div class=\"row\" style=\"margin-top: 5%;\">\n" +
                        "                            <div class=\"col-sm-2\">\n" +
                        "                                <span>Choose Topic</span>\n" +
                        "                            </div>\n" +
                        "                            <div class=\"col-sm-10\">\n" +
                        "                                    <span>\n" +
                        "                                    <select id=subListId style=\"width: 100%;\">\n" +
                        "                                        <option value=\"Programming\">Programming</option>\n" +
                        "                                        <option value=\"Aptitude\">Aptitude</option>\n" +
                        "                                        <option value=\"Verbal\">Verbal</option>\n" +
                        "                                        <option value=\"Data Structures\" selected>Data Structures</option>\n" +
                        "                                    </select>\n" +
                        "                                        </span>\n" +
                        "                            </div>\n" +
                        "                        </div>\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div id=\"poll-body\" class=\"panel-body\"  style=\"margin-top: 1%;display: none;\">\n" +
                        "                        <div class=\"row\">\n" +
                        "                            <div class=\"col-sm-2\">\n" +
                        "                                <span>Heading</span>\n" +
                        "                            </div>\n" +
                        "                            <div class=\"col-sm-10\">\n" +
                        "                                <span><input id =pollHeading type=\"text\" style=\"width: 100%;\"></span>\n" +
                        "                            </div>\n" +
                        "                        </div>\n" +
                        "                        <div class=\"row\" style=\"margin-top: 5%;\">\n" +
                        "                            <div class=\"col-sm-2\">\n" +
                        "                                <span>Details</span>\n" +
                        "                            </div>\n" +
                        "                            <div class=\"col-sm-10\">\n" +
                        "                                <span><textarea  id=pollDetail rows=\"6\" style=\"width: 100%;\"></textarea></span>\n" +
                        "                            </div>\n" +
                        "                        </div>\n" +
                        "                        <div class=\"row\" style=\"margin-top: 5%;\">\n" +
                        "                            <div class=\"row-fluid\">\n" +
                        "                                <div class=\"col-sm-2\">\n" +
                        "                                    <span>Options</span>\n" +
                        "                                </div>\n" +
                        "                                <div class=\"col-sm-10\">\n" +
                        "                                    <div class=\"col-sm-10\">\n" +
                        "                                        <input class=\"option-value\" type=\"text\" style=\"width: 100%;\" name=\"optionValue\" value=\"\" required=\"required\" />\n" +
                        "                                    </div>\n" +
                        "                                    <div class=\"row-fluid col-sm-2\">\n" +
                        "                                        <button type=\"button\" class=\"btn btn-default btn-sm add-option\" style=\"background-color: green;line-height: 8px;\">\n" +
                        "                                            <span style=\"color: white;\">+</span>\n" +
                        "                                        </button>\n" +
                        "                                    </div>\n" +
                        "                                </div>\n" +
                        "                            </div>\n" +
                        "                        </div>\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"panel-footer\" style=\"margin-top: 1%;\">\n" +
                        "                        <div class=\"row\">\n" +
                        "                            <div class=\"col-sm-2\"></div>\n" +
                        "                            <div class=\"col-sm-10\">\n" +
                        "                                <span class=\"col-sm-6\"><button id=\"postId\" type=\"button\" class=\"btn btn-primary\">Submit</button></span>\n" +
                        "                                <span class=\"col-sm-4\"><button type=\"button\" class=\"btn btn-primary\" id=\"newPostCancelId\">Cancel</button></span>\n" +
                        "                            </div>\n" +
                        "                        </div>\n" +
                        "                    </div>\n" +
                        "                </div>\n" +
                        "\n" +
                        "            </div> ";

                    $('#post-content-id').html(postHtml);
                },
                error: function (jqXHR, textStatus) {
                    console.log("Product detail Request failed: ", textStatus);
                }
            });
        })

        $(document).on('click','#submitAnsId',function (e) {
            var response = $('#inputAnsId').val();
            var postId = $('#post_id').val();
            var isStudent = true;

            if(!(response != null && response.length > 0)){
                showMessage("Please enter the response first","error");
            }else{
                var html = '<div class="panel panel-default">' +
                    '                    <div class="panel-heading need-collapse">' +
                    '                        <div class="row">' +
                    '                            <span class="col-sm-10" style="float: left"><?php echo $post_user_name["name"];?>\'s answer</span>' +
                    '                            <span class="col-sm-1" style="float: right;"><button type="button" class="btn btn-success">S</button></span>' +
                    '                        </div>' +
                    '                    </div>' +
                    '                    <div class="panel-body"> ' +response+
                    '                    </div>' +
                    '                </div>';
                $(this).parent().parent().parent().prepend(html);
                $('#inputAnsId').val('');

                /*   $(this).parent().parent().parent().insertBefore(html,this.firstChild);*/
                $.ajax({
                    url: "educational/add_post_reply?post_id=" + postId + "&post_response=" + response + "&is_student=" + isStudent,
                    method: "GET",
                    contentType: "application/json",
                    dataType: "json",
                    success: function (data) {
                        console.log("testing...........");
                    },
                    error: function (jqXHR, textStatus) {
                        console.log("Product detail Request failed: ", textStatus);
                    }
                });
            }
        })

        $(document).on('click', '.add-option', function () {

                $(this).parent().parent().parent().parent().append('<div class="row-fluid"> <div class="col-sm-2"> ' +
                    '                                <span></span> ' +
                    '                            </div> ' +
                    '                            <div class="col-sm-10"> ' +
                    '                                <div class="col-sm-10"> ' +
                    '                                    <input class="option-value" type="text" style="width: 100%;" name="optionValue" value="" required="required" /> ' +
                    '                                </div> ' +
                    '                                <div class="row-fluid col-sm-2"> ' +
                    '                                    <button type="button" class="btn btn-default btn-sm add-option" style="background-color: green;line-height: 8px;"> ' +
                    '                                        <span style="color: white;">+</span> ' +
                    '                                    </button> ' +
                    '                                    <button type="button" class="btn btn-default btn-sm remove-option" style="background-color: red;line-height: 8px;"> ' +
                    '                                        <span style="color: white;">-</span> ' +
                    '                                    </button> ' +
                    '                                </div> ' +
                    '                            </div></div>');
            }


        );

        $(document).on('click', '.remove-option', function () {
            $(this).parent().parent().parent().remove();
        });

        $(document).on('click', '#voteInputId', function () {
            var vote_id = $('.poll-select:checked').val();
            var post_id = $('#post_id').val();
            var request = $.ajax({
                url: "educational/add_vote?post_id=" + post_id + "&vote_id=" + vote_id,
                method: "GET",
                contentType: "application/json",
                dataType: "json"
            });

            request.done(function (result) {
                showMessage("Voted successfully","success");
            });
            request.always(function () {
                document.location.reload();
            });

        });

        function addPost() {
            var heading = $('#queHeading').val();
            var detail = $('#queDetail').val();
            var subject = $('#subListId').val();
            var postType = 'Question';
            var isStudent = true;
            if (!(heading != null && heading.length > 0)) {
                showMessage("Please enter the heading","error");
            } else
            if(!(detail != null && detail.length > 0)){
                showMessage("Please enter the detail","error");
            } else
            if(!(subject != null && subject.length >0 )){
                showMessage("Please chose the subject","error");
            } else
            if(heading != null && heading.length > 0 && detail != null && detail.length > 0 && subject != null && subject.length >0 ) {
                $.ajax({
                    url: "educational/add_new_post?post_type" + postType + "&subject=" + subject + "&heading=" + heading + "&detail=" + detail + "&is_student=true",
                    method: "GET",
                    contentType: "application/json",
                    dataType: "json",
                    success: function (data) {

                    }
                }).then(
                    showMessage("Post added successfully","success")
                ).then(document.location.reload());
            }
        }

        function addPoll() {
            var time = new Date().getTime();
            var heading = $('#pollHeading').val();
            var detail = $('#pollDetail').val();
            var options = $('.option-value').val();
            var postType = 'Poll';
            if (!(heading != null && heading.length > 0)) {
                showMessage("Please enter the heading","error");
            } else
            if(!(detail != null && detail.length > 0)){
                showMessage("Please enter the detail","error");
            } else
            if(!(options != null && options.length >0 )){
                showMessage("Please add the options","error");
            } else {

                var request = $.ajax({
                    url: "educational/add_new_post?post_type=" + postType + "&subject=Poll" + "&heading=" + heading + "&detail=" + detail + "&is_student=true",
                    method: "GET",
                    contentType: "application/json",
                    dataType: "json"
                });

                request.done(function (result) {

                });
                request.always(function () {
                    $('.option-value').each(function () {
                        var request = $.ajax({
                            url: "educational/add_new_poll?options=" +$(this).val()+"&post_type" + postType + "&subject=Poll" + "&heading=" + heading + "&detail=" + detail + "&is_student=true" ,
                            method: "GET",
                            contentType: "application/json",
                            dataType: "json"
                        });
                        request.done(function (res) {
                        });

                    }).then(
                        document.location.reload()
                    );

                });
                request.fail(function (jqXHR, textStatus) {
                    alert("fail" + textStatus);
                });

                /*$('.option-value').each(function () {
                        $.ajax({
                            url: "http://test.vprep.in/educational/add_new_poll?options=" +$(this).val()+"&post_type" + postType + "&subject=NA" + "&heading=" + heading + "&detail=" + detail + "&is_student=true" ,
                            method: "GET",
                            contentType: "application/json",
                            dataType: "json",
                            done: function (data) {
                                alert("completed");
                            }
                        }).then(
                            showMessage("Post added successfully","success")
                        );
                    }).then(document.location.reload());*/

            }
        }


        function showMessage(msg, type) {
            noty({
                text: msg,
                type: type,
                dismissQueue: true,
                layout: 'topCenter',
                theme: 'defaultTheme',
                timeout: 2000
            });
        }

        window.setInterval(function(){
            var addHtml1 = '';
            var startDate_1 = parseInt((new Date().getTime() - (7 * 24 * 60 * 60 * 1000))/1000);
            var endDate_1 = parseInt(new Date().getTime()/1000);
            $.ajax({
                url: "weekly_posts?start_date="+startDate_1+ "&end_date="+endDate_1+"&topic=&sub_topic=&search_input=",
                method: "GET",
                //       contentType: "application/json",
                //       dataType: "json",
                success: function (data) {
                    var res = JSON.parse(data);


                    if(res.length >initialCount){
                        for(var i=(initialCount); i<res.length;i++){
                            /* addHtml += '<div class="panel panel-default"> ' +
                                 '                            <div class="panel-heading"> ' +
                                 '                                <div class="row"> ' +
                                 '                                    <div class="col-sm-11"><div class="col-sm-10"> ' +
                                 '                                        <span style="float: left;">'+formatDate(res[i].created_at)+'testing</span> ' +
                                 '                                    </div> ' +
                                 '                                        <div class="col-sm-1"> ' +
                                 '                                            <button type="button" class="btn btn-danger" style="font-size: 8px;">P</button> ' +
                                 '                                        </div> ' +
                                 '                                    </div> ' +
                                 '                                </div> ' +
                                 '                            </div> ' +
                                 '                            <div class="panel-body inside-que" data-id="'+res[i].id+'"> ' +
                                 '                                <h5 style="font-weight: bold;">'+res[i].heading+'</h5> ' +
                                 '                                <p>'+res[i].details+'</p> ' +
                                 '                            </div> ' +
                                 '                        </div>' */
                            addHtml1 += "<div class=\"panel panel-default\" style=\"margin-bottom: 5px;\">\n" +
                                "                                            <div class=\"panel-body\" style=\"padding: 0px;\">\n" +
                                "                                                <div class=\"row-fluid\" >\n" +
                                "                                                    <div class=\"panel-body inside-que row-fluid\" data-id=\""+res[i].id+"\" style=\"padding: 0px!important;max-height: 43px;\">\n" +
                                "                                                        <div class=\"col-sm-10 row-fluid\" style=\"padding-left: 2px;\">\n" +
                                "                                                            <div class=\"row\" style=\"font-weight: bold;margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;\">"+res[i].heading+"</div>\n" +
                                "                                                            <div class=\"row\" style=\"margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;\">"+res[i].details+"</div>\n" +
                                "                                                        </div>\n" +
                                "                                                        <div class=\"col-sm-2 row-fluid\" >\n" +
                                "                                                            <div class=\"row\">\n" +
                                "                                                                <span class=\"side-bar-tab\" style=\"float: right;\">"+formatDate(res[i].created_at)+"</span>\n" +
                                "                                                            </div>\n" +
                                "                                                            <div class=\"row\" style=\"margin-top: 27px;margin-left: 7px;\">\n" ;
                            if(res[i].is_student){
                                addHtml1 += "  <button type=\"button\" class=\"btn btn-success\" style=\"font-size: 9px;padding: 4px 8px;margin-top: -26px;font-weight: bold;\">S</button>\n" ;
                            } else {
                                addHtml1 +=  " <button type=\"button\" class=\"btn btn-danger\" style=\"font-size: 9px;padding: 4px 8px;font-weight: bold;\">P</button>\n" ;
                            }
                            addHtml1 +=  "                                                            </div>\n" +
                                "                                                        </div>\n" +
                                "                                                    </div>\n" +
                                "                                                </div>\n" +
                                "                                            </div>\n" +
                                "                                        </div>";
                        }
                        initialCount = res.length;
                        $('#current_week_div').prepend(addHtml1);

                    }
                },
                error: function (jqXHR, textStatus) {
                    console.log("Product detail Request failed: ", textStatus);
                }
            });
        }, 2000);

        function formatWeek(start, end) {
            var monthNames = [
                "Jan", "Feb", "Mar",
                "Apr", "May", "Jun", "Jul",
                "Aug", "Sep", "Oct",
                "Nov", "Dec"
            ];

            var startDay = new Date(start).getDate();

            var startMonthIndex = new Date(start).getMonth();
            var startYear = new Date(start).getFullYear();

            var endDay = new Date(end).getDate();
            var endMonthIndex = new Date(end).getMonth();
            var endYear = new Date(end).getFullYear();
            return document.write('Week('+startDay + ' ' + monthNames[startMonthIndex] + ' - ' + endDay + ' '+monthNames[endMonthIndex]+')');
        }

        function formatDate(start) {

            var inputDate = start*1000;
            var day = new Date(inputDate).getDate();

            var month = new Date(inputDate).getMonth();
            var year = new Date(inputDate).getFullYear();


            return year+'/'+(month+1)+'/'+day;
        }




        function weeklyPostsQuery(type, qry) {
            var types = ["search","topic","sub_topic"]
            //  var currentDate = 1526199604546 - (7 * 24 * 60 * 60 * 1000);
            var startDate_1 = parseInt((new Date().getTime() - (7 * 24 * 60 * 60 * 1000))/1000);
            var endDate_1 = parseInt(new Date().getTime()/1000);
            var startDate_2 =startDate_1 -(7*24*60*60);
            var endDate_2 = startDate_1;
            var startDate_3 = startDate_2 -(7*24*60*60);
            var endDate_3 = startDate_2;
            var startDate_4 = startDate_3 -(7*24*60*60);
            var endDate_4 = startDate_3;
            var startDate_5 = startDate_4 -(7*24*60*60);
            var endDate_5 = startDate_4;
            var url_1;
            var url_2;
            var url_3;
            var url_4;
            var url_5;
            //http://localhost/weekly_posts?start_date=1500100108&end_date=1526120198&topic=Data%20Structures&sub_topic=&search_input=%Hel%
            if(qry == 'All'){
                url_1 = "weekly_posts?start_date="+startDate_1+ "&end_date="+endDate_1+"&topic=&sub_topic=&search_input=";
                url_2 = "weekly_posts?start_date="+startDate_2+ "&end_date="+endDate_2+"&topic=&sub_topic=&search_input=";
                url_3 = "weekly_posts?start_date="+startDate_3+ "&end_date="+endDate_3+"&topic=&sub_topic=&search_input=";
                url_4 = "weekly_posts?start_date="+startDate_4+ "&end_date="+endDate_4+"&topic=&sub_topic=&search_input=";
                url_5 = "weekly_posts?start_date="+startDate_5+ "&end_date="+endDate_5+"&topic=&sub_topic=&search_input=";
            } else
            if(types[type] == 'search'){
                url_1 = "weekly_posts?start_date="+startDate_1+ "&end_date="+endDate_1+"&topic=&sub_topic=&search_input=%"+qry+"%";
                url_2 = "weekly_posts?start_date="+startDate_2+ "&end_date="+endDate_2+"&topic=&sub_topic=&search_input=%"+qry+"%";
                url_3 = "weekly_posts?start_date="+startDate_3+ "&end_date="+endDate_3+"&topic=&sub_topic=&search_input=%"+qry+"%";
                url_4 = "weekly_posts?start_date="+startDate_4+ "&end_date="+endDate_4+"&topic=&sub_topic=&search_input=%"+qry+"%";
                url_5 = "weekly_posts?start_date="+startDate_5+ "&end_date="+endDate_5+"&topic=&sub_topic=&search_input=%"+qry+"%";
            } else if(types[type] == 'sub_topic') {
                url_1 = "weekly_posts?start_date="+startDate_1+ "&end_date="+endDate_1+"&topic=&sub_topic="+qry+"&search_input=";
                url_2 = "weekly_posts?start_date="+startDate_2+ "&end_date="+endDate_2+"&topic=&sub_topic="+qry+"&search_input=";
                url_3 = "weekly_posts?start_date="+startDate_3+ "&end_date="+endDate_3+"&topic=&sub_topic="+qry+"&search_input=";
                url_4 = "weekly_posts?start_date="+startDate_4+ "&end_date="+endDate_4+"&topic=&sub_topic="+qry+"&search_input=";
                url_5 = "weekly_posts?start_date="+startDate_5+ "&end_date="+endDate_5+"&topic=&sub_topic="+qry+"&search_input=";
            } else {
                url_1 = "weekly_posts?start_date="+startDate_1+ "&end_date="+endDate_1+"&topic="+qry+"&sub_topic=&search_input=";
                url_2 = "weekly_posts?start_date="+startDate_2+ "&end_date="+endDate_2+"&topic="+qry+"&sub_topic=&search_input=";
                url_3 = "weekly_posts?start_date="+startDate_3+ "&end_date="+endDate_3+"&topic="+qry+"&sub_topic=&search_input=";
                url_4 = "weekly_posts?start_date="+startDate_4+ "&end_date="+endDate_4+"&topic="+qry+"&sub_topic=&search_input=";
                url_5 = "weekly_posts?start_date="+startDate_5+ "&end_date="+endDate_5+"&topic="+qry+"&sub_topic=&search_input=";
            }

            $.ajax({
                url: url_1,
                method: "GET",
                success: function(data) {
                    $("#current_week_div").html(getPostTemplate(JSON.parse(data)));

                }});

            $.ajax({
                url: url_2,
                method: "GET",
                success: function(data) {
                    $("#prev_week_div_2").html(getPostTemplate(JSON.parse(data)));

                }});

            $.ajax({
                url: url_3,
                method: "GET",
                success: function(data) {
                    $("#prev_week_div_3").html(getPostTemplate(JSON.parse(data)));

                }});

            $.ajax({
                url: url_4,
                method: "GET",
                success: function(data) {
                    $("#prev_week_div_4").html(getPostTemplate(JSON.parse(data)));

                }});

            $.ajax({
                url: url_5,
                method: "GET",
                success: function(data) {
                    console.log("success response 5");
                    $("#prev_week_div_5").html(getPostTemplate(JSON.parse(data)));

                }});

        }

        $(document).keypress(function(e) {
            var searchInput = $("#searchPostId").val();
            if(e.which == 13 && searchInput != null && searchInput.length > 0 ) {
                weeklyPostsQuery(0,searchInput)
            }
        });

        function getPostTemplate(res) {
            var addHtml1 = "";

            for ( var i in res) {


                addHtml1 += "<div class=\"panel panel-default\" style=\"margin-bottom: 5px;\">\n" +
                    "                                            <div class=\"panel-body\" style=\"padding: 0px;\">\n" +
                    "                                                <div class=\"row-fluid\" >\n" +
                    "                                                    <div class=\"panel-body inside-que row-fluid\" data-id=\""+res[i].id+"\" style=\"padding: 0px!important;max-height: 43px;\">\n" +
                    "                                                        <div class=\"col-sm-10 row-fluid\" style=\"padding-left: 2px;\">\n" +
                    "                                                            <div class=\"row\" style=\"font-weight: bold;margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;\">"+res[i].heading+"</div>\n" +
                    "                                                            <div class=\"row\" style=\"margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;\">"+res[i].details+"</div>\n" +
                    "                                                        </div>\n" +
                    "                                                        <div class=\"col-sm-2 row-fluid\" >\n" +
                    "                                                            <div class=\"row date-feed\">\n" +
                    "                                                                <span class=\"side-bar-tab date-inside-feed\" style=\"float: right;\">"+formatDate(res[i].created_at)+"</span>\n" +
                    "                                                            </div>\n" +
                    "                                                            <div class=\"row mob-inside-feed\" style=\"margin-top: 27px;margin-left: 7px;\">\n" ;
                if(res[i].is_student){
                    addHtml1 += "  <button type=\"button\" class=\"btn btn-success mob-feed\" style=\"font-size: 9px;padding: 4px 8px;margin-top: -26px;font-weight: bold;\">S</button>\n" ;
                } else {
                    addHtml1 +=  " <button type=\"button\" class=\"btn btn-danger mob-feed\" style=\"font-size: 9px;padding: 4px 8px;font-weight: bold;\">P</button>\n" ;
                }
                addHtml1 +=  "                                                            </div>\n" +
                    "                                                        </div>\n" +
                    "                                                    </div>\n" +
                    "                                                </div>\n" +
                    "                                            </div>\n" +
                    "                                        </div>";

            }
            return addHtml1;
        }

        $(document).on('click', '.widgetFilter .subject-filter-type-li', function () {
            var self = $(this);
            $(self).parents('.widgetFilter').find('.subject-filter-type-label').html($(self).text());
            weeklyPostsQuery(1,$(self).text());
        });

        $(document).on('click', '.widgetFilter .type-filter-type-li', function () {
            var self = $(this);
            $(self).parents('.widgetFilter').find('.type-filter-type-label').html($(self).text());
            weeklyPostsQuery(2,$(self).text());
        });

    </script>
    <style>
        @media (max-width: 768px) {
          .post-mob {
              margin-top: 59px!important;
              width: 100%;
          }

            .mob-feed {
                margin-top: -37%!important;
                margin-left: 92%!important;
            }

            .date-feed {
                margin-top: -15%!important;
            }

            .date-inside-feed {
                margin-bottom: 12%!important;
            }

            .mob-inside-feed {
                margin-top: 4%!important;
                margin-right: 1%!important;
            }

            .mob-row-feed {
                margin-top: 0px!important;
            }

        }




    </style>


</head>
<body>
<input id=post_id type="hidden" value="<?php echo $post_detail['id'] ?>">
<div class="row-fluid">
    <div class="row-fluid" style="padding-top: 1%;">
        <div class="col-sm-3" >
            <div class="row">
                <div class="col-sm-3 other post-mob" style="margin: 1px;">
                    <button id="newPostId" type="button" style="padding:5px 0px;width: 100%;" class="btn btn-primary">New Post</button>
                </div>
                <div class="col-sm-8 other2">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12" style="margin-top: 1%;width: 100%;">
                            <input id="searchPostId" style="border-radius: 7px;height: 1%;" type="text" class="form-control input-sm" placeholder="Search Post" />
                        </div>
                    </div>
                </div>
            </div>
            <div id="weeklyPost" style="margin: 4%;">
                <div class="row" style="margin-top: 1%;">
                    <div class="panel panel-default" id="filterPanel" >
                        <div class="panel-heading need-collapse">
                            <h3 class="panel-title">Filters</h3>
                        </div>
                        <div class="panel-body" style="padding-bottom: 5px;">
                            <div class="row">
                                <div id="collapseExample" aria-expanded="true">
                                    <div class="form-group col-sm-12">
                                        <div class="form-group col-sm-6">
                                            <label for="subjectFilterLabel">Subject</label>
                                            <div class="dropdown widgetFilter">
                                                <button class="btn btn-default btn-sm dropdown-toggle subject-filter-type-btn" type="button" data-toggle="dropdown" aria-haspopup="true" style="width:100%;">
                                                <span class="subject-filter-type-label">All</span>
                                                <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" style="width: 100%;">
                                                    <li class="subject-filter-type-li"><a href="javascript:void(0);">All</a></li>
                                                    <li class="subject-filter-type-li"><a href="javascript:void(0);">Data Structures</a></li>
                                                    <li class="subject-filter-type-li"><a href="javascript:void(0);">Verbal</a></li>
                                                    <li class="subject-filter-type-li"><a href="javascript:void(0);">Aptitude</a></li>
                                                    <li class="subject-filter-type-li"><a href="javascript:void(0);">Programming</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="subjectFilterLabel">Type</label>
                                            <div class="dropdown widgetFilter">
                                                <button class="btn btn-default btn-sm dropdown-toggle type-filter-type-btn" type="button" data-toggle="dropdown" aria-haspopup="true" style="width:100%;" >
                                                    <span class="type-filter-type-label" >All</span>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" style="width: 100%;">
                                                    <li class="type-filter-type-li"><a href="javascript:void(0);">All</a></li>
                                                    <li class="type-filter-type-li"><a href="javascript:void(0);">Post</a></li>
                                                    <li class="type-filter-type-li"><a href="javascript:void(0);">Poll</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"  style="margin-top: 1%;">
                    <div class="panel panel-success">
                        <input type="hidden" id="prev_week_2_start_id" value="<?php echo $prev_week_2_start/1000 ?>">
                        <input type="hidden" id="prev_weel_2_end_id" value="<?php echo $prev_week_2_end/1000 ?>">
                        <div class="panel-heading need-collapse side-bar-panel" style="padding: 2px 7px;">
                            <h3 class="panel-title side-bar-tab">This Week</h3>
                        </div>
                        <div id="current_week_div" class="panel-body need-pointer row-fluid" style="height:280px;overflow:scroll;padding: 1px!important;">
                            <?php if (!empty($current_week)): ?>
                                <?php foreach ($current_week as $val): ?>
                                    <div class="panel panel-default" style="margin-bottom: 5px;">
                                        <div class="panel-body" style="padding: 0px;">
                                            <div class="row-fluid" >
                                                <div class="panel-body inside-que row-fluid" data-id="<?php echo $val['id'];?>" style="padding: 0px!important;max-height: 43px;">
                                                    <div class="col-sm-10 row-fluid" style="padding-left: 2px;">
                                                        <div class="row" style="font-weight: bold;margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?php echo $val['heading'];?></div>
                                                        <div class="row" style="margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?php echo $val['details'];?></div>
                                                    </div>
                                                    <div class="col-sm-2 row-fluid" >
                                                        <div class="row date-feed">
                                                            <span class="side-bar-tab date-inside-feed" style="float: right;"><?php echo date('Y/m/d', $val['created_at']); ?></span>
                                                        </div>
                                                        <div class="row mob-inside-feed" style="margin-top: 27px;margin-left: 7px;">
                                                            <?php if ($val['is_student']): ?>
                                                                <button type="button" class="btn btn-success mob-feed" style="font-size: 9px;padding: 4px 8px;margin-top: -26px;font-weight: bold;">S</button>
                                                            <?php endif; ?>
                                                            <?php if (!$val['is_student']): ?>
                                                                <button type="button" class="btn btn-danger mob-feed" style="font-size: 9px;padding: 4px 8px;font-weight: bold;">P</button>
                                                            <?php endif; ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if (!empty($prev_week_2)): ?>
                    <div id="prev_week_2_div" class="row"  style="margin-top: 1%;">
                        <input type="hidden" id="prev_week_2_start_id" value="<?php echo $prev_week_2_start/1000 ?>">
                        <input type="hidden" id="prev_weel_2_end_id" value="<?php echo $prev_week_2_end/1000 ?>">
                        <div class="panel panel-success">
                            <div class="panel-heading need-collapse side-bar-panel" style="padding: 2px 7px;">
                                <h3 class="panel-title side-bar-tab"><script>formatWeek(<?php echo $prev_week_2_start.','.$prev_week_2_end ?>);</script></h3>
                            </div>
                            <div id="prev_week_div_2" class="panel-body need-pointer row-fluid" style="height:280px;overflow:scroll;padding: 1px!important;">
                                <?php if (!empty($prev_week_2)): ?>
                                    <?php foreach ($prev_week_2 as $val): ?>
                                        <div class="panel panel-default" style="margin-bottom: 5px;">
                                            <div class="panel-body" style="padding: 0px;">
                                                <div class="row-fluid" >
                                                    <div class="panel-body inside-que row-fluid" data-id="<?php echo $val['id'];?>" style="padding: 0px!important;max-height: 43px;">
                                                        <div class="col-sm-10 row-fluid" style="padding-left: 2px;">
                                                            <div class="row" style="font-weight: bold;margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?php echo $val['heading'];?></div>
                                                            <div class="row" style="margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?php echo $val['details'];?></div>
                                                        </div>
                                                        <div class="col-sm-2 row-fluid" >
                                                            <div class="row date-feed">
                                                                <span class="side-bar-tab date-inside-feed" style="float: right;"><?php echo date('Y/m/d', $val['created_at']); ?></span>
                                                            </div>
                                                            <div class="row mob-inside-feed" style="margin-top: 27px;margin-left: 7px;">
                                                                <?php if ($val['is_student']): ?>
                                                                    <button type="button" class="btn btn-success mob-feed" style="font-size: 9px;padding: 4px 8px;margin-top: -26px;font-weight: bold;">S</button>
                                                                <?php endif; ?>
                                                                <?php if (!$val['is_student']): ?>
                                                                    <button type="button" class="btn btn-danger mob-feed" style="font-size: 9px;padding: 4px 8px;font-weight: bold;">P</button>
                                                                <?php endif; ?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($prev_week_3)): ?>
                    <div id="prev_week_3_div" class="row"  style="margin-top: 1%;">
                        <div class="panel panel-success">
                            <input type="hidden" id="prev_week_3_start_id" value="<?php echo $prev_week_3_start/1000 ?>">
                            <input type="hidden" id="prev_weel_3_end_id" value="<?php echo $prev_week_3_end/1000 ?>">
                            <div class="panel-heading need-collapse side-bar-panel" style="padding: 2px 7px;">
                                <h3 class="panel-title side-bar-tab"><script>formatWeek(<?php echo $prev_week_3_start.','.$prev_week_3_end ?>);</script></h3>
                            </div>
                            <div id="prev_week_div_3" class="panel-body need-pointer row-fluid" style="height:280px;overflow:scroll;padding: 1px!important;">
                                <?php if (!empty($prev_week_3)): ?>
                                    <?php foreach ($prev_week_3 as $val): ?>
                                        <div class="panel panel-default" style="margin-bottom: 5px;">
                                            <div class="panel-body" style="padding: 0px;">
                                                <div class="row-fluid" >
                                                    <div class="panel-body inside-que row-fluid" data-id="<?php echo $val['id'];?>" style="padding: 0px!important;max-height: 43px;">
                                                        <div class="col-sm-10 row-fluid" style="padding-left: 2px;">
                                                            <div class="row" style="font-weight: bold;margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?php echo $val['heading'];?></div>
                                                            <div class="row" style="margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?php echo $val['details'];?></div>
                                                        </div>
                                                        <div class="col-sm-2 row-fluid" >
                                                            <div class="row date-feed">
                                                                <span class="side-bar-tab date-inside-feed" style="float: right;"><?php echo date('Y/m/d', $val['created_at']); ?></span>
                                                            </div>
                                                            <div class="row mob-inside-feed" style="margin-top: 27px;margin-left: 7px;">
                                                                <?php if ($val['is_student']): ?>
                                                                    <button type="button" class="btn btn-success mob-feed" style="font-size: 9px;padding: 4px 8px;margin-top: -26px;font-weight: bold;">S</button>
                                                                <?php endif; ?>
                                                                <?php if (!$val['is_student']): ?>
                                                                    <button type="button" class="btn btn-danger mob-feed" style="font-size: 9px;padding: 4px 8px;font-weight: bold;">P</button>
                                                                <?php endif; ?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($prev_week_4)): ?>
                    <div id="prev_week_4_div" class="row"  style="margin-top: 1%;">
                        <div class="panel panel-success">div
                            <input type="hidden" id="prev_week_4_start_id" value="<?php echo $prev_week_4_start/1000 ?>">
                            <input type="hidden" id="prev_weel_4_end_id" value="<?php echo $prev_week_4_end/1000 ?>">
                            <div class="panel-heading need-collapse side-bar-panel" style="padding: 2px 7px;">
                                <h3 class="panel-title side-bar-tab"><script>formatWeek(<?php echo $prev_week_4_start.','.$prev_week_4_end ?>);</script></h3>
                            </div>
                            <div id="prev_week_div_4" class="panel-body need-pointer row-fluid" style="height:280px;overflow:scroll;padding: 1px!important;">
                                <?php if (!empty($prev_week_4)): ?>
                                    <?php foreach ($prev_week_4 as $val): ?>
                                        <div class="panel panel-default" style="margin-bottom: 5px;">
                                            <div class="panel-body" style="padding: 0px;">
                                                <div class="row-fluid" >
                                                    <div class="panel-body inside-que row-fluid" data-id="<?php echo $val['id'];?>" style="padding: 0px!important;max-height: 43px;">
                                                        <div class="col-sm-10 row-fluid" style="padding-left: 2px;">
                                                            <div class="row" style="font-weight: bold;margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?php echo $val['heading'];?></div>
                                                            <div class="row" style="margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?php echo $val['details'];?></div>
                                                        </div>
                                                        <div class="col-sm-2 row-fluid" >
                                                            <div class="row date-feed">
                                                                <span class="side-bar-tab date-inside-feed" style="float: right;"><?php echo date('Y/m/d', $val['created_at']); ?></span>
                                                            </div>
                                                            <div class="row" style="margin-top: 27px;margin-left: 7px;">
                                                                <?php if ($val['is_student']): ?>
                                                                    <button type="button" class="btn btn-success mob-feed" style="font-size: 9px;padding: 4px 8px;margin-top: -26px;font-weight: bold;">S</button>
                                                                <?php endif; ?>
                                                                <?php if (!$val['is_student']): ?>
                                                                    <button type="button" class="btn btn-danger mob-feed" style="font-size: 9px;padding: 4px 8px;font-weight: bold;">P</button>
                                                                <?php endif; ?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($prev_week_5)): ?>
                    <div id="prev_week_5_div" class="row"  style="margin-top: 1%;">
                        <div class="panel panel-success">
                            <input type="hidden" id="prev_week_5_start_id" value="<?php echo $prev_week_5_start/1000 ?>">
                            <input type="hidden" id="prev_weel_5_end_id" value="<?php echo $prev_week_5_end/1000 ?>">
                            <div class="panel-heading need-collapse side-bar-panel" style="padding: 2px 7px;">
                                <h3 class="panel-title side-bar-tab"><script>formatWeek(<?php echo $prev_week_5_start.','.$prev_week_5_end ?>);</script></h3>
                            </div>
                            <div id="prev_week_div_5" class="panel-body need-pointer row-fluid" style="height:280px;overflow:scroll;padding: 1px!important;">
                                <?php if (!empty($prev_week_5)): ?>
                                    <?php foreach ($prev_week_5 as $val): ?>
                                        <div class="panel panel-default" style="margin-bottom: 5px;">
                                            <div class="panel-body" style="padding: 0px;">
                                                <div class="row-fluid" >
                                                    <div class="panel-body inside-que row-fluid" data-id="<?php echo $val['id'];?>" style="padding: 0px!important;max-height: 43px;">
                                                        <div class="col-sm-10 row-fluid" style="padding-left: 2px;">
                                                            <div class="row" style="font-weight: bold;margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?php echo $val['heading'];?></div>
                                                            <div class="row" style="margin: 0px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?php echo $val['details'];?></div>
                                                        </div>
                                                        <div class="col-sm-2 row-fluid" >
                                                            <div class="row date-feed">
                                                                <span class="side-bar-tab date-inside-feed" style="float: right;"><?php echo date('Y/m/d', $val['created_at']); ?></span>
                                                            </div>
                                                            <div class="row mob-inside-feed" style="margin-top: 27px;margin-left: 7px;">
                                                                <?php if ($val['is_student']): ?>
                                                                    <button type="button" class="btn btn-success mob-feed" style="font-size: 9px;padding: 4px 8px;margin-top: -26px;font-weight: bold;">S</button>
                                                                <?php endif; ?>
                                                                <?php if (!$val['is_student']): ?>
                                                                    <button type="button" class="btn btn-danger mob-feed" style="font-size: 9px;padding: 4px 8px;font-weight: bold;">P</button>
                                                                <?php endif; ?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-9" id="post-content-id"  style="background-color: #d6e9c6;">
            <div  class="row post-content">
                <div class="panel panel-default" style="border: none; background-color: #d6e9c6;">
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-sm-5"><span style="font-size: 15px;">Question</span> </div>
                                    <div class="col-sm-5"><span style="font-size: 15px;"><?php echo $post_detail['subject'] ?></span></div>
                                    <div class="col-sm-2"><button type="button" class="btn btn-primary" style="background-color: lightgray;color: black;font-weight: bold;border: grey;"><?php echo $post_detail['view_count'].' Views'; ?></button></div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <h3><?php echo $post_detail['heading'] ?></h3>
                                <p><?php echo $post_detail['details'] ?></p>
                            </div>
                        </div>
                        <?php if ($post_detail['type'] == 'Post'): ?>
                            <?php if (!empty($post_reply)): ?>
                                <?php foreach ($post_reply as $val): ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading need-collapse">
                                            <div class="row">
                                                <span class="col-sm-10" style="float: left"><button type="button" class="btn btn-success">S</button><?php echo $val['name'];?>'s answer</span>
                                            </div>
                                        </div>
                                        <div class="panel-body"><?php echo $val['post_response']; ?></div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <!-- poll-->
                        <?php if ($post_detail['type'] == 'Poll'): ?>
                            <?php foreach ($options as $optVal): ?>
                                <span class="pull-left"><input class="poll-select" type="radio" name="pollQue" value=<?php echo $optVal['id'];?> ></span><strong><?php echo $optVal['option'].' ('.$optVal['percent'].'%)' ;?></strong>
                                <div class="progress progress-success active">
                                    <div class="bar" style="width:<?php echo $optVal['percent']; ?>%"></div>
                                </div>
                            <?php endforeach; ?>

                            <p>
                                <button type="button" id=voteInputId class="btn btn-large btn-success">Vote</button>
                            </p>
                        <?php endif; ?>
                        <!--poll end -->
                        <?php if ($post_detail['type'] == 'Post'): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading need-collapse">
                                    <div class="row">
                                        <span class="col-sm-10" style="float: left"><?php echo $post_user_name['name'];?>'s answer</span>
                                        <span class="col-sm-1" style="float: right;"><button type="button" class="btn btn-success">S</button></span>

                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-11">
                                        <input id=inputAnsId type="text" style="width: 100%;">
                                    </div>
                                    <div class="col-sm-1">
                                        <button id="submitAnsId" type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="row new-post-body" style="display: none;padding: 1px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-2"><span style="font-size: 12px;">Post type</span></div>
                            <div class="col-sm-5"><span style="font-size: 12px;"><input id='postQuestionId' type="radio" name="question" value="male" checked> Question </br>
                                    [When you need an answer]</span></div>
                            <div class="col-sm-5"><span style="font-size: 12px;"><input id="postPollId" type="radio" name="question" value="male"> Poll </br>[When you need Votes from others]</span></div>
                        </div>
                    </div>
                    <div id="question-body" class="panel-body"  style="margin-top: 1%;">
                        <div class="row">
                            <div class="col-sm-2">
                                <span>Heading</span>
                            </div>
                            <div class="col-sm-10">
                                <span><input id=queHeading  type="text" style="width: 100%;"></span>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5%;">
                            <div class="col-sm-2">
                                <span>Details</span>
                            </div>
                            <div class="col-sm-10">
                                <span><textarea id=queDetail rows="6" style="width: 100%;"></textarea></span>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5%;">
                            <div class="col-sm-2">
                                <span>Choose Topic</span>
                            </div>
                            <div class="col-sm-10">
                                    <span>
                                    <select id=subListId style="width: 100%;">
                                        <option value="Programming">Programming</option>
                                        <option value="Aptitude">Aptitude</option>
                                        <option value="Verbal">Verbal</option>
                                        <option value="Data Structures" selected>Data Structures</option>
                                    </select>
                                        </span>
                            </div>
                        </div>

                    </div>
                    <div id="poll-body" class="panel-body"  style="margin-top: 1%;display: none;">
                        <div class="row">
                            <div class="col-sm-2">
                                <span>Heading</span>
                            </div>
                            <div class="col-sm-10">
                                <span><input id =pollHeading type="text" style="width: 100%;"></span>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5%;">
                            <div class="col-sm-2">
                                <span>Details</span>
                            </div>
                            <div class="col-sm-10">
                                <span><textarea  id=pollDetail rows="6" style="width: 100%;"></textarea></span>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5%;">
                            <div class="row-fluid">
                                <div class="col-sm-2">
                                    <span>Options</span>
                                </div>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <input class="option-value" type="text" style="width: 100%;" name="optionValue" value="" required="required" />
                                    </div>
                                    <div class="row-fluid col-sm-2">
                                        <button type="button" class="btn btn-default btn-sm add-option" style="background-color: green;line-height: 8px;">
                                            <span style="color: white;">+</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="panel-footer" style="margin-top: 1%;">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <span class="col-sm-6"><button id="postId" type="button" class="btn btn-primary">Submit</button></span>
                                <span class="col-sm-4"><button type="button" class="btn btn-primary" id="newPostCancelId">Cancel</button></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>