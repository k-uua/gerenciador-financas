<?php
    include 'C:/xampp/htdocs/Gerenciador_de_Finacas/config/db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $senha);

        // Executar a instrução
        if ($stmt->execute()) {
            echo "<script>alert('Usuário registrado com sucesso!');</script>";
            // Redirecionar para a página de login
            echo "<script>window.location.href = '/Gerenciador_de_Finacas/views/login.php';</script>";
        } else {
            echo "<script>alert('Erro ao registrar usuário: " . $stmt->error . "');</script>";
        }

        // Fechar a instrução
        $stmt->close();
    }
    $conn->close();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/Gerenciador_de_Finacas/assets/css/style.css">
    <title>Registrar</title>
</head>
<body>

    <div class="imagem-fundo">
        <img src="/Gerenciador_de_Finacas/assets/img/pxfuel.jpg" alt="Imagem de Fundo">
    </div>
    <div class="form-container-registrar">
        <h1>Registrar Usuário</h1>
        <form method="post" action="">
            <div class="row mb-3">
                <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="senha" class="col-sm-2 col-form-label">Senha:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
            </div>
                
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>






