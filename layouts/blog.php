<?php

/*

type: layout
content_type: dynamic
name: Blog
position: 3
description: Blog

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="bootstrap3_content">
    <div class="container nodrop" id="blog-container">
        <div class="row">
            <div class="col-md-9 " id="blog-main">
                <h2>My blog</h2>

                <p class="p0 element">
                    This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the
                    site. Get creative, Make Web.
                </p>
                <module data-type="posts"/>
            </div>

            <div class="col-md-3" id="blog-sidebar">
                <?php include_once "blog_sidebar.php"; ?>
            </div>
        </div>
    </div>
</div>
<?php include template_dir() . "footer.php"; ?>
