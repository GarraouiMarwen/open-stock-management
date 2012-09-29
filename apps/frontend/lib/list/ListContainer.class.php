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
    public function getList() {
        return $this->listContents;
    }
    
    /**
     * Set array of list contents
     * @param type $listContent 
     */
    public function setList($listContent) {
        $this->listContents = $listContent;
    }
            
}

