<?php 
	class database
	{
		protected $conn = null;

		public function __construct()
		{
			$this->conn = mysqli_connect('localhost', 'root','', 'datamvcdemo');
			if(!$this->conn) {
				die('Can not connect Databases...');
			}
		}
	}
?>
