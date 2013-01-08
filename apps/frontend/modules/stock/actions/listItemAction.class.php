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
        $itemlist_headers = array($head['listItem']['header1'], $head['listItem']['header2'], $head['listItem']['header3'], $head['listItem']['header6']);
        $columns = 'id,name,sales_unit_price,stock_available';

        $recordsLimit = 5; //have to take from lists
        if (!$request->hasParameter('pageNo')) {
            $pageNo = 1;
        } else {
            $pageNo = $request->getParameter('pageNo', 1);
        }

        $pager = new SimplePager('Item', $recordsLimit);
        $pager->setPage($pageNo);
        $pager->setNumResults($this->getItemService()->countItems());
        $pager->init();
        $offset = $pager->getOffset();
        $offset = empty($offset) ? 0 : $offset;

        $paramHolder = new sfParameterHolder();
        $paramHolder->set('columns', $columns);
        $paramHolder->set('offset', $offset);
        $paramHolder->set('limit', $recordsLimit);

        $itemlist_data = $this->getItemService()->getItems($paramHolder);

        $listContainer = new ListContainer();
        $listContainer->setListName('ItemList');
        $listContainer->setListHeaders($itemlist_headers);
        $listContainer->setListContent($itemlist_data);
        $listContainer->setRowLink("stock/showItem?id=");
        $listContainer->setPager($pager);

        $this->listcontainer = $listContainer;
    }

}

?>
