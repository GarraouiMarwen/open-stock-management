
<form action="<?php
        if ($form->getObject()->isNew()) {
            echo url_for('stock/createItem');
        }
        else
            echo url_for('update_item',$item);
    ?>"
      method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
    <table >

        <tbody>
<?php echo $form ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <button type="submit" value="submit" >
                        <?php
                        if ($form->getObject()->isNew())
                            echo"Save this Item";
                        else
                            echo "Update this Item";
                        ?>
                    </button>
                </td>
            </tr>
        </tfoot>
    </table>
</form>
