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
  	// Request parameter
    $current_date = strtotime($request->getParameter('month').'-'.$request->getParameter('month').'-'.$request->getParameter('year'));

    // calcaulte current date
    $this->calculateMonth($current_date, 'now');

  	return sfView::SUCCESS;
  }

 /**
  * Executes next action
  *
  * @param sfRequest $request A request object
  */
  public function executeNext(sfWebRequest $request)
  {
    // Request parameter  
    $current_date = strtotime($request->getParameter('month').'-'.$request->getParameter('month').'-'.$request->getParameter('year'));
    
    var_dump($current_date);
    die;

    // calculate next month
    $date = $this->calculateMonth($current_date, '+1 month');

    // redirect to view template
    $this->redirect('@patient_view?year=' . $date['year'] . '&month=' . $date['mon'] . '&day=' . $date['mday']);
  }

 /**
  * Executes preivous action
  *
  * @param sfRequest $request A request object
  */
  public function executePrevious(sfWebRequest $request)
  {
    // Request parameter
    $current_date = strtotime($request->getParameter('month').'-'.$request->getParameter('month').'-'.$request->getParameter('year'));
   
    var_dump($current_date);
    die;

    // calculate preivous month
    $date = $this->calculateMonth($current_date, '-1 month');

    // redirect to view template
    $this->redirect('@patient_view?year=' . $date['year'] . '&month=' . $date['mon'] . '&day=' . $date['mday']);
    
  }

 /**
  * Calculate month
  *
  * @param String $default Default date value
  * @param String $month add or substract month
  */
  private function calculateMonth($defaultDate = '', $monthCalculated = '')
  {
    // calculate next month
    $month = date('d-m-Y', strtotime($monthCalculated, $defaultDate));
    $date = getdate(strtotime($month));

    $this->year = $date['year'];
    $this->month = $date['mon'];
    $this->day = $date['mday'];

    return $date;
  }

}
