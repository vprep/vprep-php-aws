<!DOCTYPE html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="pingback" href="http://vprep.in/xmlrpc.php" />
    <!--[if lt IE 9]>
    <script src="http://vprep.in/wp-content/themes/Divi/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <script type="text/javascript">
        document.documentElement.className = 'js';


        $(document).ready(function() {
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
        .contact-head{
	background-color: #57ad22;
          }

     .contact-head > a{
	color: white !important;
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

                    $('#buttonOTP').show();
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

                    if ((emailStatus == 'true') && (userNameStatus == 'true')) {
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

    </style>

</head>
<body class="home page-template-default page page-id-41 et_pb_button_helper_class et_fixed_nav et_show_nav et_cover_background et_pb_gutter osx et_pb_gutters3 et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns4 et_header_style_left et_pb_pagebuilder_layout et_right_sidebar et_divi_theme chrome">
<div id="page-container">
    <?php echo file_get_contents('otp/test.php'); ?>
    <!-- #main-header -->

    <!-- #et-main-area -->
</div>
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
</body>
</html>





<style>
    .price_selected{
        background: #57ad22;

    }


</style>




























<html><head><script src="http://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
    <script src="http://cdn.jotfor.ms/static/jotform.forms.js?3.3.2455" type="text/javascript"></script>
    <script type="text/javascript"> JotForm.init(function(){ JotForm.highlightInputs = false; JotForm.alterTexts({"alphabetic":"This field can only contain letters","alphanumeric":"This field can only contain letters and numbers.","confirmClearForm":"Are you sure you want to clear the form","confirmEmail":"E-mail does not match","email":"Enter a valid e-mail address","generalError":"Please fill the required fields.","generalPageError":"Please fill the required fields.","gradingScoreError":"Score total should only be less than or equal to","incompleteFields":"Please complete required (*) fields.","inputCarretErrorA":"Input should not be less than the minimum value:","inputCarretErrorB":"Input should not be greater than the maximum value:","lessThan":"Your score should be less than","maxDigitsError":"The maximum digits allowed is","maxSelectionsError":"The maximum number of selections allowed is","minSelectionsError":"The minimum required number of selections is","multipleFileUploads_emptyError":"{file} is empty, please select files again without it.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","numeric":"This field can only contain numeric values","pastDatesDisallowed":"Date must not be in the past.","pleaseWait":"Please wait...","required":"This field is required.","requireEveryRow":"Every row is required.","requireOne":"At least one field required.","submissionLimit":"Sorry! Only one entry is allowed. Multiple submissions are disabled for this form.","uploadExtensions":"You can only upload following files:","uploadFilesize":"File size cannot be bigger than:"}); JotForm.clearFieldOnHide="disable"; /*INIT-END*/
        }); JotForm.prepareCalculationsOnTheFly([null,null,{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_textbox"},{"name":"email","qid":"4","text":"E-mail","type":"control_textbox"},{"name":"contactNumber","qid":"5","text":"Contact Number","type":"control_textbox"},{"name":"website","qid":"6","text":"Website","type":"control_textbox"},{"name":"message","qid":"7","text":"Message","type":"control_textarea"},null,null,{"name":"contactUs","qid":"10","text":"Contact Us","type":"control_head"}]); setTimeout(function() {
            JotForm.paymentExtrasOnTheFly([null,null,{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_textbox"},{"name":"email","qid":"4","text":"E-mail","type":"control_textbox"},{"name":"contactNumber","qid":"5","text":"Contact Number","type":"control_textbox"},{"name":"website","qid":"6","text":"Website","type":"control_textbox"},{"name":"message","qid":"7","text":"Message","type":"control_textarea"},null,null,{"name":"contactUs","qid":"10","text":"Contact Us","type":"control_head"}]);}, 20); </script>
    <link href="http://cdn.jotfor.ms/static/formCss.css?3.3.2455" rel="stylesheet" type="text/css">
    <link type="text/css" media="print" rel="stylesheet" href="http://cdn.jotfor.ms/css/printForm.css?3.3.2455">
    <link type="text/css" rel="stylesheet" href="http://cdn.jotfor.ms/css/styles/nova.css?3.3.2455">
    <link type="text/css" rel="stylesheet" href="http://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=58c6459d9a11c7136a8b4567">
    <style type="text/css"> .form-label-left{ width:150px; } .form-line{ padding-top:12px; padding-bottom:12px; } .form-label-right{ width:150px; } .form-all{ width:472px; color:#555 !important; font-family:'Copse'; font-size:16px; } .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{ color: #57ad22; } </style> <style type="text/css" id="form-designer-style"> /* Injected CSS Code */
        @import "http://fonts.googleapis.com/css?family=Copse:light,lightitalic,normal,italic,bold,bolditalic";
        .form-all { font-family: "Copse", sans-serif;
        }
        .form-all { width: 32%px;margin-left: 32%;float:left;
        }
        .form-label-left,
        .form-label-right { width: 150px;
        }
        .form-label { white-space: normal;
        }
        .form-label.form-label-auto { display: inline-block; float: left; text-align: left; width: 150px;
        }
        .form-label-left { display: inline-block; white-space: normal; float: left; text-align: left;
        }
        .form-label-right { display: inline-block; white-space: normal; float: left; text-align: right;
        }
        .form-label-top { white-space: normal; display: block; float: none; text-align: left;
        }
        .form-radio-item label:before { top: 0;
        }
        .form-all { font-size: 16px;
        }
        .form-label { font-weight: normal; font-size: 0.95em;
        }
        .supernova { background-color: #ffffff; background-color: #f5f5f5;
        }
        .supernova body { background-color: transparent;
        }
        /*
        @width30: (unit(@formWidth, px) + 60px);
        @width60: (unit(@formWidth, px)+ 120px);
        @width90: (unit(@formWidth, px)+ 180px);
        */
        /* | */
        @media screen and (min-width: 480px) { .supernova .form-all { border: 1px solid #dcdcdc; -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1); -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1); box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1); }
        }
        /* | */
        /* | */
        @media screen and (max-width: 480px) { .jotform-form { padding: 10px 0; }
        }
        /* | */
        /* | */
        @media screen and (min-width: 480px) and (max-width: 768px) { .jotform-form { padding: 30px 0; }
        }
        /* | */
        /* | */
        @media screen and (min-width: 480px) and (max-width: 471px) { .jotform-form { padding: 30px 0; }
        }
        /* | */
        /* | */
        @media screen and (min-width: 768px) { .jotform-form { padding: 60px 0; }
        }
        /* | */
        /* | */
        @media screen and (max-width: 471px) { .jotform-form { padding: 12px; }
        }
        /* | */
        .supernova .form-all,
        .form-all { background-color: #ffffff; border: 1px solid transparent;
        }
        .form-header-group { border-color: #57ad22;
        }
        .form-matrix-table tr { border-color: #e6e6e6;
        }
        .form-matrix-table tr:nth-child(2n) { background-color: #f2f2f2;
        }
        .form-all { color: #555555;
        }
        .form-header-group .form-header { color: #555555;
        }
        .form-header-group .form-subHeader { color: #6f6f6f;
        }
        .form-sub-label { color: #6f6f6f;
        }
        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html { color: #6f6f6f;
        }
        .form-checkbox-item label,
        .form-radio-item label { color: #555555;
        }
        .form-line.form-line-active { -webkit-transition-property: all; -moz-transition-property: all; -ms-transition-property: all; -o-transition-property: all; transition-property: all; -webkit-transition-duration: 0.3s; -moz-transition-duration: 0.3s; -ms-transition-duration: 0.3s; -o-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease; -moz-transition-timing-function: ease; -ms-transition-timing-function: ease; -o-transition-timing-function: ease; transition-timing-function: ease; background-color: rgba(255, 255, 224, 0);
        }
        /* omer */
        .form-radio-item,
        .form-checkbox-item { padding-bottom: 0px !important;
        }
        .form-radio-item:last-child,
        .form-checkbox-item:last-child { padding-bottom: 0;
        }
        /* omer */
        .form-single-column .form-checkbox-item,
        .form-single-column .form-radio-item { width: 100%;
        }
        .supernova { height: 100%; background-repeat: no-repeat; background-attachment: scroll; background-position: center top; background-repeat: repeat;
        }
        .supernova { background-image: none;
        }
        #stage { background-image: none;
        }
        /* | */
        .form-all { background-repeat: no-repeat; background-attachment: scroll; background-position: center top; background-repeat: repeat;
        }
        .form-header-group { background-repeat: no-repeat; background-attachment: scroll; background-position: center top; background-repeat: repeat; background-attachment: fixed; background-size: auto;
        }
        .form-line { margin-top: 0px; margin-bottom: 0px;
        }
        .form-line { padding: 12px 36px;
        }
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print { -webkit-border-radius: 100px; -moz-border-radius: 100px; border-radius: 100px;
        }
        .form-all .form-sub-label { margin-left: 3px;
        }
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print { font-size: 1em; padding: 9px 15px; font-family: "Copse", sans-serif; font-size: 16px; font-weight: normal;
        }
        .form-all .form-pagebreak-back,
        .form-all .form-pagebreak-next { font-size: 1em; padding: 9px 15px; font-family: "Copse", sans-serif; font-size: 16px; font-weight: normal;
        }
        /*
        & when ( @buttonFontType = google ) { @import (css) "@{buttonFontLink}";
        }
        */
        h2.form-header { line-height: 1.618em; font-size: 1.714em;
        }
        h2 ~ .form-subHeader { line-height: 1.5em; font-size: 1.071em;
        }
        .form-header-group { text-align: center;
        }
        /*.form-dropdown,
        .form-radio-item,
        .form-checkbox-item,
        .form-radio-other-input,
        .form-checkbox-other-input,*/
        .form-captcha input,
        .form-spinner input,
        .form-error-message { padding: 4px 3px 2px 3px;
        }
        .form-header-group { font-family: "Copse", sans-serif;
        }
        .form-section { padding: 0px 0px 0px 0px;
        }
        .form-header-group { margin: 0px 0px 0px 0px;
        }
        .form-header-group { padding: 36px 36px 36px 36px;
        }
        .form-header-group .form-header,
        .form-header-group .form-subHeader { color: #ffffff;
        }
        .form-header-group { background-color: #57ad22;
        }
        .form-textbox,
        .form-textarea { padding: 4px 3px 2px 3px;
        }
        .form-textbox,
        .form-textarea,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input { background-color: #ffffff;
        }
        [data-type="control_dropdown"] .form-input,
        [data-type="control_dropdown"] .form-input-wide { width: 150px;
        }
        .form-label { font-family: "Copse", sans-serif;
        }
        li[data-type="control_image"] div { text-align: left;
        }
        li[data-type="control_image"] img { border: none; border-width: 0px !important; border-style: solid !important; border-color: false !important;
        }
        .form-line-column { width: auto;
        }
        .form-line-error { background-color: #ffffff; -webkit-box-shadow: inset 0px 3px 11px -7px #ff3200; -moz-box-shadow: inset 0px 3px 11px -7px #ff3200; box-shadow: inset 0px 3px 11px -7px #ff3200;
        }
        .form-line-error input:not(#coupon-input),
        .form-line-error textarea,
        .form-line-error .form-validation-error { -webkit-transition-property: none; -moz-transition-property: none; -ms-transition-property: none; -o-transition-property: none; transition-property: none; -webkit-transition-duration: 0.3s; -moz-transition-duration: 0.3s; -ms-transition-duration: 0.3s; -o-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease; -moz-transition-timing-function: ease; -ms-transition-timing-function: ease; -o-transition-timing-function: ease; transition-timing-function: ease; border: 1px solid #fff4f4; -moz-box-shadow: 0 0 3px #fff4f4; -webkit-box-shadow: 0 0 3px #fff4f4; box-shadow: 0 0 3px #fff4f4;
        }
        .form-line-error .form-error-message { margin: 0; position: absolute; color: #fff; display: inline-block; right: 0; font-size: 10px; position: absolute!important; box-shadow: none; top: 0px; line-height: 20px; color: #FFF; background: #ff3200; padding: 0px 5px; bottom: auto; min-width: 105px; -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;
        }
        .form-line-error .form-error-message img,
        .form-line-error .form-error-message .form-error-arrow { display: none;
        }
        .ie-8 .form-all { margin-top: auto; margin-top: initial;
        }
        .ie-8 .form-all:before { display: none;
        }
        /* | */
        @media screen and (max-width: 480px), screen and (max-device-width: 768px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) { .testOne { letter-spacing: 0; } .jotform-form { padding: 12px 0 0 0; } .form-all { border: 0; width: 94%!important; max-width: initial; } .form-sub-label-container { width: 100%; margin: 0; margin-right: 0; float: left; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; } span.form-sub-label-container + span.form-sub-label-container { margin-right: 0; } .form-sub-label { white-space: normal; } .form-address-table td, .form-address-table th { padding: 0 1px 10px; } .form-submit-button, .form-submit-print, .form-submit-reset { width: 100%; margin-left: 0!important; } div[id*=at_] { font-size: 14px; font-weight: 700; height: 8px; margin-top: 6px; } .showAutoCalendar { width: 20px; } img.form-image { max-width: 100%; height: auto; } .form-matrix-row-headers { width: 100%; word-break: break-all; min-width: 40px; } .form-collapse-table, .form-header-group { margin: 0; } .form-collapse-table { height: 100%; display: inline-block; width: 100%; } .form-collapse-hidden { display: none !important; } .form-input { width: 100%; } .form-label { width: 100% !important; } .form-label-left, .form-label-right { display: block; float: none; text-align: left; width: auto!important; } .form-line, .form-line.form-line-column { padding: 2% 5%; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; } input[type=text], input[type=email], input[type=tel], textarea { width: 100%; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; max-width: initial !important; } .form-dropdown, .form-textarea, .form-textbox { width: 100%!important; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; } .form-input, .form-input-wide, .form-textarea, .form-textbox, .form-dropdown { max-width: initial!important; } .form-address-city, .form-address-line, .form-address-postal, .form-address-state, .form-address-table, .form-address-table .form-sub-label-container, .form-address-table select, .form-input { width: 100%; } div.form-header-group { padding: 36px 36px !important; padding-left: 5%!important; padding-right: 5%!important; margin: 0 0px 2% !important; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; } div.form-header-group.hasImage img { max-width: 100%; } [data-type="control_button"] { margin-bottom: 0 !important; } [data-type=control_fullname] .form-sub-label-container { width: 48%; } [data-type=control_fullname] .form-sub-label-container:first-child { margin-right: 4%; } [data-type=control_phone] .form-sub-label-container { width: 65%; } [data-type=control_phone] .form-sub-label-container:first-child { width: 31%; margin-right: 4%; } [data-type=control_datetime] .form-sub-label-container + .form-sub-label-container, [data-type=control_datetime] .form-sub-label-container:first-child { width: 27.3%; margin-right: 6%; } [data-type=control_datetime] .form-sub-label-container + .form-sub-label-container + .form-sub-label-container { width: 33.3%; margin-right: 0; } [data-type=control_datetime] span + span + span > span:first-child { display: block; width: 100% !important; } [data-type=control_birthdate] .form-sub-label-container, [data-type=control_datetime] span + span + span > span:first-child + span + span, [data-type=control_time] .form-sub-label-container { width: 27.3%!important; margin-right: 6% !important; } [data-type=control_birthdate] .form-sub-label-container:last-child, [data-type=control_time] .form-sub-label-container:last-child { width: 33.3%!important; margin-right: 0 !important; } .form-pagebreak-back-container, .form-pagebreak-next-container { width: 50% !important; } .form-pagebreak-back, .form-pagebreak-next, .form-product-item.hover-product-item { width: 100%; } .form-pagebreak-back-container { padding: 0; text-align: right; } .form-pagebreak-next-container { padding: 0; text-align: left; } .form-pagebreak { margin: 0 auto; } .form-buttons-wrapper { margin: 0!important; margin-left: 0!important; } .form-buttons-wrapper button { width: 100%; } .form-buttons-wrapper .form-submit-print { margin: 0 !important; } table { width: 100%!important; max-width: initial!important; } table td + td { padding-left: 3%; } .form-checkbox-item, .form-radio-item { white-space: normal!important; } .form-checkbox-item input, .form-radio-item input { width: auto; } .form-collapse-table { margin: 0 5%; display: block; zoom: 1; width: auto; } .form-collapse-table:before, .form-collapse-table:after { display: table; content: ''; line-height: 0; } .form-collapse-table:after { clear: both; } .fb-like-box { width: 98% !important; } .form-error-message { clear: both; bottom: -10px; } .date-separate, .phone-separate { display: none; } .custom-field-frame, .direct-embed-widgets, .signature-pad-wrapper { width: 100% !important; }
        }
        /* | */ /*__INSPECT_SEPERATOR__*/
        /*---------------------
        Theme: Contact Form wHeader and Footer
        Author: Elton Cris - idarktech@jotform.com
        www.jotform.com
        ----------------------*/
        .form-all { -moz-box-sizing : border-box; -webkit-box-sizing : border-box; box-sizing : border-box; border : none !important;
        } [data-type="control_head"] { padding-bottom : 20px;
          } .form-header-group { border-bottom : 4px solid #4063ae; box-shadow : inset 0 0px 1px #fff; border-top : 1px solid #3e3e3e !important;
            } /*responsive fields*/
        [data-type="control_textbox"] .form-textbox, [data-type="control_fullname"] .form-textbox,
        [data-type="control_email"] .form-textbox,
        [data-type="control_textarea"] .form-textarea, [data-type="control_dropdown"] .form-dropdown { width : 100% !important; max-width : none !important;
        } .form-textbox, .form-textarea, .form-dropdown { max-width : none !important; box-shadow : none; outline : none; box-sizing : border-box; -webkit-box-sizing : border-box; -moz-box-sizing : border-box; font-family : inherit; padding : 4px;
          } .form-textarea-limit>span { display : block;
            } [data-type="control_dropdown"] .form-input, [data-type="control_dropdown"] .form-input-wide { width : 100%;
              } /*input focus*/
        .form-line-active input:focus, .form-line-active textarea:focus, .form-line-active select:focus { box-shadow : none;
        } /*reset error*/
        .form-line-error { box-shadow : none;
        } /*input error*/
        .form-line-error input:not(#coupon-input), .form-line-error textarea, .form-line-error select, .form-line-error .form-validation-error { border : 1px solid #e15353 !important; box-shadow : none !important;
        } .form-line-active { color : inherit !important;
          } /*responsive content -wide or shrink*/
        .form-label { width : 35% !important; box-sizing : border-box; -webkit-box-sizing : border-box; -moz-box-sizing : border-box;
        } .form-label-top { width : 100% !important;
          } .form-line { box-sizing : border-box; -webkit-box-sizing : border-box; -moz-box-sizing : border-box; width : 100%;
            } .form-checkbox-other-input { width : 80% !important;
              } .form-input { width : 65% !important; max-width : none !important;
                } .form-input-wide { max-width : none !important; display : inline-block; width : 100%;
                  } /*single fields with sublabels*/
        [data-type="control_textbox"] .form-input-wide .form-sub-label-container, [data-type="control_fullname"] .form-input-wide .form-sub-label-container,
        [data-type="control_email"] .form-input-wide .form-sub-label-container,
        [data-type="control_textarea"] .form-input-wide .form-sub-label-container, [data-type="control_dropdown"] .form-input-wide .form-sub-label-container,
        [data-type="control_textbox"] .form-input .form-sub-label-container, [data-type="control_fullname"] .form-input .form-sub-label-container,
        [data-type="control_email"] .form-input .form-sub-label-container,
        [data-type="control_textarea"] .form-input .form-sub-label-container, [data-type="control_dropdown"] .form-input .form-sub-label-container { width : 100%; max-width : none !important;
        } [data-type="control_dropdown"] .form-input-wide { width : 100%;
          } /*responsive full name*/
        [data-type="control_fullname"] .form-sub-label-container { width : 50% !important; margin : 0; float : left; box-sizing : border-box;
        } [data-type="control_fullname"] .form-label + div .form-sub-label-container { display : inline-block; padding-right : 5px;
          } [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container { margin-right : 0; padding-right : 0; padding-left : 5px;
            } [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container { margin-right : 0; padding-right : 0; padding-left : 5px;
              } [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container + .form-sub-label-container { padding-left : 0; padding-right : 5px;
                } [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container + .form-sub-label-container + .form-sub-label-container { padding-left : 5px; padding-right : 0;
                  } [data-type="control_fullname"] .form-label + div .form-sub-label-container + .form-sub-label-container + .form-sub-label-container + .form-sub-label-container + .form-sub-label-container { padding-right : 5px; padding-left : 0;
                    } #sublabel_prefix, #sublabel_first, #sublabel_middle { /*margin-bottom : 10px; */;
                      } /*remove sepatators on date and phone*/
        .phone-separate, .date-separate { display : none;
        } /*responsive phone fields*/
        [data-type="control_phone"] input[name$="[area]"] { width : 100%;
        } [data-type="control_phone"] input[name$="[phone]"] { width : 100%;
          } [data-type="control_phone"] input[name$="[full]"] { width : 100%;
            } [data-type="control_phone"] .form-sub-label-container { width : 40%; float : left; box-sizing : border-box; margin-right : 0; padding-right : 12px;
              } /* responsive date time field */
        [data-type="control_datetime"] .form-textbox,
        [data-type="control_datetime"] .form-dropdown { width : 100%;
        } [data-type="control_datetime"] .form-sub-label-container { width : 28%; padding-left : 4px; box-sizing : border-box; margin-right : 0;
          } [data-type="control_datetime"] .form-sub-label-container:first-child { padding-left : 0;
            } [data-type="control_datetime"] .form-sub-label-container:first-child + .form-sub-label-container + .form-sub-label-container { padding-right : 0;
              } [data-type="control_datetime"] .form-sub-label-container:last-child { width : auto !important;
                } .allowTime-container .form-sub-label-container:last-child { width : 20% !important;
                  } span.allowTime-container { width : 80%; padding-top : 14px;
                    } .allowTime-container span.form-sub-label-container { width : 35%;
                      } span.allowTime-container .form-dropdown { width : 100%;
                        } span.allowTime-container > span:first-child { display : none;
                          } span.allowTime-container > span:first-child + span { padding-left : 0;
                            } .showAutoCalendar + label { display : none;
                              } span.allowTime-container + span { padding-top : 14px;
                                } /*calendar lite mode*/
        [data-type="control_datetime"] div[style*="none"] + .form-sub-label-container { width : 84%; padding-left : 0;
        } /*responsive phone field*/
        [data-type="control_phone"] .form-sub-label-container + .form-sub-label-container { width : 60%; margin-right : 0; padding-right : 0; padding-left : 12px;
        } /*responsive full address fields*/
        .form-address-city, .form-address-line, .form-address-postal, .form-address-state, .form-address-table, .form-address-table .form-sub-label-container, .form-address-table select { width : 100%; max-width : 100%;
        } [data-type="control_address"] input[name$="[city]"],
          [data-type="control_address"] input[name$="[postal]"] { width : 90% !important;
          } [data-type="control_address"] input[name$="[area]"] { width : 60%;
            } /*reset submit button*/
        [data-type="control_button"] { margin-top : 20px; background : url('http://shots.jotform.com/elton/6937_footer.png') repeat-x !important; margin-bottom : 0; padding-top : 30px; padding-bottom : 30px;
        } .form-submit-button,
          .form-submit-reset,
          .form-submit-print { outline : none;
          } /*remove other checkbox*/
        .form-checkbox-other, .form-radio-other { visibility : hidden !important;
        } /*shruken fields*/
        .form-line-column { width : 50%;
        } .form-line-column .form-label-top { width : 100% !important;
          } /*fix form builder display*/
        div#stage.form-all { max-width : none !important; margin-right : 0;
        } div#stage .form-input { width : 64% !important;
          } /*remove first pagebreak back button*/
        .form-all .page-section:first-child .form-pagebreak .form-pagebreak-back-container { display : none !important;
        } /* responsive pagebreak */
        .form-pagebreak-back-container { width : 50% !important; text-align : left; box-sizing : border-box; -webkit-box-sizing : border-box; float : left;
        } .form-pagebreak-next-container { width : 50% !important; text-align : right; box-sizing : border-box; -webkit-box-sizing : border-box; float : left;
          } /* radio-checkbox button make border 1px */
        .form-radio-item:not(#foo) label:after,
        .form-radio-item:not(#foo) label:before { border-radius : 50%;
        } .form-checkbox-item:not(#foo) label:after,
          .form-checkbox-item:not(#foo) label:before { border-radius : 0;
          } .form-radio-item:not(#foo) label:before,
            .form-checkbox-item:not(#foo) label:before { border-width : 1px;
            } /*responsive credit card on payment fields*/
        table td + td { padding-left : 0;
        } .form-address-table { width : 100%;
          } [data-type="control_stripe"] .form-address-table,
            [data-type="control_stripe"] .form-address-table .form-textbox,
            [data-type="control_authnet"] .form-address-table,
            [data-type="control_authnet"] .form-address-table .form-textbox,
            #creditCardTable.form-address-table,
            #creditCardTable.form-address-table .form-textbox { max-width : none;
            } [data-type="control_stripe"] .form-address-table td:last-child .form-sub-label-container,
              [data-type="control_authnet"] .form-address-table td:last-child .form-sub-label-container,
              #creditCardTable.form-address-table td:last-child .form-sub-label-container { margin-left : 0; white-space : normal;
              } [data-type="control_stripe"] .form-address-table td .form-sub-label-container,
                [data-type="control_authnet"] .form-address-table td .form-sub-label-container,
                #creditCardTable.form-address-table td .form-sub-label-container { width : 100%;
                } [data-type="control_stripe"] .form-address-table .form-textbox,
                  [data-type="control_stripe"] .form-address-table .form-dropdown,
                  [data-type="control_authnet"] .form-address-table .form-textbox,
                  [data-type="control_authnet"] .form-address-table .form-dropdown,
                  #creditCardTable.form-address-table .form-textbox,
                  #creditCardTable.form-address-table .form-dropdown { width : 100%; visibility : visible;
                  } [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr td:first-child span,
                    [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr td:first-child span,
                    #creditCardTable.form-address-table tbody > tr:first-child + tr td:first-child span { margin : 0; padding-right : 6px; box-sizing : border-box; -webkit-box-sizing : border-box;
                    } [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr td:first-child + td span,
                      [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr td:first-child + td span,
                      #creditCardTable.form-address-table tbody > tr:first-child + tr td:first-child + td span { margin : 0; padding-left : 6px; box-sizing : border-box; -webkit-box-sizing : border-box;
                      } [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span,
                        [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span,
                        [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span,
                        [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span,
                        #creditCardTable.form-address-table tbody > tr:first-child + tr +tr td:first-child span,
                        #creditCardTable.form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span { margin : 0; padding-right : 6px; width : 50% !important; visibility : hidden; float : left; box-sizing : border-box; -webkit-box-sizing : border-box;
                        } [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span + span,
                          [data-type="control_stripe"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span + span,
                          [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr td:first-child span + span,
                          [data-type="control_authnet"] .form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span + span,
                          #creditCardTable.form-address-table tbody > tr:first-child + tr +tr td:first-child span + span,
                          #creditCardTable.form-address-table tbody > tr:first-child + tr +tr+tr td:first-child span + span { margin : 0; padding-top : 0 !important; padding-right : 0; padding-left : 6px; width : 50% !important; box-sizing : border-box; -webkit-box-sizing : border-box;
                          } .cc_ccv { width : 100% !important;
                            } [data-type="control_stripe"] .form-address-table .form-sub-label,
                              [data-type="control_authnet"] .form-address-table .form-sub-label,
                              #creditCardTable.form-address-table .form-sub-label { visibility : visible;
                              } /*cc fix city state, country */
        [data-type="control_stripe"] .form-address-table td[width="50%"]>span:first-child,
        [data-type="control_authnet"] .form-address-table td[width="50%"]>span:first-child,
        #creditCardTable.form-address-table td[width="50%"]>span:first-child { box-sizing : border-box; padding-right : 7px;
        } [data-type="control_stripe"] .form-address-table td[width="50%"] + td >span:first-child,
          [data-type="control_authnet"] .form-address-table td[width="50%"] + td >span:first-child,
          #creditCardTable.form-address-table td[width="50%"] + td >span:first-child { box-sizing : border-box; padding-left : 7px;
          } [data-type="control_stripe"] .form-address-table td[width="50%"] + td[width="50%"] >span:first-child,
            [data-type="control_authnet"] .form-address-table td[width="50%"] + td[width="50%"] >span:first-child,
            #creditCardTable.form-address-table td[width="50%"] + td[width="50%"] >span:first-child { box-sizing : border-box; padding-right : 0;
            } .hover-product-item:hover { color : inherit;
              } /*fix for braintree cc styling*/
        [data-type="control_braintree"] .form-sub-label-container { width : 100% !important; padding : 4px; box-sizing : border-box;
        } [data-type="control_braintree"] .form-textbox { width : 100%;
          } .braintree-hosted-fields { width : 100% !important; box-sizing : border-box; min-height : 28px;
            } /*remove bottom spacing on CC section*/
        #creditCardTable.form-address-table tbody tr + tr + tr td,
        [data-type="control_stripe"] .form-address-table tbody tr + tr + tr td,
        [data-type="control_authnet"] .form-address-table tbody tr + tr + tr td { padding-bottom : 0;
        } @media screen and (max-width:768px){ .form-all { margin : 0 auto !important; } [data-type=control_fullname] .form-sub-label-container:first-child { margin-right : 0; } } @media screen and (max-width:480px){ .jotform-form { padding : 0; } .form-input { width : 100% !important; } .form-label { width : 100% !important; float : none !important; } .form-line-column { width : 100% !important; } div.form-header-group { margin : 0 !important; padding : 24px 20px !important; } [data-type="control_datetime"] .form-sub-label-container { float : left; } [data-type=control_fullname] .form-sub-label-container:first-child { margin-right : 0; } } /* Injected CSS Code */
    </style> <link type="text/css" rel="stylesheet" href="http://cdn.jotfor.ms/css/styles/buttons/form-submit-button-book_blue2.css?3.3.2455">
</head><body>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php if(isset($_GET["confirm"])): ?>
    <div style="
    text-align: center;
    color: green;
">Your query is submitted.</div>
<?php endif; ?>
<form class="jotform-form" action="/mail_contact_us.php" method="post" name="form_73070252224445" id="73070252224445" accept-charset="utf-8">
    <input type="hidden" name="formID" value="73070252224445">
    <div class="form-all">
        <ul class="form-section page-section">
            <li id="cid_10" class="form-input-wide" data-type="control_head" style="margin-top: 1%">
                <div class="form-header-group ">
                    <div class="header-text httac htvam">
                        <h2 id="header_10" class="form-header" data-component="header"> Contact Us </h2>
                    </div>
                </div>
            </li>
            <li class="form-line jf-required" data-type="control_textbox" id="id_3">
                <label class="form-label  form-label-left form-label-auto" id="label_3" for="input_3"> Name <span class="form-required"> * </span> </label>
                <div id="cid_3" class="form-input jf-required"> <input type="text" id="input_3" name="q3_name" data-type="input-textbox" class="form-textbox validate[required]" size="35" value="" placeholder=" " data-component="textbox" required=""> </div>
            </li>
            <li class="form-line jf-required" data-type="control_textbox" id="id_4">
                <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> E-mail <span class="form-required"> * </span> </label>
                <div id="cid_4" class="form-input jf-required"> <input type="text" id="input_4" name="q4_email" data-type="input-textbox" class="form-textbox validate[required]" size="35" value="" placeholder=" " data-component="textbox" required=""> </div>
            </li>
            <li class="form-line jf-required" data-type="control_textbox" id="id_5">
                <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> Contact Number <span class="form-required"> * </span> </label>
                <div id="cid_5" class="form-input jf-required"> <input type="text" id="input_5" name="q5_contactNumber" data-type="input-textbox" class="form-textbox validate[required]" size="35" value="" placeholder=" " data-component="textbox" required=""> </div>
            </li>

            <li class="form-line jf-required" data-type="control_textarea" id="id_7">
                <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7"> Message <span class="form-required"> * </span> </label>
                <div id="cid_7" class="form-input jf-required"> <textarea id="input_7" class="form-textarea validate[required]" name="q7_message" cols="38" rows="7" data-component="textarea" required=""></textarea> </div>
            </li>
            <li class="form-line" data-type="control_button" id="id_2">
                <div id="cid_2" class="form-input-wide">
                    <div style="text-align:center;" class="form-buttons-wrapper"> <button id="input_2" type="submit" class="form-submit-button form-submit-button-book_blue2" data-component="button"> Submit </button> </div>
                </div>
            </li>
            <li style="display:none"> Should be Empty: <input type="text" name="website" value=""> </li>
        </ul>
    </div>
    <div style="
    padding-right: 10%;
    float: right;
    color: green; margin-top: 1%;
">Contact Us:<br>info@vprep.in<br>+91-9582428210</div>
    <script> JotForm.showJotFormPowered = "new_footer"; </script> <input type="hidden" id="simple_spc" name="simple_spc" value="73070252224445"> <script type="text/javascript"> document.getElementById("si" + "mple" + "_spc").value = "73070252224445-73070252224445"; </script>
    <div class="formFooter-heightMask"> </div>
</form>





<script type="text/javascript">JotForm.ownerView=true;</script></body></html>