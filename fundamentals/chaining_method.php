<?php
class bike {
	public $price;
	public $max_speed;
	public $miles;
	
	public function __construct ($price, $max_speed) {
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
	}
	
	public function displayInfo() {
		echo "Bike price = $'$this->price'<br>
		Bike maximum speed = '$this->max_speed'mph<br>
		Total miles = '$this->miles'<br><br>";
	}
	
	public function reverse() {
		if ($this->miles > 0) {
			echo "Reversing!<br>";
			$this->miles -= 5;
		} else {
			echo "Cannot reserve with 0 total miles<br>";
		}
		return $this;
	}
	
	public function drive() {
		$this->miles += 10;
		echo "driving!<br>";
		return $this;
	}
		
		
		
}
	$bike1 = new bike(200, 25);
	$bike1->drive()->drive()->drive()->reverse()->displayInfo();
	
	
	
	
?>
