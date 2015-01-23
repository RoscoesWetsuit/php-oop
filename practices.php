<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// example1
class shoes {
	//class body
	//class body
	//class body
}

class car {
	//class body
	//class body
	//class body
}

class cellphones {
	//class body
	//class body
	//class body
}
//example2
$game1 = new game();
$game2 = new game();

$car1 = new car();
$car2 = new car();

$cellphones1 = new cellphones();
$cellphones2 = new cellphones();
//example3
class shoe {
	public $brand = nike;
	public $series = air max 90;
	public $model = black tiger camo;
}

class car {
	public $make = bmw;
	public $model = m3;
	public $year = 1988;
}

class cellphones {
	public $brand = samsung
	public $type = galaxy s5
	public $os = android
}
//example4
$shoe1 = new shoe();
print $shoe1->brand;
brand;

$car1 = new car();
print $car1->make;
make;

$cellphones1 = new cellphones();
print $cellphones1->brand;
brand;
//example5
public function Method1( $argument, $another) {
	// stuff
	//stuff
	//stuff
}

public function Method2( $argument, $another) {
	// stuff
	//stuff
	//stuff
}

public function Method3( $argument, $another) {
	// stuff
	//stuff
	//stuff
}

//lecture 2--------------------------------------------------------------
//example1
class shoe {
public $brand;
public $series;
public $model;

	function __construct($brand, $series, $model) {
	$this->brand = $brand;
	$this->series = $series;
	$this->model = $model;
	}

	function getshoe() {
	return "{$this->brand}" . 
	"{$this->series}";
}

class car {
public $make;
public $model;
public $year;

    function __construct($make, $model, $year) {
	$this->make = $make;
	$this->model = $model;
	$this->model = $year;
	}

	function getcar() {
	return "{$this->make}" . 
	"{$this->model}";
}

class cellphones {
public $brand;
public $type;
public $os;

	function __construct($brand, $type, $os) {
	$this->brand = $brand;
	$this->type = $type;
	$this->os = $os;
	}

	function getName() {
	return "{$this->brand}" . 
	"{$this->series}";
}

//example2

	$shoe1 = new shoe("nike", "air max 90", "black tiger camo");
		print shoe 1: {$shoe1->getshoe()}\n;

	$car1 = new car("bmw", "m3", "1988");
		print car 1: {$car1->getcar()}\n;

	$cellphones1 = new cellphones("samsung", "galaxy s5", "android");
		print cellphones 1: {$cellphones1->getcellphones()}\n;
		
?>
</body>
</html>