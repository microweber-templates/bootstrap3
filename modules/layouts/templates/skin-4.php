<?php

/*

type: layout

name: Headings

description: Layout

position: 4

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

<div class="nodrop safe-mode edit <?php print $layout_classes; ?>" field="layout-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="allow-drop">
            <h3 align="center" class="symbol">Powerful &nbsp;&amp;&nbsp; User Friendly &nbsp;Content Management System &nbsp;of &nbsp;New Generation</h3>
            <h4 align="center">with rich PHP and JavaScript API</h4>
            <br>
        </div>
    </div>
</div>