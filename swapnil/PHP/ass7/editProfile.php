<?php include 'header.php';
include 'connectdb.php'; 
if($_GET)
{
	//View data from database
	$viewSpecificData = "SELECT * FROM staff WHERE id = ".$_GET['id'];
	$viewSpecificResult = mysqli_query($cid,"$viewSpecificData");
	while ($row = mysqli_fetch_assoc($viewSpecificResult)) { 
        $id= $row['id'];
		$firstName = $row['firstName'];
		$lastName= $row['lastName'];
		$email= $row['email'];
	}
}
// if( $_GET['succes']==1)
// {
// 	echo "<script>alert('There are no fields to generate a report');</script>";
// }
?>
  <!-- registration section -->
	<section class="contact-us-section clearfix">
		<div class="container contact-us-header">
			<h3>Registration form</h3>
			<div class="contact-us-content">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
						<form action="editProfileDB.php" method="POST">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control" id="firstName" placeholder="FirstName" name="firstName" value="<?php echo $firstName;?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">									
										<input type="text" class="form-control" id="lastName" placeholder="LastName" name="lastName" value="<?php echo $lastName;?>">
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $email;?>">
									</div>
								</div>
							</div>
							<button type="submit" class="btn">Submit</button>
							<input type="hidden" name="id" id= "id" value="<?php echo $id; ?>"/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
    <?php include 'footer.php';?>
