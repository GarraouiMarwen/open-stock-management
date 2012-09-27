<?php

/**
 * PurchaseItemsTransport form base class.
 *
 * @method PurchaseItemsTransport getObject() Returns the current form's model object
 *
 * @package    open-stock-management
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePurchaseItemsTransportForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'purchase_item_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PurchaseItems'), 'add_empty' => false)),
      'transport_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Transport'), 'add_empty' => false)),
      'nos'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'purchase_item_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PurchaseItems'))),
      'transport_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Transport'))),
      'nos'              => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('purchase_items_transport[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PurchaseItemsTransport';
  }

}
