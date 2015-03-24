<h2>Add a Post</h2>
<?php  	
echo $this->form->create('Post', array('action'=>'add'));	// creating a form for post
echo $this->form->input('title');							// create a title
echo $this->form->input('body');							// fill body
echo $this->form->end('Create a Post'); 					// submit button for post 
?>