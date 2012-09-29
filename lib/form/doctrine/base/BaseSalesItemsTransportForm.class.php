<?php

/**
 * SalesItemsTransport form base class.
 *
 * @method SalesItemsTransport getObject() Returns the current form's model object
 *
 * @package    open-stock-management
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSalesItemsTransportForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'sales_item_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SalesItems'), 'add_empty' => false)),
      'transport_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Transport'), 'add_empty' => false)),
      'nos'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sales_item_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SalesItems'))),
      'transport_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Transport'))),
      'nos'           => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sales_items_transport[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SalesItemsTransport';
  }

}
