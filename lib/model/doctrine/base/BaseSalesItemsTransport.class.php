<?php

/**
 * BaseSalesItemsTransport
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $sales_item_id
 * @property integer $transport_id
 * @property integer $nos
 * @property SalesItems $SalesItems
 * @property Transport $Transport
 * 
 * @method integer             getSalesItemId()   Returns the current record's "sales_item_id" value
 * @method integer             getTransportId()   Returns the current record's "transport_id" value
 * @method integer             getNos()           Returns the current record's "nos" value
 * @method SalesItems          getSalesItems()    Returns the current record's "SalesItems" value
 * @method Transport           getTransport()     Returns the current record's "Transport" value
 * @method SalesItemsTransport setSalesItemId()   Sets the current record's "sales_item_id" value
 * @method SalesItemsTransport setTransportId()   Sets the current record's "transport_id" value
 * @method SalesItemsTransport setNos()           Sets the current record's "nos" value
 * @method SalesItemsTransport setSalesItems()    Sets the current record's "SalesItems" value
 * @method SalesItemsTransport setTransport()     Sets the current record's "Transport" value
 * 
 * @package    open-stock-management
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSalesItemsTransport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sales_items_transport');
        $this->hasColumn('sales_item_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('transport_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('nos', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('SalesItems', array(
             'local' => 'sales_item_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Transport', array(
             'local' => 'transport_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}