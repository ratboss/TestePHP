<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetin</title>
</head>
<body>
    <form method="POST">
        <div class="Cadastro">
            Login
            <p>User: <input type="text" name="user" placeholder="User"></p>
            <p>Password: <input type="text" name="password" placeholder="*********"></p>
            <input type="button" value="Login" name="logar">            
        </div>
    </form>
</body>

<?php
$conexao = mysqli_connect("localhost","root","","login") or die("Erro de Conexão");
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$botaoEntrar = $_POST["logar"];
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

if($botaoEntrar == "Logar"){
    if($usuario == "" || $senha == "" || $usuario == "" && $senha == ""){
        echo "Alguma informação faltando..";
    }
    else{
        $query = "SELECT * FROM users_login WHERE user = '$user' AND senhas = '$password'";
        $result = mysqli_query($conexao,$query);
        $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['user']=$usuario;
        header("Location: index.html");
    }
    else{
        echo "Erro ao conectar";
        exit();
    }
}
}
}


?>
</html>