<?php

/**
 * calendar actions.
 *
 * @package    paramedical
 * @subpackage calendar
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class calendarActions extends sfActions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeView(sfWebRequest $request)
  {
    $this->defaultSearch = '';

    $this->events = Doctrine_Core::getTable('Event')->findAll();

  	return sfView::SUCCESS;
  }

}
