<!--Processamento dos produtos pelo servidor-->

<head>
<link rel="stylesheet" href="<?php echo url_site ?>public/css/nav_and_footer.css">
    <link rel="stylesheet" href="<?php echo url_site ?>public/css/descricao_produto.css">
    <script src="<?php echo url_site ?>public/js/buttom_quant.js" defer></script>
</head>

<?php
include_once("./public/templates/template_menu.php");



$classCoontrollerDesc = new Controller_produtos;
$descProdutos = $classCoontrollerDesc->controllerDescricao();

$produto = mysqli_fetch_assoc($descProdutos);

?>
<section class="infor_produto">
    <div class="column_1">
        <div class="container_img">
            <img id="img_principal" class="img_produto" src="<?php echo url_site ?>public/img/<?php echo $produto['img1'] ?>">
        </div>
        <div class="img_miniaturas">
            <button type="button" class="btn_l_mini" onclick="esquerda()">&lt;</button>
            <img src="<?php echo url_site ?>public/img/<?php echo $produto['img1'] ?>" id="img1">
            <img src="<?php echo url_site ?>public/img/<?php echo $produto['img2'] ?>" id="img2">
            <img src="<?php echo url_site ?>public/img/<?php echo $produto['img3'] ?>" id="img3">
            <button type="button" class="btn_d_mini" onclick="direita()">&gt;</button>
        </div>
    </div>

    <div class='column_2'>
        <?php
        echo "<h3 class='titulo'>" . $produto['titulo_Produto'] . "</h3>";
        echo "<p class='descricao'> Descrição: " . $produto['descricao_Produto'] . "<p>";
        ?>
    </div>
    <div class="column_3">
        <form action="carrinho.php" class="formulario">
            <div>
                <label for="">Tamanho</label>
                <select name="" id="">
                    <option value="">P</option>
                    <option value="">M</option>
                    <option value="">G</option>
                    <option value="">GG</option>
                </select>
            </div>


            <div class="quant">
                <label for="">Quantidade</label>
                <button type="button" id="btn_l" onclick="diminuir()">&lt</button>
                <p id="par_quant">1</p>
                <button type="button" id="btn_d" onclick="aumentar()">&gt</button>
            </div>

            <button type="submit" class="btn-carrinho">Adicionar ao carrinho</button>

        </form>
    </div>


</section>

</main>