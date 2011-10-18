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

}
