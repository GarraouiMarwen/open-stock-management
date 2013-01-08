<?php
include_component("commons", "leftSidebar", array("menu1" => "NewCustomer;client/newClient", "menu2" => "AllCustomers;client/listClient", "menu3" => "Review;client/reviewClient"));
use_stylesheet('client/showClient.css')
?>
<form action =<?php echo url_for('client/editClient?id='.$client->getId())?>>
<div id="showclient_contents">
    <div id="options"></div>
    <table>

        <tbody>
            <tr> <th>Customer Name :</th><td><?php echo $client->getName(); ?></td></tr>
            <tr></tr>
            <tr><th>Address </th><td> <?php echo $client->getAddress(); ?></td></tr>
            <tr><th>TP. HP </th><td> <?php echo $client->getTpHp(); ?></td></tr>
            <tr><th> TP. Home </th><td> <?php echo $client->getTpHome(); ?></td></tr>
            <tr><th>Notes </th><td > <?php echo $client->getNotes(); ?></td></tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <button type="submit" value="submit" >Edit this Customer..</button>
                </td>
            </tr>
        </tfoot>



    </table>

</div>
</form>