<?php

/**
 * ChequePayment form base class.
 *
 * @method ChequePayment getObject() Returns the current form's model object
 *
 * @package    open-stock-management
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseChequePaymentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'payment_id' => new sfWidgetFormInputText(),
      'bank_name'  => new sfWidgetFormInputText(),
      'status'     => new sfWidgetFormInputText(),
      'date_end'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'payment_id' => new sfValidatorInteger(),
      'bank_name'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'     => new sfValidatorInteger(array('required' => false)),
      'date_end'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cheque_payment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ChequePayment';
  }

}
