<?php
include_component("commons", "leftSidebar",array("menu1"=>"NewItem;stock/newItem" ,"menu2"=>"AllItems;stock/listItem","menu3"=>"Review;stock/reviewItem"));
use_stylesheet('stock/listItem.css'); ?>

<div id="item_list">
    <div id="table_options">
    </div>
    
    <?php include_component('commons', 'viewList', array("container"=>$listcontainer)); ?>
    

</div>