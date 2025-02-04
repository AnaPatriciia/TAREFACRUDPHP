<?php
require './Entity/Cliente.php';

$dados = new Cliente();
$clientes_banco = $dados->buscar();

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $cliente = new Cliente();
    $cliente ->nome = $nome;
    $cliente ->cpf = $cpf;
    $cliente ->telefone = $telefone;
    $cliente ->email = $email;

    $result = $cliente->cadastrar();
    if($result){
        echo '<script> alert("Cliente cadastrado com sucesso!!") </script>';
        echo "<meta http-equiv='refresh' content='0.5;url=indexprincipal.php'>";
    }else{
        echo 'Error';
    }
}

?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/cadastro_cliente.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="src/js/menu.js" defer></script>
    <script src="src/js/carrossel.js" defer></script>
</head>
<body class="cadastro">
    <header>
        <nav class="navbar">
            <i class="fa-solid fa-burger" id="nav-logo"> food</i>
            <ul class="nav_list">
                <li class="nav-item"><a href="indexprincipal.php">Home</a></li>
                <li class="nav-item"><a href="indexprincipal.php">Cardápio</a></li>
                <li class="nav-item"><a href="indexprincipal.php">Avaliações</a></li>
            </ul>
            <button class="btn-default">
                <a href="cliente_cadastrado.php">Clientes cadastrados</a>
            </button>
           
        </nav>
        <button class="mobile-btn">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="mobile-menu">
            <ul class="mobile-nav-list">
                <li class="nav-item"><a href="indexprincipal.php">Home</a></li>
                <li class="nav-item"><a href="indexprincipal.php"></a>Cardápio</li>
                <li class="nav-item"><a href="indexprincipal.phps"></a>Avaliações</li>
            </ul>
        </div>
    </header>
    <br>
    <br>
    <section>
    <h1> Cadastrar Cliente </h1>
    <form method="POST" >
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
        <br>
        <input type="text" name="cpf" id="cpf"  placeholder="Digite seu CPF">
        <br>
        <input type="text" name="telefone" id="telefone"  placeholder="Digite seu telefone">
        <br>
        <input type="text" name="email" id="email"  placeholder="Digite seu e-mail">
        <br>
        <input type="submit" name="cadastrar" value="Cadastrar">
        <br>
    </form>
    </section>
    <br>
    <br>
   
</body> 
</html>

