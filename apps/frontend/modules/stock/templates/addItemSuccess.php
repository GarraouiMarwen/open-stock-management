<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * Template for addItemAction
 * 
 */
foreach ($data as $item) {
    echo $item->getName(). '<br /> ' ;
    echo $item->getDescription(). '<br /> ';
}
?>
