<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addItemAction
 *
 * @author guruce
 */
class addItemAction extends sfAction{
    
    /**
     * Execute /../default/addItem
     * 
     * @param type $request 
     */
    public function execute($request) {
        $query = Doctrine_Core::getTable('Item')
                ->createQuery('i');

        $data = $query->execute();
        $this->data = $data;
    }
}

?>
