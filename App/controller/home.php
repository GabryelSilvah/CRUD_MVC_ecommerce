<?php

class Ecommerce
{

    public function  home()
    {
        require_once("./app/view/home.php");       
    }

    public function  produtos()
    {
        require_once("./app/view/produtos.php");
    }

    public function  descricao()
    {
        require_once("./app/view/descricao.php");
    }

    public function  servicos()
    {
        echo "Serviços";
    }

    public function  atendimento()
    {
        echo "Atendimento";
    }

    public function  carrinho()
    {
        echo "Carrinho";
    }

}
