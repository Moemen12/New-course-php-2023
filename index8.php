<?php

  /*
    Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %

  echo abs(10) . "<br>";
  echo abs(0) . "<br>";
  echo abs(-20) . "<br>";

  echo rand() . "<br>";
  echo mt_getrandmax() . "<br>";
  echo rand(50, 60) . "<br>";

  echo 10 / 5 . "<br>";
  echo gettype(10 / 5) . "<br>";

  echo 11 / 5 . "<br>";
  echo gettype(11 / 5) . "<br>";

  echo intdiv(11, 5) . "<br>";
  echo gettype(intdiv(11, 5)) . "<br>";

  echo 11.5 % 5 . "<br>";
  echo gettype(11 % 5) . "<br>";

  echo fmod(11.5, 5) . "<br>";
  echo gettype(fmod(11.5, 5)) . "<br>";

    */
?>

<?php

  /*
    Math Functions

    - round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP
    ------ PHP_ROUND_HALF_DOWN
    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double
 
  echo round(5.99) . "<br>";
  echo round(5.50) . "<br>";
  echo round(5.49) . "<br>";
  echo round(5.10) . "<br>";

  echo round(5.99, 1) . "<br>"; // 6
  echo round(5.94, 1) . "<br>"; // 5.9
  echo round(5.995, 2) . "<br>"; // 6
  echo round(5.994, 1) . "<br>"; // 6
  echo round(5.994, 2) . "<br>"; // 5.99

  echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";
  echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";
  echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";
  echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";

   */
?>

<?php

  /*
    Math Functions

    - sqrt(Number[Required])
    --- Square Root

    - min(array[Required]) || min(Values[Required])
    --- Find Lowest Value

    - max(array[Required]) || min(Values[Required])
    --- Find Highest Value


  echo sqrt(16) . "<br>"; // 4
  echo sqrt(25) . "<br>"; // 5
  echo sqrt(100) . "<br>"; // 10

  echo min(10, 20, -40, -30, 50) . "<br>"; // -40
  echo min([10, 20, -40, -30, 50]) . "<br>"; // -40

  echo "<pre>";
  print_r(min([1, 3, 5], [1, 2, 6]));
  echo "</pre>";

  echo max(10, 20, -40, -30, 50) . "<br>"; // 50
  echo max([10, 20, -40, -30, 50]) . "<br>"; // 50

  echo "<pre>";
  print_r(max([1, 3, 5], [1, 2, 6]));
  echo "</pre>";

    */

    ?>

<?php

/*
  Filter Functions

  - filter_list()
  --- Returns A List Of All Supported Filters

  - filter_id(Filter_Name[Required])

  - filter_var(Value[Required], Filter[Optional], Options[Optional])
  --- Filters A Variable With A Specified Filter


echo "<pre>";
print_r(filter_list());
echo "</pre>";

echo filter_id("boolean") . "<br>"; // 258

$val = "on"; // True || 1 || "yes" || "on"

if (filter_var($val, FILTER_VALIDATE_BOOL)) { // Or ID "258"

  echo "This Is True";

} else {

  echo "This Is False";

}

*/

?>

<?php

  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

    ------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

    ------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6

    ------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE


  $bool = "Elzero"; // True | 1 | "yes" | "on"

  var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));

  echo "<br>";

  $url = "https://elzero.org/?id=100";

  var_dump(filter_var($url, FILTER_VALIDATE_URL,
  ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));

  echo "<br>";

  $ip = "192.168.2.1";

  var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));

  echo "<br>";

  $mac = "00:00:5e:00d:53:af";

  var_dump(filter_var($mac, FILTER_VALIDATE_MAC));

    */

    ?>

<?php

/*
  Filter Functions

  - filter_var(Value[Required], Filter[Optional], Options[Optional])
  --- Validate Filters

  ------ FILTER_VALIDATE_EMAIL
  ---------- Flag => FILTER_NULL_ON_FAILURE

  ------ FILTER_VALIDATE_INT
  ---------- Flag => FILTER_NULL_ON_FAILURE
  ---------- Options => min_range
  ---------- Options => max_range
  ---------- Convert To Int On Success

  ------ FILTER_VALIDATE_FLOAT
  ---------- Flag => FILTER_NULL_ON_FAILURE
  ---------- Options => min_range
  ---------- Options => max_range
  ---------- Convert To Float On Success


$email = "o@nn.sa";

var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));

echo "<br>";

$int = "90";

var_dump(filter_var(
  $int,
  FILTER_VALIDATE_INT,
  ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
));

echo "<br>";

$float = "90.50";

var_dump(filter_var(
  $float,
  FILTER_VALIDATE_FLOAT,
  ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
));

*/

