<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_component("commons", "leftSidebar",array("menu1"=>"NewCustomer;client/newClient" ,"menu2"=>"AllCustomers;client/listClient","menu3"=>"Review;client/reviewClient"));
use_stylesheet('client/listClient.css');
?>
<div id="listclient_contents">
<div id="options"></div>

   <?php include_component('commons', 'viewList', array("container"=>$listcontainer)); ?>
    
</div>
