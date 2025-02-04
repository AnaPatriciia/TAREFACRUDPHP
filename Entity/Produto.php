<?php
require './DB/Database.php';
class Produto{
    public int $id_produto;
    public string $nome_produto;
    public string $preco;
    public string $descricao;
   
    public function cadastrar(){
        $db = new Database('produto');
        $result =  $db->insert(
                            [
                            'nome_produto' => $this->nome_produto,
                            'preco' => $this->preco,
                            'descricao' =>$this->descricao,
                            
                            ]
                        );
        
        if($result) {
            return true;
        }
        else{
            return false;
        }
    }
    public function atualizar(){
            return (new Database('produto'))->update('id_produto ='.$this->id_produto,[
                'nome_produto' => $this->nome_produto,
                'preco' => $this->preco,
                'descricao' =>$this->descricao,
               
        ]);
    }
    public static function buscar($where=null,$order=null,$limit=null){
        //FETCHALL
        return (new Database('produto'))->select()->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function buscar_by_id($id_produto){
        //FETCHALL
        return (new Database('produto'))->select($id_produto)->fetchObject(self::class);
    }
    public function excluir($id_produto){
        return (new Database('produto'))->delete('id_produto = '.$id_produto);
    }
}