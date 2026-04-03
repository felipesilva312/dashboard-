<?php
$email_correto = "testelogin@gmail.com";
$senha_correta = "teste123";

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if ($email == $email_correto && $senha == $senha_correta) {
        header("Location: index.php");
        exit();
    } else {
        $erro = "E-mail ou senha inválidos";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="login-container">
        <div class="login-card">

            <div class="login-header">
                <i class="fa-solid fa-newspaper logo-icon"></i>
                <h2>Painel do Blog</h2>
            </div>

            <?php if (!empty($erro)): ?>
                <div class="mensagem-erro">
                    <?php echo $erro; ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>

                <div class="form-group">
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>

                <button type="submit" class="btn-login">
                    Acessar Painel
                </button>
            </form>

            <p class="cadastro-link">
                Não é usuário? <a href="cadastro.php">Cadastre-se</a>
            </p>

        </div>
    </div>

    <?php include 'rodape.php'; ?>

</body>
</html>