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
class editClientAction extends sfAction {

    /**
     * Execute /../default/newdClient
     * 
     * @param type $request 
     */
    public function execute($request) {

        $this->client = ($this->getRoute()->getObject());
        $this->forward404Unless($this->client);
        $this->form = new ClientForm($this->client);
    }

}

?>
