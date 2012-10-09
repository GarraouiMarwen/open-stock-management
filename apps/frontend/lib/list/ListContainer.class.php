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
    private $pager;

    /**
     * Gives array of headers
     * @return Array  
     */
    public function getListHeaders() {
        return $this->headers;
    }
    
    /**
     * Set headers for list
     * @param type $headers 
     */
    public function setListHeaders($headers) {
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
    }
    
    /**
     * Get Name of the List
     * @return type 
     */
    public function getListName() {
        return $this->listName;
    }
    
    /**
     * Set pagination parameter
     * @param SimplePager $pager 
     */
    public function setPager(SimplePager $pager) {
        $this->pager = $pager;
    }
    
    /**
     * Get pagination
     * @return SimplePager 
     */
    public function getPager() {
        if (empty($this->pager)) {
            $this->pager = null;
        }
        return $this->pager;
    }
    
}

