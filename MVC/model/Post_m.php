<?php 
	require_once "config/database.php";
	class Post_m extends database
	{
		protected $table = "post";
		public function __construct()
		{
			parent:: __construct();
		}
		public function getAll() {
			$query = "select * from " . $this->table;
			$rs = mysqli_query($this->conn, $query);
			$result = array();
			while ($row = mysqli_fetch_array($rs)) {
				$result[] = array(
					'id' 		=> $row['id'],
					'content' 	=> $row['content'],
				);
			}
			return $result;
		}
	}
?>
