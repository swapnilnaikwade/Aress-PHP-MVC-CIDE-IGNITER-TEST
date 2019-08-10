<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>My New Application</title> 
   </head>
	
   <body>
   <a href="<?php echo base_url(); ?>"> Home </a> | 
   
   <?php
		if(!$this->session->has_userdata('username')){
   ?>
			<a href="<?php echo base_url(); ?>register"> Register </a> | 
   
			<a href="<?php echo base_url(); ?>login"> Login </a>
	<?php
		}else{
	?>
			<a href="<?php echo base_url(); ?>login/logout"> Logout </a>
	<?php
		}//else
	?>
		