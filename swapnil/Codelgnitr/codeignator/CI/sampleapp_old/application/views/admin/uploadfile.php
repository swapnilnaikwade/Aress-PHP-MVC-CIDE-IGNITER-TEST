<?php
$this->load->view('common/header');
?>

<?php echo $error;?>

<?php echo form_open_multipart('uploadfile/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

<?php
$this->load->view('common/footer');
?>