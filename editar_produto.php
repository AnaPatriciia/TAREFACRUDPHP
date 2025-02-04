<?php
require './Entity/Produto.php';
$id_recebido = $_GET['id_produto'];
//echo "ID RECEBIDO :" .$id_recebido;
if(!isset($id_recebido) or !is_numeric($id_recebido)){
    header('location: editar_produto.php');
    exit;
}
$produto = Produto::buscar_by_id($id_recebido);
$nome_produto =$produto->nome_produto;
$preco =$produto->preco;
$descricao =$produto->descricao;
// print_r($nome_produto);
// print_r($preco);
// print_r($descricao);
if(isset($_POST['editar'])){
    $nome_produto = $_POST['nome_produto'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
   
    $prod_editado = new Produto();
    $prod_editado->id_produto = $id_recebido;
    $prod_editado->nome_produto = $nome_produto;
    $prod_editado->preco = $preco;
    $prod_editado->descricao = $descricao;
    
    $result = $prod_editado->atualizar();
    if($result){
        echo '<script> alert("Atualizado com sucesso!!") </script>' ;
        echo "<meta http-equiv='refresh' content='0.5;url=cadastro_produto.php'>";
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
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/editar_produto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav class="navbar">
            <i class="fa-solid fa-burger" id="nav-logo"> food</i>
            <ul class="nav_list">
                <!-- <li class="nav-item"><a href="#home">Home</a></li>
                <li class="nav-item"><a href="#menu">Cardápio</a></li>
                <li class="nav-item"><a href="#depoimentos">Avaliações</a></li>
                <li class="nav-item"><a href="cadastro_produto.php">Produtos</a></li> -->
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
                <!-- <li class="nav-item"><a href="#menu"></a>Cardápio</li>
                <li class="nav-item"><a href="#depoimentos"></a>Avaliações</li>
                <li class="nav-item"><a href="cadastro_produto.php">Produtos</a></li> -->
            </ul>
        </div>
    </header>
    <h1>Editar Produto</h1>
    <form method="POST">
        <input name="nome_produto" id="nome_produto" type="text" placeholder="Digite o nome do produto">
        <br>
        <input name="preco" id="preco" type="text" placeholder="Digite o preco">
        <br>
        <input name="descricao" id="descricao" type="text" placeholder="Digite a descricao">
        <br>
        <input name= "editar" type="submit" value ="Editar">
    </form>
</body>
</html>