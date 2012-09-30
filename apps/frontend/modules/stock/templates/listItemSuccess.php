<?php slot('pageinfo') ?>
  <?php echo 'All Items' ?>
<?php end_slot() ?>
<?php include_component('stock', 'itemSidebar'); ?>
<?php use_stylesheet('stock/listItem.css'); ?>

<div id="item_list">
    <div id="table_options">
    </div>
    
    <?php include_component('commons', 'viewList',array("container"=>$list)); ?>
    

</div>