<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newContactAction
 *
 * @author satthy
 */
class newClientAction extends sfAction{
    //put your code here
    public function execute($request) {
              $this->form = new ClientForm();
    }
}

?>
