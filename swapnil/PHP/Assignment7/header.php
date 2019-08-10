<!-- Header file -->
<?php
    error_reporting(0);
    session_start();
    $status =$_SESSION['status'];
?>
<html>
  <header>
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="main-header clearfix">
      <div class="container">
        <div class="logo">
          <img src="assets/images/logo.jpg" alt="logo"  height="50" width="50"/> 
        </div>
        <nav class="navbar clearfix">
          <div class="topnav" id="myTopnav">
            <ul>
              <a href="index.php">Home</a>
              <a href="registration.php" <?php echo ( $status == 1) ? 'style="display:none;"' : '' ?> >Registraion</a>
              <a href="login.php" <?php echo ( $status == 1) ? 'style="display:none;"' : '' ?> >Login</a>
              <a href="add.php" <?php echo ( $status == 0) ? 'style="display:none;"' : '' ?> >Friends</a>
              <a href="logout.php"  <?php echo ( $status == 0) ? 'style="display:none;"' : '' ?> >Logout</a>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
</html>
