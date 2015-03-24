<?php 
// model are classes
// the controller for this model is 'posts_controller.php'
App::uses('AppModel', 'Model');
class Post extends AppModel{

	var $name = 'Post'; /*this helps cakephp link up the files - not mandatory*/

	//ALL VALIDATIONS should be inside MODEL and should be inside an array called 'validate'
	var $validate = array(
		// validation for tile
		'title' => array(
			// title validation #1
			'title_must_not_be_blank'=>array(
				'rule'=>'notEmpty',
				'message' => 'This post is missing a title!'
			
			),
			// title validation #2
			'title_must_be_unique'=>array(
				'rule'=>'isUnique',
				'message' => 'a post with this title already exists!'
			)
		),
		// validations for body
		'body' => array(
			// body validation #1
			'body_must_not_be_blank'=>array(
				'rule'=>'notEmpty',
				'message' => 'This post is missing its body!'
			)
		)	
	);

}


?>