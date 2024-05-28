<?php
include("./dbconnection.php");

// $username = "Patrick";
// $password = "rock2";
// $hash = password_hash($password, PASSWORD_DEFAULT);

// $query = "INSERT INTO users (user, password)
//           VALUES ('$username', '$hash')";

// try {
//     mysqli_query($conn, $query);
//     echo "User registered <br>";
// } catch (mysqli_sql_exception) {
//     echo "Could not register user. <br>";
// }

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["password"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hello <br>
</body>

</html>