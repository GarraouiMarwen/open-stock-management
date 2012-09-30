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
     * Execute /../stock/listItem
     * 
     * @param type $request 
     */
    public function execute($request) {
        $data = $this->getItemService()->getAllItems();     
        
        $listContainer = new ListContainer();
        $listContainer->setHeaders(array (
            "Number",
            "Item Name",
            "Stock",
            "Unit Price"
        ));
        $listContainer->setList($data);
        
        $this->list=$listContainer;
        
    }
}
?>
