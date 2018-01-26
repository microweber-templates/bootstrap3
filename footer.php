<div id="footer" class="nodrop">
    <div id="footer-top-wrapper">
        <div class="container">
            <div class="mw-row">
                <div class="mw-col" style="width: 30%">
                    <div class="mw-col-container">
                        <module type="social_links" id="footer-socials"/>
                    </div>
                </div>
                <div class="mw-col" style="width: 70%">
                    <div class="mw-col-container">
                        <module type="menu" name="footer_menu" id="footer-navigation" template="small"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer-bottom-wrapper">
        <div class="container">
            <div id="footer-bottom">
                <div class="row">
                    <div class="col-md-8" class="edit nodrop safe-mode" field="bootstrap3_footer" rel="global">
                        <div>
                            Copyright &copy; <span class="unselectable" contentEditable="false"><?php print date('Y'); ?></span>
                            , All rightsreserved
                        </div>
                    </div>
                    <div class="col-md-4"><span class="muted pull-right"><?php print powered_by_link(); ?> | <a href="<?php print admin_url() ?>">Admin</a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>