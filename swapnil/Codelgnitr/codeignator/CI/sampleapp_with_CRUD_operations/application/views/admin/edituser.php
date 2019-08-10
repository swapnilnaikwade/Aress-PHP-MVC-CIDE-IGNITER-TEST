<?php
$this->load->view('common/header');
?>
<?php echo validation_errors(); ?>

<?php echo form_open('dashboard/editUser/'.$userid); ?>

<h5>Firstname</h5>
<input type="text" name="firstname" value="<?php echo $userDetails->firstname ?>" size="50" />

<h5>Lastname</h5>
<input type="text" name="lastname" value="<?php echo $userDetails->lastname ?>" size="50" />

<h5>Username</h5>
<input type="text" name="username" value="<?php echo $userDetails->username ?>" size="50" />

<h5>Email</h5>
<input type="text" name="email" value="<?php echo $userDetails->email; ?>" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

<?php
$this->load->view('common/footer');
?>