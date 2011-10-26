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
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new BaseForm();
    $this->form->setWidgets(array(
      'search'    => new sfWidgetFormInputText(),
    ));
    
    return sfView::SUCCESS;
  }

 /**
  * Executes search action
  *
  * @param sfRequest $request A request object
  */
  public function executeSearch(sfWebRequest $request)
  {
    if ($request->isMethod('post'))
    {
      $query = Doctrine_Core::getTable('Patient')
        ->createQuery()
        ->where('firstname LIKE ? OR lastname LIKE ?', array('%' . $request->getParameter('search') . '%', '%' . $request->getParameter('search') . '%'))
        ->execute();

      $this->toto = $query[0]->firstname;
    } else {
      $this->forward('patient', 'index');
    }
    return sfView::SUCCESS;
  }

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
    $this->patient = Doctrine_Core::getTable('Patient')
      ->find(array($id));

    // Get Events
    $this->events = Doctrine_Core::getTable('Event')
      ->createQuery()
      ->where('patient_id = ?', array($id))
      ->execute();

    // Generate Event form
    $this->eventForm = new EventForm();

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
    $query = Doctrine_Core::getTable('Patient')
      ->findAll();

    $this->toto = $query;
    return sfView::SUCCESS;
  }

}
