<?php

/*

type: layout

name: Products list

description: Layout

position: 6

*/
?>

<div class="nodrop safe-mode edit" field="layout-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="mw-row">
            <div class="mw-col" style="width:33.33%">
                <div class="mw-col-container">
                    <div class="element">
                        <hr class="visible-desktop column-hr">
                    </div>
                </div>
            </div>
            <div class="mw-col" style="width:33.33%">
                <div class="mw-col-container">
                    <h2 align="center">
                        <?php _e("Latest Products"); ?>
                    </h2>
                </div>
            </div>
            <div class="mw-col" style="width:33.33%">
                <div class="mw-col-container">
                    <div class="element">
                        <hr class="visible-desktop column-hr">
                    </div>
                </div>
            </div>
        </div>

        <module data-type="shop/products" data-limit="3" id="home-products"/>
    </div>
</div>