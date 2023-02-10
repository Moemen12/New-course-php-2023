<?php

  /*
    Date And Time Functions

    - date_default_timezone_get()

    - date_default_timezone_set(timezone[Required])

    - date_create(Date/Time[Optional], Timezone[Optional])
    --- Time: Date/Time String || Current Time If NULL
    --- Timezone: Timezone String || Current Timezone

    - timezone_open(Timezone)

    - checkdate(M, D, Y) => All Required
    --- Validate A Gregorian Date

    Will Cover Later
    - date()
    - date_format()

  

  // Get Timezone

  echo date_default_timezone_get() . "<br>";

  // Print Date And Time

  echo date("Y-m-d H:i:s") . "<br>";

  // Change Timezone

  date_default_timezone_set("Africa/Cairo");

  // Print Date And Time Again

  echo date("Y-m-d H:i:s") . "<br>";

  // Get Timezone Again

  echo date_default_timezone_get() . "<br>";

  // Create Date Object

  $d = date_create("", timezone_open("Indian/Antananarivo"));

  // Echo Date With Format

  echo date_format($d, "Y-m-d H:i:s");

  // Check Date

  echo "<br>";
  var_dump(checkdate(10, 25, 1982));
  echo "<br>";
  var_dump(checkdate(31, 02, 1982));
  echo "<br>";
  var_dump(checkdate(31, 02, 3500));
  echo "<br>";
  var_dump(checkdate(-2, 02, 1982));

  */


  ?>

<?php

/*
  Date And Time Functions

  - date_format()

  [Year]
  - Y => Four Digits
  - y => Two Digits

  [Month]
  - m => 01-12
  - M => Text Month => 3 Letters
  - F => Full Text
  - t => Number Of Days In This Month

  [Day]
  - d => Day of The Month 1-31
  - j => Day Without Leading Zero
  - D => Text Day => 3 Letters
  - l => Full Text
  - z => Day Of The Year 0-365
  - S => st, rd, nth Suffix For Day Of The Month

  [Time]
  - a => Small am/pm
  - A => Capital AM/PM

  [Hour]
  - g => 1-12
  - h => 01-12
  - G => 0-23
  - H => 00-23

  [Minutes, Seconds, Micro]
  - i => 00-59
  - s => 00-59
  - u => Microseconds



date_default_timezone_set("Africa/Cairo");

// $d = date_create("2022-10-01 15:5:3");
$d = date_create();

// Year
echo date_format($d, "Y") . "<br>"; // 2022
echo date_format($d, "y") . "<br>"; // 22

// Month
echo date_format($d, "Y-m") . "<br>";
echo date_format($d, "Y-M") . "<br>";
echo date_format($d, "Y-F") . "<br>";
echo date_format($d, "t") . "<br>"; // 30

// Day
echo date_format($d, "Y-m-d") . "<br>";
echo date_format($d, "Y-m-j") . "<br>";
echo date_format($d, "Y-m-D") . "<br>";
echo date_format($d, "Y-m-l") . "<br>";
echo date_format($d, "Y-m-l z") . "<br>";
echo date_format($d, "Y-m-l djDl") . "<br>";
echo date_format($d, "Y-m-l S") . "<br>";

*/

?>
<?php

/*
  Date And Time Functions

  - date_format()

  [Year]
  - Y => Four Digits
  - y => Two Digits

  [Month]
  - m => 01-12
  - M => Text Month => 3 Letters
  - F => Full Text
  - t => Number Of Days In This Month

  [Day]
  - d => Day of The Month 1-31
  - j => Day Without Leading Zero
  - D => Text Day => 3 Letters
  - l => Full Text
  - z => Day Of The Year 0-365
  - S => st, rd, nth Suffix For Day Of The Month

  [Time]
  - a => Small am/pm
  - A => Capital AM/PM

  [Hour]
  - g => 1-12
  - h => 01-12
  - G => 0-23
  - H => 00-23

  [Minutes, Seconds, Micro]
  - i => 00-59
  - s => 00-59
  - u => Microseconds



date_default_timezone_set("Africa/Cairo");

// $d = date_create("2022-10-01 15:5:3");
$d = date_create();

// Year
echo date_format($d, "Y") . "<br>"; // 2022
echo date_format($d, "y") . "<br>"; // 22

// Month
echo date_format($d, "Y-m") . "<br>";
echo date_format($d, "Y-M") . "<br>";
echo date_format($d, "Y-F") . "<br>";
echo date_format($d, "t") . "<br>"; // 30

// Day
echo date_format($d, "Y-m-d") . "<br>";
echo date_format($d, "Y-m-j") . "<br>";
echo date_format($d, "Y-m-D") . "<br>";
echo date_format($d, "Y-m-l") . "<br>";
echo date_format($d, "Y-m-l z") . "<br>";
echo date_format($d, "Y-m-l djDl") . "<br>";
echo date_format($d, "Y-m-l S") . "<br>";

// Time
echo date_format($d, "Y-m-d g a") . "<br>";
echo date_format($d, "Y-m-d g A") . "<br>";
echo date_format($d, "Y-m-d h a") . "<br>";
echo date_format($d, "Y-m-d G") . "<br>";
echo date_format($d, "Y-m-d H") . "<br>";
echo date_format($d, "Y-m-d H/i/s") . "<br>";
echo date_format($d, "Y-m-d H/i/s u") . "<br>";

*/

