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
class editSellerAction extends sfAction{
    
    
    /**
     * Execute /../default/newdSeller
     * 
     * @param type $request 
     */
    public function execute($request) {

        $this->seller = ($this->getRoute()->getObject());
        $this->forward404Unless($this->seller);
        $this->form = new SellerForm($this->seller);

    }
    
}

?>
