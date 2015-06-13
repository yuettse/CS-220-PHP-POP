<?php 
class animal {
	public $health = 100;
	public $name = 'Animal';
	
	public function walk() {
		$this->health -= 1;
		return $this;
	}
	
	public function run() {
		$this->health -= 5;
		return $this;
	}
	
	public function displayHealth() {
		echo  "<br>Name = " . $this->name . "<br>Health = " . $this->health . "<br>";
	}
	
}

class dog extends animal {
	public $health = 150;
	public $name = "Dog";
	public function pet() {
		$this->health += 5;
		return $this;
	}
}

class dragon extends animal {
	public $health = 170;
	public $name = "dragon";
	public function fly() {
		$this->health -= 10;
		return $this;
	}
}



$animal1 = new animal();
$animal1->walk()->run()->displayHealth();

$dog1 = new dog();
$dog1->pet()->displayHealth();

$dragon1 = new dragon();
$dragon1->fly()->displayHealth();


?>
