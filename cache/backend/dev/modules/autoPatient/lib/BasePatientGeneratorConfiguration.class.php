<?php

/**
 * patient module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage patient
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePatientGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%firstname%% - %%lastname%% - %%birthdate%% - %%address%% - %%zip%% - %%city%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Patient List';
  }

  public function getEditTitle()
  {
    return 'Edit Patient';
  }

  public function getNewTitle()
  {
    return 'New Patient';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'firstname',  2 => 'lastname',  3 => 'birthdate',  4 => 'address',  5 => 'zip',  6 => 'city',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'firstname' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'lastname' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'birthdate' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'address' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'zip' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'city' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'firstname' => array(),
      'lastname' => array(),
      'birthdate' => array(),
      'address' => array(),
      'zip' => array(),
      'city' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'firstname' => array(),
      'lastname' => array(),
      'birthdate' => array(),
      'address' => array(),
      'zip' => array(),
      'city' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'firstname' => array(),
      'lastname' => array(),
      'birthdate' => array(),
      'address' => array(),
      'zip' => array(),
      'city' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'firstname' => array(),
      'lastname' => array(),
      'birthdate' => array(),
      'address' => array(),
      'zip' => array(),
      'city' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'firstname' => array(),
      'lastname' => array(),
      'birthdate' => array(),
      'address' => array(),
      'zip' => array(),
      'city' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'PatientForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'PatientFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
