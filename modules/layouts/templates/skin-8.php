<?php

/*

type: layout

name: Title

position: 8

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

<div class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="element section-title">
            <div class="mw-row">
                <div class="mw-col" style="width:40%">
                    <div class="mw-col-container">
                        <div class="element">
                            <hr class="visible-desktop column-hr">
                        </div>
                    </div>
                </div>
                <div class="mw-col" style="width:20%">
                    <div class="mw-col-container">
                        <h2 align="center">Page Title</h2>
                    </div>
                </div>
                <div class="mw-col" style="width:40%">
                    <div class="mw-col-container">
                        <div class="element">
                            <hr class="visible-desktop column-hr">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>