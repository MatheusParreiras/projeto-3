<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (validarLogin($email, $senha)) {
        $_SESSION["email"] = $email;
        header("Location: pagina_principal.php");
        exit();
    } else {
        $erroLogin = "Email ou senha incorretos.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" value="Entrar">
    </form>

    <?php
    if (isset($erroLogin)) {
        echo "<p>$erroLogin</p>";
    }
    ?>
</body>
</html>
