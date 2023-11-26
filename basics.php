<?php

echo "Hello, World!\n";
echo "I am some text\n";
echo "I am a string on a new line\n";
echo "No semi-colon is a no-no\n";
echo "PHP"; echo " Apprentice\n";

$greeting;

// Variables
$greeting = "Hello, World!\n";
echo $greeting;

$_var = "I am a variable with underscore!";
$Var = "I am a variable with Capital Letter";
$var = "I am a variable";

$int = 1;
$float = 100.10;
$bool = true;
$string = 'I am a string';

$number = 1;
$number = 'one';

// Arithmetics

$a = 1;
$b = 2;

echo $a + $b;
echo $b - $a;
echo $a * $b;
echo $b / $a;
$mod = 10 % 5;
echo $mod;
echo 5 ** 2;

// Working with text
$firstname = 'Joey';
$lastname = "Johnson";

echo "Jacob\nJones\n";
$firstname = "Cindy";
echo "$firstname Smith\n";

$fistname = 'Jenny';
$lastname = 'Madison';
$fullname = $firstname . " " . $lastname;
echo $fullname . "\n";

// Comparisons
$a = true;
$b = false;

$one = 1;
$two = 2;
$one == $two; // return false
$one != $two; // return true
$one > $two; // return false
$one < $two; // return true
$one <= $two; // return true
$one >= $two; // return false
// the following retun true
1 == 1;
1 == '1';
1 == true;
1 == 1.0;
1 === 1;
// the following return false
1 === '1';
1 === true;
1 === 1.0;

// Boolean Logic 
// Is it a yes or a not?
$a = true;
$b = true;
$c = false;
$a && $b; // return true
$a && $c; // return false

$a = true;
$b = false;
$c = false;
$d = true;
$a || $b; // return true
$b || $c; // return false
$a || $d; // return true
$d = true;
echo !$d; // false 

// Conditionals
$animal = 'cow';
if ($animal == 'cow') {
  echo "Moooooooo...\n";
}
$animal = 'bird';
if ($animal == 'dog') {
  echo "Woof!\n";
} elseif ($animal == 'cat') {
  echo "Meow!?\n";
} elseif ($animal == 'bird') {
  echo "Chirp!\n";
} else {
  echo "I amo not a dog, cat or bird\n";
}

$food = 'oranges';
switch ($food) {
  case 'apples':
    echo "Eating an apple\n";
    break;
  case 'oranges':
    echo "Eating an orange\n";
    break;
  case 'peaches':
    echo "Eating an peach\n";
    break;
  default:
    echo "No food, I am hungry\n";
}

$drink = 'water';
switch ($drink) {
  case 'water':
    echo "Drinking water\n";
  case 'tea':
    echo "Drinking tea\n";
    break;
}

$language = 'english';
echo $language == "spanish" ? "hola\n" : "hello\n";
// old way
echo $IDoNotExist ?? "Variable not set\n";
echo "hello\n" ?? "Variable not set\n";
echo $IDoNotExist ?? $IExist ?? "Neither variable is set\n";

// Loops
$num = 5;
while ($num > 0) {
  echo "While loop $num\n";
  --$num;
}
$num = 0;
do {
  echo "Do while $num\n";
  ++$num;
} while ($num < 5);

for ($i = 0; $i < 5; $i++) {
  echo "For loop $i\n";
}

$set = [1,2,3,4,5];
foreach ($set as $num) {
  echo "Array value $num\n";
}

$values = ['one','two','three'];
foreach ($values as $value) {
  if ($value === 'two') {
    break;
  }
  echo "Break $value\n";

$values = ['one', 'skip', 'three'];
foreach ($values as $value) {
    if ($value === 'skip') {
      continue;
    }
    echo "Continue $value\n";
  }
}

// Arrays
$taskList = array('grocery store', 'change car oil');
$groceryList = ['bread', 'milk', 'eggs'];
echo $groceryList[0] . "\n";
echo $groceryList[1] . "\n";

$car = ["make" => "Toyota", "model" => "Camry"];
echo $car["model"] . "\n";

// Functions
function hello_world() {
  echo "Hello, World!\n";
}
hello_world();

function greet($firstname, $secondname) {
  echo "Hello $firstname $secondname\n";
}
greet("Luiz", "Guilherme");

function capitalize($value) {
  return mb_strtoupper($value);
}
$animal = capitalize("Dog");
echo "$animal\n";

$sum = function ($a, $b) {
  return $a + $b;
};

echo $sum(1, 2) . "\n";

// Object-oriented programming
class Car {

}
$car = new Car();

