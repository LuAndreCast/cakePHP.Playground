<?php 
//  even  thou the file is named 'posts_controller.php' the class has capital P 
// and drops the '_' between posts and controller
App::uses('AppController', 'Controller');
class PostsController extends AppController{

	var $name = 'Posts'; /*helping cakephp link the files*/

	// below is an example of an action - 
	public function helloWorld(){

	}
	//the above action needs a view!! (inside app/view/Posts/hello_world.ctp folder)


}

?>