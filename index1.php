
<?php

/*
  Variable Variable
  Takes The Value Of A Variable And Treats That As The Name Of A Variable


$a = "osama";
$$a = "elzero";
$$$a = "school";

echo $a;
echo "<br>";
echo $$a;
echo "<br>";
echo $osama;
echo "<br>";
echo $$$a;
echo "<br>";
echo $elzero;
echo "<br>";

echo "Hello ${$a}"; // $$a
echo "<br>";
echo "Hello ${$$a}"; // $$$a

*/
?>
<?php

/*
  Assign Variable By Reference
  - By Default, Variables Are Always Assigned By Value
  - Assigned By Reference Make Variable Alias Or Point To Another

  Search
  - References Are Not Pointers


$a = "Osama";
$b = &#038;$a;
$b = "Elzero";
$a = "School";

echo $a;
echo '<br>';
echo $b;

*/

?>
<?php

/*
  Pre-Defined Variables

  Search
  - PHP Pre-Defined Variables


// echo '<pre>';
// print_r($_SERVER);
// echo $_SERVER["HTTP_CONNECTION"];
// echo '</pre>';

echo $_GET["username"];
*/
?>
<!--
<form action="" method="get">
<input type="text" name="username">
<input type="submit" value="Send">
</form>
-->

<?php

  /*
    Constants
    - That Value Cannot Change During The Execution
    - Constants Always Uppercase
 

  define("DB_NAME", "elzero");
  define("MAIN_NUMBER", 5);

  echo DB_NAME;
  echo MAIN_NUMBER * 50; */
  ?>

<?php

/*
  Pre-Defined Constants [Case Sensitive]
  - PHP_VERSION
  - PHP_OS_FAMILY
  - PHP_INT_MAX
  - DEFAULT_INCLUDE_PATH

  Magic Constants [Case Insensitive]
  - __LINE__
  - __FILE__
  - __DIR__

  Reserved Keywords
  - break
  - clone

  Search
  - PHP Predefined Constants
  - Compile Time vs Runtime
  - List of Reserved Words


define("BREAKS", "AA");

echo php_uname();
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __dir__;
echo '<br>';
echo BREAKS;

// No Problem Here
function hello() {
  return "Hello";
}

echo hello();

// Syntax Error => Reserved Word
function clone() {
  return "Clone";
}

echo clone();
*/

?>
<!-- //Answer of the First assignment elzero web school

<?php // $name='Elzero Courses'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php // echo $name; ?>">
    <title>Welcome To <?php // echo $name; ?></title>
  </head>
  <body>
    <h1><?php // echo $name; ?></h1>
    <p>Here In <?php // echo // $name; ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php // echo $name; ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php // echo $name; ?></footer>
  </body>
</html>
-->

<?php
 
 //Answer of the second assignment elzero web school

// $name = "elzero";
// $$name = "Web";

// echo "Web";
// echo $$name;
// echo $elzero;
// echo "${$name}";
// echo "${elzero}";

 //Answer of the third assignment elzero web school
// $a = 200;
// $b = &$a;
// $a = 100;

// echo $b; // 100



 //Answer of the fourth assignment elzero web school

//  echo $_SERVER['DOCUMENT_ROOT'];
//  echo '<br>';
//  echo $_SERVER['SERVER_NAME'];
//  echo '<br>';
//  echo php_uname();


 //Answer of the fifth assignment elzero web school

 /*
  function
  break
  case
  if
  else
  const
  array()
  foreach
  do
  default
  class

 //Answer of the sixth assignment elzero web school

echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;

*/
?>

