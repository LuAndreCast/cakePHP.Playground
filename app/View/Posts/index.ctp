<h2>View All Posts</h2>
<table>
	<tr>
		<th>Title</th>
		<th>Body</th>
		<th>Actions</th>
	</tr>	
		<!-- note that var posts has all the data- its a multi dimensional array -->
	<?php foreach($posts as $post): ?>
	<tr>
<!-- html link has 2 param's
1) link text which in this case is the post title
2) linking to the post 
-->
		<td>  <!-- title of the form -->
			<?php 
				echo $this->html->link($post['Post']['title'], 
				array('action' => 'view', $post['Post']['id'])); 
			?> 
		</td>	

		<td>  <!-- body of the form -->
			<?php echo $post['Post']['body']; ?> 
		</td>	
		
		<td> <!-- edit form -->
			<?php echo $this->html->link('Edit', 
			array('action'=>'edit', $post['Post']['id'])); ?>
		</td> 
		<td> <!-- delete form -->
			<?php echo $this->html->link('Delete', 
			array('action'=>'delete', $post['Post']['id'] , 
			NULL, 'Are you sure you want to delete this post?')); ?>
			<!-- 4th param is javascript message -->
		</td> 
		
	</tr>
	<?php endforeach; ?>
</table>

<p>
	<?php  
		echo $this->html->link('Add a Post', array('action'=>'add'));
	?>
</p>