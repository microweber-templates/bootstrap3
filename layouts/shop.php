<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: shop layout
position: 4
*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="bootstrap3_content">
    <div class="container nodrop">
        <div class="row" id="shop-products-conteiner">
            <div class="col-sm-12">
                <h1>Shop</h1>
            </div>

            <div class="col-sm-8">
                <module type="shop/products" limit="18" description-length="70"/>
            </div>

            <div class="col-sm-4">
                <?php include template_dir() . 'layouts' . DS . "shop_sidebar.php"; ?>
            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
