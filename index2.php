<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index2.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>

        <label>Credit Card:</label><br>
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Master Card">
        Master Card<br>

        <label>Foods:</label><br>
        <input type="checkbox" name="foods[]" value="pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="hamburger">
        Hamburger<br>

        <input type="submit" name="login" value="Login"><br>
    </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Missing username <br>";
    } elseif (empty($password)) {
        echo "Missing password <br>";
    } else {

        $credit_card = null;

        if (isset($_POST["credit_card"])) {
            $credit_card = $_POST["credit_card"];
        }

        switch ($credit_card) {
            case "Visa":
                echo "Welcome. You selected Visa <br>";
                break;
            case "Master Card":
                echo "Weclome. You selected Master Card. <br>";
                break;
            default:
                echo "Invalid selection <br>";
        }

        if (isset($_POST["foods"])) {
            $foods = $_POST["foods"];
            foreach ($foods as $food) {
                if (isset($food)) {
                    echo $food . "<br>";
                }
            }
        } else {
            echo "No food <br>";
        }
    }
}
?>