?>
<?php

/*
  Date And Time Functions

  - date_interval_create_from_date_string()
  - date_add()
  - date_sub()
  - date_modify()



date_default_timezone_set("Africa/Cairo");

$d = date_create();

// date_add($d, date_interval_create_from_date_string("1 year 2 months 5 days"));

// date_sub($d, date_interval_create_from_date_string("1 year 2 months 5 days"));

date_modify($d, "+20 months");

echo date_format($d, "Y/m/d H-i-s a");

*/

?>

<?php

  /*
    Date And Time Functions

    - time()
    --- Unix Timestamp => Seconds Since 01 Jan 1970

    - getdate()

    - date_parse()



  date_default_timezone_set("Africa/Cairo");

  echo time() . "<br>";

  echo time() / 60 . " Minutes<br>";
  echo time() / 60 / 60 . " Hours<br>";
  echo time() / 60 / 60 / 24 . " Days<br>";
  echo time() / 60 / 60 / 24 / 365 . " Years<br>";

  echo "<pre>";
  print_r(getdate());
  echo "</pre>";

  $t = getdate();

  echo $t["year"] . "<br>";

  echo "<pre>";
  print_r(date_parse("1985-2-31 5:25:15 UTC"));
  echo "</pre>";

    */

    ?>
    <?php

/*
  Date And Time Functions

  - time()
  --- Unix Timestamp => Seconds Since 01 Jan 1970

  - getdate()

  - date_parse()


date_default_timezone_set("Africa/Cairo");

echo time() . "<br>";

echo time() / 60 . " Minutes<br>";
echo time() / 60 / 60 . " Hours<br>";
echo time() / 60 / 60 / 24 . " Days<br>";
echo time() / 60 / 60 / 24 / 365 . " Years<br>";

echo "<pre>";
print_r(getdate());
echo "</pre>";

$t = getdate();

echo $t["year"] . "<br>";

echo "<pre>";
print_r(date_parse("1985-2-31 5:25:15 UTC"));
echo "</pre>";

*/

?>

<?php

  /*
    Date And Time Functions

    - date_diff()
    - strtotime(DateTime, Base)



  date_default_timezone_set("Africa/Cairo");

  $reg = date_create("2022-01-09");
  $now = date_create("now");

  $diff = date_diff($reg, $now);

  echo '<pre>';
  print_r($diff);
  echo '</pre>';

  echo "You Are A Member For " . $diff->days . " Days<br>";

  // echo date("Y-m-d H:i:s", strtotime("next Friday")) . "<br>";
  // echo date("Y-m-d H:i:s", strtotime("+1 year")) . "<br>";
  // echo date("Y-m-d H:i:s", strtotime("tomorrow")) . "<br>";
  // echo date("Y-m-d M D H:i:s", strtotime("tomorrow", strtotime("1982-10-25"))) . "<br>";

    */
    ?>

    <?php

