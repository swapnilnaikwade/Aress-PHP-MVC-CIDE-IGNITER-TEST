<?php include 'header.php';?>
<!-- Registration Page -->
<html>
  <div class="register-container">
    <form action="registraction.php" method="POST">
      <h2>Register Form</h2>
      <div class="input-container">
        <i class="fa fa-user icon"></i>
        <input class="input-field" type="text" placeholder="Username" name="username" id="username" value="<?php echo $username;?>" required>
      </div>
      <div class="input-container">
        <i class="fa fa-envelope icon"></i>
        <input class="input-field" type="text" placeholder="Email" name="email" id="email" required>
      </div>
      <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field" type="password" placeholder="Password" name="password" id="password" required>
      </div>
      <div class="input-container">
        <i class="fa fa-phone icon"></i>
        <input class="input-field" type="tel" placeholder="Phone number" name="phone" id="phone" required>
      </div>
      <button type="submit" class="btn">Register</button>
      <div class="link">
        <p>Already have an account?<a href ="login.php">Login</a></p>
      </div>
    </form>
  </div>
</html>
<?php include 'footer.php';?>
