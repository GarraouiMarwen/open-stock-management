<?php include_component('stock', 'itemSidebar') ?>
<?php use_stylesheet('stock/addItem.css') ?>

<div id="item_add">
<?php
foreach ($data as $item) {
    echo $item->getName(). '<br /> ' ;
    echo $item->getDescription(). '<br /> ';
}
?>
</div>