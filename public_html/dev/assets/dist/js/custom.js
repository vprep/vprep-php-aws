
$(document).ready(function() {
    
    // show timepicker and set minute step to 1 default is 15
    var time = $(".timepicker").timepicker({
          showInputs: false,
            minuteStep: 1
        });
        
    //Add a botton in timepicker 
    $('.bootstrap-timepicker table').append("<tr><td colspan='5' class='custom-hide-time'><a href='#'><i class='glyphicon glyphicon-ok-sign '></i></a></td></tr>");
    //Hide the time picker after select time
    $(".custom-hide-time").click(function(){
        $('.bootstrap-timepicker-widget').removeClass('open');
    });
    
    //('#timepicker').timepicker('setTime', '12:45 AM');
    //After select date in datepicker hide datepicker and date format dd/mm/yyyy 
    $( ".datepicker_input" ).datepicker({
        "format": 'dd/mm/yyyy'
    }).on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    
    //On load of form update the date in datepicker input box
    $( ".datepicker_input" ).datepicker('update',Date());
    
     //The Calender
    $(".calendar").datepicker();
    
    /*On chnge of month calendar events date highlight start*/
        $('.calendar').datepicker().on('changeDate changeMonth changeYear',function(){
            var t = setTimeout(function(){
                //alert($('.calendar .datepicker-switch').html());
                events_date_search($('.calendar .datepicker-switch').html());
            },50);
        });
    /*On chnge of month calendar events date highlight End*/
    
    /*On load of calendar events date highlight start*/
        var t = setTimeout(function(){
            //alert($('.calendar .datepicker-switch').html());
            events_date_search($('.calendar .datepicker-switch').html());
        },50);
    /*On load of calendar events date highlight End*/
    
    onadd_event();
    
    $("body").on('click','.custom-delete-event',function(evt){
        evt.preventDefault();
        var c = confirm('Are you sure you want to delete?');
            if (c==false)
                return false;
        delete_events(this);
        
    });
    
    //Pick date from calendar
    $('.calendar').datepicker()
    .on('changeDate', function(r){
        //console.log(r);
        if(r.date !== undefined){
            update_timeline(r.date);
        }
    });
    
    // Select today date and Update time line events
    today = new Date();
    today = today.getFullYear()+ "-" + (today.getMonth() + 1) + "-" + today.getDate() ;
    if($('.custom-box-timeline').length != 0){
        update_timeline(today);
    }
    
    //Read More
    $('#ReadMore').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var id = button.data('id'); // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    add_readmore(id);
    });
    
    //On Edit and Update Timeline Events
    $("#editeventform").submit(function(evt){
        edit_timeline_events(this);
        evt.preventDefault();
    });
    
    //Edit events details load events form
    $('#EditForm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        if(!(button.hasClass('custom-btn-edit-event'))) return false;
        var id = button.data('id'); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        load_eventsform(id);
    }); 
    
    $(document).on("click",".custom-focus", function() { 
        $(this).closest('div.form-group').find('.form-control').focus();
    });
    
    $('.custom-focus').click(function(){
        //$(this).parent().find('.form-control').focus();
    });
   
});

/* ********************************* ON Submit New Events ****************************************/
/** 
    * Recieve post value through Ajax
    * File: controller/events.php
    * Method : submit_events()			
**/
function onadd_event(){
      
   $("#eventform").submit(function(evt){
//       var title = $.trim($('input[name="title"]').val());
//       $('input[name="title"]').val(title);
//       var note = $.trim($('textarea[name="notes"]').val());
//       $('textarea[name="notes"]').val(note);
//       if(title == '' || note == ''){
//           //show_alert('#add-event-message', 'Can not be left blank','success');
//           // $('input[name="csrf_test_name"]').val(evt.hash);
//           form_event_submitted = 1;
//           var t = setTimeout(function(){$('.btn-add-event-submit').click()},50);
//           return false;
//       }
//       form_event_submitted = 0;
       //console.log(title);
      evt.preventDefault();
      
      var url = $(this).attr('action');
      var postData =$(this).serialize();
      console.log(postData);
      date_obj = new Date($( ".datepicker_input" ).datepicker('getDate'));
      
        date = date_obj.getFullYear()+ "-" + (date_obj.getMonth() + 1) + "-" + date_obj.getDate() ;
      //console.log($('input[name="csrf_test_name"]').val()); 
      $.post(url, $.trim(postData), function(o){
          if(o.result===1){
              show_alert('#add-event-message', o.message,'success');
              
              document.getElementById("eventform").reset();
              
              dt = new Date();
              $( ".datepicker_input" ).datepicker('update',dt.toDateString());
              $(".timepicker").timepicker('setTime',dt.toLocaleTimeString('en-us',{hour : "2-digit",minute:"2-digit"}));
           }else{
              show_alert('#add-event-message',o.message,'error');
          }
      },'json').always(function(data){
           $('input[name="csrf_test_name"]').val(data.hash);
           //console.log(date);
           update_timeline(date);
              
      });
    });
}

//Custom Alert box method  
function show_alert(id,message, type){
    $(id).addClass('alert-' + type);
    $(id).html(message);
    $(id).fadeIn();
    
    setTimeout(function(){ $(id).fadeOut();
        
        setTimeout(function (){ $(id).removeClass('alert-error, alert-success').delay(500).html('');}, 1000);
    }, 5000);
}

