<?php

/*
$i=1;

while($i <= 3){
  echo "$i<br>";
  $i++;
}



    Control Structure
    - Loop

    Do, While


  $i = 4;

  while ($i <= 3) {

    echo "$i<br>";

    $i++;

  }

  do {

    echo "$i<br>";

    $i++;

  } while ($i <= 3);


  $index = 0;

  while ($index <= 100) {

    echo "$index<br>";

    $index += 5;

  }
    Control Structure
    - Loop

    For
    - Expression One Run Once At The First Of The Loop
    - In The Begining Of Iteration Expression Two Is Checked [If True Continue || Break]
    - At The End Of Iteration Expression Three Are Executed
 
  $i = 1;

  while ($i <= 3) {

    echo "$i<br>";

    $i++;

  }

  echo '##### <br>';

  for ($i = 1; $i <= 3; $i++) {

    echo "$i<br>";

  }

  echo '##### <br>';

  $index = 1;

  for (;;) :

    if ($index == 4) {

      break;

    }

    echo "$index<br>";

    $index++;

  endfor;


-----------------------------

    Control Structure
    - Loop

    Foreach

     $countries = ["EG", "SA", "QA", "SY"];

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  foreach ($countries as $country) {

    echo $country . "<br>";

  }

  $countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];

  echo '<pre>';
  print_r($countries_with_discount);
  echo '</pre>';

  foreach ($countries_with_discount as $country => $discount) :

    echo "Country Name Is $country And Discount Is $discount <br>";

  endforeach;


  <?php

  /*
    Control Structure
    - Loop

    Break, Continue
    - Break Ends Execution Of (For, Foreach, While, Do-while or Switch)
    - Skip Current Iteration


  foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

    if ($country == "USA") {

      break;

    }

    echo $country . "<br>";

  }

  echo "########## <br>";

  foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

    if ($country == "USA") {

      continue;

    }

    echo $country . "<br>";

  }

  ---------------------------------


  <?php

  /*
    Control Structure
    - Including Files

    Include
    Require
 \

  include_once("test.php"); // $a = 10;

  echo $a . '<br>';

  $a = 20;

  include_once("test.php"); // $a = 10;

  echo $a . '<br>';

  echo "Continue";
  */

  ?>

 <?php

 /* 
 
 Answer of the first assignment elzero web school

  for( $index = 10;$index>0; $index--){
    echo "$index<br>";
 }

  Answer of the second assignment elzero web school

 $index = 0;
 while($index < 20):
     $index+=2;
     echo "$index<br>";
 endwhile;
 
  Answer of the third assignment elzero web school





 Answer of the fourth assignment elzero web school

$start = 10;
$end = 0;
$stop = 3;

 for($start; $start >= $end ;$start-- ):
    if($start < $stop):
        break;
    endif;
   echo $start===10 ? "$start<br>" :"0$start<br>";
endfor;

 Answer of the fifth assignment elzero web school


 $start = 0;
 $mix = [1, 2, 3, "A", "B", "C", 4];


    foreach($mix as $numbers => $number){
      if($number===1){
           continue;
      } 
      if(gettype($number)==='integer'){
         echo "$numbers => $number<br>";
      }
    }

 Answer of the sixth assignment elzero web school

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach($money as $name => $para):
   echo "The Name Is $name And I Need $para Pound From Him<br>";
endforeach;

Answer of the seventh assignment elzero web school

$mix = [1, 2, "A", "B", "C", 3, 4];
$numera =0;
$letter =0;
foreach($mix as $number):
   if(gettype($number)==='integer'):
       echo "$number<br>";
       $numera++;
else:
       $letter++;
endif;

endforeach;
  echo "$numera Numbers Printed<br>";
  echo "$letter Letters Ignored";


  Answer of the eighth assignment elzero web school

$nums = [1, 13, 12, 20, 51, 17, 30];

foreach($nums as $num):
 if($num % 2 === 0):
    $new = $num/2;
    echo "$new<br>";
 endif;
 
endforeach;

Answer of the nine assignment elzero web school





Answer of the tenth assignment elzero web school
  $help_num = 4;
 $nums = [2, 4, 5, 6, 10];

 foreach ($nums as $num):
    echo "$num + $nums[$help_num] = " .$num+$nums[$help_num]."<br>";
    $help_num--;
 endforeach;


 <?php

  /*
    Function
    - Introduction And DRY Concept
    - Parameter
    - Argument
  
  echo "Hello Mr Osama<br>";
  echo "Hello Mr Ahmed<br>";
  echo "Hello Mr Sayed<br>";

  function say_hello_to($someone) {
    echo "Hello Mr $someone<br>";
  }

  say_hello_to("Osama");
  say_hello_to("Ahmed");
  say_hello_to("Sayed");
 
  <?php

  /*
    Function
    - Advanced Examples With Parameters And Arguments
    - Real Life Example


  function say_hello_to($one, $two) {
    echo "Hello $one $two<br>";
  }
  say_hello_to("Osama", "Ahmed");

  function deep_freezer($item) {
    if ($item === "Water") {
      echo "Make Ice <br>";
    } elseif ($item === "Coca Cola") {
      echo "Make It Cold <br>";
    } elseif ($item === "Fruits") {
      echo "Make It Fresh <br>";
    } else {
      echo "Unknown Item";
    }
  }

  deep_freezer("Water");
  deep_freezer("Coca Cola");
  deep_freezer("Fruits");
  deep_freezer("Tv Remote");


  <?php

  /*
    Function
    - Optional Return &#038; Null
    - End After Return


  $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

  function get_number($num_one, $num_two) {
    return $num_one + $num_two;
    echo "Will Not Echo Anything";
  }

  // get_number(2, 1); // 3
  // echo $prizes[3]; // "Apple TV"
  // $prize_number = get_number(2, 1);
  // var_dump($prize_number);
  // echo $prizes[];

  // $prize_number = get_number(2, 1);
  // var_dump($prize_number);

  echo $prizes[get_number(2, 1)];

  /*
    Function
    - Default Parameter Value
    --- Using
    --- Test Data
    --- Skip Arguments

  function get_data($country = "Private Country", $name = "Private", $age = "Private", $address = "Private Address") {
    // if ($address === "") {
    //   $address = "Private Address";
    // }
    $line_one = "Your Country Is $country And Your Name Is $name <br>";
    $line_two = "Your Age Is $age And You Live In $address";
    return $line_one . $line_two;
  }

  echo get_data(address: "Cairo");

<?php

  /*
    Function
    - Variable Arguments List
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()

    Spread Syntax In JS


  function calculate(...$nums) {
    // echo "Number Of Arguments: " . func_num_args() . "<br>";
    // echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";
    // print_r(func_get_args());
    // $result = 0;
    // foreach (func_get_args() as $arg) :
    //   $result += $arg;
    // endforeach;
    // echo $result;
    echo "Argument Index Number 3 Is " . $nums[3] . "<br>";
    print_r($nums);
    $result = 0;
    foreach ($nums as $num) :
      $result += $num;
    endforeach;
    echo $result;
  }

  calculate(10, 20, 50, 30, 40, 50, 100);

  <?php

  /*
    Function
    - Function Advanced Training
    -- Unpacking In Arguments

    Search
    - PHP Variadic Functions
    - Splat Operator
 

  $group_of_skills = ["HTML", "CSS", "JS", "PHP"];

  function get_data($name, $country = "Private", ...$skills) {
    echo "Hello $name Your Country Is $country <br>";
    foreach ($skills as $skill) :
      echo "-- $skill <br>";
    endforeach;
  }

  // get_data("Osama", "Egypt", ...$group_of_skills);
  get_data("Osama", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);


  <?php

  /*
    Function
    - Variable Function
    --- PHP Allow To Use Variable Like Function
    --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
    - Function Exists
    --- function_exists("Func Name")

  function one() {
    return "One From Function";
  }

  // echo one();

  $func1 = "one";

  echo $func1();

  echo '<br>';

  function say_hello_to($someone) {
    return "Hello $someone";
  }

  $func2 = "say_hello_to";

  echo $func2("Osama");

  echo '<br>';

  function testing() {
    return "Testing From Function";
  }

  if (function_exists("testing")) {
    echo testing();
  } else {
    echo "Function Not Found";
  }

  echo '<br>';

  // echo strlen("Elzero"); // 6

  $func3 = "strlen";

  echo $func3("Elzero");


<?php

  /*
    Function
    - Passing Arguments by Reference
    --- By Default, Function Arguments Are Passed By Value
    --- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
    --- To Change It Outside Pass The Argument By Reference

    - Return Type Declarations

    Search
    - PHP Strict Mode


  function add_five(&#038;$number) {
    $number += 5;
    return $number;
  }

  $n = 15;

  echo add_five($n) . "<br>"; // 20

  echo $n; // 20

  echo '<br>';

  function calculate($n1, $n2) : int {
    return $n1 + $n2;
  }

  echo calculate(10.5, 9.5);

  echo '<br>';

  echo gettype(calculate(10.5, 9.5)); // Integer

<?php

  /*
    Function
    - Anonymous Function
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function

    Search
    - Closure
  


  function say_hello_to($someone) {
    return "Hello $someone";
  }

  echo say_hello_to("Osama");

  echo '<br>#########<br>';

  // Anonymous Function In Variable

  $say_hello = function() {
    return "Hello";
  };

  echo $say_hello();

  echo '<br>#########<br>';

  // Anonymous Function With Parameter In Variable

  $say_hola = function($someone) {
    return "Hola $someone";
  };

  echo $say_hola("Osama");

  echo '<br>#########<br>';

  // Inherit Variable From Parent Scope

  $msg = "Hi";

  $say_hi = function($someone) use ($msg) {
    return "$msg $someone";
  };

  echo $say_hi("Osama");

  echo '<br>#########<br>';

  // Pass Anonymous Function To Function => array_map

  $nums = [10, 20, 30, 40, 50];

  function add_five($item) {
    return $item + 5;
  }

  $nums_after_adding_five = array_map("add_five", $nums);

  echo '<pre>';
  print_r($nums_after_adding_five);
  echo '</pre>';

  $nums_after_adding_ten = array_map(function($item) { return $item + 10; }, $nums);

  echo '<pre>';
  print_r($nums_after_adding_ten);
  echo '</pre>';





  /*
    Function
    - Anonymous Function
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function

    Search
    - Closure
 

  // Normal Function With Parameter

  function say_hello_to($someone) {
    return "Hello $someone";
  }

  echo say_hello_to("Osama");

  echo '<br>#########<br>';

  // Anonymous Function In Variable

  $say_hello = function() {
    return "Hello";
  };

  echo $say_hello();

  echo '<br>#########<br>';

  // Anonymous Function With Parameter In Variable

  $say_hola = function($someone) {
    return "Hola $someone";
  };

  echo $say_hola("Osama");

  echo '<br>#########<br>';

  // Inherit Variable From Parent Scope

  $msg = "Hi";

  $say_hi = function($someone) use ($msg) {
    return "$msg $someone";
  };

  echo $say_hi("Osama");

  echo '<br>#########<br>';

  // Pass Anonymous Function To Function => array_map

  $nums = [10, 20, 30, 40, 50];

  function add_five($item) {
    return $item + 5;
  }

  $nums_after_adding_five = array_map("add_five", $nums);

  echo '<pre>';
  print_r($nums_after_adding_five);
  echo '</pre>';

  $nums_after_adding_ten = array_map(function($item) { return $item + 10; }, $nums);

  echo '<pre>';
  print_r($nums_after_adding_ten);
  echo '</pre>';
  */

