<?php

/**
 * Calendar actions
 *
 * @package    apps.frontend.modules.calendar.actions
 * @author     Mathieu Bescond <mbescond@gmail.com>
 * @copyright  Mathieu Bescond <mbescond@gmail.com>
 * @link       https://github.com/bescond/paramedical
 */
class calendarActions extends sfActions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeShow(sfWebRequest $request)
  {
    $this->form = new EventForm(array(), array());
    $this->form->setDefault('consultant_id', $this->getUser()->getGuardUser()->getConsultant()->getId());

    if (!is_null($this->getUser()->getGuardUser()->getConsultant()->getId())) {
      $this->events = EventTable::getInstance()->findByConsultantId($this->getUser()->getGuardUser()->getConsultant()->getId());
    } else {
      $this->events = EventTable::getInstance()->findAll();
    }
  }

}
