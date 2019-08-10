<!-- Header file -->
<html>
  <header>
    <link href= "<?php echo base_url('assets/css/master.css'); ?>" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('//code.jquery.com/jquery-1.11.1.min.js');?>"></script>
    <script src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css');?>"   ></script>

    <div class="main-header clearfix">
      <div class="container">
        <nav class="navbar clearfix">
          <div class="topnav" id="myTopnav">
            <ul>
              <a href="<?php echo base_url();?>" >Home</a>
              <a href="<?php echo base_url('index.php/main/about');?>">About Us</a>
              <a href="<?php echo base_url('index.php/main/contact')?>">Contact</a>
              <!-- <a href="registration.php"  >Registraion</a> -->
              <!-- <a href="login.php" >Login</a> -->
              <!-- <a href="add.php"  >Friends</a> -->
              <!-- <a href="logout.php"  >Logout</a> -->
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
</html>
