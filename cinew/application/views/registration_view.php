<?php
    // Load header_view
    $this->load->view('common/header_view');
?>

<!--Registration Form-->
<html>
    <head>
        <style>
            .field_title{font-size: 13px;font-family:Arial;width: 400px;margin-left: 15px}
            .form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
        </style>
    </head>
    <body>
        <div class="form_error">
          <?php echo validation_errors(); ?>
        </div>
        <?php echo form_open(); ?>
            <h2>Registration Form</h2>
            <div class="col-lg-6">
                <div class="bs-component">
                    <fieldset class="field">
                        <div class="form-group">
                            <div class="field_title">First Name</div>
                            <input type="text"  name="firstname" class="form-control"  placeholder="Enter First Name" value="<?php echo set_value('firstname');  ?>" >
                        </div>
                        <div class="form-group">
                            <div class="field_title">Last Name</div>
                            <input type="text"  name="lastname" class="form-control"  placeholder="Enter Last Name" value="<?php echo set_value('lastname');  ?>" >
                        </div>
                        <div class="form-group">
                            <div class="field_title">User Name</div>
                            <input type="text"  name="username" class="form-control"  placeholder="Enter User Name" value="<?php echo set_value('username');  ?>" >
                        </div>
                        <div class="form-group">
                            <div class="field_title">Email</div>
                            <input type="email"  name="email" class="form-control"  placeholder="Enter Email" value="<?php echo set_value('email');  ?>" >
                        </div>
                        <div class="form-group">
                            <div class="field_title">Password</div>
                            <input type="text"  name="password" class="form-control"  placeholder="Enter Password" value="<?php echo set_value('password');  ?>" >
                        </div>
                    
                        <div class="form-group">
                            <div class="field_title">Gender</div>
                            <input type="text"  name="gender" class="form-control"  placeholder="Enter Gender" value="<?php echo set_value('gender');  ?>" >
                        </div> 

                        <div class="form-group">
                            <div class="field_title">Age</div>
                            <input type="text"  name="age" class="form-control"  placeholder="Enter Age" value="<?php echo set_value('age');  ?>" >
                        </div>
                        <div class="field_title">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </fieldset>
                </div>
            </div>
            </form>
               
<?php
    // Load footer_view
    $this->load->view('common/footer_view');
?>