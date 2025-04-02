<?php

$users = [
    [
        'username' => 'Davi',
        'password' => password_hash('seinha', PASSWORD_DEFAULT),
    ],
    [
        'username' => 'Duda',
        'password' => password_hash('duda', PASSWORD_DEFAULT),
    ],
    [
        'username' => 'André',
        'password' => password_hash('1234567', PASSWORD_DEFAULT),
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method="POST" action="login.php">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="Login">
    </form>
    </center>


    
</body>
</html>