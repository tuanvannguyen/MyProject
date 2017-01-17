<?php
	class Animals {
		var $type;
		var $name;
		var $color;
		var $going;
		var $food;

		function __construct($type, $name, $color, $going, $food) {
			$this->type = $type;
			$this->name = $name;
			$this->color = $color;
			$this->going = $going;
			$this->food = $food;
		}

		public function running() {
			echo "$";
		}

		public function eating() {
			# code...
		}
	}

	class Person extends Animals {
		
		function __construct(argument) {
			# code...
		}
	}

	class Child extends Animals {
		
		function __construct(argument) {
			# code...
		}
	}

 ?>
