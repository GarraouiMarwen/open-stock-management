<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_component("commons", "leftSidebar",array("menu1"=>"NewSupplier;seller/newSeller" ,"menu2"=>"AllSuppliers;seller/listSeller","menu3"=>"Review;seller/reviewSeller"));
use_stylesheet('seller/listSeller.css');
?>
<div id="listseller_contents">
<div id="options"></div>

   <?php include_component('commons', 'viewList', array("container"=>$listcontainer)); ?>
    
</div>
