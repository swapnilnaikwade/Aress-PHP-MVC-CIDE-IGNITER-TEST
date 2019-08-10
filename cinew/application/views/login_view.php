<?php
    // Load header_view
    $this->load->view('common/header_view');
?>

<html>
    <head>
        <title>Login Form</title>
        <style>
        .field_title{font-size: 13px;font-family:Arial;width: 400px;;margin-left: 15px}
        .form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
        </style>
    </head> 
    <body>
        <!--Default system generated validation errors-->
        <div class="form_error">
          <?php echo validation_errors(); ?>
        </div>
        <?php echo form_open(); ?>
        <h2>Login Form</h2>
            <div class="col-lg-6">
                <div class="bs-component">
                    <fieldset>       
                        <div class="form-group">
                            <div class="field_title">Email</div>
                            <input type="email"  name="email" class="form-control"  placeholder="Enter Email" value="<?php echo set_value('email');  ?>" >
                        </div>
                        <div class="form-group">
                            <div class="field_title">Password</div>
                            <input type="text"  name="password" class="form-control"  placeholder="Enter Password" value="<?php echo set_value('password');  ?>" >
                        </div>
                        <div class="field_title">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>        
                    </fieldset>
                </div>
            </div>
        </form>
    </body>
</html>

<?php
    // Load footer_view
    $this->load->view('common/footer_view');
?>