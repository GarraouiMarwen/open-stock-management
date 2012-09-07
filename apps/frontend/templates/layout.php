<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
       
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php use_javascript('jquery-1.8.0.min.js') ?>
        <?php use_javascript('main.js') ?>
        <?php include_javascripts() ?>
        <title>
            <?php include_slot('pageinfo')?>
        </title>
    </head>
    <body>

        <div id="main_container">

            <div id="main_header">
                <h1>Web<span class="off">app</span></h1>
                <h2>template by -jaykrish </h2>
            </div>   

            <div id="main_menu">
                <ul>

                    <li><a id="main_menu_home" href="<?php echo url_for('default/index') ?>">Home</a></li>
                    <li><a id="main_menu_sales" href="<?php echo url_for('sales/listSales') ?>">Sales</a></li>
                    <li><a id="main_menu_purchase" href="<?php echo url_for('purchase/listPurchase') ?>">Purchase</a></li>
                    <li><a id="main_menu_payment" href="<?php echo url_for('payment/listPayment') ?>">Payment</a></li>
                    <li><a id="main_menu_transport" href="<?php echo url_for('transport/listTransport') ?>">Transport</a></li>
                    <li><a id="main_menu_contacts" href="<?php echo url_for('contacts/homeContacts') ?>">Contacts</a></li>
                    <li><a id="main_menu_stock" href="<?php echo url_for('stock/listItem') ?>">Stock</a></li>
                </ul>
            </div>

            <div id="main_content">

                <?php echo $sf_content ?>

            </div>

            <div id="main_footer"><h3><a href="#">Neat web design</a></h3></div>

        </div>
    </body>
</html>