?>

<?php

  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Sanitize Filters

    ------ FILTER_SANITIZE_EMAIL
    ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
    ------ Test ¥

    ------ FILTER_SANITIZE_NUMBER_INT
    --------- Remove All But Digits, +, -

    ------ FILTER_SANITIZE_NUMBER_FLOAT
    --------- Remove ALL But Digits, +, - And Optionally [.,eE]
    --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
    --------- Flags => FILTER_FLAG_ALLOW_FRACTION

    ------ FILTER_SANITIZE_URL
    ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    ------ Test ¥ + Space
 

  $email = "o@n  ¥   n.sa";

  var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));

  echo "<br>";

  $int = "100 + !@@@LHKLJKJFKLJKLJFKL  f;ldkf;lsdkfl;ksdf;lkdsf===-100";

  var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));

  echo "<br>";

  $float = "1,950,150.65AAASSS    sdfdsfsdfsdf@@@@41";

  var_dump(filter_var(
    $float,
    FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
  ));

  echo "<br>";

  $url = "https://el         zer¥¥¥¥¥o.org";

  var_dump(filter_var($url, FILTER_SANITIZE_URL));

  echo "<br>";

   */

   ?>

<?php

/*
  Filter Functions

  - filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
  --- INPUT_GET
  --- INPUT_POST
  --- INPUT_COOKIE
  --- INPUT_SERVER
  --- INPUT_ENV

  -- FILTER_VALIDATE_INT
  -- FILTER_NULL_ON_FAILURE


// echo $_GET["num"];

echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);

?>
<!--
<form action="" method="GET">
<input type="text" name="num">
<input type="submit" value="Send">
</form>
-->
*/



?>

<?php

/*
//Answer of the first assignment elzero web school

echo rand(11,19);

//Answer of the second assignment elzero web school

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[rand(0,3)];

//Answer of the third assignment elzero web school

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1,0,PHP_ROUND_HALF_DOWN);
echo '<br>';
echo round($num2,1,PHP_ROUND_HALF_EVEN);
echo '<br>';
echo round($num3,0,PHP_ROUND_HALF_ODD);

//Answer of the fourth assignment elzero web school

$filters= filter_list();


foreach($filters as $key =>$filter){
    echo '<pre>';
   echo('['.filter_id($filter).']'.' => '. $filter);
    echo'</pre>'; 
}


//Answer of the fifth assignment elzero web school

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";





echo filter_var($url1, FILTER_VALIDATE_URL,["flags" => FILTER_NULL_ON_FAILURE])=== NULL ?'Not A Valid URL':'A Valid URL';
echo '<br>';
echo filter_var($url2, FILTER_VALIDATE_URL,["flags" => FILTER_NULL_ON_FAILURE])=== NULL ?'Not A Valid URL':'A Valid URL';
echo '<br>';
echo filter_var($url3, FILTER_VALIDATE_URL,["flags" => FILTER_NULL_ON_FAILURE])=== NULL ?'Not A Valid URL':'A Valid URL';
echo '<br>';
echo filter_var($url4, FILTER_VALIDATE_URL,["flags" => FILTER_NULL_ON_FAILURE])=== NULL ?'Not A Valid URL':'A Valid URL';


//Answer of the sixth assignment elzero web school



$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo(filter_var($url1, FILTER_SANITIZE_URL));
echo "<br>";
echo(filter_var($url2, FILTER_SANITIZE_URL));
echo "<br>";
echo(filter_var($url3, FILTER_SANITIZE_URL));
echo "<br>";
echo(filter_var($url4, FILTER_SANITIZE_URL));




*/

?>
<?php

