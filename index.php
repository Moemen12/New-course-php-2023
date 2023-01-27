<?php
//Answer of the First assignment elzero web schools

/*
This is the first assignment in php
Solution is here
*/
?>
<!--
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php echo 'UTF-8'; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="My First PHP"?></title>
  </head>
  <body>
    <div><?='We Love'?></div>
    <div><?='Elzero Channel'?></div>
  </body>
</html>
-->
<?php

//Answer of the second assignment elzero web schools

//echo 'Prevent Me From Running Please';
# echo 'Prevent Me From Running Please';
/*echo 'Prevent Me From Running Please'; */


//Answer of the third assignment elzero web schools

/* My Application
   Version 1.0
   Created By Elzero */


//Answer of the fourth assignment elzero web schools

// ## First Comment               false comment
# // # Second Comment             false comment
/* /* /* Third Comment */      // false comment
////// Fourth Comment             true comment 

// Notice : All the comments above will work
?>


<?php
                                              //Introduction To Data Types

 /*
  ============================================
  = Data Types
  = ----------
  = bool  => Boolean
  = int   => Integer
  = float => Floating Point Number | double
  = string
  = array
  = Other Types
  = gettype()
  ============================================
  


echo gettype(true); //boolean
echo '<br>'; 
echo gettype(false); //boolean
echo '<br>';
echo gettype(TRUE); //boolean
echo '<br>';
echo gettype(100); //Integer
echo '<br>';
echo gettype(-200); //Integer
echo '<br>';
echo gettype(0); //Integer
echo '<br>';
echo gettype(70.5); //double
echo '<br>';
echo gettype(-70.5); //double
echo '<br>';
echo gettype("elzero"); //string
echo '<br>';
echo gettype('elzero'); //string
echo '<br>';
echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia")); //array
echo '<br>';
echo gettype(array("Egypt", "Saudi Arabia")); //array
echo '<br>';
echo gettype(["Egypt", "Saudi Arabia"]); //array

*/
?>

<?php

                                   //Type Juggling And Automatic Type Conversion
/*
 echo 1 + "2"; // 3
  echo '<br>';
  echo gettype(1 + "2"); // Integer
  echo '<br>';
  echo True; // 1
  echo '<br>';
  echo gettype(True); // Boolean
  echo '<br>';
  echo True + True; // 2
  echo '<br>';
  echo gettype(True + True); // Integer
  echo '<br>';
  echo 5 + '5 Lessons'; // 10 => Warning
  echo '<br>';
  echo gettype(5 + '5 Lessons'); // Integer => Warning
  echo '<br>';
  echo 10 + 15.5; // 25.5
  echo '<br>';
  echo gettype(10 + 15.5); // double => Float
  echo '<br>';
*/
  ?>

<?php

/*
============================================
= Data Types
= ----------
= Type Casting
= ----------------------
= "boolean" or "bool"
= "integer" or "int"
= "float" or "double" or "real"
= "string"
= "array"
= "object"
= "null"
= ------
= Search For Settype
============================================


echo 5 + (int) "5 Lessons";
echo '<br>';
echo 5 + (integer) "5 Lessons";
echo '<br>';
echo 5 + ( integer ) "5 Lessons";
echo '<br>';
echo gettype(5 + (int) "5 Lessons");
echo '<br>';
echo 10 + 15.5;
echo '<br>';
echo 10 + (int) 15.5;
echo '<br>';
echo gettype(10 + (int) 15.5);
echo '<br>';
echo 10.5 + 10.5;
echo '<br>';
echo gettype(10.5 + 10.5);
echo '<br>';
echo (int) 10.5 + (int) 10.5; // 20
echo '<br>';
echo gettype((int) 10.5 + (int) 10.5);
echo '<br>';
echo (int) (10.5 + 10.5); // 21

*/
?>

  
<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Boolean + Converting To Boolean
  ============================================
  
  var_dump((bool) "");
  echo '<br>';
  var_dump((bool) array());
  echo '<br>';
  var_dump((bool) []);
  echo '<br>';
  var_dump((bool) 0);
  echo '<br>';
  var_dump((bool) "0");
  echo '<br>';
  var_dump((bool) "Elzero");
  echo '<br>';
  var_dump((bool) array(1));
  echo '<br>';
  var_dump((bool) [1]);
  echo '<br>';
  var_dump((bool) 100);
  echo '<br>';
  var_dump((bool) -100);
  echo '<br>';
  var_dump((bool) 10.5);
  echo '<br>';
  var_dump((bool) -10.5);

  */
  ?>


