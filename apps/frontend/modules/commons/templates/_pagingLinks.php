<?php echo link_to('First  ', 'stock/listItem?pageNo=1') ?>
<?php echo link_to('Previous  ', 'stock/listItem?pageNo=' . $simplePager->getPreviousPage()) ?>

<?php 
//have to add other numbers
?>

<?php echo link_to('Next  ', 'stock/listItem?pageNo=' . $simplePager->getNextPage()) ?>
<?php echo link_to('Last  ', 'stock/listItem?pageNo=' . $simplePager->getLastPage()) ?>