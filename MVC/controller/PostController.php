<?php 
	require_once "model/Post_m.php";
	class PostController
	{
		public function index() {
			$post = new Post_m();
			$listPost = $post->getAll();
			include "view/post/list.php";
		}
	}
?>
