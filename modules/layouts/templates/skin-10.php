<?php

/*

type: layout

name: Contact form

position: 10

*/
?>


<div class="edit safe-mode nodrop" field="layout-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="mw-row">
            <div class="mw-col" style="width: 50%;">
                <div class="mw-col-container">
                    <module type="contact_form" class="contact-form"/>
                </div>
            </div>

            <div class="mw-col" style="width: 50%;">
                <div class="mw-col-container allow-drop" style="padding-left: 40px;">
                    <div>
                        <h3>Address</h3>
                        <hr>
                        <p> 10 "Professor Georgi Zlatarski" , bl. B, fl. 3,<br/>Sofia 1700,<br/>Bulgaria </p>
                        <div class="info-with-icons">
                            <span class="cloneable"><i class="fa fa-phone"></i> Phone: +1 (310) 123 4567<br/></span>
                            <span class="cloneable"><i class="fa fa-envelope"></i> help@microweber.com</span>
                        </div>
                    </div>
                    <h3>Follow Us</h3>
                    <hr>
                    <module type="social_links"/>
                </div>
            </div>

        </div>
    </div>
</div>