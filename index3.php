<?php
function happy_birthday(string $name, int $age)
{
    echo "Happy Birthday, {$name} <br>";
    echo "You are {$age} years old <br><br>";
}

function is_odd($number)
{
    return $number % 2;
}

happy_birthday("yes", 3);

$number = 3;
if (is_odd($number)) {
    echo "{$number} is odd";
} else {
    echo "{$number} is even";
}

$username = "Bro The Code";
$phone = "123-456-789";

// $username = strtolower($username);
// $username = strtoupper($username);
// $username = trim($username);
// $username = str_pad($username, 10, "0");
$phone = str_replace("-", "", $phone);
// $username = strrev($username);
// $username = str_shuffle($username);
$equals = strcmp($username, "Broh");
$count = strlen($username);
$index = strpos($phone, "3");
$first_name = substr($username, 0, 3);
$last_name = substr($username, 4);
$fullname = explode(" ", $username);
$username2 = implode("-", $fullname);

echo "<br>{$username} <br>";
echo "{$phone} <br>";

foreach ($fullname as $name) {
    echo $name . "<br>";
}
