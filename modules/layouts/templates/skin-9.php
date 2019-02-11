<?php

/*

type: layout

name: Google maps

position: 9

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

<div class="edit safe-mode nodrop <?php print $layout_classes; ?>" field="layout-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="google_maps"/>
        <br/>
        <div class="element page-post-content">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere
            on the site. Get creative, Make Web.
        </div>
        <br/>
    </div>
</div>