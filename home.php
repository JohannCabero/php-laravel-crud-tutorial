<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Home Page</h3><br>
    <form action="./home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
    <br><br>
</body>

</html>

<?php
echo "Username: {$_SESSION["username"]} <br>";
echo "Password: {$_SESSION["password"]} <br>";

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: ./login.php");
}
