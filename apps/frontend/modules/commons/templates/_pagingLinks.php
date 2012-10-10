<?php use_stylesheet('commons/pagingLinks.css'); ?>

<?php // echo link_to('First  ', 'stock/listItem?pageNo=1') ?>
<?php // echo link_to('Previous  ', 'stock/listItem?pageNo=' . $simplePager->getPreviousPage()) ?>

<?php 
//have to add other numbers
?>
<?php echo sfConfig::get('sf_web_dir') . '/images/first.png' ?>
<?php // echo link_to('Next  ', 'stock/listItem?pageNo=' . $simplePager->getNextPage()) ?>
<?php // echo link_to('Last  ', 'stock/listItem?pageNo=' . $simplePager->getLastPage()) ?>


<div class="pagination">
    <a href="<?php echo url_for('stock/listItem') ?>?pageNo=1">
      <img src="<?php echo '/' . sfConfig::get('sf_web_dir') . '/images/first.png' ?>" alt="First page" />
    </a>
 
    <a href="<?php echo url_for('stock/listItem') ?>?pageNo=<?php echo $simplePager->getPreviousPage() ?>">
      <img src="/home/stockDev/web/images/previous.png" alt="Previous page" title="Previous page" />
    </a>
 
    <?php foreach ($simplePager->getLinks() as $page): ?>
      <?php if ($page == $simplePager->getPage()): ?>
        <?php echo $page ?>
      <?php else: ?>
        <a href="<?php echo url_for('stock/listItem') ?>?pageNo=<?php echo $page ?>"><?php echo $page ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
 
    <a href="<?php echo url_for('stock/listItem') ?>?pageNo=<?php echo $simplePager->getNextPage() ?>">
      <img src="../web/images/next.png" alt="Next page" title="Next page" />
    </a>
 
    <a href="<?php echo url_for('stock/listItem') ?>?pageNo=<?php echo $simplePager->getLastPage() ?>">
      <img src="../web/images/last.png" alt="Last page" title="Last page" />
    </a>
  </div>