<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



/*
 * setup left sidebar with NewSales, AllSales, Review menus with their links
 */
include_component("commons", "leftSidebar", array("menu1" => "NewSales;sales/newSales", "menu2" => "AllSales;sales/listSales", "menu3" => "Review;sales/reviewSales"));
 use_stylesheet('sales/newSales.css');

?>
<div id="newsales_contents">
    <div id="options"></div>

<?php include_partial('form', array('form' => $form)); ?>
</div>