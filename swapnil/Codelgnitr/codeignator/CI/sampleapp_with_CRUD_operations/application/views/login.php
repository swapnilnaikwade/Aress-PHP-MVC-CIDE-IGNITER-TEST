<?php
$this->load->view('common/header');
?>
<?php echo validation_errors(); ?>

<?php echo form_open('login'); ?>

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />
<div><input type="submit" value="Submit" /></div>

</form>

<?php
$this->load->view('common/footer');
?>