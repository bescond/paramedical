<?php

class sfWidgetFormSchemaFormatterParamedical extends sfWidgetFormSchemaFormatter
{
  protected
    $rowFormat             = '<div class="field%row_class%">
                              %label% %error% %field%
                              %help% %hidden_fields%</div>',
    $errorRowFormat        = '<div>%errors%</div>',
    $errorListFormatInARow = '<span class="errors">%errors%</span>',
    $errorRowFormatInARow  = '%error%',
    $helpFormat            = '<div class="form_help">%help%</div>',
    $decoratorFormat       = '<div>%content%</div>';

  public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
  {
    $row = parent::formatRow(
      $label,
      $field,
      $errors,
      $help,
      $hiddenFields
    );
 
    return strtr($row, array(
      '%row_class%' => (count($errors) > 0) ? ' error' : '',
    ));
  }
}