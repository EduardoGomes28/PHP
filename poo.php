<?php 
	class Person{
		private $name;
		private $email;
		private static $ageLimit = 45;

		public function__construct($name, $email){
			$this->name = $name;
			$this->email = $email;
			echo __CLASS__. 'created<br>';
		}

		public function__destruct($name, $email){
			echo __CLASS__. 'destroyed<br>';

		public function setName($name){
			$this->name = $name;
		}

		public function getName(){
			return $this->name'<br>';
		}

		public function setEmail($email){
			$this->name = $email;
		}

		public function getEmail(){
		return $this->email'<br>';
		}

		public static function getAgeLimit(){
			return self ::$ageLimit;
		}
	}

	# static props and method
	echo Person::$ageLimit;
	echo Person::getAgeLimit();

	//$person1 = new Person('Eduardo Gomes', 'eduu@gmail.com');

	//$person1 -> setName('Eduardo Gomes');

	//echo $person1->getName();
	//echo $person1 ->name;

	class Customer extends Person{
		private $balance;

		public function__construct($name, $email,$balance){
			parent::__construct($name, $email,$balance);
			$this->balance= $balance;
			echo 'A new'.__CLASS__.'has been created';
		}

		public function setBalance($email){
			$this->balance= $balance;
		}

		public function getBalance(){
		return $this->balance.'<br>';
		}
	}

	echo Person::$ageLimit;

	//$customer1 = new Customer('Eduardo Gomes', 'eduu@gmail.com', 400);

	//echo $customer1->getBalance();
 ?>