<?php $this->load->view('header'); ?>
  <!-- registration -->
	<section class="contact-us-section clearfix">
		<div class="container contact-us-header">
			<h3 style="text-align:center">Registration form</h3><br><br>
			<div class="contact-us-content">
              <?php echo form_open('Registration/userValidation'); ?>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
						<form action="regDB.php" method="POST">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" >
                                        <?php echo form_error('firstname', '<div class="error">', '</div>'); ?>
                                	</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" >
                                        <?php echo form_error('lastname', '<div class="error">', '</div>'); ?>
									</div>
								</div>
                            </div>	
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" id="username" placeholder="User Name" name="username" >
                                        <?php echo form_error('username', '<div class="error">', '</div>'); ?>
                                	</div>
								</div>
                             </div>
                           <div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Email" name="email" >
                                        <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                                    </div>
								</div>
                            </div>
                            <div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" id="password" placeholder="Password" name="password" >
                                        <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                                    </div>
								</div>
                            </div>
                            <div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" id="cnfpassword" placeholder="Confirm Password" name="cnfpassword" >
                                        <?php echo form_error('cnfpassword', '<div class="error">', '</div>'); ?>
                                    </div>
								</div>
                            </div>
                            <div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
                                        <div class="form-group radio-button">
                                        <label>Gender</label>
                                        <label class="radio-inline"><input type="radio" value="male" name="gender" id="gender" formControlName="gender">Male</label>
                                        <label class="radio-inline"><input type="radio" value="female" name="gender" id="gender" formControlName="gender">Female</label>
                                        </div>
                                        <?php echo form_error('gender', '<div class="error">', '</div>'); ?>
                                    </div>
								</div>
                            </div>
                            <div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" id="age" placeholder="Age" name="age" >
                                        <?php echo form_error('age', '<div class="error">', '</div>'); ?>
                                    </div>
								</div>
                            </div>
							<button type="submit" class="btn">Submit</button>
						</form>
					</div>
				</div>
                </form>
			</div>
		</div>
	</section>
    <?php $this->load->view('footer'); ?>
