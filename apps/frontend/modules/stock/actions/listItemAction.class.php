<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * List all active items
 *
 * @author JayKrish
 */
class listItemAction extends sfAction{
    
    /**
     * Execute /../default/listItem
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
