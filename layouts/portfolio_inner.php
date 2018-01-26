<?php include template_dir() . "header.php"; ?>
<div class="edit" rel="content" field="bootstrap3_content">
    <div class="container nodrop">
        <!-- Portfolio Item Heading -->
        <div class="row" id="portfolio-heading">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <module type="pictures" template="slider" rel="content"/>
            </div>

            <div class="col-md-4">
                <div class="edit" field="content_body" rel="content">
                    <h3>Project Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et,
                        interdum
                        nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                    <h3>Project Details</h3>
                    <ul>
                        <li>Lorem Ipsum</li>
                        <li>Dolor Sit Amet</li>
                        <li>Consectetur</li>
                        <li>Adipiscing Elit</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>
        </div>

        <module type="posts" related="true" template="portfolio"/>
    </div>
</div>
<?php include template_dir() . "footer.php"; ?>
