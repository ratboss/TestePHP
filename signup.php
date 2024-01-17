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
            Sign Up
            <p>User: <input type="text" name="user" placeholder="User"></p>
            <p>Password: <input type="text" name="password" placeholder="*********"></p>
            <p>Email: <input type="email" name="email" placeholder="example@example.com"></p>
            <p>Phone: <input type="number" name="number" placeholder="12345678900"></p>     
            <p>Sign Up</p><input type="button" value="Inserir" name="Inserir">    
        </div>
    </form>
</body>

<?php
$user = $_POST["user"];
$password = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["number"]

$conexao = mysqli_connect("localhost","root","","users") or die("Connection Error");

if($botaoCadastro == "Inserir"){
    if($usuario == "" || $senha == ""){
        echo "Campos não preenchidos!";
    }
    else {
        $sql = "INSERT INTO users_login(id, user, password, email, phone) VALUES ('$id','$user','$password','$email','$phone');";
        mysqli_query($conexao, $sql);
    }
}

?>
</html>