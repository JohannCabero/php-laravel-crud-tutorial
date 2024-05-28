<?php
include("./dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <h2>Welcome to Fakebook</h2>
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Register"><br>
    </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = filter_input(
        INPUT_POST,
        "username",
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    $password = filter_input(
        INPUT_POST,
        "password",
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    if (empty($username)) {
        echo "Enter a username";
    } elseif (empty($password)) {
        echo "Enter a password";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (user, password)
                  VALUES ('$username','$hash')";

        try {
            mysqli_query($conn, $query);
            echo "User registered";
        } catch (mysqli_sql_exception) {
            echo "Invalid user";
        }
    }
}

mysqli_close($conn);
?>