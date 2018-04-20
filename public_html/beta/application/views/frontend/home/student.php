
<!-- HEADER-->
<div id="wrapper-content">
  <div id="page-wrapper">
    <div class="main-content">
      <div class="content">
        <div class="section">
          <div class="search-input">
            <div class="container">
              <div class="search-input-wrapper">
                <?php echo form_open('search'); ?>
                  <input name="exam_search" type="text" class="form-input" placeholder="Exams" value="<?php echo set_value("exam_search"); ?>" >
                  <input name="subject_search" type="text" class="form-input" placeholder="Subjects" value="<?php echo set_value("subject_search"); ?>" >
                  <input name="location_search" type="text" class="form-input" placeholder="Location" value="<?php echo set_value("location_search"); ?>" >
                  <div class="register-submit"> <button type="submit" class="btn btn-blue" role="button"><span>Search <i class="fa fa-search"></i></span></button> </div>
                 <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="section list-categories">
          <div class="container">
                                     <?php if(!empty($this->input->post())): ?>
                            <?php if (!empty($list)): ?>
                                <div class="list-categories-wrapper">
                                    <div class="list-categories-content row">
                                        <?php 
										$count =1;
										foreach($list as $key=>$val): ?>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="edugate-layout-1 paid">
                                                <div class="media">
                                                    <div class="media-left">
													<?php

														if($val['image']!="")
														{
															$profilePic = base_url('uploads/profile_pic/'.$val['image']);
														}
														else
														{
															$profilePic = base_url('assets/frontend/images/categories/list-1.jpg');
														}
													?>
                                                        <a class="link" href="<?php echo base_url("institute-details")."/".urlencrypt($val['institute_id']);?>">
                                                            <img class="media-image img-rounded" alt="" src="<?php echo $profilePic;?>" >
                                                        </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="cur"><a href="<?php echo base_url("institute-details")."/".urlencrypt($val['institute_id']);?>"><?php echo !empty($val['name'])?$val['name']:'Not Available'; ?></a></div>
                                                        <div class="description" style="font-size:13px; padding-top:5px;">
                                                            <?php
															if($val['desc']!="")
															{
																echo substr($val['desc'],0,100)."..."; 
															}
															else
															{
																// echo $val['name'];
															}

															?>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <ul class="list-inline pull-left">
                                                    <li><span class="label label-default">4.3 </span></li>
                                                    <li> 
                                                        <a href="#" class="fa-color">
                                                            <i aria-hidden="true" class="fa fa-map-marker fa-3x"></i> 
                                                                <?php echo $val['city']; echo !empty($val['state'])?', '.$val['state']:''; ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="total-courses pull-right"><a href="#" class="fa-color"><i aria-hidden="true" class="fa fa-heart fa-3x"></i></a></div>
                                                <div class="clearfix" style="height:25px;"> </div>
                                            </div>
                                        </div>
										
                                        <?php 
										
										if($count%3==0)
										{
											echo '<div class="clearfix"></div>';
										}
										$count++;
										endforeach; ?>
                                    </div>
                                </div>
								<p>&nbsp;</p>
                            <?php else: ?>
                            <h3><center>No Records Found</center></h3>
                            <?php endif; ?>
                        <?php endif; ?>
          </div>
        </div>
        <div class="section background-opacity slider-talk-about-us">
          <div class="container">
            <div id="people-talk" data-ride="carousel" data-interval="5000" class="slider-talk-about-us-wrapper carousel slide">
              <div role="listbox" class="slider-talk-about-us-content carousel-inner">
                <div class="peopel-item item active">
                  <p class="peopel-comment">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                  <div class="group-peole-info">
                    <div class="peopel-avatar"><img src="assets/images/people-avatar-1.jpg" alt="" class="img-responsive"/></div>
                    <div class="peopel-name">john doe</div>
                    <div class="people-job">Microshop Crop.SEO</div>
                  </div>
                </div>
                <div class="peopel-item item">
                  <p class="peopel-comment">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                  <div class="group-peole-info">
                    <div class="peopel-avatar"><img src="assets/images/people-avatar-1.jpg" alt="" class="img-responsive"/></div>
                    <div class="peopel-name">john doe</div>
                    <div class="people-job">Microshop Crop.SEO</div>
                  </div>
                </div>
                <div class="peopel-item item">
                  <p class="peopel-comment">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                  <div class="group-peole-info">
                    <div class="peopel-avatar"><img src="assets/images/people-avatar-1.jpg" alt="" class="img-responsive"/></div>
                    <div class="peopel-name">john doe</div>
                    <div class="people-job">Microshop Crop.SEO</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="group-btn-slider"><a href="#people-talk" role="button" data-slide="prev">
            <div class="btn-prev carousel-control left"><i class="fa fa-angle-left"></i></div>
            </a><a href="#people-talk" role="button" data-slide="next">
            <div class="btn-next carousel-control right"><i class="fa fa-angle-right"></i></div>
            </a></div>
        </div>
      </div>
    </div>
  </div>
</div>