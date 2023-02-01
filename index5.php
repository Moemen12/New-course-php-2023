<?php

  /*
    String Functions
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
  

  echo substr_replace("OneTwo", 1, 0); // 1
  echo '<br>';
  echo substr_replace("OneTwo", 1, 3); // One1
  echo '<br>';
  echo substr_replace("OneTwo", 1, 5); // OneTw1
  echo '<br>';
  echo substr_replace("OneTwo", 1, -1); // OneTw1
  echo '<br>';
  echo substr_replace("OneTwo", 2, 2); // On2
  echo '<br>';
  echo substr_replace("OneTwo", 2, 2, 2); // On2wo
  echo '<br>';
  echo substr_replace("OneTwo", 2, 1, 4); // O2o
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_Al eb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool eb_Sch
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School

  echo "<pre>";
  print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0));
  echo "</pre>";


  */
  ?>
  <?php

/*
  String Functions
  - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
  - ord(String[Required])
  - chr(Int[Required])
  - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
  --- Returns The Number Of Matching Characters

$str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";

echo strlen($str) . "<br>";

echo wordwrap($str, 8, "<br>", True);

echo "<br>";

echo ord("a"); // 97

echo "<br>";

echo chr(97); // a

echo "<br>";

echo similar_text("Elz@ero", "Elz_eroo");

echo "<br>";

echo similar_text("Elzero", "Elzeroo", $perc);

echo "<br>";

echo $perc;

<?php

  /*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])

  echo strstr("Elzero Web", "W") . "<br>"; // Web
  echo strstr("Elzero Web", "z") . "<br>"; // zero Web
  echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
  echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7


  echo strstr("Elzero Web", "w") . "<br>"; // False
  var_dump(strstr("Elzero Web", "w"));
  echo '<br>';


  echo stristr("Elzero Web", "w") . "<br>"; // Web
  var_dump(stristr("Elzero Web", "w")); // Web
  echo '<br>';

  echo 10_000_000;
  echo '<br>';

  echo number_format(10000000.156023);
  echo '<br>';
  echo number_format(10000000.156023, 3);
  echo '<br>';
  echo number_format(10000000.156023, 3, "@");
  echo '<br>';
  echo number_format(10000000.156023, 3, "@", "#");

   //Answer of the First assignment elzero web school

   $num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str= str_replace($str[number_format($num_two+($num_one))],$let_two,$str);
$str= str_replace($str[$num_one],$let_one,$str);

echo $str; // Elzero

  //Answer of the second assignment elzero web school

$str = "Orezle";

$str= ucfirst(strtolower(strrev($str)));

echo $str;


  //Answer of the third assignment elzero web school

$str = 'aAa';
$num = 3;
$char = "_";


$str= str_repeat(substr_replace(strtolower($str),$char,$num),$num) ;

echo $str;

  //Answer of the fourth assignment elzero web school

  $str = "<div><b>Elzero</b></div>";

$str = strip_tags($str,'<b>');

echo $str;


//Answer of the fifth assignment elzero web school

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;


echo substr_count($str,$o)+($four- strpos($str,$e));
echo'<br>';
echo substr_count($str,$e);

//Answer of the sixth assignment elzero web school

$chars = ["E", "l", "z", "e", "r", "o"];
echo implode("",$chars);



//Answer of the seventh assignment elzero web school

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

$chars = substr_replace(ucfirst(strtolower(implode("",$chars))),"",1,2);

echo $chars;


*/
?>

<?php

  /*
    Array Functions

    - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    --- Preserve_Key
    ------ [False => Default] Reindex The Keys
    ------ [True] Preserve The Keys

    - array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase

    - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

    - array_count_values(Array[Required])
    --- Counts All The Values Of An Array



  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];

  echo '<pre>';
  print_r(array_chunk($friends, 2));
  echo '</pre>';

  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_chunk($countries, 2, True));
  echo '</pre>';

  echo '<pre>';
  print_r(array_change_key_case($countries, CASE_UPPER));
  echo '</pre>';

  $keys = ["A", "O", "K"];
  $values = ["Ahmed", "Osama", "Kamal"];

  echo '<pre>';
  print_r(array_combine($keys, $values));
  echo '</pre>';

  $counting = ["B", "A", "A", "B", "B", "B", "C"];

  echo '<pre>';
  print_r(array_count_values($counting));
  echo '</pre>';
  */

  ?>
