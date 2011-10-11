<?php

/**
 * Consultant filter form base class.
 *
 * @package    paramedical
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseConsultantFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'firstname' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lastname'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'job'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'firstname' => new sfValidatorPass(array('required' => false)),
      'lastname'  => new sfValidatorPass(array('required' => false)),
      'job'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('consultant_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Consultant';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'firstname' => 'Text',
      'lastname'  => 'Text',
      'job'       => 'Text',
    );
  }
}
