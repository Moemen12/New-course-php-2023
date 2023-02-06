<?php

  /*
    Array Functions

    - sort(Array[Required], Flag[Optional])
    --- Sort An Indexed Array In Ascending Order

    - rsort(Array[Required], Flag[Optional])
    - Sort An Indexing Array In Descending Order

    - asort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Value

    - arsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Value

    - ksort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Key

    - krsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Key

    - natsort(Array[Required], Flag[Optional])
    --- Sorts An Array By Using A "Natural Order" Algorithm

    Practice
    -- Flags
    -- Our Own Sorting Function



  $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];

  sort($names);

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  rsort($names);

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  $countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

  asort($countries);

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  arsort($countries);

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  $codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];

  ksort($codes);

  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  krsort($codes);

  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  $files = ["Photo1.png", "Photo20.png", "Photo3.png"];

  sort($files);

  echo '<pre>';
  print_r($files);
  echo '</pre>';

  natsort($files);

  echo '<pre>';
  print_r($files);
  echo '</pre>';
    */

    ?>

    <?php

  /*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments

 

  function add_title($fname, $lname) {
    return "Hello Mr $fname $lname";
  }

  // echo add_title("Osama");

  $first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
  $last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];

  echo '<pre>';
  print_r(array_map("add_title", $first_names, $last_names));
  print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
  echo '</pre>';

  $nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
  ];

  function check_nums($n1, $n2) {
    return $n1 > 4 || $n2 > 4;
  }

  echo '<pre>';
  print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));
  echo '</pre>';

  */

  ?>

  <?php

  /*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments


  function add_title($fname, $lname) {
    return "Hello Mr $fname $lname";
  }

  // echo add_title("Osama");

  $first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
  $last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];

  echo '<pre>';
  print_r(array_map("add_title", $first_names, $last_names));
  print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
  echo '</pre>';

  $nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
  ];

  function check_nums($n1, $n2) {
    return $n1 > 4 || $n2 > 4;
  }

  echo '<pre>';
  print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));
  echo '</pre>';

  
  */
  ?>
  <?php

  /*
    Array Functions

    - array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
    --- Reduce The Array To A Single Value
    --- Carry => The Value Of The Previous Iteration || Initial Value
    --- Item => The Value Of The Current Iteration



  function add($carry, $item) {
    echo "$carry<br>";
    echo "$item<br>";
    echo $carry + $item . "<br>";
    echo "###########<br>";
    return $carry + $item;
  }

  $nums = [10, 20, 50, 100, 10];

  echo array_reduce($nums, "add", 100);

    */

    ?>

    <?php

/*

//Answer of the First assignment elzero web school
$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];


echo '<pre>';
print_r(array_chunk(array_change_key_case($friends),2,true));
echo '</pre>';




//Answer of the Second assignment elzero web school

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
echo '<pre>';
print_r(array_combine($codes, $means));
echo '</pre>';

  

//Answer of the Third assignment elzero web school

$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

echo '<pre>';
print_r(array_reverse(array_flip($friends)));
echo '</pre>';

//Answer of the fourth assignment elzero web school

$nums = [10, 20, 30];

echo array_reduce($nums,fn($carry, $item) => $carry + $item);
echo'<br>';
echo array_sum($nums);

//Answer of the fifth assignment elzero web school

$nums = [5, 10, 20, 5, 30, 40];

function check_nums($n1) {
  return $n1 > 5;
}

$filtered_array = array_filter($nums, "check_nums");

function add($carry, $item) {
  return $carry + $item;
}

echo array_reduce($filtered_array, "add");



//Answer of the sixth assignment elzero web school
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;



echo '<pre>';
print_r(array_pad($chars, 10,substr($char,$zero,++$zero)));
echo '</pre>';

//Answer of the seventh assignment elzero web school

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);

echo current($names) . "<br>"; // "Sayed"

end($names);


echo current($names) . "<br>"; // "Ali"

reset($names);

echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);

echo current($names) . "<br>"; // "Mahmoud"


//Answer of the eighth assignment elzero web school

$chars = ["A", "B", "C"];

echo '<pre>';
print_r(array_pad($chars, 4,'D'));
echo '</pre>';

-------------------------------


$chars[]="D";
echo '<pre>';
print_r($chars);
echo '</pre>';

--------------------------------

$chars = ["A", "B", "C"];

array_push($chars,'D');
echo '<pre>';
print_r($chars);
echo '</pre>';

-------------------------------

//Answer of the ninth assignment elzero web school

$nums = [1, 2, 3, 4, 5, 6];


echo '<pre>';
print_r(array_slice($nums,-5,-2));
echo '</pre>';


//Answer of the tenth assignment elzero web school

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

function test_odd($var)
  {
  if(gettype($var)==='integer'){
    return $var;
  }
  }

  $mix=array_filter($mix,"test_odd");
  $mix = array_values($mix);

  $mix=array_merge($mix,$nums);
  sort($mix);
  

echo '<pre>';
print_r($mix);
echo '</pre>';

//Answer of the eleventh assignment elzero web school


$arr = ["A", "B", "C", "D", "E"];


$count=0;

  foreach($arr as $letter){
    $count++;
  }

echo $count;


//Answer of the twelfth assignment elzero web school

$nums = [11, 2, 10, 7, 20, 50];
 
$prev=0;
foreach($nums as $num):
  $prev+=$num;
endforeach;

echo $prev;

//Answer of the thirty and fourthy assignment elzero web school

$nums = [10, 300, -20, 50, 30];

$max = $nums[0];
$min = $nums[0];
for ($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] > $max) { $max = $nums[$i]; }

    if ($nums[$i] < $min) { $min = $nums[$i]; }
}

//Answer of the sixthy and  assignment elzero web school

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];



function test_odd($var)
  {
  if(gettype($var)==='integer' && $var%2!=0){
    return $var;
  }
  }

  $mix=array_filter($mix,"test_odd");
  $mix = array_values($mix);


  sort($mix);
  

echo '<pre>';
print_r($mix);
echo '</pre>';

//Answer of the seventy and  assignment elzero web school



$nums = [1, 2, 3, 4, 5, 6];
$newArray=[];




for($i=rand(1,6) ;$i<count($nums) ;$i++){
  
    array_push($newArray,$nums[$i]);
 
}


echo '<pre>';
print_r($newArray);
echo '</pre>';


*/
