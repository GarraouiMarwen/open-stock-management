<?php

/**
 * Seller form base class.
 *
 * @method Seller getObject() Returns the current form's model object
 *
 * @package    open-stock-management
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSellerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'address'    => new sfWidgetFormInputText(),
      'tp_hp'      => new sfWidgetFormInputText(),
      'tp_home'    => new sfWidgetFormInputText(),
      'notes'      => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 255)),
      'address'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tp_hp'      => new sfValidatorInteger(array('required' => false)),
      'tp_home'    => new sfValidatorInteger(array('required' => false)),
      'notes'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Seller', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('seller[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Seller';
  }

}
