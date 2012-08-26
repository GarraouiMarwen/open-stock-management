<?php use_stylesheet('default/listItem.css') ?>

<div id="items">
    <table class="items">

        <?php foreach ($data as $item): ?>
            <tr class="item">

            <a href="http://www.google.com">
                <td class="name">
                    <?php echo $item->getName() ?>
                </td>
                <td class="description">
                    <?php echo $item->getDescription() ?>
                </td>
            </a>

            </tr>
        <?php endforeach ?>

    </table>
</div>