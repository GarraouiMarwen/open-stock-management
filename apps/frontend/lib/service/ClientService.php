<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ClientService {
    
    private $clientDao = null;
    
    public function __construct() {
        if (!($this->clientDao instanceof ClientDao)) {
            $this->clientDao = new ClientDao();
        }        
    }
    
    /**
     * Return clientDao class
     * @return type 
     */
    public function getclientDao() {
        if (!($this->clientDao instanceof ClientDao)) {
            $this->clientDao = new ClientDao();
        }
        return $this->clientDao;
    }
    
    /**
     * Set clientDao object
     * @param clientDao $clientDao 
     */
    public function setclientDao(ClientDao $clientDao) {
        $this->clientDao = $clientDao;
    }
    
    /**
     * Adding new Client 
     * @param Client $client 
     */
    public function saveClient(Client $client) {
        $this->clientDao->saveClient($client);
    }
    
    /**
     * Get Client by Id in service
     * @param type $id
     * @return type 
     */
    public function getClientById($id) {
        return $this->clientDao->getClientById($id);
    }
    
    /**
     * Get all Clients contents
     * @return Client Doctrine-Collection 
     * edited by Jay Krish : to get the database output and insert some additional values into result rows
     */
    public function getClients(sfParameterHolder $paramHolder = null) {
        return $this->getclientDao()->getClients($paramHolder);

    }
    
    /**
     *
     * @param Client $client 
     */
    public function updateClient(Client $client) {
        
    }
    
   /**
    * Get data according to searching parameters
    * @param type $searchParam 
    */
    public function searchClients(sfParameterHolder $paramHolder = null) {

    }
    
    /**
     * Number og Clients 
     * @return Integer 
     */
    public function countClients() {
        return $this->getclientDao()->countClients();
    }
    
}


