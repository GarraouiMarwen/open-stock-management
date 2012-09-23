<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 * setup left sidebar with NewSales, AllSales," SALESID", Review menus with their links
 */
include_component("commons", "leftSidebar", array("menu1" => "NewSales;sales/newSales", "menu2" => "AllSales;sales/listSales", "menu3" => "abcd;sales/editSales", "menu4" => "Review;sales/reviewSales"));


echo 'TODO selected    sales';
?>
