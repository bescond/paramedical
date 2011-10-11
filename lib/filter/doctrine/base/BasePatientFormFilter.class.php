<?php

/**
 * Patient filter form base class.
 *
 * @package    paramedical
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePatientFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'firstname' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lastname'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'birthdate' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'address'   => new sfWidgetFormFilterInput(),
      'zip'       => new sfWidgetFormFilterInput(),
      'city'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'firstname' => new sfValidatorPass(array('required' => false)),
      'lastname'  => new sfValidatorPass(array('required' => false)),
      'birthdate' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'address'   => new sfValidatorPass(array('required' => false)),
      'zip'       => new sfValidatorPass(array('required' => false)),
      'city'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('patient_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Patient';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'firstname' => 'Text',
      'lastname'  => 'Text',
      'birthdate' => 'Date',
      'address'   => 'Text',
      'zip'       => 'Text',
      'city'      => 'Text',
    );
  }
}
