<?php

class Person {
	var $name;
	var $age;
	var $gender;
	var $email;
	var $address;
	var $phone;
	var $skin;
	var $sing;

	function __construct($name, $age, $gender, $email, $address, $phone, $skin, $sing) {
		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
		$this->email = $email;
		$this->address = $address;
		$this->phone = $phone;
		$this->skin = $skin;
		$this->sing = $sing;
	}

	function info() {
		echo "Name: " . $this->name . "<br/>";
		echo "Age:" . $this->age ."<br/>";
		echo "Gender: " . $this->gender . "<br/>";
		echo "E-mail: " . $this->email . "<br/>";
		echo "Address: " . $this->address . "<br/>";
		echo "Phone: " . $this->phone . "<br/>";
		echo "Skin: " . $this->skin . "<br/>";
		echo "Sing: " . $this->sing . "<br/>";
	}
	public function singing() {
		if($this->sing == 'good') {
			echo "You are sing very good <br/>";
		} else if ($this->sing == 'bad') {
			echo "Your are sing bad <br/>";
		}
	}
}

$sv = new Person('Tuan Anh', "25", 'male', 'tuananh@gmail.com', 'Ha Noi', "0982235478", 'trang', 'bad');
$sv->info();
$sv->singing();
echo "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ <br/>";

$student = new Person('Mong La', "22", 'female', 'email@gmail.com', 'Ha Noi', "09736826633", 'white', 'good');
$student->info();
$student->singing();
echo "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br/>";

?>
