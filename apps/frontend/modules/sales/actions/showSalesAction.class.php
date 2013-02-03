<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of showSalesAction
 *
 * @author jaykrish
 */
class showSalesAction extends sfAction{
    //put your code here
    
    private $salesService;

    /**
     * 
     * @return SalesService 
     */
    public function getSalesService() {
        if (!($this->salesService instanceof SalesService)) {
            $this->salesService = new SalesService();
        }
        return $this->salesService;
    }

    /**
     * Execute /../default/newdSales
     * 
     * @param type $request 
     */
    public function execute($request) {

        if (!$request->hasParameter('id')) {
            $this->salesorder = ($this->getRoute()->getObject());
        } else {
            $this->salesorder = ($this->getSalesService()->getSalesById($request->getParameter('id')));
            $this->forward404Unless($this->salesorder);
        }
    }
    
}

?>
