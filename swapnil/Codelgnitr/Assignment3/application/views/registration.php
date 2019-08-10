<?php $this->load->view('header'); ?>
<!-- registration -->
<section class="contact-us-section clearfix">
    <div class="container contact-us-header">
        <h3 style="text-align:center">Registration form</h3>
        <br><br>
        <div class="contact-us-content">
            <?php echo form_open_multipart();
            ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <form action="regDB.php" method="POST">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" >
                                    <?php echo form_error('firstname', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" >
                                    <?php echo form_error('lastname', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" placeholder="User Name" name="username" >
                                    <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Email" name="email" >
                                    <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="password" placeholder="Password" name="password" >
                                    <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="cnfpassword" placeholder="Confirm Password" name="cnfpassword" >
                                    <?php echo form_error('cnfpassword', '<div class="text-danger">', '</div>'); ?>
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
                                    <?php echo form_error('gender', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="age" placeholder="Age" name="age" >
                                    <?php echo form_error('age', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <label>Select Departement</label>
                                <div class="form-group">
                                    <?php
                                    foreach($dept as $row){
                                    ?>
                                    <input type="checkbox" name="dept[]" value="<?php echo $row['dpt_id']; ?>" /><?php echo $row['dpt_name']; ?><br/>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="file" name="userfile" id ="userfile" size="20" />
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
