<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newSellerAction
 *
 * @author guruce
 */
class showSellerAction extends sfAction{
    
    
        private $sellerService;

    /**
     * 
     * @return SellerService 
     */
    public function getSellerService() {
        if (!($this->sellerService instanceof SellerService)) {
            $this->sellerService = new SellerService();
        }
        return $this->sellerService;
    }
    /**
     * Execute /../default/newdSeller
     * 
     * @param type $request 
     */
    public function execute($request) {

        $this->seller = ($this->getSellerService()->getSellerById($request->getParameter('id')));
        $this->forward404Unless($this->seller);

    }

}

?>
