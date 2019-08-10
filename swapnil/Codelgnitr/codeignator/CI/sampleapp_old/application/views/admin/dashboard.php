<?php
$this->load->view('common/header');
?>

<h1>Dashboard </h1>


<h2>Welcome to Dashboard </h2>
<table border="1">
<tr>
	<td>Username</td>
	<td>Email </td>
	<td>Action </td>
</tr>
<?php
	foreach($users as $user){
		
?>
<tr>
	<td><?php echo $user->username; ?></td>
	<td><?php echo $user->email; ?></td>
	<td>---- </td>
</tr>
<?php
	}
?>
</table>

 <p><?php echo $links; ?></p>



<?php
$this->load->view('common/footer');
?>