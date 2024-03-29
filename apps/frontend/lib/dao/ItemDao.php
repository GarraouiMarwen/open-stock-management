<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ItemDao {
    
    /**
     * Save Item
     * 
     * @param Item $item
     * @throws DaoException 
     */
    public function saveItem(Item $item) {
        try {
            $item->save();
        } catch (Exception $e) {
            throw new DaoException($e->getMessage(), $e->getCode(), $e);
        }        
    }
    
    /**
     * Get Item by id 
     * 
     * @param type $id
     * @return type
     * @throws DaoException 
     */
    public function getItemById($id) {
        try {
            return Doctrine_Core::getTable('Item')->find($id);
        } catch (Exception $e) {
            throw new DaoException($e->getMessage(), $e->getCode(), $e);
        }
    }
    
    /**
     * 
     * @return Item Doctrine-Collection
     * @throws DaoException 
     */
    public function getItems(sfParameterHolder $paramHolder) {
        try {
            $query = Doctrine_Query::create()
                        ->select($paramHolder->get('columns'))
                        ->from('item')
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
     * @param Item $item
     * @return type
     * @throws DaoException 
     */
    public function updateItem(Item $item) {
        try {
            $query = Doctrine_Query::create()
                        ->update('Item i');
            $query->set('i.name', '?', $item->getName());
            $query->set('i.sales_unit_price', '?', $item->getSalesUnitPrice());
            $query->set('i.purchase_unit_price', '?', $item->getPurchaseUnitPrice());
            $query->set('i.description', '?', $item->getDescription());
            $query->set('i.stock_available', '?', $item->getStockAvailable());
            $query->where('i.id = ?', $item->getId());
            
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
    public function searchItems(sfParameterHolder $paramHolder) {

    }
    
    /**
     * Counting number items in Item table
     * @return Integer 
     */
    public function countItems() {
        $q = Doctrine_Query::create()
            ->from('Item');
        return $q->count();
    }
    
}
