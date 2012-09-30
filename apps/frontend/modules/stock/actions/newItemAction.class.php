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
class newItemAction extends sfAction{
    
    /**
     * Execute /../default/newdItem
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
