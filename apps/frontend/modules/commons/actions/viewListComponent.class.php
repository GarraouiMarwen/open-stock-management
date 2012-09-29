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
class viewListComponent extends sfComponent {
    
    protected static $listContainer;
    
    public function execute($request) {
        $this->headers = self::$listContainer->getHeaders();
        $this->listContents = self::$listContainer->getList();
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
