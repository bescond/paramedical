<?php

/**
 * patient actions.
 *
 * @package    paramedical
 * @subpackage patient
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class patientActions extends sfActions
{
 /**
  * Executes view action
  *
  * @param sfRequest $request A request object
  */
  public function executeView(sfWebRequest $request)
  {
    // Request parameters
    $id = $request->getParameter('id');

    // Get Patient
    $this->patient = Doctrine_Core::getTable('Patient')->findOneById($id);

    // Generate Patient Form
    if(empty($this->patientForm)) {
      $this->patientForm = new PatientForm();
    }

    // Get Events
    $this->events = Doctrine_Core::getTable('Event')
      ->createQuery()
      ->where('patient_id = ?', array($id))
      ->orderBy('date DESC')
      ->execute();

    // Generate Event form
    if (empty($this->eventForm)) {
      $this->eventForm = new EventForm(array(), array('patient' => $this->patient));
    }

    $this->initSearchForm();
    
    if (empty($this->patient)) {
      return $this->forward404('This patient does not exists !');
    } else {
      return sfView::SUCCESS;
    }
  }

 /**
  * Executes list action
  *
  * @param sfRequest $request A request object
  */
  public function executeList(sfWebRequest $request)
  {
    // Search for a patient...
    $search = '';

    if ($request->isMethod('post')) {
      $search = $request->getParameter('search');
      
      $this->list = Doctrine_Core::getTable('Patient')
        ->createQuery()
        ->where('firstname LIKE ? OR lastname LIKE ?', array('%' . $search . '%', '%' . $search . '%'))
        ->execute();

      // Unique record found !!!
      if (count($this->list) == 1) {
        $this->redirect('@patient_view?id=' . $this->list[0]->id);
      }

    // List all patients !
    } else {
      $this->list = Doctrine_Core::getTable('Patient')->findAll();
    }

    $this->initSearchForm($search);

    return sfView::SUCCESS;
  }

 /**
  * Executes event create action
  *
  * @param sfRequest $request A request object
  */
  public function executeEventCreate(sfWebRequest $request)
  {
    
    // Request parameters
    $id = $request->getParameter('id');
    $this->patient = Doctrine_Core::getTable('Patient')->findOneById($id);

    // Create an event
    $eventForm = new EventForm(array(), array('patient' => $this->patient));
    $eventForm->bind($request->getParameter($eventForm->getName()), $request->getFiles($eventForm->getName()));
    
    if ($eventForm->isValid()) {
      $eventForm->save();
      $this->redirect('@patient_view?id=' . $id);
    } else {
      $this->eventForm = $eventForm;
      $this->setTemplate('view');
      $this->executeView($request);
    }
  }

  /**
   * Init search form
   * @param String $default Default search value
   */
  private function initSearchForm($default = '')
  {
    $this->defaultSearch = $default;
  }
}
