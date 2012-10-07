<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ItemService {
    
    private $itemDao = null;
    
    public function __construct() {
        if (!($this->itemDao instanceof ItemDao)) {
            $this->itemDao = new ItemDao();
        }        
    }
    
    /**
     * Return ItemDao class
     * @return type 
     */
    public function getItemDao() {
        if (!($this->itemDao instanceof ItemDao)) {
            $this->itemDao = new ItemDao();
        }
        return $this->itemDao;
    }
    
    /**
     * Set ItemDao object
     * @param ItemDao $itemDao 
     */
    public function setItemDao(ItemDao $itemDao) {
        $this->itemDao = $itemDao;
    }
    
    /**
     * Adding new Item 
     * @param Item $item 
     */
    public function saveItem(Item $item) {
        $this->itemDao->saveItem($item);
    }
    
    /**
     * Get Item by Id in service
     * @param type $id
     * @return type 
     */
    public function getItemById($id) {
        return $this->itemDao->getItemById($id);
    }
    
    /**
     * Get all Items contents
     * @return Item Doctrine-Collection 
     * edited by Jay Krish : to get the database output and insert some additional values into result rows
     */
    public function getlistItems($columns) {
        $result = $this->getItemDao()->getAllItems($columns);
        $count = 0;
        foreach ($result as $row){
            //inserts an incremental number to all item list rows at first column
            array_splice( $result[$count], 0, 0, $count+1);
            $count++;
        }
        return $result;
    }
    
    /**
     *
     * @param Item $item 
     */
    public function updateItem(Item $item) {
        
    }
    
   /**
    * Get data according to searching parameters
    * @param type $searchParam 
    */
    public function searchItems($searchParam) {
        return $this->getItemDao()->searchItems($searchParam);
    }
    
}


