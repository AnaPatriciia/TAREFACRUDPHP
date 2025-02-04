<?php

require './Entity/Produto.php';


//ESSAS VARIÁVEIS IRAO ARMAZENAR AS INFORMAÇOES VINDAS DO HTML, POR EXEMPLO
//PREENCHIMENTO DE UM FORMULÁRIO, TRATANDO
$nome_produto = "";
$preco = "";
$descricao = '';


//INSTANCIANDO UM OBJETO DO TIPO CLIENTE, UM CLIENTE TEM ATRIBUTOS NOME,CPF,EMAIL
$prod = new Produto($nome_produto,$preco,$descricao);

//CHAMA O MÉTODO PARA CADASTRAR ESSE prodENTE QUE FOI INSTANCIADO
$prod->cadastrar();

//RESULT VARIÁVEL QUE CONTÉM UM ARRAY RETORNADO DO BANCO DE DADOS
$result = $prod->buscar();

foreach ($result as $produto){
    echo "<br> " .$produto['id_produto'] . ' ' .$produto['nome_produto'] ;
}