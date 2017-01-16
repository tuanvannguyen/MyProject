<?php 
	require_once "model/Post_m.php";
	class PostController
	{
		public function index() {
			$post = new Post_m();
			if (isset($_POST['btn_Search']) && $_POST['search'] != '') {
				echo "DONE";
				$listPost = $post->search($_POST['search']);
			}
			else if(isset($_GET['id'])) {
				$id = $_GET['id'];
				$delete = $post->del($id);
				header('Location: http://localhost/Myproject/MVC/?controller=post');
				exit();
			}
			else {
				$listPost = $post->getAll();
			}
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
				if (isset($_POST['btnSave'])) {
					if($_POST['content'] != '') {
						$input = $_POST;
						$newpost = new Post_m();
						$newpost->update(($input['content']), $id);
						header('Location: http://localhost/Myproject/MVC/?controller=post');
						exit();
					}
				}
			include "view/post/edit.php";
		}
	}
?>
