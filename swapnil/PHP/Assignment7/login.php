<?php include 'header.php';

if(!$_SESSION['status']) {?>
  <div class="login">
    <h2 class="login-header">Log in</h2>
    <form [formGroup]="loginForm" class="login-container" method="POST" action="logaction.php">
       <input type="email" placeholder="Email" formControlName="email" name="email" id="email" required>
         <input type="password" placeholder="Password" formControlName="password" name="password" id="password" required>
       <button type="submit" class="btn btn-success">Log In</button>
		<div class="link">
			<p>New User?<a href ="registration.php">Register</a></p>  
		</div>
    </form>
  </div>
  <?php
}
?>
<?php include 'footer.php'; ?>