/* ********************************* Update TimeLine Events ****************************************/
/** 
    * Recieve post value through Ajax
    * File: controller/events.php
    * Method : get_timeline()			
**/
function update_timeline(date){
    
    date_obj = new Date(date);
    //console.log(date_obj);
    date = date_obj.getFullYear()+ "-" + (date_obj.getMonth() + 1) + "-" + date_obj.getDate() ;
    
    var url = 'events/get_timeline/' + date ;
    csrf = "csrf_test_name=" +  $('input[name="csrf_test_name"]').val();
    
    //console.log($('input[name="csrf_test_name"]').val()); 
    $.post(url, csrf , function(data){
            $(".timeline").html(data.content);
        },'json').always(function(data){
            $('input[name="csrf_test_name"]').val(data.hash);    
        });
}

/* ************************* Readmore Button Option *********************************/
/** 
    * Recieve post value through Ajax
    * File: controller/events.php
    * Method : readmore_events()			
**/
function add_readmore(id){
    
    var url ='readmore/' + id ;
    csrf = "csrf_test_name=" +  $('input[name="csrf_test_name"]').val();
    
    //console.log($('input[name="csrf_test_name"]').val()); 
    $.post(url, csrf , function(data){
            $("#ReadMore .modal-body").html(data.note);
            $("#ReadMore .modal-title").html(data.title);
    },'json').always(function(data){
            $('input[name="csrf_test_name"]').val(data.hash);    
        });
}

/* *************************Load data from database , send to form *********************************/
/** 
    * Recieve post value through Ajax
    * File: controller/events.php
    * Method : load_events()			
**/
function load_eventsform(id){
    var url ='events/load_events/' + id ;
    //console.log(url);
    csrf = "csrf_test_name=" +  $('input[name="csrf_test_name"]').val();
    
    //console.log($('input[name="csrf_test_name"]').val()); 
    $.post(url, csrf , function(data){
            $("#EditForm .modal-body").find('.event-id').val(data.id);
            $("#EditForm .modal-body").find('.event-title').val(data.title);
            $("#EditForm .modal-body").find('.event-note').val(data.note);
            $("#EditForm .modal-body").find('.event-date').val(data.date);
            $("#EditForm .modal-body").find('.event-time').val(data.time);
    },'json').always(function(data){
            $('input[name="csrf_test_name"]').val(data.hash);    
        });
}

/********************************** Edit Timeline Events ***********************************************/
/** 
    * Recieve post value through Ajax
    * File: controller/events.php
    * Method : update_timeline_events()			
**/
function edit_timeline_events(handle){
      
      var url = $(handle).attr('action');
      var postData =$(handle).serialize();
      date_obj = new Date($( ".event-date" ).datepicker('getDate'));
      date = date_obj.getFullYear()+ "-" + (date_obj.getMonth() + 1) + "-" + date_obj.getDate() ;
      
      //console.log($('input[name="csrf_test_name"]').val()); 
      $.post(url, postData, function(o){
          if(o.result===1){
              show_alert('#update-event-message',o.message,'success');
              
           }else{
              show_alert('#update-event-message',o.message,'error');
          }
      },'json').always(function(data){
           $('input[name="csrf_test_name"]').val(data.hash);
           update_timeline(date);
              
      });
}

/**************************************** Delete events ***********************************************/ 
/** 
    * Recieve post value through Ajax
    * File: controller/events.php
    * Method : delete_events()			
**/
function delete_events(handle){
      var url = $(handle).attr('href') + "/" + $(handle).attr('data-id');
      var csrf = "csrf_test_name=" + $('input[name="csrf_test_name"]').val();
      
//      date_obj = new Date($( ".datepicker" ).datepicker('getDate'));
//      date = date_obj.getFullYear()+ "-" + (date_obj.getMonth() + 1) + "-" + date_obj.getDate() ;
        $.post(url, csrf, function(o){
          if(o.result===1){
             $(handle).parents('.timeline-item').parent().css({height:$(handle).parents('.timeline-item').parent().height() + 'px'});
             $(handle).parents('.timeline-item').parent().css({opacity:0});
             setTimeout(function(){
                 $(handle).parents('.timeline-item').parent().css({height:'0px'});
                 $(handle).parents('.timeline-item').parent().css({margin:'0px'});
             },500);
             setTimeout(function(){
                    $(handle).parents('.timeline-item').parent().remove();
                },1000);
             $('input[name="csrf_test_name"]').val(o.hash);
             //setTimeout(update_timeline(date),2000);
           }else{
              alert('Error deleting event!!');
          }
      },'json').always(function(data){
           $('input[name="csrf_test_name"]').val(data.hash);
      });
}
/***************************************** Events dates search ***********************************/ 
/** 
    * Recieve post value through Ajax
    * File: controller/events.php
    * Method : search_event_dates()			
**/
function events_date_search(_month_year){
      var url = 'events/search_event_dates/';
      var csrf = "csrf_test_name=" + $('input[name="csrf_test_name"]').val() + '&date=' + _month_year;
      csrf = encodeURI(csrf);
        $.post(url, csrf, function(o){
          if(o.result===1){
                $.each(o.dates, function (i, v){
                    $('.calendar .datepicker-days .day[data-day="'+v+'"]:not(.new)').addClass('hasEvents');
                }) ; 
                $('.calendar .datepicker-days .hasEvents').append('<i class="fa fa-comment"></i>');
           }
      },'json').always(function(data){
            $('input[name="csrf_test_name"]').val(data.hash);
      });
}