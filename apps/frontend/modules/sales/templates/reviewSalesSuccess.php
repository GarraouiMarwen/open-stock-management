<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



/*
 * setup left sidebar with NewSales, AllSales, Review menus with their links
 */
include_component("commons", "leftSidebar", array("menu1" => "NewSales;sales/newSales", "menu2" => "AllSales;sales/listSales", "menu3" => "Review;sales/reviewSales"));


echo 'testing reviewSales. OK';
?>
