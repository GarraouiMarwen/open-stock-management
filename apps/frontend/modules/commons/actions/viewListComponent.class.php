<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of listComponent
 *
 * @author guruce
 */
class viewListComponent  extends sfComponent {
    
  
    public function execute($request) {
        $this->listName = $this->container->getListName();
        $this->listHeaders = $this->container->getListHeaders();
        $this->listContents = $this->container->getListContent();
    }
          // TODO If u need create any methods 
}

?>
