<?php
require_once("./public/templates/template_menu.php");
?>

<head>
    <link rel="stylesheet" href=" <?php echo url_site ?>public/css/style.css">
</head>

<section class="container_img_principal">
    <img class="img_principal" src=" <?php echo url_site ?>public/img/img_painel.jpg" alt="imagem de roupas em loja">
</section>

<section class="oferta">
    <p id="paragrafo1">Destaques</p>

    <div class="container_produtos">

        <?php
        $produto = new Controller;

        $produto1 = $produto->controllerDestaque();

        foreach ($produto1 as $tt => $valor) {

          
        ?> <!--Produto-->
            <a href="<?php echo url_site ?>ecommerce/descricao/<?php echo  str_replace(" ","-", $valor['titulo_Produto']) ?>">
                <div class="produto">
                    <img class="img_produto" src="<?php echo url_site ?>public/img/<?php echo $valor['img1']  ?>" alt="">

                    <p id="paragrafo2"><?php echo $valor['titulo_Produto']  ?></p>
                </div>
            </a>

        <?php
        }
        ?>
    </div>

</section>

<?php
include("./public/templates/tamplate_footer.php");
?>