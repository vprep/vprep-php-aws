<?php

/****************************************************
* Remember that header() must be called before any actual output is sent,
* either by normal HTML tags, blank lines in a file, or from PHP.
*****************************************************/
$id = $_GET["id"];
if (!isset($id)){
header("Location: http://beta.vprep.in?id=true");
}

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
    <title>Vprep - Placements preparation starts here</title>
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


    <title>Vprep | Home</title>
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
            .et_header_style_centered #top-menu > li > a { padding-bottom: 7px; }
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
    <title>Vprep</title>
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
        #top-menu li.current-menu-item > a
        {
            color:white;
        }
        #top-menu li.menu-item
        {
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
        #top-menu li.menu-item:hover
        {
            background-color: #57ad22;
            color:white;
        }
        #top-menu li.menu-item:hover > a
        {
            color:white;
        }
        .fa {
            font-size: 50px;
        }
        .nav>li>a:focus, .nav>li>a:hover {
            background-color: transparent;
        }
    </style>
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
    <style>

                                                                           /* Fixed navbar */
                                                                       body {
                                                                           padding-top: 90px;
                                                                       }
    /* General sizing */
    ul.dropdown-lr {
        width: 300px;
    }

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
        jQuery(document).on('click', '#testId', function (e) {
        var emailId = $('#email').val();
        
            if((!isNaN($('#phone').val())) && ($('#phone').val().length === 10) && validateEmail(emailId)){
            $('#phoneError').hide();
             $('#emailError').hide();
            sendOTP();
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
            $.ajax({
                url: "/test/otp/sendotp.php?phone="+filterVO.phone,
                method: "GET",
                success: function(data) {
                
                    var str = data.split("}");
                    otp = str[1];
                    $('#otpId').show();
                    $('#buttonOTP').show();
                }});
        };

        jQuery(document).on('click', '#buttonOTP', function (e) {
            var inputOtp = $('#otpId').val();
            var emailId = $('#email').val();
            var phoneNum = $('#phone').val();
            if(inputOtp === otp){
                if(!validateEmail(emailId)){

                    $('#emailError').show();
                }
                if(!validatePhone(phoneNum)){
                    $('#phoneError').show();
                }
                if(validateEmail(emailId) && validatePhone(phoneNum)){

                    $('#buttonOTP').show();
                    $('#otpError').hide();
                    $('#emailError').hide();
                    $('#register-submit').show();
                } else {

                    $('#otpError').show();
                }
            }});

        jQuery(document).on('click', '#showLoginId', function (e) {
       
            var cred = {};
            cred.username = $('#username').val();
            cred.password = $("#regpassword", $("#ajax-login-form")).val();
            //$("#regpassword", $("#ajax-login-form")).val();
          //  cred.password = document.loginForm.password.value;
            var link = 'http://test.vprep.in/frontend/login_validate/' + cred.username + '/' + cred.password ;
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
                    },
                    fail: function(status){
                    
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

        function validatePhone(txtPhone) {

            var filter = /^[0-9-+]+$/;
            if (filter.test(txtPhone)) {
                return true;
            }
            else {
                return false;
            }
        }
    </script>

</head>



<a style="display:none" href="http://vprep.in">Back</a>




<body class="home page-template-default page page-id-41 et_pb_button_helper_class et_fixed_nav et_show_nav et_cover_background et_pb_gutter osx et_pb_gutters3 et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns4 et_header_style_left et_pb_pagebuilder_layout et_right_sidebar et_divi_theme chrome">
<div id="page-container">
    <header id="main-header" data-height-onload="40">
        <div class="container clearfix et_menu_container" style="width:100%;margin-left:0px;margin-right:0px;max-width:100%">
            <div class="logo_container" style="float:left;">
                <span class="logo_helper"></span>
                <a href="http://vprep.in/">
                    <img src="http://vprep.in/wp-content/uploads/2017/04/logo.png" alt="vPrep" id="logo" data-height-percentage="75" />
                </a>
            </div>
            <div id="et-top-navigation" data-height="40" data-fixed-height="40">
                <nav id="top-menu-nav">
                    <ul id="top-menu" class="nav">
                        <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-41 current_page_item menu-item-50"><a href="http://vprep.in/">Home</a></li>
                        <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a href="http://vprep.in/pricing.html">Pricing</a></li>
                        <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a href="http://vprep.in/materials.php">Study Material</a></li>
                        <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a href="http://vprep.in/contact_us.php">Contact Us</a></li>

                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 dropdown">
                            <a href="http://test.vprep.in" class="dropdown-toggle" data-toggle="dropdown">Sign Up <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                                <div class="col-lg-12 col-xs-6">
                                    <!--    <div class="text-center" style="color: #0c0c0c">
                                   <h3><b>Sign Up</b></h3></div> -->
                                    <form id="ajax-register-form" action="http://test.vprep.in/add_student.html" method="post" role="form" autocomplete="off" style="width: 100%">
                                        <div class="form-group">
                                            <input type="text" name="first_name"  required="required" id="fullName" tabindex="1" class="form-control" placeholder="Full Name" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="username"  required="required" id="userName" tabindex="1" class="form-control" placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email"  required="required" id="email" tabindex="2" class="form-control" placeholder="Email">
                                            <span id="emailError" style="color:red">please enter valid email Id</span>
                                        </div>
                                        <div class="form-group">
                                            <input id="regpassword" type="password" name="password" required="required"  tabindex="1" class="form-control" placeholder="password" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone"  id="phone" required="required" tabindex="1" class="form-control" placeholder="phone" value="">
                                            <span type="hidden" id="phoneError" style="color:red">please enter valid phone number</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="city"  id="city" required="required" tabindex="1" class="form-control" placeholder="city" value="">
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
                                            <button class="form-control btn btn-success" id="testId" type=button >Generate OTP</button>
                                            <input type="text" name="otp" id="otpId" placeholder="Enter OTP"></input>
                                            <button class="form-control btn btn-success" id="buttonOTP" type=button>Validate OTP</button>
                                            <span id="otpError" style="color:red">OTP did not match. Try Again</span>

                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-6 col-xs-offset-3">
                                                    <button   id="register-submit" tabindex="4" class="form-control btn btn-info" style="color:white" value="Sign Up "><span>Sign Up</span></button>

                                                </div>
                                            </div>
                                        </div>
                                        <!--   <input type="hidden" class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0">-->
                                    </form>
                                </div>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign In <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu" style="left: -75%">
                                <div class="col-lg-12">
                                    <div class="text-center" style="color: #0c0c0c">
                                        <h3><b>Sign In</b></h3></div>
                                    <form name="loginForm"id="ajax-login-form" action="http://test.vprep.in/check-details.html" accept-charset="utf-8" method="post"  role="form" autocomplete="off">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                            <span type="hidden" style="color:red" id="userBlank">username should not be blank</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="regpassword">Password</label>
                                            <input id="regpassword" type="password" name="password"  tabindex="2" class="form-control form-input" placeholder="Password">
                                            <span id="credId" style="color:red;">invalid username/password entered</span>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-7">

                                                    <input type="checkbox" tabindex="3" name="remember" id="remember">
                                                    <label for="remember" style="color:black"> Remember Me</label>

                                                </div>
                                                <div class="col-xs-5 pull-right">
                                                    <input type="hidden" name="signin" id="loginId" tabindex="4" class="form-control btn btn-success" value="Sign In form">
                                                    <input type=button name="signin2" id="showLoginId" tabindex="4" class="form-control btn btn-success" value="Sign In">
                                                </div>
                                            </div>
                                        </div>
                                        <!--  <div class="form-group">
           <div class="row">
             <div class="col-lg-12">
                            <div class="text-center">
                                         <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                      </div>
                              </div>
                   </div>
                      </div> -->
                                        <!--  <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6"> -->
                                    </form>
                                </div>
                            </ul>
                        </li>



                    </ul>
                </nav>
                <div id="et_mobile_nav_menu">
                    <div class="mobile_nav closed">
                        <span class="select_page">Select Page</span>
                        <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                    </div>
                </div>
            </div>
            <!-- #et-top-navigation -->
        </div>
        <!-- .container -->
        <div class="et_search_outer">
            <div class="container et_search_form_container">
                <form role="search" method="get" class="et-search-form" action="http://vprep.in/">
                    <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
                </form>
                <span class="et_close_search_field"></span>
            </div>
        </div>
    </header>
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




                                                <a href='http://test.vprep.in/user-sign-up.html'><button style="
    margin-top: 10px;
    background: #0c71c3;
    color: white;
    height: 40px;
">Try it for free</button></a>
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