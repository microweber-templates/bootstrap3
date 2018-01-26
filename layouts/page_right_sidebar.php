<?php

/*

type: layout
content_type: static
name: Page with sidebar
position: 10

description: Page with right sidebar

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="bootstrap3_content">
    <div class="container nodrop">
        <div class="row">
            <div class="col-sm-8">
                <h2 class="edit" field="title" rel="content">New page</h2>
                <div class="edit" field="content" rel="content">
                    <p>You can edit this text</p>
                </div>
            </div>

            <div class="col-sm-3 col-sm-offset-1">
                <div class="edit" field="bootstrap3_page_sidebar" rel="inherit">
                    <div class="well">
                        <h3>Pages</h3>
                        <module type="pages"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include template_dir() . "footer.php"; ?>
