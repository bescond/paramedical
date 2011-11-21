<?php

/**
 * Event form base class.
 *
 * @method Event getObject() Returns the current form's model object
 *
 * @package    paramedical
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'date'          => new sfWidgetFormDateJQueryUI(array('change_month' => true, 'change_year' => true, 'culture' => 'fr')),
      'title'         => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormTextarea(),
      'patient_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Patient'), 'add_empty' => false)),
      'consultant_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Consultant'), 'add_empty' => true)),
    ));
    $this->setDefault('date', date('d/m/Y'));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'date'          => new sfValidatorPass(),
      'title'         => new sfValidatorString(array('max_length' => 255)),
      'description'   => new sfValidatorString(array('required' => false)),
      'patient_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Patient'))),
      'consultant_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Consultant'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Event';
  }

}