/*
  File System Functions
  - disk_total_space()
  --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
  - disk_free_space() || diskfreespace()
  --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
  - file_exists(Path)
  --- Checks If A File Or Directory Exists
  - filesize(File_Name)
  --- Get Space In Bytes


echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>";
echo round(disk_free_space("C:") / 1024 / 1024 / 1024) . "<br>";
var_dump(file_exists("elzero.txt"));
echo '<br>';
echo filesize("elzero.txt");
*/

?>
<?php

/*
  File System Functions
  - is_dir(Name)
  --- Tells If The Filename Is A Directory
  - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
  --- Permissions Is Ignored On Windows
  --- Permissions Is Octal Number Start With 0
  ------ Second Number Is => Owner Permission
  ------ Third Number Is => User Group Permission
  ------ Fourth Number Is => Others Permissions
  - rmdir(Name[Required], Context[Optional])

// var_dump(is_dir("Lessons"));
echo '<br>';
// var_dump(is_dir("elzero.txt"));
echo '<br>';
// mkdir("Test/Upload/Files", 0777, true);
echo '<br>';
// rmdir("Test");
var_dump(file_exists("Test/Upload/Files"));

*/
?>

<?php

  /*
    File System Functions
    - chmod(File[Required], Mode[Required])
    --- Change Mode
    - fileperms(Name)
    --- Gets File Permissions
    - clearstatcache()
    --- Clear Cache

    - You Can Change Owner chown()
    - You Can Change Group chgrp()
 

  // mkdir("Y", 0700);
  echo fileperms("Y") . "<br>";
  chmod("Y", 0644);
  clearstatcache();
  echo fileperms("Y") . "<br>";

   */

   ?>

<?php

/*
  File System Functions
  - chmod(File[Required], Mode[Required])
  --- Change Mode
  - fileperms(Name)
  --- Gets File Permissions
  - clearstatcache()
  --- Clear Cache

  - You Can Change Owner chown()
  - You Can Change Group chgrp()


// mkdir("Y", 0700);
echo fileperms("Y") . "<br>";
chmod("Y", 0644);
clearstatcache();
echo fileperms("Y") . "<br>";

*/

?>
<?php

/*
  File System Functions
  - basename(Path[Required], Suffix[Optional])
  --- Returns Trailing Name Component Of Path
  - dirname(Path[Required], Levels[Optional] = 1)
  --- Returns A Parent Directory's Path
  --- Levels => Number of Parent Directories To Go Up
  - realpath(Path[Required])
  --- Returns Absolute Path
  - pathinfo(Path[Required], Flags[Optional]) => Return Array
  --- PATHINFO_DIRNAME
  --- PATHINFO_BASENAME
  --- PATHINFO_EXTENSION
  --- PATHINFO_FILENAME


echo basename(__FILE__) . "<br>";
echo basename(__FILE__, ".php") . "<br>";

echo dirname(__FILE__, 3) . "<br>";

echo realpath(__FILE__) . "<br>";

echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";

echo pathinfo(__FILE__)["extension"] . "<br>";
echo pathinfo(__FILE__)["dirname"] . "<br>";

echo pathinfo(__FILE__, PATHINFO_DIRNAME). "<br>";

*/

?>
<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode
  --- [r] For Read => Pointer At The Beginning
  --- [r+] For Read & Write => Pointer At The Beginning
  --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
  --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

  - fgets(File[Required], Length[Optional])
  --- Get A Line From An Open File
  --- Length => Number Of Bytes To Read || End Of Line If No Length
  - fread(File[Required], Length[Required])
  --- Get A Data From An Open File
  --- Length => Maximum Number Of Bytes To Read
  - fclose(File[Required])
  --- Closes An Open File Pointer


$handle = fopen("elzero.txt", "r");

// echo fgets($handle, 4);

echo fread($handle, 1024);

fclose($handle);

*/

?>

<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode

  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read & Write => Pointer At The Beginning

  - fwrite(File[Required], String[Required], Length[Optional])
  --- Write To An Open File
  --- Length => Maximum Number Of Bytes To Write


$handle = fopen("elzero.txt", "r");

fwrite($handle, "\r\nThis Is A New Line 1", 5);
fwrite($handle, "\r\nThis Is A New Line 2");

