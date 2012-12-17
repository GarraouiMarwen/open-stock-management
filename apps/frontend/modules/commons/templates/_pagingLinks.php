<?php use_stylesheet('commons/pagingLinks.css'); ?>

<div class="pagination">
    <table id="pagination_table">
        <tr>

            <?php $currentURL = sfContext::getInstance()->getRouting()->getCurrentInternalUri(); ?>
            <td>
                <a href="<?php echo url_for($currentURL) ?>?pageNo=1"><< </a>

            <td>    
                <a href="<?php echo url_for($currentURL) ?>?pageNo=<?php echo $simplePager->getPreviousPage() ?>">< </a>
            </td>


       <?php foreach ($simplePager->getLinks() as $page): ?>
                <?php if ($page == $simplePager->getPage()): ?>
                    <?php echo '<td>'. $page .'</td>' ?>
                <?php else: ?>
                <a href="<?php echo url_for($currentURL) ?>?pageNo=<?php echo '<td>' . $page . '</td>' ?>"><?php echo '<td>' . $page . '</td>' ?></a>
            <?php endif; ?>
        <?php endforeach; ?>

        <td>
            <a href="<?php echo url_for($currentURL) ?>?pageNo=<?php echo $simplePager->getNextPage() ?>">></a>
        </td>

        <td>
            <a href="<?php echo url_for($currentURL) ?>?pageNo=<?php echo $simplePager->getLastPage() ?>">>></a> 
        </td>

        </tr>
    </table>
</div>