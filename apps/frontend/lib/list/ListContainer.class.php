<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListContainer
 *
 * @author guruce
 */
class ListContainer {
    private $headers;
    private $listContents;
    private $listName;

    /**
     * Gives array of headers
     * @return Array  
     */
    public function getHeaders() {
        return $this->headers;
    }
    
    /**
     * Set headers for list
     * @param type $headers 
     */
    public function setHeaders($headers) {
        $this->headers = $headers;
    }
    
    /**
     * Get arrays of List contents
     * @return List 
     */
    public function getListContent() {
        return $this->listContents;
    }
    
    /**
     * Set array of list contents
     * @param type $listContent 
     */
    public function setListContent($listContent) {
        $this->listContents = $listContent;
    }
    
    /**
     * setting List Name then it will fetch correspondent header for that name
     * @param type $listName 
     */
    public function setListName($listName) {
        $this->listName = $listName;
        $loadLists = sfYaml::load(sfConfig::get('sf_app_dir') . '/lib/list/Lists.yml');
        $this->setHeaders($loadLists[$listName]['header']);        
    }
    
    /**
     * Get Name of the List
     * @return type 
     */
    public function getListName() {
        return $this->listName;
    }
    
}

