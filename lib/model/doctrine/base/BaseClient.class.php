<?php

/**
 * BaseClient
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $address
 * @property integer $tp_hp
 * @property integer $tp_home
 * @property string $notes
 * @property Doctrine_Collection $SalesOrder
 * 
 * @method string              getName()       Returns the current record's "name" value
 * @method string              getAddress()    Returns the current record's "address" value
 * @method integer             getTpHp()       Returns the current record's "tp_hp" value
 * @method integer             getTpHome()     Returns the current record's "tp_home" value
 * @method string              getNotes()      Returns the current record's "notes" value
 * @method Doctrine_Collection getSalesOrder() Returns the current record's "SalesOrder" collection
 * @method Client              setName()       Sets the current record's "name" value
 * @method Client              setAddress()    Sets the current record's "address" value
 * @method Client              setTpHp()       Sets the current record's "tp_hp" value
 * @method Client              setTpHome()     Sets the current record's "tp_home" value
 * @method Client              setNotes()      Sets the current record's "notes" value
 * @method Client              setSalesOrder() Sets the current record's "SalesOrder" collection
 * 
 * @package    open-stock-management
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClient extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('client');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('address', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('tp_hp', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tp_home', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('notes', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('SalesOrder', array(
             'local' => 'id',
             'foreign' => 'client_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}