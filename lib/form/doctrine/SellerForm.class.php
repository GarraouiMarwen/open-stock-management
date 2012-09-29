<?php

/**
 * Seller form.
 *
 * @package    open-stock-management
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SellerForm extends BaseSellerForm
{
  public function configure()
  {
      $this->useFields(array('name', 'address', 'tp_hp', 'tp_home', 'notes'));
      $this->validatorSchema['address'] = new sfValidatorEmail();


  }
}
