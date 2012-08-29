<?php use_stylesheet('default/listItem.css') ?>

<div id="items">
    <table class="items">

        <?php foreach ($data as $item): ?>
            <tr class="item">

            
                <td class="name"><a href="http://www.google.com">
                    <?php echo $item->getName() ?>
            </tr>            
                </td>
                <td class="description">
                    <?php echo $item->getSalesUnitPrice()  ?>
                </td>
</a>

        <?php endforeach ?>

    </table>
</div>