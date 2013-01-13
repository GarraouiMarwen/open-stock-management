<?php
include_component("commons", "leftSidebar",array("menu1"=>"NewItem;stock/newItem" ,"menu2"=>"AllItems;stock/listItem","menu3"=>"Review;stock/reviewItem"));
 use_stylesheet('stock/editItem.css') ?>

<div id="edititem_contents">
    <div id="options"></div>

<?php include_partial('form', array('form' => $form,'item' => $item)); ?>

    
</div>