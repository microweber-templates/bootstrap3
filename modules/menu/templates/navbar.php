<?php

/*

type: layout

name: Navbar

description: Navigation bar

*/

?>


<?php
$menu_filter['ul_class'] = 'nav navbar-nav';
$menu_filter['ul_class_deep'] = 'dropdown-menu';
$menu_filter['li_class'] = 'dropdown';

$mt = menu_tree($menu_filter);

if ($mt != false) {
    print ($mt);
} else {
    print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
}
?>