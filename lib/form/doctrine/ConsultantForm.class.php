<?php

/**
 * Consultant form.
 *
 * @package    paramedical
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ConsultantForm extends BaseConsultantForm
{
  public function configure()
  {
  	$this->embedRelation('User');

    unset($this['user_id']);
    unset($this->widgetSchema['User']['groups_list']);
    unset($this->widgetSchema['User']['permissions_list']);
    
    $this->widgetSchema['User']['username']       = new sfWidgetFormInputHidden();
    $this->widgetSchema['User']['created_at']     = new sfWidgetFormInputHidden();
    $this->widgetSchema['User']['updated_at']     = new sfWidgetFormInputHidden();
    $this->widgetSchema['User']['password']       = new sfWidgetFormInputHidden();
    $this->widgetSchema['User']['algorithm']      = new sfWidgetFormInputHidden();
    $this->widgetSchema['User']['salt']           = new sfWidgetFormInputHidden();
    $this->widgetSchema['User']['is_active']      = new sfWidgetFormInputHidden();
    $this->widgetSchema['User']['is_super_admin'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['User']['last_login']     = new sfWidgetFormInputHidden();

  }
}
