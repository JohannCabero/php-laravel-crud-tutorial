<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index4.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Age:</label><br>
        <input type="text" name="age"><br>
        <label>Email:</label><br>
        <input type="text" name="email"><br>
        <input type="submit" name="submit" value="submit"><br>
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {

    $username = filter_input(
        INPUT_POST,
        "username",
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    // $age = filter_input(
    //     INPUT_POST,
    //     "age",
    //     FILTER_SANITIZE_NUMBER_INT
    // );

    $age = filter_input(
        INPUT_POST,
        "age",
        FILTER_VALIDATE_INT
    );

    $email = filter_input(
        INPUT_POST,
        "email",
        FILTER_SANITIZE_EMAIL
    );

    echo "Hello, {$username}! <br>";

    if (empty($age)) {
        echo "Invalid age <br>";
    } else {
        echo "You are {$age} years old. <br>";
    }

    echo "Your email is {$email} <br>";

    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");

    setcookie("fav_drink", "water", time() + (86400 * 2), "/");
    setcookie("fav_drink", "water", time() - 0, "/");

    foreach ($_COOKIE as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    if (isset($_COOKIE["fav_food"])) {
        echo "BUY SOME {$_COOKIE["fav_food"]} <br>";
    }

    $password = "pizza123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (password_verify("pizza123", $hash)) {
        echo "Same password";
    } else {
        echo "Incorrect password";
    }
}
?>