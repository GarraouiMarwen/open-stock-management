<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newClientAction
 *
 * @author guruce
 */
class showClientAction extends sfAction{
    
    
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
    /**
     * Execute /../default/newdClient
     * 
     * @param type $request 
     */
    public function execute($request) {

        $this->client = ($this->getClientService()->getClientById($request->getParameter('id')));
        $this->forward404Unless($this->client);

    }

}

?>
