<?php
require './Entity/Produto.php';
$produto = new Produto('','','');
$id_produto = $_GET['id_produto'];
$result = $produto->excluir($id_produto);
if($result){
    echo '<script> alert("produto excluido com sucesso!! ")  </script> ';
    echo "<meta http-equiv='refresh' content='0.5;url=produto_cadastrado.php'>";
}
else{
    echo '<script> alert("Erro ao excluir !! ")  </script> ';
}