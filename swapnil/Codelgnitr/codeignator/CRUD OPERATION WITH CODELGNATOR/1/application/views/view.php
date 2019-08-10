<?php include('header.php');?>
<div class="container">
<h3>View Post</h3>
<h4><?php echo $post->title;?></h4>
<h4><?php echo $post->description;?></h4>
<p><?php echo $post->date_created;?></p>
<?php echo anchor('welcome','back',['class'=>'btn btn-primary']);?>
</div>
<?php include('footer.php');?>