<?php

/**
 * Patient actions
 *
 * @package    apps.frontend.modules.patient.actions
 * @author     Mathieu Bescond <mbescond@gmail.com>
 * @link       https://github.com/bescond/paramedical
 */
class patientActions extends sfActions
{

  public function preExecute()
  {
    $this->initSearchKeywords();
  }

 /**
  * Executes new action
  *
  * @param sfRequest $request A request object
  */
  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PatientForm();
  }

 /**
  * Executes create action
  *
  * @param sfRequest $request A request object
  */
  public function executeCreate(sfWebRequest $request)
  {
    $this->form = new PatientForm();
    $this->processForm($request, $this->form);
  }

 /**
  * Executes show action
  *
  * @param sfRequest $request A request object
  */
  public function executeShow(sfWebRequest $request)
  {
    $this->patient = $this->getRoute()->getObject();
    $this->form = new PatientForm($this->patient);
  }

 /**
  * Executes list action
  *
  * @param sfRequest $request A request object
  */
  public function executeList(sfWebRequest $request)
  {
    if ($request->isMethod('post')) {
      $this->searchKeywords($request);
    } else {
      $this->list = PatientTable::getInstance()->findAll();
    }
  }

 /**
  * Executes update action
  *
  * @param sfRequest $request A request object
  */
  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new PatientForm($this->getRoute()->getObject());
    $this->processForm($request, $this->form);

    $this->setTemplate('show');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
   
    if ($form->isValid()) {
      $patient = $form->save();
      $this->redirect($this->generateUrl('patient_show', $patient));
    }
  }

  /**
   * Init search form
   * @param String $default Default search value
   */
  private function initSearchKeywords($default = '')
  {
    $this->searchKeywords = $default;
  }

  /**
   * search form
   * @param String $search  Value search
   */
  private function searchKeywords(sfWebRequest $request)
  {
    // init search form
    $search = $request->getParameter('keywords');
    $this->initSearchKeywords($search);

    $this->list = PatientTable::getInstance()->findBySearchKeywords($search);
    // Unique record found
    if (count($this->list) == 1) {
      $this->redirect($this->generateUrl('patient_show', $this->list[0]));
    }
  }
}
