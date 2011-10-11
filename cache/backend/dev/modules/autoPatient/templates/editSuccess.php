<?php use_helper('I18N', 'Date') ?>
<?php include_partial('patient/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Patient', array(), 'messages') ?></h1>

  <?php include_partial('patient/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('patient/form_header', array('patient' => $patient, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('patient/form', array('patient' => $patient, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('patient/form_footer', array('patient' => $patient, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
