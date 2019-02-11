<?php

/*

type: layout

name: Blog Posts

description: Layout

position: 5

*/
?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div class="nodrop safe-mode edit <?php print $layout_classes; ?>" field="layout-skin-5-<?php print $params['id'] ?>" rel="module">
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
                        <?php _e("Latest Posts"); ?>
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

        <module data-type="posts" data-limit="3" id="home-posts" data-description-length="100" data-show="thumbnail,title,created_at,read_more,description" data-template="columns"/>
    </div>
</div>