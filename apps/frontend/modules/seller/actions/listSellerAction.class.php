<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of listcon..Action
 *
 * @author satthy
 */
class listSellerAction extends sfAction {
    //put your code here
    
        private $sellerService;

    /**
     * 
     * @return SellerService 
     */
    public function getSellerService() {
        if (!($this->sellerService instanceof SellerService)) {
            $this->sellerService = new SellerService();
        }
        return $this->sellerService;
    }
    
    public function execute($request) {
        $head = sfYaml::load(sfConfig::get('sf_app_dir') . '/lib/list/seller_list.yml');
        $sellerlist_headers = array($head['listSeller']['header1'], $head['listSeller']['header2'], $head['listSeller']['header3'], $head['listSeller']['header4']);
        $columns = 'id,name,address,tp_hp';

        $recordsLimit = 5; //have to take from lists
        if (!$request->hasParameter('pageNo')) {
            $pageNo = 1;
        } else {
            $pageNo = $request->getParameter('pageNo', 1);
        }

        $pager = new SimplePager('Seller', $recordsLimit);
        $pager->setPage($pageNo);
        $pager->setNumResults($this->getSellerService()->countSellers());
        $pager->init();
        $offset = $pager->getOffset();
        $offset = empty($offset) ? 0 : $offset;

        $paramHolder = new sfParameterHolder();
        $paramHolder->set('columns', $columns);
        $paramHolder->set('offset', $offset);
        $paramHolder->set('limit', $recordsLimit);

        $sellerlist_data = $this->getSellerService()->getSellers($paramHolder);

        $listContainer = new ListContainer();
        $listContainer->setListName('SellerList');
        $listContainer->setListHeaders($sellerlist_headers);
        $listContainer->setListContent($sellerlist_data);
        $listContainer->setRowLink("seller/showSeller?id=");
        $listContainer->setPager($pager);

        $this->listcontainer = $listContainer;             
    }
}

?>
