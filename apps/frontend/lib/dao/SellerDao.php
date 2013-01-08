<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class SellerDao {
    
    /**
     * Save Seller
     * 
     * @param Seller $seller
     * @throws DaoException 
     */
    public function saveSeller(Seller $seller) {
        try {
            $seller->save();
        } catch (Exception $e) {
            throw new DaoException($e->getMessage(), $e->getCode(), $e);
        }        
    }
    
    /**
     * Get Seller by id 
     * 
     * @param type $id
     * @return type
     * @throws DaoException 
     */
    public function getSellerById($id) {
        try {
            return Doctrine_Core::getTable('Seller')->find($id);
        } catch (Exception $e) {
            throw new DaoException($e->getMessage(), $e->getCode(), $e);
        }
    }
    
    /**
     * 
     * @return Seller Doctrine-Collection
     * @throws DaoException 
     */
    public function getSellers(sfParameterHolder $paramHolder) {
        try {
            $query = Doctrine_Query::create()
                        ->select($paramHolder->get('columns'))
                        ->from('seller')
                        ->orderBy('name')
                        ->offset($paramHolder->get('offset'))
                        ->limit($paramHolder->get('limit'));
            return $query->execute(array() , Doctrine::HYDRATE_NONE);
        } catch (Exception $e) {
            throw new DaoException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     *
     * @param Seller $seller
     * @return type
     * @throws DaoException 
     */
    public function updateSeller(Seller $seller) {
        try {
            $query = Doctrine_Query::create()
                        ->update('Seller i');
            $query->set('i.name', '?', $seller->getName());
            $query->set('i.address', '?', $seller->getAddress());
            $query->set('i.tp_hp', '?', $seller->getTpHp());
            $query->set('i.tp_home', '?', $seller->getTpHome());
            $query->set('i.notes', '?', $seller->getNotes());
            $query->where('i.id = ?', $seller->getId());
            
            return $query->execute();
        } catch (Exception $e) {
            throw new DaoException($e->getMessage(), $e->getCode(), $e);
        }
    }
    
    /**
     * Get data according to searching parameters
     * @param type $searchParam
     * @param sfParameterHolder $param
     * @return type
     * @throws DaoException 
     */
    public function searchSellers(sfParameterHolder $paramHolder) {

    }
    
    /**
     * Counting number sellers in Seller table
     * @return Integer 
     */
    public function countSellers() {
        $q = Doctrine_Query::create()
            ->from('Seller');
        return $q->count();
    }
    
}
