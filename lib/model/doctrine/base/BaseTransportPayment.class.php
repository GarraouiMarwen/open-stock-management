<?php

/**
 * BaseTransportPayment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $transport_id
 * @property integer $payment_id
 * @property Transport $Transport
 * @property Payment $Payment
 * 
 * @method integer          getTransportId()  Returns the current record's "transport_id" value
 * @method integer          getPaymentId()    Returns the current record's "payment_id" value
 * @method Transport        getTransport()    Returns the current record's "Transport" value
 * @method Payment          getPayment()      Returns the current record's "Payment" value
 * @method TransportPayment setTransportId()  Sets the current record's "transport_id" value
 * @method TransportPayment setPaymentId()    Sets the current record's "payment_id" value
 * @method TransportPayment setTransport()    Sets the current record's "Transport" value
 * @method TransportPayment setPayment()      Sets the current record's "Payment" value
 * 
 * @package    open-stock-management
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTransportPayment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('transport_payment');
        $this->hasColumn('transport_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('payment_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Transport', array(
             'local' => 'transport_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Payment', array(
             'local' => 'payment_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}