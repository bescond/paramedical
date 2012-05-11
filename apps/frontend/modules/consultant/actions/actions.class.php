<?php

/**
 * Consultant actions.
 *
 * @package    apps.frontend.modules.consultant.actions
 * @author     Mathieu Bescond <mbescond@gmail.com>
 * @link       https://github.com/bescond/paramedical
 */
class consultantActions extends sfActions
{
 /**
  * Executes show action
  *
  * @param sfRequest $request A request object
  */
  public function executeShow(sfWebRequest $request)
  {
    $this->consultant = $this->getRoute()->getObject();
    $this->form = new ConsultantForm($this->consultant);
  }

 /**
  * Executes show action
  *
  * @param sfRequest $request A request object
  */
  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new ConsultantForm($this->getRoute()->getObject());
    $this->processForm($request, $this->form);

    $this->setTemplate('show');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
  	$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

  	if ($form->isValid()) {
  		$consultant = $form->save();
  		$this->redirect($this->generateUrl('consultant_show', $consultant));
      }
  }
}
