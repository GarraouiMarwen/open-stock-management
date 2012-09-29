<?php

/**
 * TransportPayment form base class.
 *
 * @method TransportPayment getObject() Returns the current form's model object
 *
 * @package    open-stock-management
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTransportPaymentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'transport_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Transport'), 'add_empty' => false)),
      'payment_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Payment'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'transport_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Transport'))),
      'payment_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Payment'))),
    ));

    $this->widgetSchema->setNameFormat('transport_payment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TransportPayment';
  }

}
