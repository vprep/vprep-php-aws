<style type="text/css">
    #mobLiSignIn {display: none}
    @media only screen and (min-width:400px) and (max-width:699px)
    {
        #clickSignIn {display: none}
        #mobLiSignIn {display: inherit}
    }
    @media only screen and (min-width:100px) and (max-width:399px)
    {
        #clickSignIn {display: none}
        #mobLiSignIn {display: inherit}
    }
    @media only screen and (min-width:400px) and (max-width:800px)
    {
        #clickSignIn {display: none}
        #mobLiSignIn {display: inherit}
        #common-nav li.menu-item {
    padding-top: 10px;
    padding-left: 16px;
    padding-right: 16px;
}
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $('#mobInCredId').hide();    
    });
    
    jQuery(document).on('click', '#mobShowLoginId', function (e) {
        var cred = {};
        cred.username = $('#mobUsername').val();
        cred.password = $("#mobRegpassword", $("#mob-ajax-login-form")).val();
        var link = 'http://test.vprep.in/frontend/login_validate?username=' + cred.username + '&userpass=' + cred.password ;
        if(cred.username==""){

            $('#mobUserBlank').show();
        } else {

            jQuery.ajax({
                type: "GET",
                url: link,
                success: function (data) {
                    if(data==='success'){
                        $( "#mob-ajax-login-form" ).submit();
                    } else {
                        $('#mobInCredId').show();
                    }
                }
            });
        }
    });


</script>

