<?php $this->load->view('common/header'); ?>
<div class="login">
    <div class="contact-us-section clearfix">
        <?php echo form_open(); ?>
        <div class=" container contact-us-header">
            <h3 style="text-align:center">Admin Login</h3>
            <br><br>
            <div class="contact-us-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                        <form action="" method="POST" >
                            <div class="row">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                    <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group">									
                                    <input type="text" class="form-control" id="password" placeholder="password" name="password">
                                    <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('common/footer'); ?>