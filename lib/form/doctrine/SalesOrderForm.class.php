<?php

/**
 * SalesOrder form.
 *
 * @package    open-stock-management
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SalesOrderForm extends BaseSalesOrderForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->widgetSchema['total_price']->setAttribute('disabled', 'disabled');
     $this->widgetSchema['total_paid']->setAttribute('disabled', 'disabled');
     $this->widgetSchema['total_due']->setAttribute('disabled', 'disabled');
     $this->widgetSchema['order_status']->setAttribute('disabled', 'disabled');
  }
}
