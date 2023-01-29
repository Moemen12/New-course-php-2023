<?php

  /*
    Control Structure
    - If, Elseif, Else <= Basics

    Syntax
    if (Condition) {
      // If Condition Is True <= Run Me
    } else {
      // If Condition Is False <= Run Me
    }
  

  if (10 > 10) {

    echo "First Condition";

  } elseif (10 > 10) {

    echo "Second Condition";

  } else {

    echo "No";

  }
  */
  ?>

  <?php

  /*
    Control Structure
    - If, Elseif, Else <= Real Life Examples

    3% To 30%
 

  // If

  $page = "About";

  if ($page == "About") {

    echo "This Is The Page";

  }

  echo '<br>';

  // If, Else

  $title = "";

  if ($title == "") {

    echo "Unknown Page";

  } else {

    echo $title;

  }

  echo '<br>';

  // If, Elseif, Else

  $lang = "Elzero";

  if ($lang == "Arabic") {

    echo 'مرحبا';

  } elseif ($lang == "English") {

    echo 'Hello';

  } elseif ($lang == "Spanish") {

    echo 'Hola';

  } else {

    echo 'Unknown Language';

  }
   */

   ?>

<?php

/*
  Control Structure
  - If, Elseif, Else <= Advanced Practice

  30% To 60%


if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if ($_POST['lang'] == 'ar') {

    header("Location: ar.php");

    exit();

  } elseif ($_POST['lang'] == 'en') {

    header("Location: en.php");

    exit();

  }

}
*/
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="username">
    <select name="lang">
      <option value="ar">Arabic</option>
      <option value="en">English</option>
      <option value="es">Spanish</option>
    </select>
    <input type="submit" value="Go">
  </form>
</body>
</html>
-->

<?php

  /*
    Control Structure
    - If, Elseif, Else <= Alternate Syntax

    60% To 80%
 

  if (10 > 5) {

    echo "Good";

  } else {

    echo "Bad";

  }

  echo "<br>";

  if (10 > 10) echo "Good";
  else echo "Bad";

  echo "<br>";

  if (10 > 10)
    echo "Good";
  else
    echo "Bad";

  echo "<br>";

  if (10 > 10) echo "Good"; else echo "Bad";

?>

<?php if (10 > 5) : ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    Hello Page
  </body>
</html>

<?php endif; ?>

<?php

  if (10 > 10) :

    echo "First";

  elseif (10 > 10) :

    echo "Second";

  else:

    echo "Last";

  endif;
 */
?>

<?php

  /*
    Control Structure
    - Nested If Condition And Training
 =
  $name = "Osama";
  $is_student = true;
  $is_orphan = true;
  $country = "Egypt";
  $country_discount = 50;
  $price = 100;
  $student_discount = 10;
  $orphan_discount = 15;

  if ($country == "Egypt") {

    if ($is_student == true) {

      if ($is_orphan == true) {

        echo "Hello $name";
        echo "<br>";
        echo "Country Discount $country_discount";
        echo "<br>";
        echo "Student Discount $student_discount";
        echo "<br>";
        echo "Orphan Discount $orphan_discount";
        echo "<br>";
        echo "The Final Price Is " . $price - $country_discount - $student_discount - $orphan_discount;

      } else {

        echo "Hello $name";
        echo "<br>";
        echo "Country Discount $country_discount";
        echo "<br>";
        echo "Student Discount $student_discount";
        echo "<br>";
        echo "The Final Price Is " . $price - $country_discount - $student_discount;

      }

    } else {

      echo "Hello $name";
      echo "<br>";
      echo "Country Discount $country_discount";
      echo "<br>";
      echo "The Final Price Is " . $price - $country_discount;

    }

  } else {

    echo "Hello $name";
    echo "<br>";
    echo "No Discount";
    echo "<br>";
    echo "The Final Price Is $price";

  }

 */

 ?>

<?php

/*
  Control Structure
  - Ternary Operator => Short If


$a = 10;

if ($a > 8) {

  echo "Good";

} else {

  echo "Bad";

}

// Condition ? True : False;

echo $a > 8 ? "Good" : "Bad";

echo '<br>';

echo "I Love PHP Because Its A ";

if ($a > 8) {

  echo "Good";

} else {

  echo "Bad";

}

echo " Language";

echo '<br>';

echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language";

echo '<br>';

$result = $a > 8 ? "Good" : "Bad";

echo "I Love PHP Because Its A $result Language";
*/

?>
<?php

