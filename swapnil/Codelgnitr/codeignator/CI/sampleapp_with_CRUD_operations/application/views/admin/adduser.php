<?php
$this->load->view('common/header');
?>
<?php echo validation_errors(); ?>

<?php echo form_open('dashboard/addUser'); ?>

<h5>Firstname</h5>
<input type="text" name="firstname" value="" size="50" />

<h5>Lastname</h5>
<input type="text" name="lastname" value="" size="50" />

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />

<h5>Email</h5>
<input type="text" name="email" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

<?php
$this->load->view('common/footer');
?>