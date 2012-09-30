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
        <?php foreach ($listContents as $item): ?>

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
        <?php
        endforeach;
        if ($count == 1) {
            echo "Your contats list is empty (ie: database have no 'item' recordrs. First put some entry and then check :P)";
        }
        ?>
    </table>
</div>
