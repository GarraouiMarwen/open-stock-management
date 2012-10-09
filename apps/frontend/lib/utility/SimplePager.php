<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * @author Guruce
 */

class SimplePager extends sfPager implements Serializable {
    
    protected $offset;


    /**
     * Constructor for pager object
     * @param type $class
     * @param type $maxPerPage 
     */
    public function __construct($class, $maxPerPage) {
        parent::__construct($class, $maxPerPage);
        $this->offset = null;
    }
    
    /**
     *
     * @param type $count 
     */
    public function setNumResults($count) {
        $this->setNbResults($count);
    }
    
    /**
     * Get offset value
     * @return type 
     */
    public function getOffset() {
        return $this->offset;
    }
    
    /**
     * Function to be called after parameters have been set
     * 
     */
    public function init() {
        if ($this->getPage() == 0 || $this->getMaxPerPage() == 0 || $this->getNbResults() == 0) {
            $this->setLastPage(0);
        } else {
            $this->offset = ($this->getPage() - 1) * $this->getMaxPerPage();
            $this->setLastPage(ceil($this->getNbResults() / $this->getMaxPerPage()));
        }
    }
    
    protected function retrieveObject($offset) {
        
    }
    
    public function getResults() {
        
    }

    public function serialize() {
        
    }

    public function unserialize($serialized) {
        
    }
    
}
