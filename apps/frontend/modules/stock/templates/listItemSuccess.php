<?php include_component('stock', 'itemSidebar') ?>
<?php use_stylesheet('stock/listItem.css') ?>

<div id="item_list">
    <table class="item_list_table">

        <?php foreach ($data as $item): ?>
            <tr class="list_table_row">


                <td class="name"><a href="http://www.google.com">
                        <?php echo $item->getName() ?>
                </td>
                </tr>
            <tr>            
            <td class="description">
                <?php echo $item->getSalesUnitPrice() ?>
            </td>
            </tr>

        <?php endforeach ?>

    </table>
</div>