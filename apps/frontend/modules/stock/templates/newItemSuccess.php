<?php
include_component("commons", "leftSidebar",array("menu1"=>"NewItem;stock/newItem" ,"menu2"=>"AllItems;stock/listItem","menu3"=>"Review;stock/reviewItem"));
 use_stylesheet('stock/newItem.css'); ?>

<div id="newitem_contents">
    <div id="options"></div>

<?php include_partial('form', array('form' => $form)); ?>
</div>