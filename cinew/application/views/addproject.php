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
        <?php echo form_open_multipart(); ?>
            <h2>Add New Project Details :</h2>
            <div class="col-lg-6">
                <div class="bs-component">
                    <fieldset class="field">
                        <div class="form-group">
                            <div class="field_title">Project Name</div>
                            <input type="text"  name="project_name" class="form-control"  placeholder="Enter Proejct Name" value="<?php echo set_value('project_name');  ?>" >
                        </div>
                        <div class="form-group">
                            <div class="field_title">Short Description</div>
                            <input type="text"  name="short_description" class="form-control"  placeholder="Enter Short Description" value="<?php echo set_value('short_description');  ?>" >
                        </div>
                    
                        <div class="form-group">
                            <div class="field_title">Long Description</div>
                            <input type="text"  name="long_description" class="form-control"  placeholder="Enter Gender" value="<?php echo set_value('long_description');  ?>" >
                        </div>
                        <div class="field_title">
                            <button type="submit" class="btn btn-primary">Submit</button>
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