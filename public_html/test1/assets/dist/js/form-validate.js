$(document).ready(function(){$('input').iCheck({checkboxClass: 'icheckbox_square-blue',radioClass: 'iradio_square-blue',increaseArea: '20%'});});

$('.user_forget').click(function(){
    var email=$('.user_email').val();
    if((email==='') || (!validateEmail(email))){
        if(email==='') alert('Please Enter Your Email Address');
        else if(!validateEmail(email)) alert('Please enter valid Email Address');
    }
    else{
        $('.be-overlay').removeClass('hide');
        $.ajax({
            url: 'forget_password',
            data: $('#forget_password').serialize(),
            type: 'POST',
            dataType : 'json'
        })
        .done(function(data){
            $('.be-overlay').addClass('hide');
            console.log(data);
            show_alert_login('.forgot-detail-error', data.message,'warning');
            setTimeout(function(){location.reload()}, 5000);
        })      
        .always(function(data){
                    $('input[name="csrf_test_name"]').val(data.hash);
                    console.log(data);
                });

//        var url ='http://192.168.1.15/events/forget_password' ;
//        var postData = $('#forget_password').serialize();
//            //csrf = "csrf_test_name=" +  $('input[name="csrf_test_name"]').val();
//            console.log(postData);
//            console.log($('#forget_password').serialize()); 
//            $.post(url, postData  , function(data){
//            $('.be-overlay').addClass('hide');
//                show_alert_login('.forgot-detail-error', data.message,'warning');
//                setTimeout(function(){location.reload()}, 5000);
//                },'json').always(function(data){
//                $('input[name="csrf_test_name"]').val(data.hash);    
//                });

    }
    event.preventDefault();
    
    return false;
});

function validateEmail(sEmail) {
    var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

function show_alert_login(selector,message, type){
    
    html_message = '<div class="alert alert-'+type+' alert-dismissable">';
    html_message = html_message + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>'
    html_message = html_message + '<p>'+message+'</p></div>';
    
    $(selector).html(html_message);
}