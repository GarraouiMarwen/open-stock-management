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
        $loadContents = sfYaml::load(sfConfig::get('sf_app_dir') . '/lib/list/Lists.yml');
        $searchParameters = implode(",", $loadContents['listItem_ItemList']['content']);
        $data = $this->getItemService()->searchItems($searchParameters); 
        
        $listContainer = new ListContainer();
        $listContainer->setListName('listItem_ItemList');
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
