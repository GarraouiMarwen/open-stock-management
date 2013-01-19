<?php
include_component("commons", "leftSidebar", array("menu1" => "NewSupplier;seller/newSeller", "menu2" => "AllSuppliers;seller/listSeller", "menu3" => "Review;seller/reviewSeller"));
use_stylesheet('seller/showSeller.css')
?>

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
                    <form action = "<?php echo url_for('delete_seller', $seller, array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>" method ="post">
                        <input type="hidden" name="sf_method" value="delete" />
                        <button type="submit" value="submit" >Remove this supplier..</button>
                    </form>  
                    
                    <form action = "<?php echo url_for('edit_seller', $seller) ?>">
                        <button type="submit" value="submit" >Edit this supplier..</button>
                    </form>  
                </td>
            </tr>
        </tfoot>
    </table>

</div>
