

<div id="page-wrapper">
    <div class="main-content">
        <div class="content">
            <div class="page-login rlp">
                <div class="container">
                    <div class="login-wrapper rlp-wrapper">
                        <div class="login-table rlp-table">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url('assets/frontend/images/frontend-logo.png');?>" alt="" class="login img-responsive">
                            </a>
                            <?php $mes = $this->message->display();
                                echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                            <form action="/login/checkLogin" method="post" accept-charset="utf-8">
                            <div class="login-title rlp-title">Log in to your account!</div>
                            <div class="login-form bg-w-form rlp-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="regemail" class="control-label form-label">Email / Username <span class="highlight">*</span></label>
                                        <input id="regemail" name="username" type="text" placeholder="" class="form-control form-input" style="background:#fff;" required="required">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="regpassword" class="control-label form-label">Password <span class="highlight">*</span></label>
                                        <input id="regpassword" name="password" type="password" placeholder="" class="form-control form-input" style="background:#fff;" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="login-submit">
                                <button type="submit" name="signin" value="Sign In" class="btn btn-login btn-green"><span>Sign in</span></button>
                            </div>
                            </form>
                            <div class="clearfix" style="height:30px;"> </div>
                            or
                            <hr>
                            <div class="social-buttons"> 
                                <a class="btn btn-fb btn-block" href="<?php echo $fbauthUrl; ?>">
                                    <i class="fa fa-facebook-square"></i> Sign in with Facebook
                                </a>
                                <a class="btn btn-tw btn-block" href="#">
                                    <i class="fa fa-google-plus-square"></i> Sign in wth Google +
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
