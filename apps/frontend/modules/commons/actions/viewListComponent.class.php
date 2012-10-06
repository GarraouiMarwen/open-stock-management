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
    
    protected static $listContainer;
    
    public function execute($request) {
        self::setContainer($this->container);
        $this->headers = $this->container->getHeaders();
        $this->listContents = $this->container->getListContent();
    }
    
    public static function setContainer(ListContainer $listContainer) {
        self::$listContainer = $listContainer;
    }
    
    public static function getContainer() {
        return self::$listContainer;
    }
    
    // TODO If u need create any methods 
}

?>
