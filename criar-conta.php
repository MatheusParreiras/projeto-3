<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (validarCriacaoConta($email, $senha)) {
        header("Location: login.php");
        exit();
    } else {
        $erroCriacaoConta = "Erro ao criar a conta. Tente novamente.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Criar Conta</title>
</head>
<body>
    <h2>Criar Conta</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" value="Criar Conta">
    </form>

    <?php
    if (isset($erroCriacaoConta)) {
        echo "<p>$erroCriacaoConta</p>";
    }
    ?>
</body>
</html>
