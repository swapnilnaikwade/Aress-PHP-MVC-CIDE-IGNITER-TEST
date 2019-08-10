    <?php include 'header.php';?>
  <!-- registration section -->
	<section class="contact-us-section clearfix">
		<div class="container contact-us-header">
			<h3>Registration form</h3>
			<div class="contact-us-content">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
						<form action="regDB.php" method="POST">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" id="firstName" placeholder="FirstName" name="firstName" required>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">									
										<input type="text" class="form-control" id="lastName" placeholder="LastName" name="lastName" required>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">									
										<input type="password" class="form-control" id="Password" placeholder="Password" name="Password" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control" id="message" placeholder="Message" rows="4"></textarea>
							</div>
							<button type="submit" class="btn">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
    <?php include 'footer.php';?>
