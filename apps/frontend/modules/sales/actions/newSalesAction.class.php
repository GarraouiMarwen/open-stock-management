<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newSalesAction
 *
 * @package    open-stock-management
 * @subpackage sales
 * @author jaykrish
 */
class newSalesAction extends sfAction {

    //put your code here
    /**
     * Execute /../sales/newSales
     * 
     * @param type $request 
     */
    public function execute($request) {
        $this->salesorderform = new SalesOrderForm();
    }

}

?>
