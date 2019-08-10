<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo form_open('Registration/userRegistration'); ?>

<h5>Username</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
<?php echo form_error('username', '<div class="error">', '</div>'); ?>

<h5>Password</h5>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />
<?php echo form_error('password', '<div class="error">', '</div>'); ?>

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
<?php echo form_error('passconf', '<div class="error">', '</div>'); ?>

<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
<?php echo form_error('email', '<div class="error">', '</div>'); ?>

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>