<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="index.php" method="get">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form> -->

    <form action="index.php" method="post">
        <label>Quantity:</label><br>
        <input type="number" name="quantity"><br>
        <input type="submit" value="Submit">
    </form><br>
</body>

</html>

<?php
// echo $_GET["username"] . "<br>";
// echo "{$_GET["password"]} <br>";

$item = "pizza";
$price = 3.99;
$quantity = $_POST["quantity"];
$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}/s <br>";
echo "Your total is \${$total} <br>";

// Math functions
// abs($x);
// round($x);
// floor($x);
// ceil($x);
// sqrt($x);
// pow($x, $y);
// max($x, $y, $z);
// min($x, $y, $z);
// pi();
// rand($x, $y);

$radius = 5;
$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4 / 3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference = {$circumference} cm <br>";
echo "Area = {$area} cm2 <br>";
echo "Volume = {$volume} cm3 <br>";

$age = 15;

if ($age >= 18) {
    echo "You can enter";
} elseif ($age > 12 && $age < 18) {
    echo "You need supervision <br>";
} else {
    echo "Access denied <br>";
}

$grade = "A";

switch ($grade) {
    case "A":
        echo "You did great<br>";
        break;
    case "B":
        echo "You did good <br>";
        break;
    default:
        echo "Invalid grade <br>";
        break;
}

for ($i = 0; $i < 10; $i += 2) {
    echo $i . "<br>";
}

$counter = 0;

while ($counter <= 10) {
    $counter++;
    echo $counter . "<br>";
}

$foods = array("apple", "orange", "bannana");

echo $foods[0] . "<br>";
echo $foods[2] . "<br>";

$foods[1] = "pineapple";

array_push($foods, "orange", "kiwi");
array_pop($foods);
array_shift($foods);
$foods = array_reverse($foods);
echo count($foods) . "<br>";

foreach ($foods as $food) {
    echo $food . "<br>";
}

$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul"
);

echo $capitals["USA"] . "<br>";

$capitals["Japan"] = "Tokyo";

$capitals["China"] = "Beijing";

$keys = array_keys($capitals);
echo $keys[0] . "<br>";

$values = array_values($capitals);
echo $values[0] . "<br>";

$capitals = array_flip($capitals);

foreach ($capitals as $key => $value) {
    echo "{$key} {$value} <br>";
}

$name = null;

echo isset($name) . "<br>";
echo empty($name) . "<br>";

/*
foreach ($_POST as $key => $value){
    echo "{$key} {$value} <br>";
}
*/

?>