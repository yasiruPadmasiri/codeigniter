<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include_once('header.php');?>
<br>
<br>
		<div class="container">
			<h3>See All Posts</h3>
			<?php if($msg=$this->session->flashdata('msg')):?>
				<?php echo $msg;?>
			<?php endif;?>
			<?php echo anchor('Welcome/create','Add Post', ['class'=>'btn btn-primary']); ?>
			<table class="table table-hover">
			<thead>
				<tr>
				<th scope="col">Title</th>
				<th scope="col">Description</th>
				<th scope="col">Created Date</th>
				<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php if(count($posts)):?>
				<?php foreach($posts as $post):?>

				<tr class="table-active">
				<td><?php echo $post->title;?></td>
				<td><?php echo $post->description;?></td>
				<td><?php echo $post->created_date;?></td>
				<td>
				<?php echo anchor("Welcome/view/{$post->id}",'View', ['class'=>'btn btn-info']); ?>
				
				<?php echo anchor("Welcome/update/{$post->id}",'Update', ['class'=>'btn btn-success']); ?>
				
				<?php echo anchor("Welcome/Delete/{$post->id}",'Delete', ['class'=>'btn btn-primary']); ?>
			
				</td>
				</tr>
			<?php endforeach;?>
			<?php else: ?>
				<tr>
					<td>
						No Records Found!
					</td>
				</tr>
			<?php endif; ?>
			</tbody>
			</table> 
		</div>

<?php include_once('footer.php');?>



	