<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Arithmetic Operators
    - Used To Do Arithmetical Operations &#038; Conversion

    - $a [+]  $b => Addition
    - $a [-]  $b => Subtraction
    - $a [*]  $b => Multiplication
    - $a [/]  $b => Division
    - $a [%]  $b => Modulus
    - $a [**] $b => Exponentiation
    - +$a        => Identity
    - -$a        => Negation
 

  echo 10 + 20;
  echo '<br>';
  echo gettype(10 + 20);
  echo '<br>';
  echo 9.5 + 20.5;
  echo '<br>';
  echo gettype(9.5 + 20.5);
  echo '<br>';

  echo 10 - 20;
  echo '<br>';
  echo gettype(10 - 20);
  echo '<br>';
  echo 9.5 - 20.5;
  echo '<br>';
  echo gettype(9.5 - 20.5);
  echo '<br>';

  echo 10 * 20;
  echo '<br>';
  echo gettype(10 * 20);
  echo '<br>';
  echo 9.5 * 20.5;
  echo '<br>';
  echo gettype(9.5 * 20.5);
  echo '<br>';

  echo 20 / 10;
  echo '<br>';
  echo gettype(20 / 10);
  echo '<br>';
  echo 20 / 8;
  echo '<br>';
  echo gettype(20 / 8);
  echo '<br>';

  echo 21 % 10; // Remove 1 To Become 20
  echo '<br>';
  echo 23 % 10; // Remove 3 To Become 20
  echo '<br>';
  echo 29 % 10; // Remove 9 To Become 20
  echo '<br>';
  echo 30 % 10;
  echo '<br>';

  echo 2 ** 4;
  echo '<br>';
  echo 2 * 2 * 2 * 2;
  echo '<br>';
  echo 3 ** 5;
  echo '<br>';
  echo 3 * 3 * 3 * 3 * 3;
  echo '<br>';

  echo "100";
  echo '<br>';
  echo gettype("100");
  echo '<br>';
  echo +"100";
  echo '<br>';
  echo gettype(+"100");
  echo '<br>';

  echo "-100";
  echo '<br>';
  echo gettype("-100");
  echo '<br>';
  echo -"-100";
  echo '<br>';
  echo gettype(-"-100");

   */

   ?>

   <?php


   /*
     Operators
     - Used To Perform Operations On Values.
 
     Assignment Operators
     - Used To Write Value To Another
 
     - $a [+=]  $b => Addition
     - $a [-=]  $b => Subtraction
     - $a [*=]  $b => Multiplication
     - $a [/=]  $b => Division
     - $a [%=]  $b => Modulus
     - $a [**=] $b => Exponentiation

 
   $a = 10;
   // $a = $a + 20;
   $a += 20;
 
   $b = 20;
   // $b = $b - 5;
   $b -= 5;
 
   $c = 4;
   // $c = $c ** 4;
   $c **= 4;
 
   echo $a;
   echo '<br>';
   echo $b;
   echo '<br>';
   echo $c;
      */

      ?>

<?php

/*
  Operators
  - Used To Perform Operations On Values.

  Comparison Operators
  - Used To Compare Two Values

  - Part 1
  - ==    => Equal
  - !=    => Not Equal
  - <>    => Not Equal
  - ===   => Identical
  - !==   => Not Identical


// Test Equal
var_dump(100 == 100);
echo '<br>';
var_dump(100 == "100");
echo '<br>';
var_dump(100.0 == "100");
echo '<br>';
var_dump(100.0 != "100");
echo '<br>';
var_dump(100.0 <> "100");

echo '<br>';
echo '##############';
echo '<br>';

// Test Identical
var_dump(100 === 100);
echo '<br>';
var_dump(100 === "100");
echo '<br>';
var_dump(100.0 === "100");
echo '<br>';
var_dump(100.0 === 100);
echo '<br>';
var_dump(100.0 !== "100");
echo '<br>';
var_dump(100.0 !== 100);

*/

?>
<?php

/*
  Operators
  - Used To Perform Operations On Values.

  Comparison Operators
  - Used To Compare Two Values

  - Part 2
  - >     => Larger Than
  - >=    => Larger Than Or Equal
  - <     => Smaller Than
  - <=    => Smaller Than Or Equal
  - <=>   => Spaceship [Less Than, Equal Or Greater]

  Search
  - How Does PHP Compare Strings With Comparison Operators

var_dump(100 > 50);
echo '<br>';
var_dump(100 > 100);
echo '<br>';
var_dump(100 >= 100);
echo '<br>';
var_dump(100 >= 110);
echo '<br>';
var_dump(100 < 50);
echo '<br>';
var_dump(100 <= 50);
echo '<br>';
var_dump(100 <=> 200); // -1
echo '<br>';
var_dump(100 <=> 100); // 0
echo '<br>';
var_dump(100 <=> 50); // 1

*/

?>

<?php

/*
  Operators
  - Used To Perform Operations On Values.

  Incrementing &#038; Decrementing Operators
  - Increase And Decrease Values


$likes = 0;
$likes++;
$likes++;
$likes++;
$likes--;

echo $likes; // 2
echo '<br>';

$a = 0;

echo $a--; // 0
echo '<br>';
echo $a; // -1
echo '<br>';

$b = 0;

echo --$b; // -1
echo '<br>';
echo $b; // -1

*/
?>
<?php

/*
  Operators
  - Used To Perform Operations On Values.

  Logical Operators
  - Compare Conditions

  and => And => Two Are True
  &&  => And => Two Are True ["&&" Has A Greater Precedence Than "and"]
  or  => Or  => One Or Both Is True
  ||  => Or  => One Or Both Is True ["||" Has A Greater Precedence Than "or"]
  xor => Xor => One Is True But Not Both
  !   => Not => Not True

var_dump(100 > 50 and 100 > 80 and 100 > 90); // True
echo '<br>';
var_dump(100 > 50 && 100 > 80 && 100 > 100); // False
echo '<br>';
var_dump(100 > 50 or 100 > 110 or 100 > 100); // True
echo '<br>';
var_dump(100 > 50 xor 100 > 80);

*/

?>
<?php

