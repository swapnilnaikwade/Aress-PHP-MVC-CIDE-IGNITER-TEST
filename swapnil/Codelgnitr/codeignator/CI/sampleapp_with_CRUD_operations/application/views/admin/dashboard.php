<?php
$this->load->view('common/header');
?>

<h1>Dashboard </h1>


<h2>Welcome to Dashboard </h2>
<a href="<?php echo base_url().'dashboard/addUser' ?>">Add new user</a>
<table border="1">
<tr>
	<td>Name</td>
	<td>Username</td>
	<td>Email </td>
	<td>Gender</td>
	<td>Action </td>
</tr>
<?php
	foreach($users as $user){
		
?>
<tr>
	<td><?php echo $user->firstname.' '.$user->lastname; ?></td>
	<td><?php echo $user->username; ?></td>
	<td><?php echo $user->email; ?></td>
	<td><a href="<?php echo base_url().'dashboard/editUser/'.$user->id; ?>">Edit</a>
	
	|<a onclick="if(confirm('Do you really want to delete this record?')) return true; else return false;" href="<?php echo base_url().'dashboard/deleteUser/'.$user->id; ?>">Delete</a></td>
</tr>
<?php
	}
?>
</table>

 <p><?php echo $links; ?></p>



<?php
$this->load->view('common/footer');
?>