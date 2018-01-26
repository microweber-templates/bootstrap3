<div class="edit" field="bootstrap3_blog_sidebar" rel="inherit">
    <module type="search" template="autocomplete"/>

    <h4 class="element sidebar-title">Recent posts</h4>
    <div class="sidebar-box">
        <module type="posts" template="sidebar" limit="5" data-show="thumbnail,title,description,created_at" hide-paging="y" title-length="40" description-length="50"/>
    </div>

    <h4 class="element sidebar-title">Blog Categories</h4>

    <div class="sidebar-box">
        <module type="categories"/>
    </div>

    <h4 class="element sidebar-title">Other pages</h4>

    <div class="sidebar-box">
        <module type="pages"/>
    </div>
</div>
