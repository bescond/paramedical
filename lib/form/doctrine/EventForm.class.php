<?php

/**
 * Event form.
 *
 * @package    paramedical
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EventForm extends BaseEventForm
{
  public function configure()
  {
    // set consultant name in the select box
    $this->setWidget('consultant_id', new sfWidgetFormChoice(array('choices' => $this->getConsultants())));

    // override widget
    if($this->getPatient()!=null) {
      unset($this['patient_id']);
      $this->setWidget('patient_id', new sfWidgetFormInputHidden(array(), array('value' => $this->getPatient()->getId())));
      $this->setValidator('patient_id', new sfValidatorInteger());
    }

  }

  private function getConsultants()
  {
    $consultants     = array();
    $consultants[''] = '';
    $modelConsultant = ConsultantTable::getInstance()->findAll();
    foreach ($modelConsultant as $consultant) {
        $consultants[$consultant->getId()] = $consultant->getFirstname().' '.$consultant->getLastname();
    }
    return $consultants;
  }

  private function getPatient()
  {
    $patient = $this->getOption('patient');
    return $patient;
  }

}
