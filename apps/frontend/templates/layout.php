<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
    <head>        
        <link rel="shortcut icon" href="/favicon.ico" />

        <?php
        //php inclutions 
        include_http_metas();
        include_metas();
        include_stylesheets();
        use_javascript('jquery-1.8.0.min.js');
        use_javascript('main.js');
        include_javascripts();

        //  get the module name
        $pageOn = ($sf_params->get("module"));
      
        /**
         * Function to set id as selected 
         * css then set  the main menu item as active
         * 
         * @param type $moduleName : to check with the current module name 
         * @param type $pageOn 
         */
        function setID_IfActive($moduleName, $pageOn) {

            if ($pageOn == $moduleName) {
                echo"id=\"selected_main_menu\"";
            }
        }
        ?>

        <!--get the current page name for title-->
        <title>
            <?php include_slot('pageinfo'); ?>
        </title>
    </head>
    <body>

        <div id="main_container">

            <div id="main_header">
                <h1>Web<span class="off">app</span> </h1>
                <h2>template by -jaykrish </h2>
            </div>   

            <div id="main_menu">
                <ul>

                    <li><a <?php setID_IfActive('default', $pageOn) ?> href="<?php echo url_for('default/index') ?>">Home</a></li>
                    <li><a <?php setID_IfActive('sales', $pageOn) ?> href="<?php echo url_for('sales/listSales') ?>">Sales</a></li>
                    <li><a <?php setID_IfActive('purchase', $pageOn) ?> href="<?php echo url_for('purchase/listPurchase') ?>">Purchase</a></li>
                    <li><a <?php setID_IfActive('payment', $pageOn) ?> href="<?php echo url_for('payment/listPayment') ?>">Payment</a></li>
                    <li><a <?php setID_IfActive('transport', $pageOn) ?> href="<?php echo url_for('transport/listTransport') ?>">Transport</a></li>
                    <li><a <?php setID_IfActive('contacts', $pageOn) ?> href="<?php echo url_for('contacts/homeContacts') ?>">Contacts</a></li>
                    <li><a <?php setID_IfActive('stock', $pageOn) ?> href="<?php echo url_for('stock/listItem') ?>">Stock</a></li>
                </ul>
            </div>

            <div id="main_content">

                <?php echo $sf_content ?>

            </div>

            <div id="main_footer"><h3><a href="#">Neat web design</a></h3></div>

        </div>
    </body>
</html>