fclose($handle);

*/

?>

<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read &#038; Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer

// echo '<pre>';
// print_r(file("elzero.txt"));
// echo '</pre>';

// echo count(file("elzero.txt"));

$handle = fopen("elzero.txt", "r");

// $line = 1;

// while (! feof($handle)) {

//   echo "Line $line => " . fgets($handle) . "<br>";

//   $line++;

// }

for ($i = 0; $i < count(file("elzero.txt")); $i++) {

  echo fgets($handle) . "<br>";

}

fclose($handle);

*/

?>
<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]


$handle = fopen("elzero.txt", "r");

// echo ftell($handle) . "<br>"; // 0

// echo fgets($handle) . "<br>";

// echo fgets($handle) . "<br>";

// rewind($handle);

// echo fgets($handle) . "<br>"; // Elzero

// echo ftell($handle) . "<br>"; // 8

echo fgets($handle) . "<br>"; // Elzero

fseek($handle, -6, SEEK_END);

echo fgets($handle) . "<br>"; // zero Web School

fclose($handle);

echo mb_strlen("School", "8bit");
*/

?>
<?php

/*
  File System Functions

  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathnames Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir()
  - readdir()
  - closedir()


echo "<pre>";
print_r(glob("Old/*.*"));
echo "</pre>";

// Rename => Same Place
// rename("Old/Test.txt", "Old/Testing.txt");

// Rename => Other Place => "Cut" || "Move"
// rename("Old/Testing.txt", "New/Testing_2.txt");

// Move To Other Place
// rename("Old/Elzero.pptx", "New/Elzero.pptx");

// Copy Without Rename
// copy("Old/Info.docx", "New/info.docx");

// Copy With Rename
// copy("Old/Work.txt", "New/working.txt");

unlink("Old/Work.rtf");

*/


/*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path



echo get_include_path() . "<br>";

// echo file_get_contents("elzero.txt", true, NULL, 4, 5);

// echo file_get_contents("https://elzero.net");

// print_r(file("https://elzero.net"));

echo file_put_contents("elzero.txt", "\r\nThis Is New Line", FILE_APPEND);

*/
?>
<?php
/*
//Answer of the first assignment elzero web school

  echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024,2) . "<br>";
  echo round(disk_total_space("D:") / 1024 / 1024 / 1024 / 1024,2) . "<br>";

//Answer of the second  assignment elzero web school

echo round(filesize('WIN_20230208_19_13_19_Pro.mp4')/1024 / 1024 ,2);
echo '<br>';
echo round(filesize('WIN_20230208_19_13_19_Pro.mp4'),2);


//Answer of the third  assignment elzero web school

 if((!is_dir('Programming/PHP')) && (!is_dir('Programming')) ){ 
    die('Directory Programming/PHP Removed <br>
        Directory Programming Removed
     ');
   }

//Answer of the fourth assignment elzero web school


function change_permissions($file_name){

      if(is_file($file_name)===true){

         if((pathinfo($file_name)['extension'])==='txt'){

           if(fileperms($file_name)===33206){
               echo "Permissions hasn't Changed"; 
            }
        
                   
         }else{
             echo 'File Extension Is Not Txt';
         }
      }else{
        echo 'This Is Directory And Only Files Allowed';
      }

}
change_permissions('index.txt');

//Answer of the fifth assignment elzero web school

echo basename(__FILE__) . "<br>";
echo "<pre>";
print_r(pathinfo(__FILE__)['basename']);
echo "</pre>";

echo basename(__FILE__, ".php") . '.'.pathinfo(__FILE__)["extension"] . "<br>";


//Answer of the sixth assignment elzero web school

$handle = fopen("elzero.txt", "r");
echo fread($handle,24);
fclose($handle);

------------------------------------

echo file_get_contents("elzero.txt", true, NULL, 0, 24);

------------------------------------

echo file_get_contents("elzero.txt", true, NULL, -41, 24);

------------------------------------

echo file("elzero.txt")[0].' '.file("elzero.txt")[1];



//Answer of the seventh assignment elzero web school

$file = 'elzero.txt';
file_put_contents($file,str_replace('Osamaa','Elzero',file_get_contents($file)));


*/





  ?>
