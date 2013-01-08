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
class listClientAction extends sfAction {
    //put your code here
    
        private $clientService;

    /**
     * 
     * @return ClientService 
     */
    public function getClientService() {
        if (!($this->clientService instanceof ClientService)) {
            $this->clientService = new ClientService();
        }
        return $this->clientService;
    }
    
    public function execute($request) {
        $head = sfYaml::load(sfConfig::get('sf_app_dir') . '/lib/list/client_list.yml');
        $clientlist_headers = array($head['listClient']['header1'], $head['listClient']['header2'], $head['listClient']['header3'], $head['listClient']['header4']);
        $columns = 'id,name,address,tp_hp';

        $recordsLimit = 5; //have to take from lists
        if (!$request->hasParameter('pageNo')) {
            $pageNo = 1;
        } else {
            $pageNo = $request->getParameter('pageNo', 1);
        }

        $pager = new SimplePager('Client', $recordsLimit);
        $pager->setPage($pageNo);
        $pager->setNumResults($this->getClientService()->countClients());
        $pager->init();
        $offset = $pager->getOffset();
        $offset = empty($offset) ? 0 : $offset;

        $paramHolder = new sfParameterHolder();
        $paramHolder->set('columns', $columns);
        $paramHolder->set('offset', $offset);
        $paramHolder->set('limit', $recordsLimit);

        $clientlist_data = $this->getClientService()->getClients($paramHolder);

        $listContainer = new ListContainer();
        $listContainer->setListName('ClientList');
        $listContainer->setListHeaders($clientlist_headers);
        $listContainer->setListContent($clientlist_data);
        $listContainer->setRowLink("client/showClient?id=");
        $listContainer->setPager($pager);

        $this->listcontainer = $listContainer;             
    }
}

?>
