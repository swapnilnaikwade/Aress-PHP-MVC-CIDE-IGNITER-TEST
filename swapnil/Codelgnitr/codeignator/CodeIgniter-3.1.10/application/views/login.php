<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo form_open('Login/loginValidation'); ?>


<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email');?>"size="50" />
<?php echo form_error('email', '<div class="error">', '</div>'); ?>


<h5>Password</h5>
<input type="text" name="password" value="<?php echo set_value('password');?>" size="50" />
<?php echo form_error('password', '<div class="error">', '</div>'); ?>

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>