class Bicycle {
  public $color;
}
$bike = new Bicycle();
$bike->color = 'Blue';
echo $bike->color . "\n";

$redBike = new Bicycle();
$redBike->color = "Red";
echo $redBike->color . " Bike Object\n";

class Tricycle {
  public $color;

  public function echoColor() {
    echo $this->color . "\n";
  }
}

$bike = new Tricycle();
$bike->color = "Yellow";
$bike->echoColor();

// Extend objects
class Vehicle {
  public function drive() {
    echo "driving...\n";
  }
}

class Truck extends Vehicle {}
$truck = new Truck();
$truck->drive();

class Tractor extends Vehicle {
  public function drive() {
    echo "driving slowly...\n";
  }
}

$tractor = new Tractor();
$tractor->drive();

class Motocycle extends Vehicle {
  public function pushPedal() {
    $this->drive();
  }
}

$motocycle = new Motocycle();
$motocycle->pushPedal();

class Racecar extends Vehicle {
  public function drive() {
    parent::drive();
    echo "driving even fast...\n";
  }
}

$racecar = new Racecar();
$racecar->drive();

// Private Objects
class Phone {
  private $number;

  public function setNumber($number) {
    $this->number = $number;
  }
}

$phone = new Phone();
// $phone->number = '4002-8922'; // Don't work
$phone->setNumber('4002-8922');

// private brings more control
class Phone2 {
  private $number;

  function setNumber($number) {
    // if start with '7' don't create
    if (substr($number, 0, 1) !== '7') {
      $this->number = $number;
    }
  }
}

class Phone3 {
  private $number;

  protected $caller;

  public function setNumber($number) {
    $this->number = $number;
  }
}
// protected can be inherit but private not
class Smartphone extends Phone3 {
  public function setCaller($caller) {
    $this->caller = $caller;
  }
  // Don't work  
  // public function showNumber() {
  //   echo $this->number;
  // }
}

// Constructor Objects

class Hat {
  public $color;

  public function setColor($color)
  {
    $this->color = $color;
  }
}

class Ballcap
{
  public $color;

  public function __construct($color)
  {
    $this->color = $color;
  }
}

$hat = new Hat();
$hat->setColor('Blue');

$ballcap = new Ballcap('Blue');

// constructor do not return value because the return value is always the object
class Tophat
{
  public function __construct($color)
  {
    return $color;
  }
}
// $tophat now holds an instance of Tophat, not the string “Grey”.
$tophat = new Tophat('Grey');

class House {
  public $color;

  public function __construct($color)
  {
    $this->color = $color;
  }
}

$house = new House('Green');

class Skyscraper
{
  private static $popularColor;
  public $color;

  public static function setDefaultColor($color)
  {
    self::$popularColor = $color;
  }

  public function __construct()
  {
    $this->color = self::$popularColor;
  }
}

Skyscraper::setDefaultColor('Grey');
$skyscraper = new Skyscraper();
echo $skyscraper->color . "\n";

class TinyHouse
{
  private $color;
  private $wheels;
  private $trailer;

  public static function build($color, $wheels, $trailer)
  {
    return new self($color, $wheels, $trailer);
  }

  public function __construct($color, $wheels, $trailer)
  {
    $this->color = $color;
    $this->wheels = $wheels;
    $this->trailer = $trailer;
  }
}

$house = TinyHouse::build('Blue', 4, true);

// Interfaces
// An interface defines what methods a class should have.
interface Chair
{
  public function setColor($color);
  public function setLegs($number);
}

class Recliner implements Chair
{
  private $color;
  private $legs;

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function setLegs($number)
  {
    $this->legs = $number;
  }
}

interface Payment
{
  public function charge($amount);
}

class CreditCard implements Payment
{
  public function charge($amount)
  {
    // contacts a credit card payment provider;
  }
}

$creditCard = new CreditCard();
if ($creditCard instanceof Payment) {
  $creditCard->charge(25);
}

// Inheriting an interface
// Abstract classes are similar to interfaces
// However, an abstract class can also have normal methods.
abstract class CellPhone
{
  abstract public function unlock();

  public function turnOn()
  {
    echo "Holding power button...\n";
  }
}

class iPhone extends CellPhone
{
  public function unlock()
  {
    echo "Touch fingerprint reader...\n";
  }
}

class Android extends CellPhone
{
  public function unlock()
  {
    echo "Typing passcode...\n";
  }
}

$iPhone = new iPhone();
$iPhone->turnOn();
$iPhone->unlock();

$android = new Android();
$android->turnOn();
$android->unlock();

// $cellPhone = new CellPhone(); // cause an error
