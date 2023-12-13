<?php
include_once("./config/config.php");

class Produtos
{

    public function pegarProduto()
    {

        $con = new Conexao;
        $select = mysqli_query($con->conectado(), "SELECT*FROM cadastro_produtos");
        return $select;
    }


    public function descricaoProduto()
    {


        $nomeProduto = explode("-", $_GET['url']);
        $ll = $nomeProduto[1];

        $nomeProduto = str_replace("_", " ", $ll);
        $con = new Conexao;
        $select = mysqli_query($con->conectado(), "SELECT*FROM cadastro_produtos Where titulo_Produto = '$nomeProduto'");
        return  $select;
    }
}
