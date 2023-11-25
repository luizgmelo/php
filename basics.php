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
