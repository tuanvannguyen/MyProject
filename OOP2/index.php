<?php  
	/**
	* class person 
	*/
	class Person {
		private $id;
		private $name;
		private $birthday;
		private $address;
		// constructor khoi tao Person
		function __construct($id = null, $name = null, $birthday = null, $address = null) {
			$this->id = $id;
			$this->name = $name;
			$this->birthday = $birthday;
			$this->address = $address;
		}
		// Phuong thuc setId
		public function setId($id) {
			$this->id = $id;
		}
		// Phuong thuc getId tra ve id
		public function getId() {
			return $this->id; 
		}

		// Phuong thuc setName
		public function setName($name) {

			$this->name = $name;
		}
		// Phuong thuc getName tra ve name
		public function getName() {
			return $this->name; 
		}

		// Phuong thuc setBirthday
		public function setBirthday($birthday) {
			$this->birthday = $birthday;
		}
		// Phuong thuc getBirthday tra ve birthday
		public function getBirthday() {
			return $this->birthday; 
		}

		// Phuong thuc setAddress
		public function setAddress($address) {
			$this->address = $address;
		}
		// Phuong thuc getAddress tra ve address
		public function getAddress() {
			return $this->address; 
		}

		// method running mo ta hanh dong chay
		public function running() {
			echo "<p>Nguoi co ten " .$this->name. " sinh song o " . $this->address. " chay rat nhanh </p>";
		}

		// method singing mo ta hanh dong hat
		protected function singing() {
			echo "<p>Nguoi co ten " .$this->name. " sinh song o " . $this->address. " hat rat hay </p>";
		}

		# method driving mo ta hanh dong lai xe
		public function driving() {
			echo "<p>Nguoi co ten " .$this->name. " sinh song o " . $this->address. " chua biet lai xe </p>";
		}

	}
	/**
	* Class Student extends class Person
	*/
	class Student extends Person {
		private $studenid;
		private $classname;
		private $subject;
		private $time;
		private $score;
			
		function __construct($id = null, $name = nul, $birthday = null, $address = null, 
				$studentid = null, $classname = null, $subject = null, $time = null, $score =null) {
			parent::__construct($id, $name, $birthday, $address);
			$this->studentid = $studentid;
			$this->classname = $classname;
			$this->subject = $subject;
			$this->time = $time;
			$this->score = $score;
		}
		# method setStudentid
		public function setStudentid($studentid) {
			$this->studentid = $studentid;
		}
		# method getStudentid return $studentid
		public function getStudentid() {
			return $this->studentid;
		}

		# method setClassname
		public function setCalssname($classname) {
			$this->classname = $classname;
		}
		# method getClassname return $classname
		public function getClassname() {
			return $this->$classname;
		}

		# method setSubject
		public function setSubject($subject) {
			$this->subject = $subject;
		}
		# method getSubject return $classname
		public function getSubject() {
			return $this->$subject;
		}

		# method setTime
		public function setTime($time) {
			$this->time = $time;
		}
		# method getTime return $time
		public function getTime() {
			return $this->$time;
		}

		# method setScore
		public function setScore($score) {
			$this->score = $score;
		}
		# method getScore return $score
		public function getScore() {
			return $this->$score;
		}

		# method studing 
		public function studing() {
			# code...
		}
		# method pratical
		public function pratical() {
			# code...
		}

		# method singing extends method singing form class Person
		public function singing() {
			parent::singing();
		}
		public function infor() {
			echo "<p>Ma SV: " . $this->studentid . " Name: " .parent::getName(). "</p>";
		}
	}

	$person1 = new Person("1102", 'Jond Doe',"23/08/1992", 'US');
	$person1->running();
	// $person1->singing();
	$person1->driving();
	$student1 = new Student('1103', 'Petter Clound', '24/2/1996', 'UK', '1110', '11A', 'Learning PHP', '2 thang', '8.5');
	$student1->infor();
	$student1->singing();

?>