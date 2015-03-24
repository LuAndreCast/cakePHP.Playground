<!-- 
This take function, takes in a number and searches the database for the post id

	http://localhost:8888/cakephpPlayground/index.php/Posts/view/1 

-->


<!-- posting title -->
<h2>  <?php echo $post['Post']['title']; ?>  </h2> 

<!-- posting body -->
<p> <?php echo $post['Post']['body']; ?></p>

<!-- posting created and modified -->
<p> <small>Created on: <?php echo $post['Post']['created']; ?> </small> 
Last modified on: <?php echo $post['Post']['modified']; ?>
</p>

<br />

<p> 
	<!-- link to go back to the previous page -->
	<?php echo $this->html->link('Back', array('action'=>'index')); ?> 

	<!-- link to edit current post -->
	<?php echo $this->html->link('Edit', array('action'=>'edit', $post['Post']['id'])); ?> 

	<!-- link to delete current post -->
	<?php echo $this->html->link('Delete', array('action'=>'delete', $post['Post']['id'])); ?> 

</p>