<?php

/**
 * patient module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage patient
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePatientGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'patient' : 'patient_'.$action;
  }
}
