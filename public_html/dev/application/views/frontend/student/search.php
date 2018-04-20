<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="group-title-index">
                            <h2 class="center-title">&nbsp; </h2>
                            <h2 class="center-title">Search</h2>
                            <div class="bottom-title"><i class="bottom-icon icon-globe"></i></div>
                        </div>
                        <?php echo form_open('search'); ?>
                        <div class="register-form bg-w-form rlp-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group" <?php echo !empty($list)?'style="height: 30px"':'';?>>
                                            <?php echo form_dropdown('search',array('institute'=>'Institutes','tutor'=>'Private Tutors'),!empty($pdata['search'])?$pdata['search']:'','class="form-control"') ?>
                                        </div>
                                        <div class="register-submit">
                                            <button class="btn btn-register btn-green btn-block"  type="submit"><span>Search now</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                        <?php if(!empty($this->input->post())): ?>
                            <?php if (!empty($list)): ?>
                                <div class="list-categories-wrapper">
                                    <div class="list-categories-content row">
                                        <?php foreach($list as $key=>$val): ?>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="edugate-layout-1 paid">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a class="link" href="#">
                                                            <img class="media-image img-rounded" alt="" src="<?php echo base_url('assets/frontend/images/categories/list-1.jpg');?>">
                                                        </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="cur"><?php echo !empty($val['name'])?$val['name']:'Not Available'; ?></div>
                                                        <div class="description" style="font-size:13px; padding-top:5px;">
                                                            <?php echo $val['desc']; ?>
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
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php else: ?>
                            <h1>No Records Found</h1>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>