<?php

  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = nl2br()
  ============================================
  
  echo 'Hello PHP';
  echo '<br>';
  echo "Hello PHP";
  echo '<br>';
  echo "Hello 'PHP'";
  echo '<br>';
  echo 'Hello "PHP"';
  echo '<br>';
  echo 'Hello \'PHP\'';
  echo '<br>';
  echo "Hello \"PHP\"";
  echo '<br>';
  echo "Hello PHP\\";
  echo '<br>';
  echo 'Hello PHP
  On Multiple
  Lines';
  echo '<br>';
  echo nl2br('Hello PHP
  On Multiple
  Lines');

  */

  ?>

<?php

/*
============================================
= Data Types
= ----------
= String And Escaping
= -------------------
= Heredoc
= Nowdoc
============================================


$name = "Osama";

// Heredoc
echo <<<"Here"
Hello PHP
Special Characters $$$ ' ' ' """"" \\\\
Hello My Name Is $name
Here;

echo '<br>';

// Nowdoc
echo <<<'Now'
Hello PHP
Special Characters $$$ ' ' ' """"" \\\\
Hello My Name Is $name
Now;

echo '<br>';

echo '<ul>';
  echo "<li>" . $name . "</li>";
  echo "<li>" . $name . "</li>";
  echo "<li>" . $name . "</li>";
  echo "<li>" . $name . "</li>";
echo '</ul>';

echo '<br>';

echo <<<"navlinks"
<ul>
  <li>$name</li>
  <li>$name</li>
  <li>$name</li>
  <li>$name</li>
</ul>
navlinks;

*/

?>

<?php


  /*
  ============================================
  = Data Types
  = ----------
  = Array
  = -------------------
  = Array With Key
  = Array Without Keys
  = Array With One Key
  = Array Value Override
  = ------------------
  = print_r()
  ============================================


  echo '<pre>';
  print_r([
    0 => "Sameh",
    "A" => "Ahmed",
    "B" => "Basem",
    "Mahmoud",
    True => "Sayed",
    "1" => "Osama",
    "Gamal",
    9 => "Amera",
    "Eman",
    "Mohamed",
    False => "Asmaa",
    8 => "Haytham",
    "Samer",
    "Names" => [
      "Osama",
      "Ahmed",
      "Sayed" => [
        "1",
        "2",
        "3"
      ]
    ]
  ]);
  echo '</pre>';
*/
?>

<?php
/*
//Answer of the First assignment elzero web schools

echo (int) (15.2 + 14.7 + (10.5 + 10.5)); // 50
echo gettype ((int) (15.2 + 14.7 + (10.5 + 10.5))); // Integer

//Answer of the second assignment elzero web schools

var_dump(100);
echo gettype(100);


//Answer of the third assignment elzero web schools

echo " Hello \"Elzero\" \\\ \"\"\" We Love \"$\$PHP\" ";

//Answer of the Fourth assignment elzero web schools

echo nl2br("We \n Love \n Elzero \n Web \n School");



//Answer of the fifth assignment elzero web schools


echo <<<'Now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
Now;


//Answer of the sixth assignment elzero web schools

$something = "Programming";

echo <<<"code"
        Hello \PHP\
        We Love $something
        code;


//Answer of the seventh assignment elzero web schools

echo (bool)"Hello PHP";
echo '<br>';
var_dump((int)((bool)"Hello PHP"));


//Answer of the eighth assignment elzero web schools

echo '<pre>';
print_r([
  "FrontEnd" => [
    "HTML",
    "CSS",
    "JS" => [
      "Vuejs"=> [
       "2"=>"v2",
        "v3"
      ],
      "0"=>"Reactjs",
      "Svelte"
    ]
    ],
    "BackEnd"=>[
      "PHP",
      "MySQL",
      "Security"
    ],
    "Git",
    "Github",
    "Testing"=>[
      "Unit Testing",
      "End To End",
      "Integration"
    ]
]);
echo '</pre>';

*/


?>
<?php

  /*
    Variables
    - Naming Rules + Info
    [1] Start With Dollar Sign $
    [2] Start With A Letter [a-z] Or [A-Z] Or Underscore
    [3] You Can Use Numbers Inside The Name
    [4] No Special Characters Allowed
    [5] Case Sensitive
    - Test Single And Double Quotes

    Search
    - Loosely Typed Language

  $username = "Osama";
  $Username = "Elzero";

  echo $username;
  echo '<br>';
  echo $Username;
  echo '<br>';
  echo 'Hello $username';
  echo '<br>';
  echo "Hello $username";

    */

    ?>

    <?php $username = "Elzero" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page | <?php echo $username ?></title>
  </head>
  <body>
    <div>Welcome <?php echo $username ?></div>
    <div><?php echo $username ?> You Scored 1000 Points</div>
    <div>
      <?php include("score.php") ?>
    </div>
  </body>
</html>