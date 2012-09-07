<?php slot('pageinfo') ?>
  <?php echo 'All Items' ?>
<?php end_slot() ?>
<?php include_component('stock', 'itemSidebar') ?>
<?php use_stylesheet('stock/listItem.css') ?>

<div id="item_list">
    <div id="table_options">
    </div>
    <table id="item_list_table">

        <tr class="list_table_row_top">
            <td >

            </td>
            <td >
                Item Name
            </td>
            <td >
               Store
            </td>
            <td >
                Unit Price
            </td>

        </tr>

        <?php $count = 1; ?>
        <?php foreach ($data as $item): ?>

            <tr class="list_table_row">
                <td class="no">
                    <?php
                    echo $count;
                    $count++;
                    ?>
                </td>
                <td class="name">
    <?php echo $item->getName() ?>
                </td>
                <td class="nos">
    <?php echo $item->getStockAvailable() ?>
                </td>
                <td class="price">
    <?php echo $item->getSalesUnitPrice() ?>
                </td>

            </tr>

<?php endforeach ?>

    </table>
</div>