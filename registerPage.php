<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Login</title>
</head>

<body>
    <div class="login-main">
        <img id="imgLogin" src="img/loginIMG.png" alt="Something Wrong">
        <form action="register.php" method="POST">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" required placeholder="Jhon Doe">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required placeholder="exemplo@gmail.com">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required placeholder="Password">
            <button type="submit">Entrar</button>
            <a href="index.php" id="LoginPage">Já tem conta? Entre aqui.</a>
        </form>
    </div>
</body>

</html>