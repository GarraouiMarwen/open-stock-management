<?php
include_component("commons", "leftSidebar", array("menu1" => "NewItem;stock/newItem", "menu2" => "AllItems;stock/listItem", "menu3" => "Review;stock/reviewItem"));
use_stylesheet('stock/showItem.css')
?>
<form action =<?php echo url_for('stock/editItem?id='.$item->getId())?>>
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
                    <button type="submit" value="submit" >Edit this item..</button>
                </td>
            </tr>
        </tfoot>



    </table>

</div>
    </form>