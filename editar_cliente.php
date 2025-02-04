<?php

require './Entity/Cliente.php';

$id_recebido = $_GET['id'];
//echo "ID RECEBIDO :" .$id_recebido;

if(!isset($id_recebido) or !is_numeric($id_recebido)){
    header('location: cadastro_cliente');
    exit;
}
$cliente = Cliente::buscar_by_id($id_recebido);
$nome = $cliente->nome;
$cpf = $cliente->cpf;
$telefone = $cliente->telefone;
$email =$cliente->email;
// print_r($nome);
// print_r($cpf);
// print_r($telefone);
// print_r($email);

if(isset($_POST['editar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $EMAIL = $_POST['email'];

    $cli_editado = new Cliente();
    $cli_editado->id = $id_recebido;
    $cli_editado->nome = $nome;
    $cli_editado->cpf = $cpf;
    $cli_editado->telefone = $telefone;
    $cli_editado->email = $email;

    $result = $cli_editado->atualizar();
    if($result){
        echo '<script> alert("Atualizado com sucesso!!") </script>' ;
        echo "<meta http-equiv='refresh' content='0.5;url=cliente_cadastrado.php'>";
    }else{
        echo 'Erro ao atualizar';
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/editar_cliente.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    
</head>
<body>
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
    <h1>Editar Cadastro</h1>
    <form method="POST" >
        <input name="nome" id="nome" type="text" placeholder="Digite seu nome">
        <input name="cpf" id="cpf" type="text" placeholder="Digite seu CPF">
        <input name="telefone" id="telefone" type="text" placeholder="Digite seu telefone">
        <input name="email" id="email" type="email" placeholder="Digite seu email">
        <input name= "editar" type="submit" value ="Editar">
    </form>
</body>
</html>