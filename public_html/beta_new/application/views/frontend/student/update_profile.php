<?php
$getData = $this->stu->loadStudent($this->session->userdata('userdata')['userid']);
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
                                            <a href="#" class="staff-avatar">
                                               	<?php 
												if($getData->image!="")	{ ?>
													<img src="<?php echo base_url('uploads/profile_pic/'.$getData->image);?>" alt="" class="img-responsive"/>
												<?php } else { ?>
												<img src="<?php echo "http://www.tradiestart.com.au/assets/profile-cb7e79cf25aa447fa6410518d0c94abf3ff11184a3df4efeae1dfc5234884f61.png";?>" alt="" class="img-responsive"/>
												<?php } ?>
                                            </a>
                                            <a href="#" class="staff-name">barry join</a>
                                        </div>
                                    </div>
                                    <h3><?php echo!empty($this->session->userdata('userdata')) ? $this->session->userdata('userdata')['name'] : ''; ?></h3>
                                   
									<!--<h4>Student, <?php echo $getData->current_institute; ?> </h4>-->
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
										
										<div class="text-danger btn-danger text-center" style="padding:0px 10px;"><?php echo validation_errors(); 	echo @$error; ?></div>
										<div class="text-success btn-success text-center" style="padding:0px 10px;"><?php echo @$msg; ?></div>
										<p class="content-detail" >
										<form name="update_info" method="post" action="<?php echo base_url("student/save-profile"); ?>" enctype="multipart/form-data">
										<input type="hidden" name="id" value="<?php echo $this->session->userdata('userdata')['userid']; ?>">
											<div style="background-color:#FAFAFA;" >
												<div class="row" style="background-color:#f7f7f7;">
													<div class="col-md-12 profile_head" >Account Information</div>
													<div class="col-md-6">
														<label for="regname" class="control-label form-label">Username</label>
														<input id="regname" type="text" name="username" value="<?php echo $getData->username; ?>" placeholder=""
															   class="form-control form-input" disabled style="background:#fff;">
														 
													</div>
													
													<div class="col-md-6">
														<label for="regemail" class="control-label form-label">Email</label>
														<input id="regemail" type="email" name="email" value="<?php echo $getData->email; ?>" placeholder="" 
															   class="form-control form-input"  disabled style="background:#fff;">
													</div>
													<!--<div class="col-md-6" style="margin-top:20px;" hidden>
														<label for="regname" class="control-label form-label">Current Institute</label>
														<input id="regname" type="text" name="current_institute" placeholder="" value="<?php //echo $getData->current_institute; ?>"
															   class="form-control form-input" >
														<?php //echo form_error('current_institute', '<div class="text-red">* ', '</div>'); ?>
													</div>
													<div class="col-md-6" style="margin-top:15px;" hidden>
														<label for="regname" class="control-label form-label">Preparing for <span class="highlight">*</span></label>
														<input id="regname" type="text" name="prepairing_for" value="<?php //echo $getData->prepairing_for; ?>" placeholder="" 
															   class="form-control form-input"  required="required">
														<?php //echo form_error('prepairing_for', '<div class="text-red">* ', '</div>'); ?>
													</div>-->
													<div class="col-md-12"><br></div>
													<div class="col-md-12 profile_head">Personal Information</div>
													<div class="col-md-6">
														<label for="regname" class="control-label form-label">First Name <span class="highlight">*</span></label>
														<input id="regname" type="text" name="first_name" value="<?php echo $getData->name; ?> " placeholder="" 
															   class="form-control form-input"  required="required">
														<?php echo form_error('first_name', '<div class="text-red">* ', '</div>'); ?>
													</div>
 	 
													<div class="col-md-6" >
														<label for="regname" class="control-label form-label">Phone <span class="highlight">*</span></label>
														<input id="regname" type="text" name="phone" required="" value="<?php echo $getData->phone; ?>" placeholder="" class="form-control form-input">
													</div>
													<div class="col-md-6" style="margin-top:20px;">
														<label for="regname" class="control-label form-label">Address <span class="highlight">*</span></label>
														<input id="regname" type="text" name="address" required="" value="<?php echo $getData->address; ?>" placeholder="" class="form-control form-input">
													</div>
													<div class="col-md-6" style="margin-top:20px;">
														<label for="regname" class="control-label form-label">City <span class="highlight">*</span></label>
														<input id="regname" type="text" name="city" value="<?php echo $getData->city; ?>" placeholder=""
															   class="form-control form-input"  required="required">
														<?php echo form_error('city', '<div class="text-red">* ', '</div>'); ?>
													</div>
													<div class="col-md-6" style="margin-top:20px;">
														<label for="regname" class="control-label form-label">State <span class="highlight">*</span></label>
														 
														<select name="state" id="regname" class="form-control form-input"  required="required">
															<option value="">Select State</option>
															<option value="Andaman and Nicobar Islands" <?php if($getData->state=="Andaman and Nicobar Islands") echo 'selected="selected"'; ?>>Andaman and Nicobar Islands</option>
															<option value="Andhra Pradesh" <?php if($getData->state=="Andhra Pradesh") echo 'selected="selected"'; ?> >Andhra Pradesh</option>
															<option value="Arunachal Pradesh" <?php if($getData->state=="Arunachal Pradesh") echo 'selected="selected"'; ?> >Arunachal Pradesh</option>
															<option value="Assam" <?php if($getData->state=="Assam") echo 'selected="selected"'; ?> >Assam</option>
															<option value="Bihar" <?php if($getData->state=="Bihar") echo 'selected="selected"'; ?> >Bihar</option>
															<option value="Chandigarh" <?php if($getData->state=="Chandigarh") echo 'selected="selected"'; ?> >Chandigarh</option>
															<option value="Chhattisgarh" <?php if($getData->state=="Chhattisgarh") echo 'selected="selected"'; ?> >Chhattisgarh</option>
															<option value="Dadra and Nagar Haveli" <?php if($getData->state=="Dadra and Nagar Haveli") echo 'selected="selected"'; ?> >Dadra and Nagar Haveli</option>
															<option value="Daman and Diu" <?php if($getData->state=="Daman and Diu") echo 'selected="selected"'; ?> >Daman and Diu</option>
															<option value="Delhi" <?php if($getData->state=="Delhi") echo 'selected="selected"'; ?> >Delhi</option>
															<option value="Goa" <?php if($getData->state=="Goa") echo 'selected="selected"'; ?> >Goa</option>
															<option value="Gujarat" <?php if($getData->state=="Gujarat") echo 'selected="selected"'; ?> >Gujarat</option>
															<option value="Haryana" <?php if($getData->state=="Haryana") echo 'selected="selected"'; ?> >Haryana</option>
															<option value="Himachal Pradesh" <?php if($getData->state=="Himachal Pradesh") echo 'selected="selected"'; ?> >Himachal Pradesh</option>
															<option value="Jammu and Kashmir" <?php if($getData->state=="Jammu and Kashmir") echo 'selected="selected"'; ?> >Jammu and Kashmir</option>
															<option value="Jharkhand" <?php if($getData->state=="Jharkhand") echo 'selected="selected"'; ?> >Jharkhand</option>
															<option value="Karnataka" <?php if($getData->state=="Karnataka") echo 'selected="selected"'; ?> >Karnataka</option>
															<option value="Kerala" <?php if($getData->state=="Kerala") echo 'selected="selected"'; ?> >Kerala</option>
															<option value="Lakshadweep" <?php if($getData->state=="Lakshadweep") echo 'selected="selected"'; ?> >Lakshadweep</option>
															<option value="Madhya Pradesh" <?php if($getData->state=="Madhya Pradesh") echo 'selected="selected"'; ?> >Madhya Pradesh</option>
															<option value="Maharashtra" <?php if($getData->state=="Maharashtra") echo 'selected="selected"'; ?> >Maharashtra</option>
															<option value="Manipur" <?php if($getData->state=="Manipur") echo 'selected="selected"'; ?> >Manipur</option>
															<option value="Meghalaya" <?php if($getData->state=="Meghalaya") echo 'selected="selected"'; ?> >Meghalaya</option>
															<option value="Mizoram" <?php if($getData->state=="Mizoram") echo 'selected="selected"'; ?> >Mizoram</option>
															<option value="Nagaland" <?php if($getData->state=="Nagaland") echo 'selected="selected"'; ?> >Nagaland</option>
															<option value="Orissa" <?php if($getData->state=="Orissa") echo 'selected="selected"'; ?> >Orissa</option>
															<option value="Pondicherry" <?php if($getData->state=="Pondicherry") echo 'selected="selected"'; ?> >Pondicherry</option>
															<option value="Punjab" <?php if($getData->state=="Punjab") echo 'selected="selected"'; ?> >Punjab</option>
															<option value="Rajasthan" <?php if($getData->state=="Rajasthan") echo 'selected="selected"'; ?> >Rajasthan</option>
															<option value="Sikkim" <?php if($getData->state=="Sikkim") echo 'selected="selected"'; ?> >Sikkim</option>
															<option value="Tamil Nadu" <?php if($getData->state=="Tamil Nadu") echo 'selected="selected"'; ?> >Tamil Nadu</option>
															<option value="Tripura" <?php if($getData->state=="Tripura") echo 'selected="selected"'; ?> >Tripura</option>
															<option value="Uttaranchal" <?php if($getData->state=="Uttaranchal") echo 'selected="selected"'; ?> >Uttaranchal</option>
															<option value="Uttar Pradesh" <?php if($getData->state=="Uttar Pradesh") echo 'selected="selected"'; ?> >Uttar Pradesh</option>
															<option value="West Bengal" <?php if($getData->state=="West Bengal") echo 'selected="selected"'; ?> >West Bengal</option>
														</select>
														<?php echo form_error('state', '<div class="text-red">* ', '</div>'); ?>
													</div>
													<div class="col-md-6" style="margin-top:20px;">
														<label for="regname" class="control-label form-label">Zip <span class="highlight">*</span></label>
														<input id="regname" type="text" name="zip" value="<?php echo $getData->zip; ?> " required="" placeholder="" class="form-control form-input">
														<?php echo form_error('zip', '<div class="text-red">* ', '</div>'); ?>
													</div>
													<div class="col-md-6" style="margin-top:20px;">
														<label for="regname" class="control-label form-label">Date of birth</label>
														<div class="input-group">
															<div class="input-group-addon"> <i class="fa fa-calendar"> </i> </div>
															<input type="text" placeholder="mm/dd/yyyy" name="dob" id="date" value="<?php if($getData->dob!="") echo date('m/d/Y',strtotime($getData->dob)); ?>" 
																   class="form-control form-input" style="background:#fff;" > 
															 
														</div>
													</div>
													<div class="col-md-6" style="margin-top:20px;">
														<label for="regname" class="control-label form-label">Profile Photo</label>
														 <input type="file" name="userfile" value="" class="form-control form-input">
														<?php echo form_error('zip', '<div class="text-red">* ', '</div>'); ?>
													</div>
 
 
													<div class="col-md-12" style="margin-top:20px;">
														<label for="regname" class="control-label form-label">Gender <span class="highlight">*</span></label>
														<div>
														<label class="radio-inline">
															<input type="radio" name="gender" id="inlineRadio1" value="male" <?php if($getData->gender=="male") echo 'checked="checked"';  ?>>
															Male </label>
														<label class="radio-inline">
															<input type="radio" name="gender" id="inlineRadio1" value="female" <?php if($getData->gender=="female") echo 'checked="checked"';  ?>>
															Female </label>
														</div>
													</div>
													<div class="col-md-12" style="margin-top:20px;margin-bottom:20px;">
														<div class="register-submit" align="center">
															<button type="submit" class="btn btn-register btn-green"><span>Update Profile</span></button>
														</div>
													</div>
<div><br></div>
												</div>
											</div>
											
										</form>
										</p>
                                        <p class="content-detail">
											<form name="changePassword" method="post" action="<?php echo base_url("change-password");?>">
											<input type="hidden" name="userid" value="<?php echo $this->session->userdata('userdata')['userid']; ?>">
											<div style="background-color:#FAFAFA;" >
												<div class="row" style="background-color:#f7f7f7;">
													<div class="col-md-12 profile_head" >Change Password</div>
													<div class="col-md-6">
														<label for="regname" class="control-label form-label">New Password</label>
														<input id="regname" type="password" name="new_password" value="" class="form-control form-input" required='required'>
														 
													</div>
													
													<div class="col-md-6">
														<label for="regemail" class="control-label form-label">Confirm New Password</label>
														<input id="regemail" type="password" name="confirm_password" value="" class="form-control form-input" required='required'>
													</div>
													
													<div class="col-md-12" style="margin-top:20px;margin-bottom:20px;">
														<div class="register-submit" align="center">
															<button type="submit" class="btn btn-register btn-green"><span>Change Password</span></button>
														</div>
													</div>
													
												</div>
											</div>
											</form>
										</p> 
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