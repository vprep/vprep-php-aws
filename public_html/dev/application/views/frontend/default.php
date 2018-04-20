<div id="page-wrapper">
    <div class="main-content">
        <div class="content">
            <div class="page-login rlp">
                <div class="container center">
                    <div class="login-wrapper rlp-wrapper">
                        <div class="login-table rlp-table">
                            <a href="home.html">
                                <img src="<?php echo base_url('assets/frontend/images/splash-logo.png'); ?>" alt="" class="login img-responsive"/>
                            </a> 
                        </div>
                        <div class="col-md-12">
                            <button type="submit" onClick="window.location.href = 'sign-in.html'" class="btn btn-login btn-green btn-block"><span>Sign in</span></button>
                        </div>
                        <div class="col-sm-4" style="margin-top: 5px; padding-right: 5px;">
                            <button type="button" onClick="window.location.href = '<?php echo base_url('user-sign-up.html')?>'" class="btn btn-login btn-blue btn-block">
                                <span>Student Signup</span>
                            </button>
                        </div>
                        <div class="col-sm-4" style="margin-top: 5px; padding-left: 0px;padding-right: 5px;">
                            <button type="button" onClick="window.location.href = '<?php echo base_url('tutor-sign-up.html')?>'" class="btn btn-login btn-blue btn-block">
                                <span>Tutor Signup</span>
                            </button>
                        </div>
                        <div class="col-sm-4" style="margin-top: 5px; padding-left: 0px;">
                            <button type="button" onClick="window.location.href = '<?php echo base_url('institute-sign-up.html')?>'" class="btn btn-login btn-blue btn-block">
                                <span>Institute Signup</span>
                            </button>
                        </div>
                        
                        <div class="clearfix" style="height:50px;"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Terms and condition</h4>
            </div>
            <div class="modal-body">
                <p> By registering , you agree to AbsolutPrep Terms of Use & Privacy Policy. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <p> By registering , you agree to AbsolutPrep Terms of Use & Privacy Policy. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <a class="btn btn-primary" href="signup.html" role="button">I agree</a>
                <button type="button" class="btn btn-danger">I do not agree</button>
            </div>
        </div>
    </div>
</div>