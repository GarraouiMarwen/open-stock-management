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
class listItemAction extends sfAction {

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
       $head = sfYaml::load(sfConfig::get('sf_app_dir') . '/lib/list/item_list.yml');
       $itemlist_headers = array($head['listItem']['header1'],$head['listItem']['header2'],$head['listItem']['header3'],$head['listItem']['header6']);
        $columns = 'name,sales_unit_price,stock_available';
        $itemlist_data = $this->getItemService()->getlistItems($columns);

        $listContainer = new ListContainer();
        $listContainer->setListName('ItemList');
        $listContainer->setListHeaders($itemlist_headers);
        $listContainer->setListContent($itemlist_data);

        $this->listcontainer = $listContainer;
    }

}

?>
