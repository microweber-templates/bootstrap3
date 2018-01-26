<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="bootstrap3_content">
    <div class="container" id="blog-container">
        <div id="blog-content-<?php print CONTENT_ID; ?>">
            <div class="row">
                <div class="col-sm-9" id="blog-main-inner">
                    <h3 class="edit" field="title" rel="content">Page Title</h3>
                    <module data-type="pictures" data-template="slider" rel="content"/>
                    <div class="edit" field="content_body" rel="content">
                        <div class="element">
                            <p align="justify">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere
                                on
                                the site. Get creative, Make Web.</p>
                        </div>
                    </div>

                    <module data-type="comments" data-template="default" data-content-id="<?php print CONTENT_ID; ?>"/>
                </div>

                <div class="col-sm-3" id="blog-sidebar">
                    <?php include template_dir() . "layouts/blog_sidebar.php"; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
