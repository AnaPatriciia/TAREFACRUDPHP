<?php
require './Entity/Produto.php';
$dados = new Produto();
$produtos_banco = $dados->buscar();
if(isset($_POST['cadastrar'])){
    $nome_produto = $_POST['nome_produto'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    
    $produto = new Produto();
    $produto ->nome_produto = $nome_produto;
    $produto ->preco = $preco;
    $produto ->descricao = $descricao;
  
    $result = $produto->cadastrar();
    if($result){
        echo '<script> alert("produto cadastrado com sucesso!!") </script>';
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
    <link rel="stylesheet" href="styles/cadastro_produto.css">
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
                <li class="nav-item"><a href="cadastro_produto.php">Produtos</a></li>
            </ul>
            <button class="btn-default">
                <a href="produto_cadastrado.php">Produtos cadastrados</a>
            </button>
           
        </nav>
        <button class="mobile-btn">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="mobile-menu">
            <ul class="mobile-nav-list">
                <li class="nav-item"><a href="indexprincipal.php">Home</a></li>
                <li class="nav-item"><a href="indexprincipal.php"></a>Cardápio</li>
                <li class="nav-item"><a href="indexprincipal.php"></a>Avaliações</li>
                <li class="nav-item"><a href="cadastro_produto.php">Produtos</a></li>
            </ul>
        </div>
    </header>
    <h1> Cadastrar produto </h1>
    <form method="POST">
        <input type="text" name="nome_produto" id="nome_produto" placeholder="Digite o nome do produto">
        <br>
        <input type="text" name="preco" id="preco"  placeholder="Digite seu preco">
        <br>
        <input type="text" name="descricao" id="descricao"  placeholder="Digite seu descricao">
        
        <br>
        <input type="submit" name="cadastrar" value="Cadastrar">
        <br>
    </form>
    <br>
    
</body>
</html>