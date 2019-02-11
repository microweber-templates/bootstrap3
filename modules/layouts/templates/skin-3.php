<?php

/*

type: layout

name: Three columns Text

description: Layout

position: 3

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

<div class="nodrop safe-mode edit <?php print $layout_classes; ?>" field="layout-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="allow-drop">
                    <h2> Heading </h2>
                    <p> Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                        porta
                        sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <module type="btn" text="View details »"/>
                </div>
            </div>

            <div class="col-md-4">
                <div class="allow-drop">
                    <h2> Heading </h2>
                    <p> Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                        porta
                        sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <module type="btn" text="View details »"/>
                </div>
            </div>

            <div class="col-md-4">
                <div class="allow-drop">
                    <h2> Heading </h2>
                    <p> Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                        porta
                        sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <module type="btn" text="View details »"/>
                </div>
            </div>
        </div>
    </div>
</div>