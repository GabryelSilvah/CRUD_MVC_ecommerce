<?php
define("LOCAL", "localhost");
define("USER", "root");
define("PASS", "");
define("DBNAME", "ecommerce");
define("url_site", "http://localhost/app_ecommerce/");



class Conexao 
{

    public function conectado()
    {
        global $mysqli;
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bancoDados = "ecommerce";
        $mysqli = new mysqli($servidor, $usuario, $senha, $bancoDados);
        return $mysqli;
    }
}


// $servidor = "localhost";
// $usuario = "root";
// $senha = "";
// $bancoDados = "ecommerce";

// $mysqli = new PDO("mysql:$servidor;dbname= $bancoDados", "$usuario", "$senha");