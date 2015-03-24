<!-- document type -->
<?php echo $this->html->docType('xhtml-trans'); ?> 

<html>
<head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
		<?php echo $this->html->css('stylemis'); ?>
		<!-- this css file is located in app/webroot/css folder -->
</head>
<body>
	<div id="header"> 
		<h1>Our Blog</h1>
	</div>
	<div id="container"> 
		<?php echo $this->session->Flash(); 	//display flash message to browser 			?>
		<?php echo $this->content_for_layout; //display the code for each individual view ?>
	</div>
</body>
</html>