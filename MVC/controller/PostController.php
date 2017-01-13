<?php 
	require_once "model/Post_m.php";
	class PostController
	{
		public function index() {
			$post = new Post_m();
			$listPost = $post->getAll();
			include "view/post/list.php";
		}
		public function add() {
			$message = '';
			if(isset($_POST['btnSubmit'])) {
				if($_POST['content'] != '') {
					$input = $_POST;
					$post = new Post_m();
					$listPost = $post->insert($input['content']);
					header('Location: http://localhost/Myproject/MVC/?controller=post');
					exit();
				}
				else {
					$message = '<p style="color: red;">Content is required...</p>';
				}
			}
			include "view/post/create.php";
		}
		public function edit() {
			$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
				if ($id) {
					$post = new Post_m();
					$data = $post->getRow($id);
				}

			include "view/post/edit.php";
		}
	}
?>
