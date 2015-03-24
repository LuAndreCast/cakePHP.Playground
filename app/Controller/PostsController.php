<?php 
	//  even  thou the file is named 'posts_controller.php' the class has capital P 
	// and drops the '_' between posts and controller
	App::uses('AppController', 'Controller');
	class PostsController extends AppController{

	var $name = 'Posts';	  // helping cakephp link the files
	// var $default = 'default'; // this makes all the actions used the default layout
	
	/**/
	public function index()
	{
		$this->set('posts', $this->Post->find('all') ); 
		//the line above is doing the following
		// 1) finding all the posts -  $this->Post->find('all') 
		// 2) storing the data into the var 'posts' 
		// 3) using the set operation to send the data to our 'index' view

		$this->set('title_for_layout', 'Our Blog site');// custom title of the page
		// $this->layout = 'default'; // this changes the layout ONLY for this action
	}

	// 
	public function view ($id = NULL)
	{
		// $this->Post->read(NULL, $id); //if you want return all them, but null
		$this->set('post', $this->Post->read(NULL, $id) );
		$this->set('title_for_layout', 'Our Blog site');// custom title of the page

	}

	//access date after its submitted 
	public function add()
	{
		// $_POST['title'] in cakephp is '$this->data'
		if (!empty($this->data))  //submitting data to database
		{
			//passing data from form, this returns true or false if data was successfully saved
			if($this->Post->save( $this->data))
			{
				$this->Session->setFlash('The post was successfully added'); //creates a onetime message for the user
				
				// redirecting to index page to view post
				$this->redirect( array('action'=>'index')); //key is action
			}
			else
			{
				$this->Session->setFlash('The post was not saved, please try again');
			}
		}//eoif
	}//eom

	//function to update the modified date 
	function edit($id= NULL)
	{
		// checking if the data empty
		if (empty($this->data))
		{
			$this->data = $this->Post->read(NULL, $id); //pre-populating fields
		}
		else //the form has been submitted and its not empty
		{
			//need to resaved data onto DB
			if($this->Post->save($this->data))
			{
				//one time msg to notify user
				$this->Session->setFlash('The post has been updated');

				//controller redirect to the view action 
				$this->redirect(array('action'=>'view', $id));

			}
		}//eo cond's
	}//eom

	// function to delete an existing post
	public function delete($id = NULL){
		$this->Post->delete($id); 								//deleting post
		$this->Session->setFlash('The post has been deleted'); 	//message to notify user
		$this->redirect(array('action'=>'index'));				//redirecting index page

	}

	// below is an example of an action - 
	public function helloWorld(){

	}
	//the above action needs a view!! (inside app/view/Posts/hello_world.ctp folder)


}

?>