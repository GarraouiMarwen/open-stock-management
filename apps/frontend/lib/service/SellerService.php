<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class SellerService {
    
    private $sellerDao = null;
    
    public function __construct() {
        if (!($this->sellerDao instanceof SellerDao)) {
            $this->sellerDao = new SellerDao();
        }        
    }
    
    /**
     * Return sellerDao class
     * @return type 
     */
    public function getsellerDao() {
        if (!($this->sellerDao instanceof SellerDao)) {
            $this->sellerDao = new SellerDao();
        }
        return $this->sellerDao;
    }
    
    /**
     * Set sellerDao object
     * @param sellerDao $sellerDao 
     */
    public function setsellerDao(SellerDao $sellerDao) {
        $this->sellerDao = $sellerDao;
    }
    
    /**
     * Adding new Seller 
     * @param Seller $seller 
     */
    public function saveSeller(Seller $seller) {
        $this->sellerDao->saveSeller($seller);
    }
    
    /**
     * Get Seller by Id in service
     * @param type $id
     * @return type 
     */
    public function getSellerById($id) {
        return $this->sellerDao->getSellerById($id);
    }
    
    /**
     * Get all Sellers contents
     * @return Seller Doctrine-Collection 
     * edited by Jay Krish : to get the database output and insert some additional values into result rows
     */
    public function getSellers(sfParameterHolder $paramHolder = null) {
        return $this->getsellerDao()->getSellers($paramHolder);

    }
    
    /**
     *
     * @param Seller $seller 
     */
    public function updateSeller(Seller $seller) {
        
    }
    
   /**
    * Get data according to searching parameters
    * @param type $searchParam 
    */
    public function searchSellers(sfParameterHolder $paramHolder = null) {

    }
    
    /**
     * Number og Sellers 
     * @return Integer 
     */
    public function countSellers() {
        return $this->getsellerDao()->countSellers();
    }
    
}


