<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ClientDao {
    
    /**
     * Save Client
     * 
     * @param Client $client
     * @throws DaoException 
     */
    public function saveClient(Client $client) {
        try {
            $client->save();
        } catch (Exception $e) {
            throw new DaoException($e->getMessage(), $e->getCode(), $e);
        }        
    }
    
    /**
     * Get Client by id 
     * 
     * @param type $id
     * @return type
     * @throws DaoException 
     */
    public function getClientById($id) {
        try {
            return Doctrine_Core::getTable('Client')->find($id);
        } catch (Exception $e) {
            throw new DaoException($e->getMessage(), $e->getCode(), $e);
        }
    }
    
    /**
     * 
     * @return Client Doctrine-Collection
     * @throws DaoException 
     */
    public function getClients(sfParameterHolder $paramHolder) {
        try {
            $query = Doctrine_Query::create()
                        ->select($paramHolder->get('columns'))
                        ->from('client')
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
     * @param Client $client
     * @return type
     * @throws DaoException 
     */
    public function updateClient(Client $client) {
        try {
            $query = Doctrine_Query::create()
                        ->update('Client i');
            $query->set('i.name', '?', $client->getName());
            $query->set('i.address', '?', $client->getAddress());
            $query->set('i.tp_hp', '?', $client->getTpHp());
            $query->set('i.tp_home', '?', $client->getTpHome());
            $query->set('i.notes', '?', $client->getNotes());
            $query->where('i.id = ?', $client->getId());
            
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
    public function searchClients(sfParameterHolder $paramHolder) {

    }
    
    /**
     * Counting number clients in Client table
     * @return Integer 
     */
    public function countClients() {
        $q = Doctrine_Query::create()
            ->from('Client');
        return $q->count();
    }
    
}
