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
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/cliente_cadastrado.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header>
        <nav class="navbar">
            <i class="fa-solid fa-burger" id="nav-logo"> food</i>
            <ul class="nav_list">
                <!-- <li class="nav-item"><a href="indexprincipal.php">Home</a></li>
                <li class="nav-item"><a href="indexprincipal.php">Cardápio</a></li>
                <li class="nav-item"><a href="indexprincipal.php">Avaliações</a></li> -->
            </ul>
            <button class="btn-default">
                <a href="indexprincipal.php">Home</a>
            </button>
           
        </nav>
        <button class="mobile-btn">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="mobile-menu">
            <ul class="mobile-nav-list">
                <li class="nav-item"><a href="indexprincipal.php">Home</a></li>
                <!-- <li class="nav-item"><a href="indexprincipal.php"></a>Cardápio</li>
                <li class="nav-item"><a href="indexprincipal.phps"></a>Avaliações</li> -->
            </ul>
        </div>
    </header>>
   
    <h1> Clientes Cadastrados </h1>

    <table border="1" id="tabela">
        <thead>
            <tr class="cabecalho">
                <th>id</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($clientes_banco as $cliente){
                echo '
                <tr>
                    <td> '.$cliente['id'].'  </td>
                    <td> '.$cliente['nome'].'  </td>
                    <td> '.$cliente['cpf'].'  </td>
                    <td> '.$cliente['telefone'].'  </td>
                    <td> '.$cliente['email'].'  </td>
                    <td> <a href="editar_cliente.php?id='.$cliente['id'].'">Editar</td>
                    <td> <a href="excluir_cliente.php?id='.$cliente['id'].'">Excluir</td>
                </tr>
                ';
            }
        ?>
           
        </tbody>
    </table>
</body>
</body>
</html>