?>

<?php

/*
 //Answer of the First assignment elzero web school

function greeting($name,$gender=""){

  if($gender === "male"):
      echo "Hello Mr $name" ;
  elseif($gender === "female"):
       echo "Hello Miss $name" ;
  else:
  echo "Hello$gender $name" ;
endif;

}
 greeting("Amani","Female");

//Answer of the second assignment elzero web school

 function get_arguments(...$AllData){
  $all = '';
foreach($AllData as $data):
    $all .= "$data ";       
endforeach;
return $all;
}

 echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School


-----------------------------------




function get_arguments(...$AllData){
  $all = '';
foreach(func_get_args() as $arg):
    $all .= "$arg ";       
endforeach;
return $all;
}

 echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School






 //Answer of the third assignment elzero web school


function sum_all(...$nums){

  $start=0;
foreach($nums as $num){
   if($num===5){
     continue;
   }
   elseif($num===10){
    $num=20;
    $start+=$num;
   }
   else{
    $start+=$num;
   }
}
return $start;
}

echo sum_all(10, 12, 5, 6, 6, 10); 

  //Answer of the third assignment elzero web school

function multiply(...$nums){

  $start=1;
foreach($nums as $num){
   if(gettype($num )==='string'){
     continue;
   }
   elseif(gettype($num)==='double'){
    $num= (int) $num;
    $start*=$num;
   }
   else{
    $start*=$num;
   }
}
return $start;
}

echo multiply(100.5, 10, "B"); // 1000


  //Answer of the fourth assignment elzero web school


  function check_status($a, $b, $c) {

  if(gettype($a)==='string' && gettype($b)==='integer'){
     if($c===true){
      echo "Hello $a, Your Age Is $b , You Are Available For Hire";
     }else{
      echo "Hello $a, Your Age Is $b , You Are Not Available For Hire";
     }
     
  }
  elseif(gettype($b)==='string' && gettype($a)==='integer'){
    if($c===true){
      echo "Hello $b, Your Age Is $a , You Are Available For Hire";
     }else{
      echo "Hello $b, Your Age Is $a , You Are Not Available For Hire";
     }

  }

  elseif(gettype($a)==='string' && gettype($c)==='integer') {

    if($b===true){
      echo "Hello $a, Your Age Is $c , You Are Available For Hire";
     }else{
      echo "Hello $a, Your Age Is $c , You Are Not Available For Hire";
     }
  }

  elseif(gettype($c)==='string' && gettype($a)==='integer') {
    if($b===true){
      echo "Hello $c, Your Age Is $a , You Are Available For Hire";
     }else{
      echo "Hello $c, Your Age Is $a , You Are Not Available For Hire";
     }
  }


  elseif(gettype($c)==='string' && gettype($b)==='integer') {
    if($a===true){
      echo "Hello $c, Your Age Is $b , You Are Available For Hire";
     }else{
      echo "Hello $c, Your Age Is $b , You Are Not Available For Hire";
     }
    
  }



  elseif(gettype($b)==='string' && gettype($c)==='integer') {
    if($a===true){
      echo "Hello $b, Your Age Is $c , You Are Available For Hire";
     }else{
      echo "Hello $b, Your Age Is $c , You Are Not Available For Hire";
     }
  }

}

echo check_status("Osama", 38, false);


  //Answer of the fifth assignment elzero web school

  function calculate($first,$second,$third){

    switch ($third):
    case 'add':
    case 'a'  :
     $result = $first + $second;
     break;

    case 'subtract':
    case 's':
     $result = $first - $second;  
     break;
    
    case 'multiply':
    case 'm':
     $result = $first * $second; 
     break;

     case '':
     $result = $first + $second;
     break;

    default:
    $result ="This process does not exist ! ";

     endswitch;
  return $result;
}

 echo calculate(10, 20,'sgf');


  //Answer of the seventh assignment elzero web school
function calculate(int $num_one, int $num_two) {
  $num_one = (float) $num_one;
  $num_two = (float) $num_two;
  return $num_one + $num_two;
}

echo calculate(27, 10); // 30
echo "<br>";
echo gettype(calculate(20, 10)); // Double

  //Answer of the eighth assignment elzero web school



  //Answer of the ninth assignment elzero web school

$greet= function($name){
  return "Hello $name";
};
 echo $greet("Osama");


 $greet = fn($name) => "Hello $name";

 echo $greet("Osama");


  //Answer of the ninth assignment elzero web school

  
 */
