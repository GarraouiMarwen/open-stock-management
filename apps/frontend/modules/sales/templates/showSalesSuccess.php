<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of showSalesSuccess
 *
 * @author jaykrish
 */

include_component("commons", "leftSidebar", array("menu1" => "NewSales;sales/newSales", "menu2" => "AllSales;sales/listSales", "menu3" => "Review;sales/reviewSales"));
//use_stylesheet('sales/showSales.css');

?>
<div><?php
  echo $salesorder->getDateBegin();
echo "ok";   ?>
</div>

