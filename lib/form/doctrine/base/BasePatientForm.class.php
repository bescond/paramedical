<?php

/**
 * Patient form base class.
 *
 * @method Patient getObject() Returns the current form's model object
 *
 * @package    paramedical
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePatientForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'firstname' => new sfWidgetFormInputText(),
      'lastname'  => new sfWidgetFormInputText(),
      'birthdate' => new sfWidgetFormJQueryDate(array('config' => '{}', 'date_widget' => new sfWidgetFormDate(array('format'=>'%day%%month%%year%')))),
      'address'   => new sfWidgetFormTextarea(),
      'zip'       => new sfWidgetFormInputText(),
      'city'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'firstname' => new sfValidatorString(array('max_length' => 255)),
      'lastname'  => new sfValidatorString(array('max_length' => 255)),
      'birthdate' => new sfValidatorDate(array('required' => false)),
      'address'   => new sfValidatorString(array('required' => false)),
      'zip'       => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'city'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('patient[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Patient';
  }

}
