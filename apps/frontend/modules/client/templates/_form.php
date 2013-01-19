
<form action="<?php
if ($form->getObject()->isNew()) {
    echo url_for('client/createClient');
}
else
    echo url_for('update_client', $client);
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
                            echo"Save this Customer";
                        else
                            echo "Update this Customer";
                        ?>
                    </button>
                </td>
            </tr>
        </tfoot>
    </table>
</form>
