<?php
use_stylesheet('sales/salesorderheader.css');
include_javascripts_for_form($salesorderform);
include_stylesheets_for_form($salesorderform);
?>
<form action="<?php
if ($salesorderform->getObject()->isNew()) {
    echo url_for('sales/createSales');
}
else
    echo url_for('update_sales', $salesorderform);
?>"
      method="post" <?php $salesorderform->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

    <?php if (!$salesorderform->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table class="order_info">
        <tr >
            <th><?php echo $salesorderform['client_id']->renderLabel() ?>:</th>
            <td>
                <?php echo $salesorderform['client_id']->renderError() ?>
                <?php echo $salesorderform['client_id'] ?>
            </td>
            <th><?php echo $salesorderform['date_begin']->renderLabel() ?>:</th>
            <td>
                <?php echo $salesorderform['date_begin']->renderError() ?>
                <?php echo $salesorderform['date_begin'] ?>
            </td>
            <th><?php echo $salesorderform['date_end']->renderLabel() ?>:</th>
            <td>
                <?php echo $salesorderform['date_end']->renderError() ?>
                <?php echo $salesorderform['date_end'] ?>
            </td>
            <th><?php echo $salesorderform['order_status']->renderLabel() ?>:</th>
            <td>
                <?php echo $salesorderform['order_status']->renderError() ?>
                <?php echo $salesorderform['order_status'] ?>
            </td>
        </tr>
    </table>
    <table class="order_details">
        <tr >
            <th><?php echo $salesorderform['total_price']->renderLabel() ?>:</th>
            <td>
                <?php echo $salesorderform['total_price']->renderError() ?>
                <?php echo $salesorderform['total_price'] ?>
            </td>
        </tr>
        <tr >
            <th><?php echo $salesorderform['total_paid']->renderLabel() ?>:</th>
            <td>
                <?php echo $salesorderform['total_paid']->renderError() ?>
                <?php echo $salesorderform['total_paid'] ?>
            </td>
        </tr>
        <tr >
            <th><?php echo $salesorderform['total_due']->renderLabel() ?>:</th>
            <td>
                <?php echo $salesorderform['total_due']->renderError() ?>
                <?php echo $salesorderform['total_due'] ?>
            </td>
        </tr>
    </table

</table>
<table class="order_details">
    <tr >
        <th>Items Total:</th>
        <td><!--have to linke-->
           todo
        </td>
    </tr>
    <tr >
        <th>Transported:</th>
        <td><!--have to linke-->
        todo
        </td>
    </tr>
    <tr >
        <th>Issued:</th><!--have to linke-->
        <td>
        todo
        </td>
    </tr>
</table>
<table class="order_details">
    <tr >
        <th> <?php echo $salesorderform['notes']->renderLabel() ?>:</th>
        <td><!--have to linke-->
            <?php echo $salesorderform['notes']->renderError() ?>
            <?php echo $salesorderform['notes'] ?>
        </td>
    </tr>
</table>
<table class="detail_submit">
    <tr>
        <td colspan="2">
            <button type="submit" value="submit" >Create Sales Order</button>
        </td>
    </tr>
</table>
</form>
