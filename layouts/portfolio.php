<?php

/*

type: layout
content_type: dynamic
name: Portfolio
position: 30
description: Portfolio

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="bootstrap3_content">
    <div class="container nodrop" id="portfolio-holder-container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>

        <module type="posts" template="portfolio"/>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
