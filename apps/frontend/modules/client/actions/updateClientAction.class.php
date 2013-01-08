<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of createContactAction
 *
 * @author jaykrish
 */
class updateClientAction extends sfAction {

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
        $this->client = ($this->getClientService()->getClientById($request->getParameter('id')));
        $this->forward404Unless($this->client);
        $this->form = new ClientForm($this->client);
        $this->processForm($request, $this->form);
        $this->setTemplate('editClient');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind(
                $request->getParameter($form->getName()), $request->getFiles($form->getName())
        );

        if ($form->isValid()) {
            $client = $form->save();

            $this->redirect('client/showClient?id='.$client->getId()."'");
        }
    }

}

?>
