<?php 
	class database
	{
		protected $conn = null;

		public function __construct()
		{
			$this->conn = mysqli_connect('localhost', 'root','Ruoi15111992@', 'demomvc');
			if(!$this->conn) {
				die('Can not connect Databases...');
			}
		}
	}
?>
