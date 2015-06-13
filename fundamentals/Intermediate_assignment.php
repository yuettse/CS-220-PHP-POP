<?php 

class car {
	public $price;
	public $miles;
	public $tax;
	public $fuel;
	public $speed;
	
	public function __construct ($price, $miles, $speed) {
		if($price > 10000) {
			$this->tax = 0.15;
			$this->price = $price + $price * $this->tax;
		} else {
			$this->tax = 0.12;
			$this->price = $price + $price * $this->tax;
		}
		
		$this->miles = $miles;
		$this->speed = $speed;
		$this->fuel = rand(0,100);
		$this->display_all();
		
	}
	
	
	public function display_all(){
		echo "<br>Price = $" . $this->price . "<br>Miles = " . $this->miles . "mph<br>Speed per hour = " . $this->speed . "<br>Gas Percentage = " . $this->fuel . "%<br>Tax = " . $this->tax . "<br>";
	}
	
	
}

$car1 = new car(1000000, 2000, 70);
$car1 = new car(10000, 20000, 501);
$car1 = new car(100000, 2010, 550);
$car1 = new car(1000000, 2000, 5);
$car1 = new car(1000000, 2000, 500);


?>
