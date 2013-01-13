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
class showItemAction extends sfAction {

    private $itemService;

    /**
     * 
     * @return ItemService 
     */
    public function getItemService() {
        if (!($this->itemService instanceof ItemService)) {
            $this->itemService = new ItemService();
        }
        return $this->itemService;
    }

    /**
     * Execute /../default/newdItem
     * 
     * @param type $request 
     */
    public function execute($request) {

        if (!$request->hasParameter('id')) {
            $this->item = ($this->getRoute()->getObject());
        } else {
            $this->item = ($this->getItemService()->getItemById($request->getParameter('id')));
            $this->forward404Unless($this->item);
        }
    }

}

?>
