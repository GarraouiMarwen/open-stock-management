<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 * setup left sidebar with NewPurchase, AllPurchases," PURCHASEID", Review menus with their links
 */
include_component("commons", "leftSidebar", array("menu1" => "NewPurchase;purchase/newPurchase", "menu2" => "AllPurchases;purchase/listPurchase", "menu3" => "abcd;purchase/editPurchase", "menu4" => "Review;purchase/reviewPurchase"));


echo 'TODO selected Purchases';
?>