/*
  Control Structure
  - Switch

  Syntax
  switch (expression) {
    Case 1:
      // Code Block 1
      break;
    Case 2:
      // Code Block 2
      break;
    Case 3:
      // Code Block 3
      break;
    Default:
      // Default Code Block
  }



$day = "Thu";

switch($day) {

  case "Sat":
    echo "Hello Today Is $day We Are Open From 10:16";
    break;

  case "Sun":
    echo "Hello Today Is $day We Are Open From 12:18";
    break;

  case "Mon":
  case "Thu":
    echo "Hello Today Is $day We Are Open From 08:12";
    break;

  default:
    echo "Unknown Day";

}
*/

?>

<?php

 //Answer of the First assignment elzero web school

/*
 $a = 100;
 $b = 200;
 $c = 100;

 if($b>$a){
    if($a==$c){
        if($a+$c==$b){
            echo "yes";
        }
    }
 }



 //Answer of the Second assignment elzero web school

$a = 100;
$b = 200;
$c = 300;

if($a>$b){
  echo "A Is Larger Than B";
}
elseif($a>$c){
   echo "A Is Larger Than C";
}
else{
   echo "A Is Not Larger Than B Or C";
}

output: A Is Not Larger Than B Or C


----------------------------------------------

$a = 200;
$b = 100;
$c = 300;

if($a>$b){
  echo "A Is Larger Than B";
}
elseif($a>$c){
   echo "A Is Larger Than C";
}
else{
   echo "A Is Not Larger Than B Or C";
}

output: A Is Larger Than B


----------------------------------------------

$a = 200;
$b = 200;
$c = 100;

if($a>$b){
  echo "A Is Larger Than B";
}
elseif($a>$c){
   echo "A Is Larger Than C";
}
else{
   echo "A Is Not Larger Than B Or C";
}

output: A Is Larger Than c


 //Answer of the third assignment elzero web school

$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['user'];
    echo "The Request Method Is Post And Username Is $username";
    echo"<br>";
    if($username === $admins[0 || 1 || 2]){
      echo "This Username $username Is Admin";
       }
}


 ?>

 <form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>


 //Answer of the fourth assignment elzero web school


$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

  echo "A + B = C";

} elseif ($a + $c === $b) {

  echo "A + C = B";

} elseif ($b + $c === $a) {

  echo "B + C = A";

} else {

  echo "The End";

}


echo $top = ($a + $b === $c) ? 'A + B = C' : (($a + $c === $b) ? 'A + C = B' : (($b + $c === $a) ? 'B + C = A' : 'The End'));


 //Answer of the fifth assignment elzero web school


$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
  echo "The Age Is Good To Go<br>";
  if (gettype($name) === "string") {
    echo "The Name Is Good To Go<br>";
    if ($country === "Egypt") {
      echo "The Country Is Good To Go<br>";
    }
  }
}

Needed Output

if($age > 18 && gettype($name) === "string" && $country === "Egypt"){
     echo "The Age Is Good To Go<br>";
     echo "The Name Is Good To Go<br>";
     echo "The Country Is Good To Go<br>";

}

 //Answer of the sixth assignment elzero web school

 $genre = "Hack And Slash";

  switch($genre) {

      case "RPG":
        echo "I Recommend Ys Games";
      break;

      case "Hack And Slash":
        echo "I Recommend Castlevania Games";
      break;

      case"FPS":
        echo "I Recommend Uncharted Games";
      break;
     
      case"Platform":
      case"Platform":
        echo "I Recommend Megaman Games";
      break;

      default:
      echo "I Recommend Shadow Of Mordor And Shadow Of War";

  }

 //Answer of the seventh assignment elzero web school

$num_one = 23;
$num_two = 5;
$op = "*";

switch($op) {

    case "+":
      echo $num_one + $num_two;
    break;

    case "-":
      echo $num_one - $num_two;
    break;

    case"/":
        echo $num_one / $num_two;
    break;
   
    case"*":
        echo $num_one * $num_two;
    break;

    default:
        echo "Unknown Operation";

}

 //Answer of the eighth assignment elzero web school

 $day = "Thu";

 if(($day === "Sat") || ($day === "Sun") || ($day === "Mon") ){
    echo "We Are Open All The Day";
 }elseif(($day === "Tue") || ($day === "Wed")){
    echo "We Are Open From 08:12";
 }elseif(($day === "Thu") || ($day === "Fri")){
    echo "We Are Closed";
 }else{
    echo "Unknown Day";
 }


 */

