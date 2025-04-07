<!-- Não mandei print da tela pois não consegui fazer o localhost no meu PC -->

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

<?php
    // Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitiza e valida as entradas
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Verifica as credenciais
    foreach ($users as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            $login_successful = true;
            break;
        }
    }

    if ($login_successful) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>



    
</body>
</html>