<link rel="stylesheet" href="http://vprep.in/wp-includes/custom/css/bootstrap.min.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://vprep.in/wp-includes/custom/css/font-awesome.min.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://vprep.in/wp-includes/custom/css/jquery-ui.min.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://vprep.in/wp-includes/custom/css/select2.min.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://vprep.in/wp-includes/custom/css/dataTables.bootstrap.min.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://vprep.in/wp-includes/custom/css/dateRangePicker.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://vprep.in/wp-includes/custom/css/bootstrap_slider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://vprep.in/wp-includes/custom/css/custom.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://vprep.in/wp-includes/custom/css/jquery-ui-without-slider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://vprep.in/wp-includes/custom/css/bootstrap-drilldown-select.css" type="text/css" media="screen"/>
<script src="http://vprep.in/wp-includes/custom/js/plugins/jquery.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/jquery-ui-without-slider.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/moment.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/bootstrap.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/select2.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/jquery.dataTables.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/dataTables.bootstrap.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/highchart-5.0.6.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/no-data-to-display-5.0.6.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/exporting-5.0.6.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/dateRangePicker.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/jquery.slimscroll.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/bootstrap_slider.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/jquery.fileDownload.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/multiselect.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/bootstrap-drilldown-select.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/smap-shim.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/jquery.base64.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/buttons.html5.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/buttons.print.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/dataTables.buttons.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/jszip.min.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/vfs_fonts.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/common/polyfill.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/common/global.js"></script>
<script src="http://vprep.in/wp-includes/custom/js/plugins/jquery.noty.packaged.min.js"></script>

<script>
    var tableContent = null;
    $(document).ready(function() {
    //    startLoader();


        var request = $.ajax({
            url: "/educational/json/leaderboard/"+<?php echo $exam_id;?>,
            method: "POST",
            contentType: "application/json",
            dataType: "json",
            success: function (result) {

                if (tableContent != null) {
                    tableContent.fnClearTable();
                    tableContent = $('#leaderboardDetail').dataTable();
                    if (result.length > 0) {
                        tableContent.fnAddData(result);

                    }
                } else {
                        tableContent = $('#leaderboardDetail').dataTable({
                            "lengthMenu": [[25, 50, 100], [25, 50, 100]],
                            "autoWidth": false,
                            "data": result,
                            "columnDefs": [
                                {"width": "10%", "targets": 0},
                                {"width": "15", "targets": 1},
                                {"width": "20%", "targets": 2},
                                {"width": "20%", "targets": 3},
                                {"width": "15%", "targets": 4},
                                {"width": "20%", "targets": 5}
                            ],
                            "columns": [
                                {
                                    data: 'rank'
                                },
                                {
                                  data:'group_name'
                                },
                                {
                                    data: 'username'
                                },
                                {
                                    data: 'name'
                                },
                                {
                                    data: 'score'
                                },
                                {
                                    data: 'percentile',
                                    render: function (data, type, row) {
                                        return parseFloat(data).toFixed(2) + '%';
                                    }
                                },
                            ]
                        });
                }
            },
            error: function (jqXHR, textStatus) {
                console.log("Leaderboard detail Request failed: ", textStatus);
            }
        }).always(function () {
      //      changePaginationCSS();
    //        closeLoader();
        });

        $.ajax({
            url: "/educational/filter/autocomplete/leaderboard",
            method: "POST",
            contentType: "application/json",
            dataType: "json",
            success: function (result) {
                $('#groupSelectId').append('<option value="">All</option>');
                $.each(result, function(index,jsonObject){
                    $.each(jsonObject, function(key,val){
                        $('#groupSelectId').append('<option value="' + val + '">' + val + '</option>');
                        console.log("key : "+key+" ; value : "+val);
                    });
                });



            },
            error: function (jqXHR, textStatus) {
                console.log("Leaderboard detail Request failed: ", textStatus);
            }
        }).always(function () {
            //      changePaginationCSS();
            //        closeLoader();
        });

        $('#groupSelectId').on('change', function() {
            var request2 = $.ajax({
                url: "/educational/filter/leaderboard/"+<?php echo $exam_id;?>+"?group="+this.value,
                method: "GET",
                contentType: "application/json",
                dataType: "json",
                success: function (result) {

                    if (tableContent != null) {
                        tableContent.fnClearTable();
                        tableContent = $('#leaderboardDetail').dataTable();
                        if (result.length > 0) {
                            tableContent.fnAddData(result);

                        }
                    } else {
                        tableContent = $('#leaderboardDetail').dataTable({
                            "lengthMenu": [[25, 50, 100], [25, 50, 100]],
                            "autoWidth": false,
                            "data": result,
                            "columnDefs": [
                                {"width": "10%", "targets": 0},
                                {"width": "15", "targets": 1},
                                {"width": "20%", "targets": 2},
                                {"width": "20%", "targets": 3},
                                {"width": "15%", "targets": 4},
                                {"width": "20%", "targets": 5}
                            ],
                            "columns": [
                                {
                                    data: 'rank'
                                },
                                {
                                    data:'group_name'
                                },
                                {
                                    data: 'username'
                                },
                                {
                                    data: 'name'
                                },
                                {
                                    data: 'score'
                                },
                                {
                                    data: 'percentile',
                                    render: function (data, type, row) {
                                        return parseFloat(data).toFixed(2) + '%';
                                    }
                                },
                            ]
                        });
                    }
                },
                error: function (jqXHR, textStatus) {
                    console.log("Leaderboard detail Request failed: ", textStatus);
                }
            }).always(function () {
                //      changePaginationCSS();
                //        closeLoader();
            });

        });



    });
</script>

<div class="container">
    <div class="row-fluid" style="">
        <!--<div id="actionPanel" class="col-md-12" style="text-align: right;margin-bottom: 7px;margin-top: 1%;">
            <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="filterButton">
                Filter <i class="fa fa-filter sorting-button" aria-hidden="true"></i>
            </button>
        </div>-->
        <br/>
        <br/>
    </div>
       <div class="row-fluid">
           <div class="col-sm-12">
               <div class="panel panel-default" id="filterPanel" style="display: none;">
                   <div class="panel-heading">
                       <h3 class="panel-title">Filters</h3>
                   </div>
                   <div class="panel-body" style="padding-bottom: 5px;">
                       <div class="row">
                           <div id="collapseExample" aria-expanded="true">
                               <div class="form-group col-sm-12">
                                   <div class="form-group col-sm-9">
                                       <label>Group</label>
                                       <select id="groupId" class="form-control">
                                           <option value="-1" >All Retargeting</option>
                                       </select>
                                   </div>
                                   <div class="form-group col-sm-3">
                                       <button type="button" id="filterSearch" class="btn btn-default searchSubmit" style="margin-top: 24px;">Search</button>
                                       <button type="button" id="resetSearch" class="btn btn-default reset " style="margin-top: 24px;">Reset</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        <div class="col-sm-12">
            <div class="row panel panel-default">
                <div class="panel-heading ">
                    <h2 class="panel-title" style="text-align: center;" id="topScoreId">Leaderboard
                        <span class="dropdown pull-right widgetFilter row-fluid">
                        <select id="groupSelectId">

                        </select>
                    </span>
                    </h2>

                </div>
                <div class="panel-body" id="campaignWidget">
                    <div class="row-fluid">
                        <div id="searchContainer">
                            <table id="leaderboardDetail"
                                   class="table table-striped table-bordered table-condensed table-hover custom-table"
                                   cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Group</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Score</th>
                                    <th>Percentile</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>