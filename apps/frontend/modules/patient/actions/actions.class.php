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
    $this->patient = Doctrine_Core::getTable('Patient')
      ->find(array($id));

    // Get Events
    $this->events = Doctrine_Core::getTable('Event')
      ->createQuery()
      ->where('patient_id = ?', array($id))
      ->execute();

    // Generate Event form
    $this->eventForm = new EventForm();

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
    if ($request->isMethod('post'))
    {
      $search = $request->getParameter('search');
      $this->list = Doctrine_Core::getTable('Patient')
        ->createQuery()
        ->where('firstname LIKE ? OR lastname LIKE ?', array('%' . $search . '%', '%' . $search . '%'))
        ->execute();

      // Unique record found !!!
      if (count($this->list) == 1) {
        $this->redirect('patient/view?id=' . $this->list[0]->id);
      }

    // List all patients !
    } else {
      $this->list = Doctrine_Core::getTable('Patient')
        ->findAll();
    }

    $this->initSearchForm($search);

    return sfView::SUCCESS;
  }

  /**
   * Init search form
   * @param String $default Default search value
   */
  private function initSearchForm($default = '') {
    $this->form = new BaseForm();
    $this->form->setWidgets(array(
      'search'    => new sfWidgetFormInputText(),
    ));
    $this->form->setDefault('search', $default);
  }
}
