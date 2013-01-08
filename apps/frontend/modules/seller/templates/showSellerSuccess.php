<?php
include_component("commons", "leftSidebar", array("menu1" => "NewSupplier;seller/newSeller", "menu2" => "AllSuppliers;seller/listSeller", "menu3" => "Review;seller/reviewSeller"));
use_stylesheet('seller/showSeller.css')
?>
<form action =<?php echo url_for('seller/editSeller?id='.$seller->getId())?>>
<div id="showseller_contents">
    <div id="options"></div>
    <table>

        <tbody>
            <tr> <th>Supplier Name :</th><td><?php echo $seller->getName(); ?></td></tr>
            <tr></tr>
            <tr><th>Address </th><td> <?php echo $seller->getAddress(); ?></td></tr>
            <tr><th>TP. HP </th><td> <?php echo $seller->getTpHp(); ?></td></tr>
            <tr><th> TP. Home </th><td> <?php echo $seller->getTpHome(); ?></td></tr>
            <tr><th>Notes </th><td > <?php echo $seller->getNotes(); ?></td></tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <button type="submit" value="submit" >Edit this Supplier..</button>
                </td>
            </tr>
        </tfoot>



    </table>

</div>
</form>