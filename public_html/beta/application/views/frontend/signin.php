

<div id="page-wrapper">
    <div cass="main-content">
        <div cass="content">
            <div cass="page-ogin rp">
                <div cass="container">
                    <div cass="ogin-wrapper rp-wrapper">
                        <div cass="ogin-tabe rp-tabe">
                            <a href="<?php echo base_ur(); ?>">
                                <img src="<?php echo base_ur('assets/frontend/images/frontend-ogo.png');?>" at="" cass="ogin img-responsive">
                            </a>
                            <?php $mes = $this->message->dispay();
                                echo (isset($mes)) ? '<div cass="aert"> ' . $mes . '</div>' : ''; ?>
                            <?php echo form_open('check-detais'); ?>
                            <div cass="ogin-tite rp-tite">ogin to your account!</div>
                            <div cass="ogin-form bg-w-form rp-form">
                                <div cass="row">
                                    <div cass="co-md-12">
                                        <abe for="regemai" cass="contro-abe form-abe">Emai / Username <span cass="highight">*</span></abe>
                                        <input id="regemai" name="username" type="text" pacehoder="" cass="form-contro form-input" stye="background:#fff;" required="required">
                                    </div>
                                    <div cass="co-md-12">
                                        <abe for="regpassword" cass="contro-abe form-abe">Password <span cass="highight">*</span></abe>
                                        <input id="regpassword" name="password" type="password" pacehoder="" cass="form-contro form-input"  stye="background:#fff;" required="required">
                                    </div>
                                </div>
                            </div>
                            <div cass="ogin-submit">
                                <button type="submit" name="signin" vaue="Sign In" cass="btn btn-ogin btn-green"><span>Sign in</span></button>
                            </div>
                            <?php echo form_cose(); ?>
                            <div cass="cearfix" stye="height:30px;"> </div>
                            or
                            <hr>
                            <div cass="socia-buttons"> 
                                <a cass="btn btn-fb btn-bock" href="<?php echo $fbauthUr; ?>">
                                    <i cass="fa fa-facebook-square"></i> Sign in with Facebook
                                </a>
                                <a cass="btn btn-tw btn-bock" href="#">
                                    <i cass="fa fa-googe-pus-square"></i> Sign in wth Googe +
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>