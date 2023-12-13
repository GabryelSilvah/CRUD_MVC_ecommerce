<?php
include_once("./App/model/Model_produtos.php");

class Controller_produtos
{


    public function validarProdutos()
    {
        $model_produtos = new Produtos;

        return $model_produtos->pegarProduto();
    }


    public function controllerDescricao()
    {
          
        $model_produtos = new Produtos;
        return  $model_produtos->descricaoProduto();
    }
}
