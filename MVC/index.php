<?php 
	require_once "config/database.php";
	require_once "controller/PostController.php";
?>
<?php  
	if(isset($_GET['controller'])) {
		$controller = $_GET['controller'];
		switch ($controller) {
			case 'post':
				$post = new PostController();
				if(isset($_GET['method']) && $_GET['method'] == 'add') {
					$post->add();
				} else {
					$post->index();
				}
				break;
		}
	}
?>
