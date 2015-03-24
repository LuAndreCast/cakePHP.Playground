<h2>Edit Post</h2>
<?php 
echo $this->form->create('Post', array('action'=>'edit'));
echo $this->form->input('title'); 	//database has this field as 'varchar'
echo $this->form->input('body');

// something you have to specify the data type
echo $this->form->input('id', array( 'type'=>'hidden') ); //this is a hidden form

//close form and creates submit button
echo $this->form->end('Updated Existing Post'); // if you pass a string to the end method, it will show on the page



?>