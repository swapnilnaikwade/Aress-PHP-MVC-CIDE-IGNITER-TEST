<?php include('header.php');?>
<div class="container">
<h3>View all Posts</h3>
<?php echo anchor('welcome/create','Add Post', ['class'=>'btn btn-primary']);?>
	<table class="table table-hover">
		<thead>
			<tr>
			<th></th>
			<th scope="col">Title</th>
			<th scope="col">Description</th>
			<th scope="col">creation Date</th>
			<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($authors as $row):?>
			<tr class="table-active">
			<th scope="row">Active</th>
			<td><?php echo $row->title ;?></td>
			<td><?php echo $row->description;?></td>
			<td><?php echo $row->date_created;?></td>
			<td><?php echo anchor("welcome/view/{$row->id}",'View', ['class'=>'btn btn-primary']);?>
			<?php echo anchor("welcome/update/{$row->id}",'Update', ['class'=>'btn btn-success']);?>
			<?php echo anchor("welcome/delete/{$row->id}",'Delete', ['class'=>'btn btn-danger']);?></td>
			</tr>
			<tr>
<?php endforeach;?>
		</tbody>
	</table>
	<p><?php echo $links; ?></p>
</div>
<?php include('footer.php');?>