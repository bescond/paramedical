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
  	foreach($this as $formField) {
  		$formField->getWidget()->setAttributes(array('class' => $formField->getName()));
  	} 
  }
}