<header id="main-header" data-height-onload="40">

    <div class="container clearfix et_menu_container" style="width:100%;margin-left:0px;margin-right:0px;max-width:100%">
        <div class="logo_container" style="float:left;">
            <span class="logo_helper"></span>
            <a href="http://vprep.in/">
                <img src="http://vprep.in/wp-content/uploads/2017/04/logo.png" alt="vPrep" id="logo" data-height-percentage="75" />
            </a>
        </div>
        <div id="et-top-navigation" data-height="40" data-fixed-height="40">
            <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: white" role="navigation">
                <!--         <div class="container-fluid">-->
                <div class="navbar-header">
                    <button id="mobNavId" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="http://vprep.in/">
                        <img src="http://vprep.in/wp-content/uploads/2017/04/logo.png" alt="vPrep" id="logo" data-height-percentage="30" />
                    </a>
                </div>
                <div id="navbar"  class="navbar-collapse collapse" style="background: linear-gradient(90deg,rgba(33, 16, 17, 0.9), rgba(55, 43, 71, 0.9) );
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);">
                    <ul id="common-nav" class="nav navbar-nav navbar-right" >
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 green-hover home-head"><a href="http://vprep.in/">Home</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 green-hover price-head"><a href="http://vprep.in/pricing.php" >Pricing</a></li>
                        <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 material-head"><a href="http://vprep.in/materials.php">Study Material</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 green-hover contact-head"><a href="http://vprep.in/contact_us.php" >Contact Us</a></li>
                        <li id="mobLiSignUp" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 green-hover contact-head"><a id="mobSignUp" data-toggle="modal" data-target="#exampleModalLong" >Sign Up</a></li>
                        <li id="mobLiSignIn" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 green-hover contact-head"><a id="mobSignIn" data-toggle="modal" data-target="#signInModal">Sign In</a></li>
                        <li id = "clickSignUp" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 dropdown green-hover">
                            <a id="signUpCheckId" href="http://test.vprep.in"  class="dropdown-toggle" data-toggle="dropdown">Sign Up <span class="caret"></span></a>
                            <ul id="sign-up-menu"class="dropdown-menu dropdown-lr animated flipInX green-back" role="menu">
                                <div class="col-lg-12">
                                    <form id="ajax-register-form" action="http://test.vprep.in/add_student.html" method="post" role="form" autocomplete="off" style="width: 100%">
                                        <div class="form-group">
                                            <input type="text" style="border-color:black" name="first_name"  required="required" id="fullName" tabindex="1" class="form-control" placeholder="Full Name" value="">
                                        </div>
                                        <div id="the-basics" class="form-group">
                                            <input id="collegeId" class="typeahead form-control" type="text" style="boder-color:black !important;width:100%!important;" placeholder="college name">
                                            <input id="collegeRefId" name="engineering_college_id" class="typeahead form-control" type="hidden" style="boder-color:black !important; font-size:10px;">
                                            <span id="collegeError" style="color:red">please select college from dropdown</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" style="border-color:black" name="username"  required="required" id="upusername" tabindex="1" class="form-control" placeholder="Username" value="">
                                            <span id="userNameError" style="color:red">username already exists. please try with other username</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" style="border-color:black" name="email"  required="required" id="email" tabindex="2" class="form-control" placeholder="Email">
                                            <span id="emailError" style="color:red">please enter valid email Id</span>
                                            <span id="emailError2" style="color:red">email id already exists. please try with other email id</span>
                                        </div>
                                        <div class="form-group">


                                            <input id="regpassword" style="border-color:black" type="password" name="password" required="required"  tabindex="1" class="form-control" placeholder="password" value="">


                                        </div>
                                        <div class="form-group">
                                            <input type="text" style="border-color:black" name="phone"  id="phone" required="required" tabindex="1" class="form-control" placeholder="phone" value="">
                                            <span type="hidden" id="phoneError" style="color:red">please enter valid phone number</span>
                                            <span id="phoneError2" style="color:red;font-size: 90%">This number is already registered.</span>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" style="border-color:black"  name="city"  id="city" required="required" tabindex="1" class="form-control" placeholder="city" value="">
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
                                            <input type="text" style="border-color:black" name="otp" id="otpId" placeholder="Enter OTP"></input>
                                            <span id="otpError" style="color:red">OTP did not match. Try Again</span>
                                            <button class="form-control btn btn-success" id="retryOTP" type=button style="display:none">Retry OTP</button>
                                            <button class="form-control btn btn-success" id="buttonOTP" type=button>Validate & Sign Up</button>


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
                        <li id = "clickSignIn" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 dropdown green-hover">
                            <a href="#" id="sign-in-id"class="dropdown-toggle" data-toggle="dropdown">Sign In <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu" style="left: -96%">
                                <div class="col-lg-12">
                                    <div class="text-center" style="color: #0c0c0c">
                                        <h3><b>Sign In</b></h3></div>
                                    <form name="loginForm"id="ajax-login-form" action="http://test.vprep.in/login/checkLogin" accept-charset="utf-8" method="post"  role="form" autocomplete="off">
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
                                                <div class="col-xs-12">

                                                    <input type="checkbox" tabindex="3" name="remember" id="remember">
                                                    <label for="remember" style="color:black"> Remember Me</label>

                                                </div>
                                                <div class="col-xs-12">
                                                    <input type="hidden" name="signin" id="loginId" tabindex="4" class="form-control btn btn-success" value="Sign In form">
                                                    <input type=button name="signin2" id="showLoginId" tabindex="4" class="form-control btn btn-success" value="Sign In">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <button class="btn btn-success"
                                                            data-toggle="modal"
                                                            data-target="#fsModal" style="margin-top: -2%">
                                                        Forgot Password?
                                                    </button>
                                                    <!--   <a href="#" tabindex="5" class="forgot-password" data-toggle="modal">Forgot Password?</a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6"> -->

                                </div>
                            </ul>
                        </li>



                    </ul>
                </div>
                <!--</div>-->
            </nav>
            <!--<div id="et_mobile_nav_menu">
                <div class="mobile_nav closed">
                    <span class="select_page">Select Page</span>
                    <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                </div>
            </div>-->
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
    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalTitle" aria-hidden="true" style="height=80%;margin-top: 2%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="margin-top:12%;
    height: 100%;">
                <div class="modal-header">
                    <h5 class="modal-title" id="signInModalTitle">Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <form name="loginForm"id="mob-ajax-login-form" action="http://test.vprep.in/login/checkLogin" accept-charset="utf-8" method="post"  role="form" autocomplete="off">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="mobUsername" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                <span type="hidden" style="color:red" id="mobUserBlank">username should not be blank</span>
                            </div>

                            <div class="form-group">
                                <label for="mobRegpassword">Password</label>

                                <input id="mobRegpassword" type="password" name="password"  tabindex="2" class="form-control form-input" placeholder="Password" style="width: 100%;">
                                <span id="mobInCredId" style="color:red;">invalid username/password entered</span>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <input type="hidden" name="signin" id="mobLoginId" tabindex="4" class="form-control btn btn-success" value="Sign In form">
                                        <input type=button name="signin2" id="mobShowLoginId" tabindex="4" class="form-control btn btn-success" value="Sign In">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
