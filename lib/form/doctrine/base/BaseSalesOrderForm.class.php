<?php

/**
 * SalesOrder form base class.
 *
 * @method SalesOrder getObject() Returns the current form's model object
 *
 * @package    open-stock-management
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSalesOrderForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'client_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Client'), 'add_empty' => false)),
      'date_begin'   => new sfWidgetFormDateTime(),
      'date_end'     => new sfWidgetFormDateTime(),
      'total_price'  => new sfWidgetFormInputText(),
      'total_paid'   => new sfWidgetFormInputText(),
      'total_due'    => new sfWidgetFormInputText(),
      'order_status' => new sfWidgetFormInputText(),
      'notes'        => new sfWidgetFormTextArea(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'client_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Client'))),
      'date_begin'   => new sfValidatorDateTime(),
      'date_end'     => new sfValidatorDateTime(array('required' => false)),
      'total_price'  => new sfValidatorNumber(array('required' => false)),
      'total_paid'   => new sfValidatorNumber(array('required' => false)),
      'total_due'    => new sfValidatorNumber(array('required' => false)),
      'order_status' => new sfValidatorInteger(array('required' => false)),
      'notes'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sales_order[%s]');
    
    //calerder picker plugin's
    $this->widgetSchema['date_begin']= new sfWidgetFormDateJQueryUI(array('change_month' => true, 'change_year'=> true));
    $this->widgetSchema['date_end']= new sfWidgetFormDateJQueryUI(array('change_month' => true, 'change_year'=> true));

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SalesOrder';
  }

}
