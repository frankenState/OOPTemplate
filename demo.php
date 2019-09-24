<?php 
// index array
$nums = [300, 17.5, -100, 3.14];


# echo count($nums). "<br/>";
# sort($nums);
# rsort($nums);

# var_dump($nums);

// Associative arrays
$name = [
	'last' => 'Doe',
	'First' => 'Jane',
	'middle' => 'Smith'
];

# asort($name);
# ksort($name);
# arsort($name);
# krsort($name);
#var_dump($name);

// echo date('F d, Y') . "<br/>";
// echo date('Y/m/d') . "<br/>";
// echo date('Y/m/D') . "<br/>";

$date=date_create("3/12/98");
echo date_format($date,"Y/m/d") . "<br/>";

function sanitize($data) { 
	// $temp1 = htmlentities($data);
	// $temp2 = htmlentities($temp1);

	// return $temp2;
	return htmlspecialchars(htmlentities($data));
}

// $uname = sanitize("<a href='http:/somelinke.com/script.js?=123><script>window.load()- - - -</script></a>'");


// echo $uname . "<br/>";

// echo "strtoupper: " . strtoupper("hello world") . "<br/>";
// echo "strtolower: " . strtolower("HELLO WORLD") . "<br/>";
// echo "ucfirst: " . ucfirst("hello world") . "<br/>";
// echo "lcfirst: " . lcfirst("HELLO WORLD") . "<br/>";
// echo "ucwords: " . ucwords("hello world") . "<br/>";

class Math {
	public static function sum(...$args){
		$sum = 0;
		foreach($args as $num){
			$sum += $num;
		}
		echo "Sum: " . $sum . "<br/>";
	}
}
# Scope Resolution Operator
Math::sum(1,3,5,6,7,100);

# An abstract class is one that cannot be instantiated, only inherited. 
abstract class Drivable {
	abstract function onAccelerate();
}

class Vehicle extends Drivable {
	public function onAccelerate(){
		echo " Accelerating:  9.8m/s^2 <br/>";
	}
}

# Interfaces are defined to provide a common function names to the implementers. 
interface Mail {
	public function onSend();
}
interface Sanitize {
	public function onGrammarCheck();
}

class Report implements Mail, Sanitize {
	public function onSend(){
		echo "Sending the report via Email <br/>";
	}
	public function onGrammarCheck(){
		echo "No grammar error found.";
	}
}

$report = new Report();
$report->onSend();
$report->onGrammarCheck();

echo "<br>" . "Hello" . " Hello" , " Hello";
print "<br/>Hello world";


?>