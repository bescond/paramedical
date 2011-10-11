<?php

/**
 * Event filter form base class.
 *
 * @package    paramedical
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEventFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'date'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'title'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descritpion'   => new sfWidgetFormFilterInput(),
      'patient_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Patient'), 'add_empty' => true)),
      'consultant_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Consultant'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'date'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'title'         => new sfValidatorPass(array('required' => false)),
      'descritpion'   => new sfValidatorPass(array('required' => false)),
      'patient_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Patient'), 'column' => 'id')),
      'consultant_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Consultant'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('event_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Event';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'date'          => 'Date',
      'title'         => 'Text',
      'descritpion'   => 'Text',
      'patient_id'    => 'ForeignKey',
      'consultant_id' => 'ForeignKey',
    );
  }
}
