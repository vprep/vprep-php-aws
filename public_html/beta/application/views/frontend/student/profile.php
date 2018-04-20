<?php
// $getData = $this->stu->loadStudent($this->session->userdata('userdata')['userid']);

 
?>

<div id="wrapper-content">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="section section-padding profile-teacher">
                    <div class="container">
                        <div class="profile-teacher-wrapper">
                            <div class="teacher-info">
                                <div class="staff-item2 customize">
                                    <div class="staff-item-wrapper">
                                        <div class="staff-info">
                                            <a href="javascript:;" class="staff-avatar">
                                                
												<?php 
												
												//echo json_encode($getData);
												
												if($getData['image']!="")	{ ?>
													<img src="<?php echo base_url('uploads/profile_pic/'.$getData['image']);?>" alt="" class="img-responsive"/>
												<?php } else { ?>
												<img src="<?php echo "http://www.tradiestart.com.au/assets/profile-cb7e79cf25aa447fa6410518d0c94abf3ff11184a3df4efeae1dfc5234884f61.png";?>" alt="" class="img-responsive"/>
												<?php } ?>
											</a>
                                             
                                        </div>
                                    </div>
                                    <!--<h3><?php //echo!empty($this->session->userdata('userdata')) ? $this->session->userdata('userdata')['name'] : ''; ?></h3>-->
                                   
								   <h3><?php echo $getData['name']; ?>, Student</h3>
								   
									<!--<h4>Student, <?php //echo $getData['current_institute']; ?> </h4>-->
                                    <?php /*
									<div class="staff-socials">
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
									</div>
									 */ ?>
							   </div>
                                <div class="teacher-des">
                                    <div class="certificate-title underline" style="margin-bottom:0;">Welcome <?php echo!empty($this->session->userdata('userdata')) ? $this->session->userdata('userdata')['name'] : ''; ?></div>
                                    
									 
									<div class="content" >
										
										
										<p class="content-detail" >

											<div style="background-color:#FAFAFA;" >
												<div class="row" style="background-color:#f7f7f7;">
													<div class="col-md-12 profile_head" >Account Information</div>
													<div class="col-md-6">
														<label for="regname" class="control-label form-label">Username</label>
														<span class="form-control"><?php echo $getData['username']; ?> </span>
														 
													</div>
													<div class="col-md-6">
														<label for="regemail" class="control-label form-label">Email</label>
														<span class="form-control"><?php echo $getData['email']; ?> </span>
													</div>
													<!--<div class="col-md-6" hidden>
														<label for="regname" class="control-label form-label">Current Institute</label>
														<span class="form-control"><?php //echo $getData['current_institute']; ?> </span>
													</div>
													<div class="col-md-6" hidden>
														<label for="regname" class="control-label form-label">Preparing for</label>
														<span class="form-control"><?php //echo $getData['prepairing_for']; ?> </span>
													</div>-->
													<div class="col-md-12"><br></div>
													<div class="col-md-12 profile_head">Personal Information</div>
													
													<div class="col-md-6">
														<label for="regname" class="control-label form-label">Name</label>
														<span class="form-control"><?php echo $getData['name']; ?> </span>
													</div>
													<div class="col-md-6" >
														<label for="regname" class="control-label form-label">Gender</label>
														<div>
														<span class="form-control"><?php echo $getData['gender']; ?> </span>
														</div>
													</div>
													<div class="col-md-6">
														<label for="regname" class="control-label form-label">Phone</label>
														<span class="form-control"><?php echo $getData['phone']; ?> </span>
													</div>
													<div class="col-md-6" >
														<label for="regname" class="control-label form-label">Address</label>
														<span class="form-control"><?php echo $getData['address']; ?> </span>
													</div>
													<div class="col-md-6" >
														<label for="regname" class="control-label form-label">City</label>
														<span class="form-control"><?php echo $getData['city']; ?> </span>
													</div>
													<div class="col-md-6" >
														<label for="regname" class="control-label form-label">State</label>
														<span class="form-control"><?php echo $getData['state']; ?> </span>
														 
														 
													</div>
													<div class="col-md-6" >
														<label for="regname" class="control-label form-label">Zip</label>
														<span class="form-control"><?php echo $getData['zip']; ?> </span>
													</div>
													<div class="col-md-6">
														<label for="regname" class="control-label form-label">Date of birth</label>
														<div class="input-group">
															<div class="input-group-addon"> <i class="fa fa-calendar"> </i> </div>
															<span class="form-control"><?php echo $getData['dob']; ?> </span> 
															 
														</div>
													</div>
													<div class="col-md-12"><br></div>
 
 
													 

												</div>
											</div>
											
										 
										</p>
                                         
                                    </div>
									 
										<div style="background-color:#FAFAFA;" >
														<div class="row" style="background-color:#f7f7f7;">
															<div class="col-md-12 profile_head" >Institutes / Tutors</div>
															
															<table class="table">
																<tr>
																	<th>S.No</th>
																	<th>Institute / Tutor Name</th>
																	<th>Course Name</th>
																</tr>
																<?php 
																$k=0;
																if(count($getInstituteData)>0){
																	foreach($getInstituteData as $inst){
																	$k++;
																?>
																<tr>
																	<td><?php echo $k; ?></td>
																	<td><?php echo $inst->institute; ?></td>
																	<td><?php echo $inst->course_title; ?></td>
															 
																</tr>
																	<?php }} else { ?>
																<tr>
																	<td colspan="3" class="text-center"><h4 class="alert alert-info">There is not any Data.</h4></td>
																</tr>
															<?php } ?>	
															</table>
															
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