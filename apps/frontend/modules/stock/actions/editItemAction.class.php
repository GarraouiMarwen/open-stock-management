<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newItemAction
 *
 * @author guruce
 */
class editItemAction extends sfAction{
       

    /**
     * Execute /../default/newdItem
     * 
     * @param type $request 
     */
    public function execute($request) {

        $this->item = ($this->getRoute()->getObject());
        $this->forward404Unless($this->item);
        $this->form = new ItemForm($this->item);

    }
    
}

?>
