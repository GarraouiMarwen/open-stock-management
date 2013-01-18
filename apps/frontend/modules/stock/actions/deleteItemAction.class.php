<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of deleteContactAction
 *
 * @author jaykrish
 */
class deleteItemAction extends sfAction {

    //put your code here

    public function execute($request) {
          $this->item = $this->getRoute()->getObject();
          $this->item->delete(); 
          $this->redirect("stock/listItem");
    }

}

?>
