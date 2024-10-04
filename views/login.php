<?php
    session_start();
    include 'C:/xampp/htdocs/Gerenciador_de_Finacas/config/db.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $stmt = $conn->prepare("SELECT id, senha FROM usuario WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows > 0){
            $stmt->bind_result($id, $senha_hash);
            $stmt->fetch();

            if(password_verify($senha, $senha_hash)){
                $_SESSION['usuario_id'] = $id;
                $_SESSION['email'] = $email;

                echo "Login bem-sucedido";
                header("Location: /Gerenciador_de_Finacas/index.html");
                exit;
            }else{
                echo "Senha incorreta!";
            }
        }else{
            echo "Usuário não existe!";
        }
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
    <title>Login</title>
</head>

<body>
    <div class="imagem-fundo">
        <img src="/Gerenciador_de_Finacas/assets/img/pxfuel.jpg" alt="Imagem de Fundo">
    </div>

    <div class="form-container">
        <h1>Login</h1>
        <form method="post" action="">
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="senha" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
            <button class="btn btn-primary"><a href="/Gerenciador_de_Finacas/views/registrar.php">Registrar</a></button>
        </form>
    </div>
</body>
</html>
