<?php
require './Entity/Cliente.php';

$cli = new Cliente('','','');

$id = $_GET['id'];

$result = $cli->excluir($id);

if($result){
    echo '<script> alert("Cliente excluido com sucesso!! ")  </script> ';
    echo "<meta http-equiv='refresh' content='0.5;url=cliente_cadastrado.php'>";
}
else{
    echo '<script> alert("Erro ao excluir !! ")  </script> ';

}
