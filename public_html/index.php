


<?php
//apcu_add('foo', "swadhin");
//echo apcu_fetch('foo');
/****************************************************
* Remember that header() must be called before any actual output is sent,
* either by normal HTML tags, blank lines in a file, or from PHP.
*****************************************************/
//header("Location: http://test.vprep.in/sign-in.html");
?>

<style>
    body{ background: #930; font: 16px/150% Verdana, Geneva, sans-serif;}
    .ar{ float: right; }
    .al{ float: left;}
    .clear{ clear: both;}
    a{ text-decoration: none; color: #666;}

    #wrapper{ margin: 0 auto; width: 960px; position: relative; }
    #nav li{ float: left; list-style: none; padding: 5px 10px; color: #000; text-transform: uppercase;  }
    #nav li a{ text-decoration: none; color: #fff; display: block; text-transform: none;}

    form{ background: #eee; padding: 10px; }
    form p{ padding: 5px 0;}
    form .title{ min-width: 100px; display: inline-block; }
    form input[type=text], form input[type=password]{ border: 1px solid #fff; padding: 5px;}

    .button{ display: inline-block; background: #000; padding:5px 10px; z-index: 0; color: #fff; }
    .overlay{ z-index:5; background: rgba(0, 0, 0, .50); display: block; position:fixed; width: 100%; height: 100%; }

    .popup{ padding: 10px 10px 35px; background: #fff; z-index: 999; display: none; position: absolute; right: 0; }
    #footer{ position: fixed; bottom: 0; background: #fff; width: 100%; font-size: 12px; text-align: center; }
    #footer div{ padding: 5px; }

    .close{ font-weight: bold; color: #F00; float: right; position: absolute; bottom: 5px; right: 10px; }
</style>





<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
    <title>Prepare|Score|Get Referred</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Get high quality placement tests, unique online community of professionals from premium companies, get referrals and more. Try it for free now">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="http://www.googletagmanager.com/gtag/js?id=UA-109122655-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109122655-1');
    </script>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="pingback" href="http://vprep.in/xmlrpc.php" />
    <!--[if lt IE 9]>
    <script src="http://vprep.in/wp-content/themes/Divi/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type='text/javascript' src='http://vprep.in/wp-includes/js/typeahead/typeahead.js'></script>
    </head>
 

    <script type="text/javascript">
        document.documentElement.className = 'js';


        $(document).ready(function() {
            $('#wrapper').hide();
            jQuery(document).on('click', '#freeId', function (e) {
                $('#wrapper').show();
            });
            $("#tryId").click(function(e){
                $("#sign-up-menu").css("opacity", "1");
                setTimeout(function() {  $("#clickSignUp").addClass("et-show-dropdown et-hover open"); }, 100);

            });
            $("#mobSignUp").click(function(e){

                $(".navbar-collapse, .collapse").removeClass('in');

            });
            getCollegeList();
            $("#collegeError").hide();
            $('#otpId').hide();
            $('#register-submit').hide();
            $('#buttonOTP').hide();
            $('#credId').hide();
            $('#emailError').hide();
            $('#phoneError').hide();
            $('#userBlank').hide();
            $('#otpError').hide();
            $('#userNameError').hide();
            $('#emailError2').hide();
            $('#phoneError2').hide();
            $('#forgotMobileError').hide();
            $('#secondForgot').hide();
            $('#thirdForgot').hide();
            $('#forgotOTPError').hide();
            $('#forgotPasswordError').hide();
            $("#mobCollegeError").hide();
            $('#mobOtpId').hide();
            $('#mobRegister-submit').hide();
            $('#mobButtonOTP').hide();
            $('#mobCredId').hide();
            $('#mobEmailError').hide();
            $('#mobPhoneError').hide();
            $('#mobUserBlank').hide();
            $('#mobOtpError').hide();
            $('#mobUserNameError').hide();
            $('#mobEmailError2').hide();
            $('#mobPhoneError2').hide();
            $('#mobForgotMobileError').hide();
            $('#mobSecondForgot').hide();
            $('#mobThirdForgot').hide();
            $('#mobForgotOTPError').hide();
            $('#mobForgotPasswordError').hide();
            $(".button-sign").click(function(e) {
                $("body").append('<div class="overlay"></div>');
                $(".popup").show();

                $(".close").click(function(e) {
                    $(".popup, .overlay").hide();
                });
            });


        });
    </script>






    <!-- </script>-->


    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="vPrep &raquo; Feed" href="http://vprep.in/feed/" />
    <link rel="alternate" type="application/rss+xml" title="vPrep &raquo; Comments Feed" href="http://vprep.in/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"http:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/vprep.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.5"}};
        !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <meta content="Divi v.3.0.40" name="generator"/>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }



    </style>
    <link rel='stylesheet' id='divi-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&#038;subset=latin,latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='divi-style-css'  href='http://vprep.in/wp-content/themes/Divi/style.css?ver=3.0.40' type='text/css' media='all' />
    <link rel='stylesheet' id='et-shortcodes-css-css'  href='http://vprep.in/wp-content/themes/Divi/epanel/shortcodes/css/shortcodes.css?ver=3.0.40' type='text/css' media='all' />
    <link rel='stylesheet' id='et-shortcodes-responsive-css-css'  href='http://vprep.in/wp-content/themes/Divi/epanel/shortcodes/css/shortcodes_responsive.css?ver=3.0.40' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'  href='http://vprep.in/wp-content/themes/Divi/includes/builder/styles/magnific_popup.css?ver=3.0.40' type='text/css' media='all' />
    <script type='text/javascript' src='http://vprep.in/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript' src='http://vprep.in/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <link rel='http://api.w.org/' href='http://vprep.in/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://vprep.in/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://vprep.in/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.7.5" />
    <link rel="canonical" href="http://vprep.in/" />
    <link rel='shortlink' href='http://vprep.in/' />
    <link rel="alternate" type="application/json+oembed" href="http://vprep.in/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fvprep.in%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://vprep.in/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fvprep.in%2F&#038;format=xml" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <style id="theme-customizer-css">
        @media only screen and ( min-width: 981px ) {
            .et_header_style_left #et-top-navigation, .et_header_style_split #et-top-navigation  { padding: 20px 0 0 0; }
            .et_header_style_left #et-top-navigation nav > ul > li > a, .et_header_style_split #et-top-navigation nav > ul > li > a { padding-bottom: 20px; }
            .et_header_style_split .centered-inline-logo-wrap { width: 40px; margin: -40px 0; }
            .et_header_style_split .centered-inline-logo-wrap #logo { max-height: 40px; }
            .et_pb_svg_logo.et_header_style_split .centered-inline-logo-wrap #logo { height: 40px; }
            .et_header_style_centered #common-nav > li > a { padding-bottom: 7px; }
            .et_header_style_slide #et-top-navigation, .et_header_style_fullscreen #et-top-navigation { padding: 11px 0 11px 0 !important; }
            .et_header_style_centered #main-header .logo_container { height: 40px; }
            #logo { max-height: 75%; }
            .et_pb_svg_logo #logo { height: 75%; }
        }
        @media only screen and ( min-width: 1350px) {
            .et_pb_row { padding: 27px 0; }
            .et_pb_section { padding: 54px 0; }
            .single.et_pb_pagebuilder_layout.et_full_width_page .et_post_meta_wrapper { padding-top: 81px; }
            .et_pb_section.et_pb_section_first { padding-top: inherit; }
            .et_pb_fullwidth_section { padding: 0; }
        }
        @media only screen and ( max-width: 980px ) {
        }
        @media only screen and ( max-width: 767px ) {
        }
    </style>
    <style id="module-customizer-css">
    </style>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" media="all">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style type="text/css" id="wp-custom-css">
        #mobLiSignUp {display: none}
        #mobLiSignIn {display: none}
        #main-footer {
            position: fixed;
            width: 100%;
            bottom: 0;
            z-index: 9999;
        }
        #main-content {
            margin-bottom: 45px;
        }
        .current-menu-item
        {
            background-color: #57ad22;
        }
        #common-nav li.current-menu-item > a
        {
            color:white;
        }
        #common-nav li.menu-item
        {
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
        #common-nav li.menu-item:hover
        {
            background-color: #57ad22;
            color:white;
        }
        #common-nav li.menu-item:hover > a
        {
            color:white;
        }
        .fa {
            font-size: 50px;
        }
        #sign-up-menu li.menu-item:hover
        {
            background-color: #57ad22;
            color:white;
        }
        #sign-up-menu li.menu-item:hover > a
        {
            color:white;
        }
        .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover{
            background-color: #57ad22;
        }

        .fa {
            font-size: 50px;
        }
        .nav>li>a:focus, .nav>li>a:hover {
            background-color: transparent;
        }
    </style>
    <input type="hidden" id="otp_input" value="">
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
    <style>

        /* Fixed navbar */
        /* body {
             padding-top: 90px;
         }
         !* General sizing *!
         ul.dropdown-lr {
             width: 300px;
         }*/

        /* mobile fix */
        @media (max-width: 768px) {
            .dropdown-lr h3 {
                color: #eee;
            }
            .dropdown-lr label {
                color: #eee;
            }

        }
    </style>
    <script type="text/javascript">
        var otp;
        var emailStatus;
        var userNameStatus;
        jQuery(document).on('click', '#testId', function (e) {
            userNameCheck();
            emailCheck();
            var emailId = $('#email').val();
            var collegeId = $('#collegeRefId').val();
            if(!(collegeId != null && collegeId.length >0)){
                $("#collegeError").show();
            }
            if((!isNaN($('#phone').val())) && ($('#phone').val().length === 10) && validateEmail(emailId)){
                $('#phoneError').hide();
                $('#emailError').hide();
                validateSignMobile($('#phone').val());
            } else {
                if(!validateEmail(emailId)){
                    $('#emailError').show();
                } else {
                    $('#emailError').hide();
                    $('#phoneError').show();
                }
            }

        });
        var sendOTP = function () {
            $('#testId').hide();
            var filterVO = {};
            filterVO.name = $('#fullName').val();
            filterVO.phone = '91'+$('#phone').val();
            $('#otpId').show();
            $('#buttonOTP').show();
            $.ajax({
                url: "/test/otp/sendotp.php?phone="+filterVO.phone,
                method: "GET",
                success: function(data) {
                    n=data.search("Your Vprep OTP is:");
                    var otp = data.substring(n+19,n+23);
                    $("#otp_input").val(otp);
                    if(emailStatus=='false'){
                        $('#emailError2').show();
                    }
                    if(userNameStatus == 'false'){
                        $('#userNameError').show();
                    }

                }});
        };

        var userNameCheck = function () {

            var username = $('#upusername').val();
            var link = 'http://test.vprep.in/frontend/validate_username2/' + username;
            jQuery.ajax({
                type: "GET",
                url: link,
                success: function (data) {
                    userNameStatus = data;
                }
            });
        }

        var emailCheck = function () {
            var email = $('#email').val();
            var link = 'http://test.vprep.in/frontend/email_check/?email=' + email;
            jQuery.ajax({
                type: "GET",
                url: encodeURI(link),
                success: function (data) {
                    emailStatus = data;
                }
            });

        }

        jQuery(document).on('click', '#buttonOTP', function (e) {
            var inputOtp = $('#otpId').val();
            var emailId = $('#email').val();
            var phoneNum = $('#phone').val();
            var collegeId = $('#collegeRefId').val();
            var otp_received= $("#otp_input").val();
            if (inputOtp == otp_received) {
                $('retryOTP').hide();
                if (!validateEmail(emailId)) {

                    $('#emailError').show();
                }

                if (validateEmail(emailId)) {


                    $('#buttonOTP').show();
                    $('#otpError').hide();
                    $('#emailError').hide();

                    if ((emailStatus == 'true') && (userNameStatus == 'true') && (collegeId != null && collegeId.length >0)) {
                        $("#collegeError").hide();
                        $('#ajax-register-form').submit();
                    }

                }
            } else {
                $('#retryOTP').show();
                $('#otpError').show();
            }
        });

        jQuery(document).on('click','#retryOTP', function(e){
            sendOTP();
        });

        jQuery(document).on('click', '#showLoginId', function (e) {
            var cred = {};
            cred.username = $('#username').val();
            cred.password = $("#regpassword", $("#ajax-login-form")).val();
            var link = 'http://test.vprep.in/frontend/login_validate?username=' + cred.username + '&userpass=' + cred.password ;
            if(cred.username==""){

                $('#userBlank').show();
            } else {

                jQuery.ajax({
                    type: "GET",
                    url: link,
                    success: function (data) {
                        if(data==='success'){
                            $( "#ajax-login-form" ).submit();
                        } else {
                            $('#credId').show();
                        }
                    }
                });
            }
        });


        function validateEmail(sEmail) {
            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if (filter.test(sEmail)) {
                return true;
            }
            else {
                return false;
            }
        }


        jQuery(document).on('click', '#nextId', function (e) {
            var phone = $('#forgotMobile').val();
            validateRegisteredMobile(phone);

        });

        jQuery(document).on('click',"#nextId2", function(e){
            var enterOTP = $('#forgotOTP').val();
            var receiveOTP = $("#otp_input").val();
            if(enterOTP == receiveOTP){
                $("#secondForgot").hide();
                $('#thirdForgot').show();
            } else {
                $('#forgotOTPError').show();
            }
        });

        jQuery(document).on('click',"#nextId3", function(e){
            var passwordInput = $("#forgotPassword").val();
            var phone = $('#forgotMobile').val();
            $("#forgotPhoneId").val(phone);
            if(passwordInput != null && passwordInput.length >0){
                $('#forgot-password-form').submit();
            } else {
                $('#forgotPasswordError').show();
            }
        });

        $(".slide-right").click(function(){
            $(".box").animate({
                width: boxWidth
            });
        });
        $("#modalClose").click(function () {
            $("#firstForgot").show();
            $("#secondForgot").hide();
            $("#thirdForgot").hide();
        });

        function validateRegisteredMobile(mobile) {
            var result = false;
            jQuery.ajax({
                type: "GET",
                url: 'http://test.vprep.in/frontend/validate_phone?phone=' + mobile,
                success: function (data) {
                    if(data=='true'){
                        $("#firstForgot").hide();
                        $('#secondForgot').show();
                        sendForgotOTP(mobile);

                    }else {
                        $("#forgotMobileError").show();
                    }
                }
            });

            return result;

        }

        function validateSignMobile(mobile) {
            var result = false;
            jQuery.ajax({
                type: "GET",
                url: 'http://test.vprep.in/frontend/validate_phone?phone=' + mobile,
                success: function (data) {
                    if(data=='false'){
                        $("#phoneError2").hide();
                        sendOTP();

                    }else {
                        $("#phoneError2").show();
                    }
                }
            });

            return result;

        }

        function sendForgotOTP(mobile){
            $.ajax({
                url: "/test/otp/sendotp.php?phone="+mobile,
                method: "GET",
                success: function(data) {
                    n=data.search("Your Vprep OTP is:");
                    var otp = data.substring(n+19,n+23);
                    $("#otp_input").val(otp);
                },
                complete: function(data){
                    n=data.search("Your Vprep OTP is:");
                    var otp = data.substring(n+19,n+23);
                    $("#otp_input").val(otp);
                }

            });
        }

    </script>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400);

        .font-roboto {
            font-family: 'roboto condensed';
        }

        * {
            box-sizing: border-box;
        }

        body {
        .font-roboto();
        }
        .green-hover:hover {
            background-color: #57ad22;
        }
        .green-hover:active{
            background-color: #57ad22;
        }
        .green-back{
            background-color: #57ad22;
        }
        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
        }

        .modal-dialog {
            position: fixed;
            margin: 0;
            width: 100%;
            height: 90%;
            padding: 0;
        }

        .modal-content {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border: 2px solid #3c7dcf;
            border-radius: 0;
            box-shadow: none;
        }

        .modal-header {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            height: 50px;
            padding: 10px;
            background: #6598d9;
            border: 0;
        }

        .modal-title {
            font-weight: 300;
            font-size: 2em;
            color: #fff;
            line-height: 30px;
        }

        .modal-body {
            position: absolute;
            top: 50px;
            bottom: 60px;
            width: 100%;
            font-weight: 300;
            overflow: auto;
        }

        .modal-footer {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 60px;
            padding: 10px;
            background: #f1f3f5;
        }

        .btn-modal {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -20px;
            margin-left: -100px;
            width: 200px;
        }
        .tt-query, /* UPDATE: newer versions use tt-input instead of tt-query */
        .tt-hint {
            width: 396px;
            height: 30px;
            padding: 8px 12px;
            font-size: 24px;
            line-height: 30px;
            border: 2px solid #ccc;
            border-radius: 8px;
            outline: none;
        }

        .tt-query { /* UPDATE: newer versions use tt-input instead of tt-query */
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .tt-hint {
            color: #999;
            width: 150%;
            font-size: 10px;
            opacity: 0!important;
        }
        .typeahead, .tt-input {
            border-color: black!important;
        }

        .tt-menu { /* UPDATE: newer versions use tt-menu instead of tt-dropdown-menu */
            width: 170%;
            margin-top: 12px;
            padding: 8px 0;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 10px;

        }

        .tt-suggestion {
            padding: 3px 20px;
            font-size: 10px;
            line-height: 24px;
            cursor: pointer;
            color: grey;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;

        }

        .tt-suggestion:hover {
            color: white;
            background-color: #3b5998;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 10px;
        }

        .tt-suggestion p {
            margin: 0;
        }
        .tt-dataset {
            min-height:250px;
            max-height:300px;
            overflow-y:scroll;
        }
        .twitter-typeahead {
            width:100%!important;
        }

        .home-head{
            background-color: #57ad22;
        }

        .home-head > a{
            color: white !important;
        }





    </style>
    <script type="text/javascript">
        function loadColleges(list) {
            var substringMatcher = function(strs) {
                return function findMatches(q, cb) {
                    var matches, substringRegex;

                    // an array that will be populated with substring matches
                    matches = [];

                    // regex used to determine if a string contains the substring `q`
                    substrRegex = new RegExp(q, 'i');

                    // iterate through the pool of strings and for any string that
                    // contains the substring `q`, add it to the `matches` array
                    $.each(strs, function(i, str) {
                        if (substrRegex.test(str.college_name)) {
                            matches.push(str);
                        }
                    });

                    cb(matches);
                };
            };

            $('#the-basics .typeahead').typeahead({
                    hint: true,
                    highlight: true,
                    minLength: 1
                },
                {
                    name: 'result',
                    displayKey:'college_name',
                    limit: 10000,
                    source: substringMatcher(list)

                }).bind("typeahead:selected", function(obj, datum, name) {
                console.log("setting id: "+datum.id)
                $("#collegeRefId").val(datum.id);
                $("#mobCollegeRefId").val(datum.id);
            });;

        };
        function getCollegeList() {
            $.ajax({
                url: "http://test.vprep.in/educational/get_engineering_college",
                method: "GET",
                success: function(data) {
                    var collegeList= JSON.parse(data);
                    loadColleges(collegeList);

                }});
        };




    </script>
    <script>
        (function(h,e,a,t,m,p) {
            m=e.createElement(a);m.async=!0;m.src=t;
            p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
        })(window,document,'script','http://u.heatmap.it/log.js');
    </script>
    <style>
        #mobLiSignUp {display: none}
        #freeId {display: none}
        body
        {
            margin:0 auto;
            padding:0px;
            text-align:center;
            width:100%;
            font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
            background-color:#ECF0F1;
        }
        #wrapper
        {
            display: none;
            margin:0 auto;
            padding:0px;
            text-align:center;
            width:995px;
        }
        #wrapper h1
        {
            margin-top:50px;
            font-size:45px;
            color:#424949;
        }
        #wrapper h1 p
        {
            font-size:18px;
        }
        .form_div
        {
            width:330px;
            margin-left:320px;
            padding:10px;
            background-color:#424949;
        }
        .form_div .form_label
        {
            margin:15px;
            margin-bottom:30px;
            font-size:25px;
            font-weight:bold;
            color:white;
            text-decoration:underline;
        }
        .form_div input[type="text"],input[type="password"]
        {
            width:230px;
            height:40px;
            border-radius:2px;
            font-size:17px;
            padding-left:5px;
            border:none;
        }
        .form_div input[type="submit"]
        {
            width:230px;
            height:40px;
            border:none;
            border-radius:2px;
            font-size:17px;
            background-color:#7F8C8D;
            border-bottom:3px solid #616A6B;
            color:white;
            font-weight:bold;
        }

        @media only screen and (min-width:400px) and (max-width:699px)
        {
            #clickSignUp {display: none}
            #mobLiSignUp {display: inherit}
            #main-footer {display: none}
            #freeId {display: inherit}
            #tryId {display: none}
            #wrapper
            {
                display: inherit;
                width:100%;
            }
            #wrapper h1
            {
                font-size:30px;
            }
            .form_div
            {
                width:60%;
                margin-left:20%;
            }
            .form_div input[type="text"],input[type="password"]
            {
                width:80%;
            }
            .form_div input[type="submit"]
            {
                width:80%;
            }
            .tt-query, /* UPDATE: newer versions use tt-input instead of tt-query */
            .tt-hint {
                width: 396px;
                height: 30px;
                padding: 8px 12px;
                font-size: 24px;
                line-height: 30px;
                border: 2px solid #ccc;
                border-radius: 8px;
                outline: none;
            }

            .tt-query { /* UPDATE: newer versions use tt-input instead of tt-query */
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            }

            .tt-hint {
                color: #999;
                width: 150%;
                font-size: 10px;
                opacity: 0!important;
            }
            .typeahead, .tt-input {
                border-color: black!important;
            }

            .tt-menu { /* UPDATE: newer versions use tt-menu instead of tt-dropdown-menu */
                width: 100%;
                margin-top: 12px;
                padding: 8px 0;
                background-color: #fff;
                border: 1px solid #ccc;
                border: 1px solid rgba(0, 0, 0, 0.2);
                border-radius: 8px;
                box-shadow: 0 5px 10px rgba(0,0,0,.2);
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                font-size: 10px;

            }

            .tt-suggestion {
                padding: 3px 20px;
                font-size: 10px;
                line-height: 24px;
                cursor: pointer;
                color: grey;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;

            }

            .tt-suggestion:hover {
                color: white;
                background-color: #3b5998;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                font-size: 10px;
            }

            .tt-suggestion p {
                margin: 0;
            }
            .tt-dataset {
                min-height:150px;
                max-height:200px;
                overflow-y:scroll;
            }
            .twitter-typeahead {
                width:100%!important;
            }
        }
        @media only screen and (min-width:100px) and (max-width:399px)
        {
            #clickSignUp {display: none}
            #mobLiSignUp {display: inherit}
            #main-footer {display: inherit}
            #freeId {display: inherit}
            #tryId {display: none}
            #wrapper
            {
                display: inherit;
                width:100%;
            }
            #wrapper h1
            {
                font-size:25px;
            }
            .form_div
            {
                width:90%;
                margin-left:5%;
                padding-left:0px;
                padding-right:0px;
            }
            .form_div input[type="text"],input[type="password"]
            {
                width:80%;
            }
            .form_div input[type="submit"]
            {
                width:80%;
            }
            .tt-query, /* UPDATE: newer versions use tt-input instead of tt-query */
            .tt-hint {
                width: 396px;
                height: 30px;
                padding: 8px 12px;
                font-size: 24px;
                line-height: 30px;
                border: 2px solid #ccc;
                border-radius: 8px;
                outline: none;
            }

            .tt-query { /* UPDATE: newer versions use tt-input instead of tt-query */
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            }

            .tt-hint {
                color: #999;
                width: 150%;
                font-size: 10px;
                opacity: 0!important;
            }
            .typeahead, .tt-input {
                border-color: black!important;
            }

            .tt-menu { /* UPDATE: newer versions use tt-menu instead of tt-dropdown-menu */
                width: 100%;
                margin-top: 12px;
                padding: 8px 0;
                background-color: #fff;
                border: 1px solid #ccc;
                border: 1px solid rgba(0, 0, 0, 0.2);
                border-radius: 8px;
                box-shadow: 0 5px 10px rgba(0,0,0,.2);
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                font-size: 10px;

            }

            .tt-suggestion {
                padding: 3px 20px;
                font-size: 10px;
                line-height: 24px;
                cursor: pointer;
                color: grey;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;

            }

            .tt-suggestion:hover {
                color: white;
                background-color: #3b5998;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                font-size: 10px;
            }

            .tt-suggestion p {
                margin: 0;
            }
            .tt-dataset {
                min-height:150px;
                max-height:200px;
                overflow-y:scroll;
            }
            .twitter-typeahead {
                width:100%!important;
            }
        }
    </style>
    <script type="text/javascript">
        var mobOtp;
        var mobEmailStatus;
        var mobUserNameStatus;
        jQuery(document).on('click', '#mobTestId', function (e) {
            $("#mobCollegeError").hide();
            $('#mobOtpId').hide();
            $('#mobRegister-submit').hide();
            $('#mobButtonOTP').hide();
            $('#mobCredId').hide();
            $('#mobEmailError').hide();
            $('#mobPhoneError').hide();
            $('#mobUserBlank').hide();
            $('#mobOtpError').hide();
            $('#mobUserNameError').hide();
            $('#mobEmailError2').hide();
            $('#mobPhoneError2').hide();
            $('#mobForgotMobileError').hide();
            $('#mobSecondForgot').hide();
            $('#mobThirdForgot').hide();
            $('#mobForgotOTPError').hide();
            $('#mobForgotPasswordError').hide();
            mobUserNameCheck();
            mobEmailCheck();
            var emailId = $('#mobEmail').val();
            var collegeId = $('#mobCollegeRefId').val();
            if(!(collegeId != null && collegeId.length >0)){
                $("#mobCollegeError").show();
            }
            if((!isNaN($('#mobPhone').val())) && ($('#mobPhone').val().length === 10) && validateEmail(emailId)){
                $('#mobPhoneError').hide();
                $('#mobEmailError').hide();
                mobValidateSignMobile($('#mobPhone').val());
            } else {
                if(!validateEmail(emailId)){
                    $('#mobEmailError').show();
                } else {
                    $('#mobEmailError').hide();
                    $('#mobPhoneError').show();
                }
            }

        });
        var mobSendOTP = function () {
            $('#mobTestId').hide();
            var filterVO = {};
            filterVO.name = $('#mobFullName').val();
            filterVO.phone = '91'+$('#mobPhone').val();
            $('#mobOtpId').show();
            $('#mobButtonOTP').show();
            $.ajax({
                url: "/test/otp/sendotp.php?phone="+filterVO.phone,
                method: "GET",
                success: function(data) {
                    n=data.search("Your Vprep OTP is:");
                    var otp = data.substring(n+19,n+23);
                    $("#otp_input").val(otp);
                    if(mobEmailStatus=='false'){
                        $('#mobEmailError2').show();
                    }
                    if(mobUserNameStatus == 'false'){
                        $('#mobUserNameError').show();
                    }

                }});
        };

        var mobUserNameCheck = function () {

            var username = $('#mobUpusername').val();
            var link = 'http://test.vprep.in/frontend/validate_username2/' + username;
            jQuery.ajax({
                type: "GET",
                url: link,
                success: function (data) {
                    mobUserNameStatus = data;
                }
            });
        }

        var mobEmailCheck = function () {
            var email = $('#mobEmail').val();
            var link = 'http://test.vprep.in/frontend/email_check/?email=' + email;
            jQuery.ajax({
                type: "GET",
                url: encodeURI(link),
                success: function (data) {
                    mobEmailStatus = data;
                }
            });

        }

        jQuery(document).on('click', '#mobButtonOTP', function (e) {
            var inputOtp = $('#mobOtpId').val();
            var emailId = $('#mobEmail').val();
            var phoneNum = $('#mobPhone').val();
            var collegeId = $('#mobCollegeRefId').val();
            var otp_received= $("#otp_input").val();
            if (inputOtp == otp_received) {
                $('retryOTP').hide();
                if (!validateEmail(emailId)) {

                    $('#mobEmailError').show();
                }

                if (validateEmail(emailId)) {


                    $('#mobButtonOTP').show();
                    $('#mobOtpError').hide();
                    $('#mobEmailError').hide();

                    if ((mobEmailStatus == 'true') && (mobUserNameStatus == 'true') && (collegeId != null && collegeId.length >0)) {
                        $("#mobCollegeError").hide();
                        $('#mob-ajax-register-form').submit();
                    }

                }
            } else {
                $('#mobRetryOTP').show();
                $('#mobOtpError').show();
            }
        });

        jQuery(document).on('click','#mobRetryOTP', function(e){
            mobSendOTP();
        });
        function mobValidateSignMobile(mobile) {
            var result = false;
            jQuery.ajax({
                type: "GET",
                url: 'http://test.vprep.in/frontend/validate_phone?phone=' + mobile,
                success: function (data) {
                    if(data=='false'){
                        $("#mobPhoneError2").hide();
                        mobSendOTP();

                    }else {
                        $("#mobPhoneError2").show();
                    }
                }
            });

            return result;

        }



    </script>

</head>



<a href="http://vprep.in" style="display: none;">Back</a>




<body class="home page-template-default page page-id-41 et_pb_button_helper_class et_fixed_nav et_show_nav et_cover_background et_pb_gutter osx et_pb_gutters3 et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns4 et_header_style_left et_pb_pagebuilder_layout et_right_sidebar et_divi_theme chrome">
<div id="page-container">
    <?php echo file_get_contents('test/otp/header.php'); ?>
    <!-- #main-header -->
    <div id="et-main-area">
        <div id="main-content">
            <article id="post-41" class="post-41 page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="et_pb_section et_pb_fullwidth_section  et_pb_section_0 et_section_regular">
                        <div class="et_pb_module et_pb_slider  et_pb_fullwidth_slider_0">
                            <div class="et_pb_slides">
                                <div class="et_pb_slide et_pb_bg_layout_dark et_pb_media_alignment_center et_pb_slide_0 et-pb-active-slide" style='background-color:#ffffff;background-image:url(http://vprep.in/wp-content/uploads/2017/04/cta-bg.jpg);'>
                                    <div class="et_pb_container clearfix">
                                        <div class="et_pb_slider_container_inner">
                                            <div class="et_pb_slide_description">
                                                <h2 class="et_pb_slide_title">Are you an engineering student?</h2>
                                                <div class="et_pb_slide_content">Get high quality mock tests and access to our unique discussion forum of experienced professional to take your placement preparation to the next level.</div>




                                                <button id="tryId" style="
    margin-top: 10px;
    background: #0c71c3;
    color: white;
    height: 40px;
">Try it for free</button>
                                                <button id="freeId" style="
    margin-top: 10px;
    background: #0c71c3;
    color: white;
    height: 40px;
" data-toggle="modal" data-target="#exampleModalLong">Try it for free</button>

                                            </div>
                                            <!-- .et_pb_slide_description -->
                                        </div>
                                    </div>
                                    <!-- .et_pb_container -->
                                </div>
                                <!-- .et_pb_slide -->
                            </div>
                            <!-- .et_pb_slides -->
                        </div>
                        <!-- .et_pb_slider -->
                    </div>
                    <!-- .et_pb_section -->
                    <div class="et_pb_section  et_pb_section_1 et_pb_with_background et_section_regular">
                        <div class=" et_pb_row et_pb_row_0">
                            <div class="et_pb_column et_pb_column_4_4  et_pb_column_0">
                                <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_text_0">
                                    <h1 style="text-align: center;"><strong>FEATURES</strong></h1>
                                </div>
                                <!-- .et_pb_text -->
                            </div>
                            <!-- .et_pb_column -->
                        </div>
                        <!-- .et_pb_row -->
                        <div class=" et_pb_row et_pb_row_1">
                            <div class="et_pb_column et_pb_column_1_3  et_pb_column_1">
                                <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_text_1">
                                    <p style="text-align: center;"><i class="fa fa-wrench"></i></p>
                                    <h4 style="text-align: center;">CUSTOMIZED TEST CREATION</h4>
                                    <p style="text-align: center;">Create customised online test in minutes by just selecting your preferences.</p>
                                </div>
                                <!-- .et_pb_text -->
                                <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_text_2">
                                    <p style="text-align: center;"><i class="fa fa-laptop"></i></p>
                                    <h4 style="text-align: center;">UNIQUE DISCUSSION FORUM</h4>
                                    <p style="text-align: center;">Get your doubts clarified directly by professionals working in premium companies.</p>
                                </div>
                                <!-- .et_pb_text -->
                            </div>
                            <!-- .et_pb_column -->
                            <div class="et_pb_column et_pb_column_1_3  et_pb_column_2">
                                <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_text_3">
                                    <p style="text-align: center;"><i class="fa fa-area-chart"></i></p>
                                    <h4 style="text-align: center;">DIAGNOSTIC ANALYSIS</h4>
                                    <p style="text-align: center;">Get detailed result analysis and identify your strong and weak areas.</p>
                                </div>
                                <!-- .et_pb_text -->
                                <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_text_4">
                                    <p style="text-align: center;"><i class="fa fa-graduation-cap"></i></p>
                                    <h4 style="text-align: center;">INDIVIDUAL ATTENTION</h4>
                                    <p style="text-align: center;">Post your query in discussion forum and get a response on priority basis.</p>
                                </div>
                                <!-- .et_pb_text -->
                            </div>
                            <!-- .et_pb_column -->
                            <div class="et_pb_column et_pb_column_1_3  et_pb_column_3">
                                <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_text_5">
                                    <p style="text-align: center;"><i class="fa fa-shopping-cart"></i></p>
                                    <h4 style="text-align: center;">QUALITY MOCK TESTS</h4>
                                    <p style="text-align: center;">Quality tests designed by working professionals from premium companies.</p>
                                </div>
                                <!-- .et_pb_text -->
                                <div class="et_pb_text et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_text_6">
                                    <p style="text-align: center;"><i class="fa fa-hand-scissors-o"></i></p>
                                    <h4 style="text-align: center;">LEADERBOARD</h4>
                                    <p style="text-align: center;">Get listed on leaderboard and find your resumes forwarded by professionals of our community in their companies.</p>
                                </div>
                                <!-- .et_pb_text -->
                            </div>
                            <!-- .et_pb_column -->
                        </div>
                        <!-- .et_pb_row -->
                    </div>
                    <!-- .et_pb_section -->
                    <div class="et_pb_section et_pb_fullwidth_section  et_pb_section_2 et_section_regular">
                        <div class="et_pb_module et_pb_slider et_pb_slider_parallax et_slider_auto et_slider_speed_7000  et_pb_fullwidth_slider_1">
                            <div class="et_pb_slides">
                                <div class="et_pb_slide et_pb_bg_layout_dark et_pb_media_alignment_center et_pb_slide_1 et-pb-active-slide" style='background-color:#ffffff;'>
                                    <div class="et_parallax_bg et_pb_parallax_css" style="background-image: url(http://vprep.in/wp-content/uploads/2017/04/slider-bg.png);"></div>











                                    <!-- .et_pb_slide -->
                                    <div class="et_pb_slide et_pb_bg_layout_dark et_pb_media_alignment_center et_pb_slide_2" style='background-color:#ffffff;'>
                                        <div class="et_parallax_bg et_pb_parallax_css" style="background-image: url(http://vprep.in/wp-content/uploads/2017/04/slider-bg.png);"></div>
                                        <div class="et_pb_container clearfix">
                                            <div class="et_pb_slider_container_inner">
                                                <div class="et_pb_slide_description">
                                                    <div class="et_pb_slide_content">
                                                        <p style="
    font-style: italic;
">&#8221;I had low cgpa which was a problem and many companies rejected me... I was active on vprep. The test was really helpful. I got into cisco because of referrel from them. I switched in oracle with the help of community member of vprep. &#8221;</p>
                                                        <p><img class="alignnone size-thumbnail wp-image-163" style="border-radius: 50%;" src="http://vprep.in/wp-content/uploads/2017/04/sacchit.png" alt="" width="100" height="100" srcset="http://vprep.in/wp-content/uploads/2017/04/sacchit.png 150w, http://vprep.in/wp-content/uploads/2017/04/sacchit.png 300w, http://vprep.in/wp-content/uploads/2017/04/sacchit.png 500w" sizes="(max-width: 100px) 100vw, 100px"><br />
                                                            <br />
                                                            <strong><span style="color: #86bc42;">Sacchit</span></strong><br />
                                                            NIT Allahabad
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_slide_description -->
                                            </div>
                                        </div>
                                        <!-- .et_pb_container -->
                                    </div>
                                    <!-- .et_pb_slide -->
                                </div>
                                <!-- .et_pb_slides -->
                            </div>
                            <!-- .et_pb_slider -->
                        </div>
                        <!-- .et_pb_section -->




                        <div style="margin-left:20%; margin-top:20px; width:50%">
                            <iframe width="420" height="315"
                                    src="http://www.youtube.com/embed/Apb1UWziHi8?rel=0">
                            </iframe>
                        </div>











                        <!-- .et_pb_section -->
                        <div class="et_pb_section  et_pb_section_4 et_section_regular">
                            <div class=" et_pb_row et_pb_row_3">
                                <div class="et_pb_column et_pb_column_1_3  et_pb_column_5">
                                    <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_7">
                                        <h3 style="text-align: center;">ABOUT US</h3>
                                        <p style="text-align: center;">We are here to help students in developing and growing their skill sets and to find next generation of coders. We believe that each and every working professional can contribute to the community by helping others grow which is why we have developed our unique forum where professionals from industry help students in developing and enhancing their skill sets</p>
                                    </div>
                                    <!-- .et_pb_text -->
                                </div>
                                <!-- .et_pb_column -->
                                <div class="et_pb_column et_pb_column_1_3  et_pb_column_6">
                                    <div class="et_pb_module et-waypoint et_pb_image et_pb_animation_left et_pb_image_0 et_always_center_on_mobile">
                                        <img src="http://vprep.in/wp-content/uploads/2017/04/nascomm-10000startups.jpg" alt="" />
                                    </div>
                                </div>
                                <!-- .et_pb_column -->
                                <div class="et_pb_column et_pb_column_1_3  et_pb_column_7">
                                    <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_8">
                                        <h3 style="text-align: center;">CONTACT US</h3>
                                        <p style="text-align: center;">info@vprep.in<br />
                                            Call us: +91-9582428210<br />
                                        </p>
                                    </div>
                                    <!-- .et_pb_text -->
                                </div>
                                <!-- .et_pb_column -->
                            </div>
                            <!-- .et_pb_row -->
                        </div>
                        <!-- .et_pb_section -->
                    </div>
                    <!-- .entry-content -->
            </article>
            <!-- .et_pb_post -->
        </div>
        <!-- #main-content -->
        <footer id="main-footer">
            <div id="footer-bottom">
                <div class="container clearfix" style="margin-left:0px;">
                    <ul class="et-social-icons" style="float:left;">
                        <li class="et-social-icon et-social-facebook">
                                    <span style="display: inherit;
    color: white;
    font-size: 18px;">Follow us on </span><a href="http://www.facebook.com/vprep.in1" class="icon">
                            <span style="display: inherit;font-size:12px;">Facebook</span>
                        </a>
                        </li>
                        <!-- <li class="et-social-icon et-social-twitter">
                           <a href="#" class="icon">
                           <span>Twitter</span>
                           </a>
                        </li>
                        <li class="et-social-icon et-social-google-plus">
                           <a href="#" class="icon">
                           <span>Google</span>
                           </a>
                        </li>
                        <li class="et-social-icon et-social-rss">
                           <a href="http://vprep.in/feed/" class="icon">
                           <span>RSS</span>
                           </a>
                        </li>-->
                    </ul>
                    <p id="footer-info" style="width:75%;text-align:center;position:relative;top:5px;">VPrep © 2017</p>
                </div>
                <!-- .container -->
            </div>
        </footer>
        <!-- #main-footer -->
    </div>
    <!-- #et-main-area -->
</div>

<!-- modal -->
<div id="fsModal"
     class="modal animated bounceIn"
     tabindex="-1"
     role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- dialog -->
    <div class="modal-dialog">

        <!-- content -->
        <div class="modal-content">

            <!-- header -->
            <div class="modal-header">
                <h1 id="myModalLabel"
                    class="modal-title">
                    Modal title
                </h1>
            </div>
            <!-- header -->

            <!-- body -->
            <div class="modal-body">
                <div class="container" style="padding-top: 60px">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="panel panel-default">
                                <div class="panel-body" id="firstForgot">
                                    <div class="text-center">
                                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                                        <h2 class="text-center">Forgot Password?</h2>
                                        <p>Please enter your registered mobile number here.</p>
                                        <div class="panel-body">

                                            <form  role="form" autocomplete="off" class="form" method="post">

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-mobile" style="font-size:20px;"></i></span>
                                                        <input id="forgotMobile" name="email" placeholder="mobile number" class="form-control"  type="number">
                                                        <span id="forgotMobileError" style="color:red">Entered mobile is not registered. Please enter registered mobile.</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block" id="nextId" value="Next" type="button">
                                                </div>

                                                <input type="hidden" class="hide" name="token" id="token" value="">
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body" id="secondForgot">
                                    <div class="text-center">
                                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                                        <h2 class="text-center">Forgot Password?</h2>
                                        <p>Enter your generated OTP</p>
                                        <div class="panel-body">

                                            <form role="form" autocomplete="off" class="form" method="post">

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-mobile" style="font-size:20px;"></i></span>
                                                        <input id="forgotOTP" name="email" placeholder="Enter OTP" class="form-control"  type="number">
                                                        <span id="forgotOTPError" style="color:red">Entered OTP is not matched</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block" id="nextId2" value="Next" type="button">
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body" id="thirdForgot">
                                    <div class="text-center">
                                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                                        <h2 class="text-center">Forgot Password?</h2>
                                        <p>Enter New Password</p>
                                        <div class="panel-body">

                                            <form id="forgot-password-form"  action="http://test.vprep.in/frontend/update_password" role="form" autocomplete="off" class="form" method="post">

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-mobile" style="font-size:20px;"></i></span>
                                                        <input id="forgotPhoneId" name="phone" type="hidden">
                                                        <input id="forgotPassword" name="password" placeholder="Enter New Password" class="form-control"  type="password">
                                                        <span id="forgotPasswordError" style="color:red">password should not be blank.</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block" id="nextId3" value="Finish" type="submit">
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- body -->

            <!-- footer -->
            <div class="modal-footer">
                <button class="btn btn-secondary"
                        data-dismiss="modal" id="modalClose">
                    close
                </button>
                <button class="btn btn-default">
                    Default
                </button>
                <button class="btn btn-primary">
                    Primary
                </button>
            </div>
            <!-- footer -->

        </div>
        <!-- content -->

    </div>
    <!-- dialog -->

</div>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="height=80%;margin-top: 2%;">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top:12%;
    height: 100%;
">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <form id="mob-ajax-register-form" action="http://test.vprep.in/add_student.html" method="post" role="form" autocomplete="off" style="width: 100%">
                        <div class="form-group">
                            <input type="text" style="border-color:black" name="first_name"  required="required" id="mobFullName" tabindex="1" class="form-control" placeholder="Full Name" value="">
                        </div>
                        <div id="the-basics" class="form-group">
                            <input id="mobCollegeId" class="typeahead form-control" type="text" style="boder-color:black !important;width:100%!important;" placeholder="college name">
                            <input id="mobCollegeRefId" name="engineering_college_id" class="typeahead form-control" type="hidden" style="boder-color:black !important; font-size:10px;">
                            <span id="mobCollegeError" style="color:red">please select college from dropdown</span>
                        </div>
                        <div class="form-group">
                            <input type="text" style="border-color:black" name="username"  required="required" id="mobUpusername" tabindex="1" class="form-control" placeholder="Username" value="">
                            <span id="mobUserNameError" style="color:red">username already exists. please try with other username</span>
                        </div>
                        <div class="form-group">
                            <input type="email" style="border-color:black" name="email"  required="required" id="mobEmail" tabindex="2" class="form-control" placeholder="Email">
                            <span id="mobEmailError" style="color:red">please enter valid email Id</span>
                            <span id="mobEmailError2" style="color:red">email id already exists. please try with other email id</span>
                        </div>
                        <div class="form-group">
                            <input id="regpassword" style="border-color:black;width: 100%;" type="password" name="password" required="required"  tabindex="2" class="form-control" placeholder="password" value="">
                            <span id="mobCredId" style="color:red;">invalid username/password entered</span>
                        </div>
                        <div class="form-group">
                            <input type="text" style="border-color:black" name="phone"  id="mobPhone" required="required" tabindex="1" class="form-control" placeholder="phone" value="">
                            <span type="hidden" id="mobPhoneError" style="color:red">please enter valid phone number</span>
                            <span id="mobPhoneError2" style="color:red;font-size: 90%">This number is already registered.</span>
                        </div>

                        <div class="form-group">
                            <input type="text" style="border-color:black"  name="city"  id="mobCity" required="required" tabindex="1" class="form-control" placeholder="city" value="">
                        </div>
                        <div class="form-group">
                            <div class="btn btn-primary">
                                <input type="radio" name="gender" id="inlineRadio1" value="male" checked="checked"> Male
                            </div>
                            <label class="btn btn-primary">
                                <input type="radio" name="gender" id="inlineRadio2" value="female"> Female
                            </label>
                        </div>
                        <div class="form-group">
                            <button class="form-control btn btn-success" id="mobTestId" type=button >Generate OTP</button>
                            <input type="text" style="border-color:black;width:100%;" name="otp" id="mobOtpId" placeholder="Enter OTP"></input>
                            <span id="mobOtpError" style="color:red">OTP did not match. Try Again</span>
                            <button class="form-control btn btn-success" id="mobRetryOTP" type=button style="display:none">Retry OTP</button>
                            <button class="form-control btn btn-success" id="mobButtonOTP" type=button>Validate & Sign Up</button>


                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6 col-xs-offset-3">
                                    <button   id="mobRegister-submit" tabindex="4" class="form-control btn btn-info" style="color:white" value="Sign Up "><span>Sign Up</span></button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->

<!-- #page-container -->
<style type="text/css" id="et-builder-advanced-style">
    .et_pb_slider_0 .et_pb_slide_description, .et_pb_slider_fullwidth_off.et_pb_slider_0 .et_pb_slide_description { padding-top: 20px; padding-bottom: 0px; padding-right: 0; padding-left: 0; }
    .et_pb_image_0 { margin-left: 0; }
    .et_pb_slide_2.et_pb_slider_with_text_overlay .et_pb_slide_content { -webkit-border-bottom-right-radius: 3px;
        -webkit-border-bottom-left-radius: 3px;
        -moz-border-radius-bottomright: 3px;
        -moz-border-radius-bottomleft: 3px;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px; }
    .et_pb_slide_2.et_pb_slider_with_text_overlay h2.et_pb_slide_title { -webkit-border-top-left-radius: 3px;
        -webkit-border-top-right-radius: 3px;
        -moz-border-radius-topleft: 3px;
        -moz-border-radius-topright: 3px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px; }
    .et_pb_slide_1.et_pb_slider_with_text_overlay h2.et_pb_slide_title { -webkit-border-top-left-radius: 3px;
        -webkit-border-top-right-radius: 3px;
        -moz-border-radius-topleft: 3px;
        -moz-border-radius-topright: 3px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px; }
    .et_pb_slide_1.et_pb_slider_with_text_overlay .et_pb_slide_content { -webkit-border-bottom-right-radius: 3px;
        -webkit-border-bottom-left-radius: 3px;
        -moz-border-radius-bottomright: 3px;
        -moz-border-radius-bottomleft: 3px;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px; }
    .et_pb_section_1.et_pb_section { background-color:#0c71c3 !important; }
</style>
<style type="text/css" id="et-builder-page-custom-style">
    .et_pb_bg_layout_dark { color: #ffffff !important; } .page.et_pb_pagebuilder_layout #main-content { background-color: rgba(255,255,255,0); } .et_pb_section { background-color: #ffffff; }
</style>
<script type='text/javascript' src='http://vprep.in/wp-content/themes/Divi/includes/builder/scripts/frontend-builder-global-functions.js?ver=3.0.40'></script>
<script type='text/javascript' src='http://vprep.in/wp-content/themes/Divi/includes/builder/scripts/jquery.mobile.custom.min.js?ver=3.0.40'></script>
<script type='text/javascript' src='http://vprep.in/wp-content/themes/Divi/js/custom.js?ver=3.0.40'></script>
<script type='text/javascript' src='http://vprep.in/wp-content/themes/Divi/includes/builder/scripts/jquery.fitvids.js?ver=3.0.40'></script>
<script type='text/javascript' src='http://vprep.in/wp-content/themes/Divi/includes/builder/scripts/waypoints.min.js?ver=3.0.40'></script>
<script type='text/javascript' src='http://vprep.in/wp-content/themes/Divi/includes/builder/scripts/jquery.magnific-popup.js?ver=3.0.40'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var et_pb_custom = {"ajaxurl":"http:\/\/vprep.in\/wp-admin\/admin-ajax.php","images_uri":"http:\/\/vprep.in\/wp-content\/themes\/Divi\/images","builder_images_uri":"http:\/\/vprep.in\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"93e098b53a","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"5337493c2a","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","is_builder_plugin_used":"","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","is_ab_testing_active":"","page_id":"41","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":""};
    /* ]]> */
</script>
<script type='text/javascript' src='http://vprep.in/wp-content/themes/Divi/includes/builder/scripts/frontend-builder-scripts.js?ver=3.0.40'></script>
<script type='text/javascript' src='http://vprep.in/wp-includes/js/wp-embed.min.js?ver=4.7.5'></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='http://embed.tawk.to/5a06fec2198bd56b8c03a8d6/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