/*

//Answer of the first assignment elzero web school

date_default_timezone_set("Asia/Riyadh");

echo date_default_timezone_get(). "<br>";
$d = date_create("2022-11-09");
echo date_format($d, "D, d M y - g:i:s A") . "<br>";
echo date_format($d, "l, d F Y - g:i:s A") . "<br>";


//Answer of the second assignment elzero web school

$date = "2005-10-02";
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get(). "<br>";
$created_day=date_create($date);
//"2005, October, Sunday '02nd' 15:15:10"
date_modify($created_day,"+15 hours +15 minutes +15 seconds");

echo date_format($created_day, "Y, F, l 'dS' H:i:s");

//Answer of the third assignment elzero web school


date_default_timezone_set("Africa/Cairo");

 $date = "1990-10-01";


$start_date = strtotime($date);
$end_date = strtotime(date('Y-m-d'));


echo "From Epoch Time Till 1990-10-01 Is Approximately " .round(($end_date - $start_date)/60/60/24,2) . " Days".'<br>';
echo "From Epoch Time Till 1990-10-01 Is Approximately " .round(($end_date - $start_date)/60/60/24/365,2) . " Years";


//Answer of the fourth assignment elzero web school


date_default_timezone_set("Africa/Cairo");
$date = "1990-10-01";
$reg = date_create($date);
$now = date_create("now");

$diff = date_diff($reg, $now);

echo "From Epoch Time Till 1990-10-01 Is Approximately " .round($diff->days,2) . " Days".'<br>';
echo "From Epoch Time Till 1990-10-01 Is Approximately " .round($diff->y,2) . " Years";


//Answer of the fifth assignment elzero web school

echo time() . "<br>";
echo strtotime(date("Y-m-d"));


*/

 
?>
<?php

/*
  Cookies

  - Examples
  --- Popup
  --- Custom Settings
  --- Remember Me => Login

  - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
  --- Name
  --- Value
  --- Expire
  --- Path
  --- Domain
  --- Secure
  --- HTTP_Only

setcookie("style", "dark", time() + 60 * 60 * 24 * 30);

*/

?>
<?php

/*
  Cookies

  - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
  --- Name
  --- Value
  --- Expire
  --- Path
  --- Domain
  --- Secure
  --- HTTP_Only

  Important
  - DO NOT Store Sensitive Information
  - Not Everything Saved To Cookies


setcookie("style", "dark", time() + 60 * 60 * 24 * 30, "/");
setcookie("popup", "done", strtotime("+1 month"));

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo $_COOKIE["style"];

*/

?>
<?php

/*
  Cookies
  - Modify
  - Delete
  - Add Array

setcookie("style[color]", "red");
setcookie("style[font]", "Tahoma");
setcookie("style[layout]", "boxed");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["style"])) {
  echo $_COOKIE["style"]["font"];
}
*/
?>

<?php

  /*
    Cookies
    - Practice


  if (isset($_COOKIE["background"])) {
    echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit();
  }

?>

<form action="" method="POST">
  <input type="color" name="bg-color">
  <input type="submit" value="Choose Color">
</form>

  */?>

<?php

/*
  Sessions
  - Session Is Stored On The Server
  - Session Store Only A User Key In Cookie To Know Its You
  - Key Are Generated By PHP Engine So Its Almost Impossible To Guess
  - You Need To Add It Before Any Output

session_start();

$_SESSION['name'] = "Ahmed";
$_SESSION['id'] = 1005;

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

echo '<a href="test.php">Test</a>';
*/
?>
<?php

/*
  Sessions
  - Advanced Information
  - Edit
  - Views Count

// session_id("lkjsdklfjksdfsdf");

session_start();

// echo session_id();

$_SESSION['name'] = "Elzero";

isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

echo "Hello " . $_SESSION['name'] . " Views Count Is " . $_SESSION['views'];

echo '<a href="about.php">About</a>';

*/

?>
<?php

/*
  Sessions
  - Unset And Destroy
  - Login And Logout Simulation


session_start();

// $_SESSION['name'] = "Elzero";
// session_unset();
// session_destroy();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if ($_POST['user'] === "Osama") {
    $_SESSION['username'] = "Elzero";
    $_SESSION['id'] = 1005;
  }
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

if (isset($_SESSION['username'])) {
  echo "Welcome " . $_SESSION['username'];
} else {

?>

<form action="" method="POST">
<input type="text" name="user">
<input type="submit" value="Login">
</form>

<?php } ?>

<a href="logout.php">Logout</a>

*/
?>
<?php

/*
  Header
  - Send RAW HTTP Header To Client To Manipulate Info Sent By Web Server Before Any Output
  - You Can Use To Control Cache Or Force File Download

  header(Header[Required], Replace[Optional] = True, Response_Code[Optional])


// header("HTTP/1.0 404 Not Found");
// header("expires: Sat, 01 Jan 2022 01:00:00");
// header("cache-control: no-cache, must-revalidate");
// echo "<a href='test.php'>Test</a>";
// header("Refresh:5; url=test.php");
header("Location: test.php");
exit;

*/
?>
