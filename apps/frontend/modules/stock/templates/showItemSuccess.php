<?php
include_component("commons", "leftSidebar", array("menu1" => "NewItem;stock/newItem", "menu2" => "AllItems;stock/listItem", "menu3" => "Review;stock/reviewItem"));
use_stylesheet('stock/showItem.css')
?>

<div id="showitem_contents">

    <div id="options"></div>
    <table>

        <tbody>
            <tr> <th>Item :</th><td><?php echo $item->getName(); ?></td></tr>
            <tr></tr>
            <tr><th>Description </th><td> <?php echo $item->getDescription(); ?></td></tr>
            <tr><th>Available Stock </th><td> <?php echo $item->getStockAvailable(); ?></td></tr>
            <tr></tr>
            <tr><th>Sales Price </th><td class="currency"> <?php echo $item->getSalesUnitPrice(); ?></td></tr>
            <tr><th>Purchase Price </th><td class="currency"> <?php echo $item->getPurchaseUnitPrice(); ?></td></tr>
            <tr><th>Unit Profit</th><td class="currency"> <?php echo $item->getSalesUnitPrice() - $item->getPurchaseUnitPrice(); ?></td></tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <form action = "<?php echo url_for('delete_item', $item, array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>" method ="post">
                        <input type="hidden" name="sf_method" value="delete" />
                        <button type="submit" value="submit" >Remove this item..</button>
                    </form>  

                
                    <form action = "<?php echo url_for('edit_item', $item) ?>">
                        <button type="submit" value="submit" >Edit this item..</button>
                    </form>  

                </td>
            </tr>
        </tfoot>
    </table>

</div>


