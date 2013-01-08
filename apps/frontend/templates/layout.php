<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
    <head>        
        <link rel="shortcut icon" href="/favicon.ico" />

        <?php
        //php inclutions 
        include_http_metas();
        include_metas();
        include_stylesheets();
        include_javascripts();
        use_javascript('js/jquery-1.8.0.min.js');
        use_javascript('main.js');
        

        //  get the module name
        $pageOn = ($sf_params->get("module"));
        ?>

        <!--get the current page name for title-->
        <title>
            <?php include_slot('pageinfo'); ?>
        </title>

    </head>
    <body>

        <div id="main_container">

            <div id="main_header">
                <h1>The Client Company Name</h1>
                <h2> <span class="off"> Arima </span>Retail Management System</h2>
                <div id="txt">Clock by JavaScript</div>
            </div>   

            <div id="main_menu">
                <ul>

                    <li><a <?php echo phpUtils::setID_IfActive('default', $pageOn) ?> href="<?php echo url_for('default/progressHome') ?>">Home</a></li>
                    <li><a <?php echo phpUtils::setID_IfActive('sales', $pageOn) ?> href="<?php echo url_for('sales/listSales') ?>">Sales</a></li>
                    <li><a <?php echo phpUtils::setID_IfActive('purchase', $pageOn) ?> href="<?php echo url_for('purchase/listPurchase') ?>">Purchase</a></li>
                    <li><a <?php echo phpUtils::setID_IfActive('payment', $pageOn) ?> href="<?php echo url_for('payment/listPayment') ?>">Payment</a></li>
                    <li><a <?php echo phpUtils::setID_IfActive('transport', $pageOn) ?> href="<?php echo url_for('transport/listTransport') ?>">Transport</a></li>
                    <li><a <?php echo phpUtils::setID_IfActive('contacts', $pageOn) ?> href="<?php echo url_for('contacts/listContact') ?>">Contacts</a></li>
                    <li><a <?php echo phpUtils::setID_IfActive('stock', $pageOn) ?> href="<?php echo url_for('stock/listItem') ?>">Stock</a></li>
                </ul>
            </div>

            <div id="main_content">

                <?php echo $sf_content ?>

            </div>

            <div id="main_footer"><h3><a href="#">Arima web design</a></h3></div>

        </div>
    </body>
</html>