/*
  Operators
  - Used To Perform Operations On Values.

  String Operators
  - Concatenate Strings

  .
  .=

define("ELZERO", "1");

$a = "Elzero";
$b = "Web";
$c = "School";

echo "$a $b $c";
echo '<br>';
echo "{$a} {$b} {$c}";
echo '<br>';
echo $a . " " . $b . " " . $c;
echo '<br>';
echo "{$a} {$b} {$c} " . ELZERO . " " . testing();
echo '<br>';

function testing() {
  return 1;
}

$x = "Elzero ";
$x .= "Web"; // $x = $x . "Web" => Elzero Web
$x .= " School"; // $x = $x . "School" => Elzero Web School

echo $x;
*/

?>
<?php

/*
  Operators
  - Used To Perform Operations On Values.

  Array Operators
  - Deal With Arrays

  +     => Union
  ==    => Equal => Same Key And Value
  !=    => Not Equal
  <>    => Not Equal
  ===   => Identical => Same Key And Value, Same Order, Same Type
  !==   => Not Identical


$arr1 = [1 => "A", 2 => "B"];
$arr2 = [3 => "C", 4 => "D"];
$arr3 = $arr1 + $arr2;

echo '<pre>';
print_r($arr1 + $arr2);
print_r($arr3);
echo '</pre>';

$arr4 = [1 => "10", 2 => "20"];
$arr5 = [2 => 20, 1 => 10];

var_dump($arr4 == $arr5); // True
echo '<br>';
var_dump($arr4 != $arr5); // False
echo '<br>';
var_dump($arr4 <> $arr5); // False
echo '<br>';

$arr6 = [1 => 100, 2 => 200];
$arr7 = [1 => 100, 2 => 200];

var_dump($arr6 === $arr7); // Give Me True

*/

?>

<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include


  // Variable
  $a = 10;
  $b = @$a or die("Variable Not Found");

  echo "Test $b";
  echo '<br>';

  // File
  $f = @file("osama.txt") or die("File Not Found");
  echo '<pre>';
  print_r($f);
  echo '</pre>';
  echo '<br>';

  // Include
  (@include("osama_elzero.php")) or die("Include File Not Found");

    */

    ?>

<?php

/*
  Operators
  - Used To Perform Operations On Values.

  Operator Precedence
  - "||" Has A Greater Precedence Than "or"
  - "&#038;&#038;" Has A Greater Precedence Than "and"

echo 2 + 4 * 5; // 22
echo '<br>';
echo (2 + 4) * 5; // 30
echo '<br>';
echo 10 || false || 0 || [] || ""; // True => 1
echo '<br>';
echo true; // 1
echo '<br>';
var_dump(10 || false || 0 || [] || ""); // True
echo '<br>';
echo 10 || false; // 1
echo '<br>';

$a = 10 || false; // $a = (10 || false) => $a = 1
echo $a; // 1

echo '<br>';

$b = 10 or false; // ($b = 10) or false
echo $b; // 10
*/


?>
<?php

/* Answer of the First assignment elzero web school
echo 10 + 20 + 15 + 3 + 190 + 10 + 400; // 0



Answer of the second assignment elzero web school

$a = +"10";
echo $a;
echo "<br>";
echo gettype($a);


$a = (int) "10";
echo $a;
echo "<br>";
echo gettype($a);


$a = intval("10");
echo $a;
echo "<br>";
echo gettype($a);


Answer of the third  assignment elzero web school

$a = 10;
$b = 20;

echo($a <=> $b);

Answer of the fourth assignment elzero web school

$a = 10;
$b = 20;
$c = 15;

 var_dump($a != $b); // True
 var_dump($c <> $a); // True
 var_dump($a !== $b); // True
 var_dump($a < $b); // True
 var_dump($a <= $c); // True
 var_dump($a && $c); // True
 var_dump(gettype($a) and gettype($b)); // True
 var_dump(gettype($a) or gettype($b)); // True
 var_dump(gettype((float) $a) || gettype($b)); // True


Answer of the fifth assignment elzero web school

$points = 10;

$points+=3;

echo $points; // 13

$points-=5;

echo $points; // 8;

Answer of the sixth assignment elzero web school

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
 $d = $a.' '. $b.' '. $c;

// Method Two
 $d = "$a $b $c";

// Method Three
 $d = "{$a} {$b} {$c}";

// Method Four
 $d = "{$a}".' '."{$b}".' '."{$c}";

echo $d; // Elzero Web School

Answer of the seventh assignment elzero web school

$a = 10;
$b = 20;

echo ($a + $b * $a + $b + $a * $a * $a)+8770; // 10000

Answer of the eighth assignment elzero web school

// Code 1
$a = @$b or die('Custom Error');

// Code 2
$f = @file("Not_A_File") or die('Custom Error');

// Code 3
(@include("Not_A_File") or die('Custom Error'));


*/


