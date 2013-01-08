<?php use_stylesheet('commons/pagingLinks.css'); ?>

<div class="pagination">
    <ul>
        <tr>

            <?php $currentURL = sfContext::getInstance()->getRouting()->getCurrentInternalUri(); ?>
            <li>
                <a href="<?php echo url_for($currentURL) ?>?pageNo=1"><< </a>
            </li>
            <li>    
                <a href="<?php echo url_for($currentURL) ?>?pageNo=<?php echo $simplePager->getPreviousPage() ?>">< </a>
            </li>


       <?php foreach ($simplePager->getLinks() as $page): ?>
                <?php if ($page == $simplePager->getPage()): ?>
                    <?php echo '<li><a id="current">'. $page .'</a></li>' ?>
                <?php else: ?>
            <li><a href="<?php echo url_for($currentURL) ?>?pageNo=<?php echo  $page  ?>"><?php echo  $page  ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>

        <li>
            <a href="<?php echo url_for($currentURL) ?>?pageNo=<?php echo $simplePager->getNextPage() ?>">></a>
        </li>

        <li>
            <a href="<?php echo url_for($currentURL) ?>?pageNo=<?php echo $simplePager->getLastPage() ?>">>></a> 
        </li>

        </ul>
</div>