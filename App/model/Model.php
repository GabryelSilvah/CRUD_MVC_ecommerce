<?php
include_once("./config/config.php");

class Model
{

    public function selectDB($nomeTabela)
    {
        $dados = new Conexao;

        $consulta = mysqli_query($dados->conectado(), "SELECT*FROM $nomeTabela");
        return $consulta;
    }

    public function insertDB($titulo, $descricao, $img1, $img2, $img3, $estoque)
    {
        $dados = new Conexao;
        $insert = mysqli_query(
            $dados->conectado(),
            "INSERT INTO cadastro_produtos(titulo_Produto,descricao_Produto,img1,img2,img3,quantEstoque)
                                VALUE('$titulo','$descricao','$img1','$img2'.'$img3',$estoque)"
        );
        return $insert;
    }

    //produto destaque
    public function destaques()
    {
        $produtosValidados = array();
        $nomeDestaque = array();
        $dados = new Conexao;
        $destaques = mysqli_query($dados->conectado(), "SELECT produtosDestaque FROM destaque");

        foreach ($destaques as $rr => $valor) {
            array_push($nomeDestaque, $valor);
        }

        foreach ($nomeDestaque as $tt => $valor) {

            $produtos = mysqli_query($dados->conectado(), "SELECT*FROM cadastro_produtos WHERE titulo_Produto ='$valor[produtosDestaque]'");
            array_push($produtosValidados, mysqli_fetch_assoc($produtos));
        }

        return  $produtosValidados;
    }
}

