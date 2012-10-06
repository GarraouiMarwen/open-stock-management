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
        $searchParameters = 'id, name, sales_unit_price, purchase_unit_price, description, stock_available';
        $data = $this->getItemService()->searchItems($searchParameters); 
        $listContainer = new ListContainer();
        $listContainer->setListName('ItemList');
//        $listContainer->setHeaders(array (
//            "Number",
//            "Item Name",
//            "Sales unit Price",
//            "Purchase unit price",
//            "Description",
//            "Store Available"
//        ));
        $listContainer->setListContent($data);
        
        $this->list = $listContainer;
        
    }
}
?>
