<?php use_stylesheet('commons/leftSidebar.css') ?>
<div id="left_sidebar">    

    <div id="left_sidebar_top">
       
    </div>

    <div id="left_sidebar_content">
        
        <ul>
            <?php
            
            $CurrentUri=sfContext::getInstance()->getRouting()->getCurrentInternalUri();
            $count = 1;
            $key = "menu" . $count;
            while (isset($$key)) {
                list($name, $link) = explode(";", $$key);
                echo "<li ".phpUtils::setID_IfActive($link, $CurrentUri)."><a href=\"" . url_for($link) . "\">" . $name . "</a></li>";
                $count++;
                $key = "menu" . $count;
            }
            ?>
        </ul>
        
    </div>

</div>
