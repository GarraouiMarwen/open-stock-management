<?php
include_component("commons", "leftSidebar",array("menu1"=>"NewItem;stock/newItem" ,"menu2"=>"AllItems;stock/listItem","menu3"=>"Review;stock/reviewItem"));
use_stylesheet('stock/listItem.css'); ?>

<div id="listitem_contants">
    <div id="options"></div>

    
    <?php include_component('commons', 'viewList', array("container"=>$listcontainer)); ?>
    

</div>