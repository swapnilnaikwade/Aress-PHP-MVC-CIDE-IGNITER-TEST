<!--Header-->
<html>
    <body>
    <link href= "<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <!--Display if session is unset-->               
                <?php if($this->session->has_userdata('email'))
                      {
                ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Login/logout') ?>"> Logout </a>
                        </li>
                <?php
                     }
                     else
                     {
                ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('home') ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('registration_view') ?>">Registration</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('login_view') ?>"> Login</a>
                        </li>
                <?php
                     }
                ?>
                </ul>
        </div>
    </nav>
</div>