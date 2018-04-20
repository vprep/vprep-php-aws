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
                url: "http://test.vprep.in/test_json?post_id="+post_id,
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
                        '</div>';

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
                    url: "http://test.vprep.in/educational/add_post_reply?post_id=" + postId + "&post_response=" + response + "&is_student=" + isStudent,
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
                url: "http://test.vprep.in/educational/add_vote?post_id=" + post_id + "&vote_id=" + vote_id,
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
                    url: "http://test.vprep.in/educational/add_new_post?post_type" + postType + "&subject=" + subject + "&heading=" + heading + "&detail=" + detail + "&is_student=true",
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
                    url: "http://test.vprep.in/educational/add_new_post?post_type=" + postType + "&subject=NA" + "&heading=" + heading + "&detail=" + detail + "&is_student=true",
                    method: "GET",
                    contentType: "application/json",
                    dataType: "json"
                });

                request.done(function (result) {

                });
                request.always(function () {
                    $('.option-value').each(function () {
                        var request = $.ajax({
                            url: "http://test.vprep.in/educational/add_new_poll?options=" +$(this).val()+"&post_type" + postType + "&subject=NA" + "&heading=" + heading + "&detail=" + detail + "&is_student=true" ,
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
            var addHtml = '';
            $.ajax({
                url: "http://test.vprep.in/educational/weekly_json",
                method: "GET",
                contentType: "application/json",
                dataType: "json",
                success: function (data) {

                    if(data.current_week.length >initialCount){
                        for(var i=initialCount; i<data.current_week.length;i++){
                            addHtml += '<div class="panel panel-default"> ' +
                                '                            <div class="panel-heading"> ' +
                                '                                <div class="row"> ' +
                                '                                    <div class="col-sm-11"><div class="col-sm-10"> ' +
                                '                                        <span style="float: left;">'+new Date(data.current_week[i].created_at*1000)+'testing</span> ' +
                                '                                    </div> ' +
                                '                                        <div class="col-sm-1"> ' +
                                '                                            <button type="button" class="btn btn-danger" style="font-size: 8px;">P</button> ' +
                                '                                        </div> ' +
                                '                                    </div> ' +
                                '                                </div> ' +
                                '                            </div> ' +
                                '                            <div class="panel-body inside-que" data-id="'+data.current_week[i].id+'"> ' +
                                '                                <h5 style="font-weight: bold;">'+data.current_week[i].heading+'</h5> ' +
                                '                                <p>'+data.current_week[i].details+'</p> ' +
                                '                            </div> ' +
                                '                        </div>'
                        }
                        initialCount = data.current_week.length;
                        $('#add-weekly-id').prepend(addHtml);

                    }
                },
                error: function (jqXHR, textStatus) {
                    console.log("Product detail Request failed: ", textStatus);
                }
            });
        }, 5000);

    </script>

</head>
<body>
<input id=post_id type="hidden" value="<?php echo $post_detail['id'] ?>">
<div class="row-fluid">
    <div class="row-fluid" style="padding-top: 1%;">
        <div class="col-sm-3" >
            <div class="row">
                <div class="col-sm-4 other">
                    <button id="newPostId" type="button" style="padding:3px 8px;" class="btn btn-primary">New Post</button>
                </div>
                <div class="col-sm-8 other2">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-sm" placeholder="Search Post" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 1%;">
                <div class="col-sm-6">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" style="padding: 2px 12px;" data-toggle="dropdown">Data Structures
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="menu2" style="padding: 2px 12px;" data-toggle="dropdown">Filter
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row"  style="margin-top: 1%;">
                <div class="panel panel-success">
                    <div class="panel-heading need-collapse side-bar-panel" style="padding: 2px 7px;">
                        <h3 class="panel-title side-bar-tab">This Week</h3>
                    </div>
                    <div id="add-weekly-id" class="panel-body need-pointer row-fluid" style="height:280px;overflow:scroll;padding: 1px!important;">
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
                                            <div class="row">
                                                <span class="side-bar-tab" style="float: right;"><?php echo date('Y/m/d', $val['created_at']); ?></span>
                                            </div>
                                            <div class="row" style="margin-top: 27px;margin-left: 7px;">
                                                <?php if ($val['is_student']): ?>
                                                <button type="button" class="btn btn-success" style="font-size: 9px;padding: 4px 8px;margin-top: -26px;">S</button>
                                                <?php endif; ?>
                                                <?php if (!$val['is_student']): ?>
                                                <button type="button" class="btn btn-danger" style="font-size: 9px;padding: 4px 8px;">P</button>
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
            <div class="row"  style="margin-top: 1%;">
                <div class="panel panel-success">
                    <div class="panel-heading need-collapse side-bar-panel" style="padding: 2px 7px;">
                        <h3 class="panel-title side-bar-tab">Week(11 Feb - 17 Feb)</h3>
                    </div>
                    <div class="panel-body need-pointer row-fluid" style="height:280px;overflow:scroll;padding: 1px!important;">
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
                                            <div class="row">
                                                <span class="side-bar-tab" style="float: right;"><?php echo date('Y/m/d', $val['created_at']); ?></span>
                                            </div>
                                            <div class="row" style="margin-top: 27px;margin-left: 7px;">
                                                <?php if ($val['is_student']): ?>
                                                <button type="button" class="btn btn-success" style="font-size: 9px;padding: 4px 8px;margin-top: -26px;">S</button>
                                                <?php endif; ?>
                                                <?php if (!$val['is_student']): ?>
                                                <button type="button" class="btn btn-danger" style="font-size: 9px;padding: 4px 8px;">P</button>
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

            <div class="row new-post-body" style="display: none">
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
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="vw">VW</option>
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
                                <span class="col-sm-6"><button id="postId" type="button" class="btn btn-primary">Post Question to Data Structures</button></span>
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