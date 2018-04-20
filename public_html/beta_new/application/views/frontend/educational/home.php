<div id="wrapper-content" class="orangebg">
  <div id="page-wrapper">
    <div class="main-content">
      <div class="content">
        <div class="section section-padding top-courses" style="height:700px;">
          <div class="container">
            <div class="group-title-index"> </div>
            <div class="register-form bg-w-form rlp-form">
              <div class="container">
                <div class="intro-edu-wrapper">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <h2 class="text-center" style="color:#fff"> <img src="<?php echo base_url('assets/frontend/educational/images/thank-you.png'); ?>" style="text-align:center;"> <br>
                        Welcome User
                        <br>
                        <?php $mes = $this->message->display();
                                        echo (isset($mes)) ? '<div class="alert"> ' . $mes . '</div>' : ''; ?>
                        <?php if(empty($mes)): ?>
                        <strong>You have been signed in successfully.</strong>
                        <?php endif; ?>
                      </h2>
                      <br>
                      <br>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>