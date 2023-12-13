<head>
    <link rel="stylesheet" href=" <?php echo url_site ?>public/css/produtos.css">
    <link rel="stylesheet" href="<?php echo url_site ?>public/css/nav_and_footer.css">
</head>

<?php

include_once("./public/templates/template_menu.php");
include_once("./App/controller/controller_produtos.php");

$produto = new Controller_produtos;
$dadosProdutos = $produto->validarProdutos();

?>
<section class="container_produto">
    <?php
    while ($valor = mysqli_fetch_assoc($dadosProdutos)) {
        $parametro = str_replace(" ","-",$valor['titulo_Produto']);
    ?>

        <a href="<?php echo url_site ?>ecommerce/descricao/<?php echo $parametro ?>">
            <div class="produto">

                <img class="img_produto" src=" <?php echo url_site ?>public/img/<?php echo $valor['img1'] ?>">


                <?php
                echo "<h3>" . $valor['titulo_Produto'] . "</h3>";

                ?>
            </div>
        </a>

    <?php
    }
    ?>
</section>

<?php

include_once("./public/templates/tamplate_footer.php");

?>