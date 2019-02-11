<?php

/*

type: layout

name: CLEAN CONTAINER - FLUID

position: 1

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

<div class="edit clean-container nodrop <?php print $layout_classes; ?>" field="layout-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid allow-drop">
        <div class="mw-row">
            <div class="mw-col" style="width:100%">
                <div class="mw-col-container">
                    <div class="mw-empty"></div>
                </div>
            </div>
        </div>
    </div>
</div>