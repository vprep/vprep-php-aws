<script>window.MathJax = { MathML: { extensions: ["mml3.js", "content-mathml.js"]}};</script>
<script type="text/javascript" async src="http://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=MML_HTMLorMML"></script>

<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding top-courses">
                    <div class="container">
                        <div class="group-title-index">
                            <h2 class="center-title">&nbsp; </h2>
                            <h2 class="center-title">Select your exam</h2>
                            <div class="bottom-title"><i class="bottom-icon icon-icon-04"></i></div>
                        </div>
                        <div class="list-categories-wrapper">
                            <div class="list-categories-content row">
														
                                <div class="customs-row">
                                    <?php if(!empty($test_cat)){ ?>
                                    <?php
								
									foreach($test_cat as $key=>$val){
									//echo "swadhin was here";
									// echo $val['exam_id'];
									// echo $this->session->userdata('userdata')['userid'];
									
									 //print_r($this->edu->availableExamList($val['exam_id'],$this->session->userdata('userdata')['userid']));
									 
									 $no_exam=0;
									if(count($this->edu->availableExamList($val['exam_id'],$this->session->userdata('userdata')['userid']))<1){ $no_exam=1;
									
									?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="edugate-layout-1">
                                            <div class="media">
                                                <div class="">
                                                    <h5> <strong><?php echo $val['exam_name']; ?></strong> </h5>
                                                     
                                                    <?php echo anchor('about_exam/'.  urlencrypt($val['exam_id']),'<span>Start</span>',array("class"=>"btn btn-green btn-bold btn-sm")); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } if($no_exam==0){echo "No Exams Available. Upgrade to Give more tests.";} } else {  ?>
                                   
									 <div class="col-md-12 col-sm-12">
                                        <div class="edugate-layout-1">
                                            <div class="media">
                                                <div class="">
                                                    <h3>Exam not available.</h3>
												</div>
											</div>
										</div>
									</div>
									 <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


