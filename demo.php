<?php 
$nums = array(1.9,300,400,398,2);

rsort($nums);

// var_dump($nums);

$names = [
	"last" => "Black",
	"first" => "James",
	"middle" => "White"
];

// asort($names);
// ksort($names);
// arsort($names);
// krsort($names);
//var_dump($names);

// echo date('F d, Y') . "<br/>";
// echo date('Y/m/d') . "<br/>";
// echo date('Y/m/D') . "<br/>";

// echo strrev("Hello World") . "<br/>";
// echo strlen("Hello World") . "<br/>";

interface MIT {
	function onRegressionAnalysis();
}
interface MaED {
	function onResearchDefense();
}

class Person implements MIT, MaED
{
	private $name;
	private $birthdate;
	private $gender;

	public function onRegressionAnalysis(){
		echo "<br/> Regression Analysis complete.";
	}

	public function onResearchDefense(){
		echo "<br/> Research Defense complete.";
	}

	public function set($prop, $value){
		$this->$prop = $value;
	}

	public function get($prop){
		return $this->$prop;
	}

	public static function sum(...$args){
	//	var_dump($args);
		$sum = 0;
		foreach($args as $num){
			$sum += $num;
		}
		echo "<br/> ". $sum;
	}
}

$person1 = new Person();
$person1->set('name', 'John Wick');
$person1->set('birthdate', '1999/01/01');
$person1->set('gender', 'Female');

echo "<br/>" . $person1->get('name');
echo "<br/>" . $person1->get('birthdate');
echo "<br/>" . $person1->get('gender') . "<br/>";
echo "<br/>" . $person1->onRegressionAnalysis();
echo "<br/>" . $person1->onResearchDefense();

# SCOPE RESOLUTION OPERATOR ::
echo Person::sum(10,100,-3), " Hello world!";

// class Patient extends Person {
// 	function __construct(){
// 		parent::__construct(...);
// 	}
// }



abstract class Drivable {
	abstract function onAccelerate();
}
// Bawal ni!
// $drivable = new Drivable();

class Vehicle extends Drivable {
	public function onAccelerate(){
		echo "<br/> 9.8m/s^2";
	}
}




?>