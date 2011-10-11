<?php use_helper('I18N', 'Date') ?>
<?php include_partial('consultant/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Consultant', array(), 'messages') ?></h1>

  <?php include_partial('consultant/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('consultant/form_header', array('consultant' => $consultant, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('consultant/form', array('consultant' => $consultant, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('consultant/form_footer', array('consultant' => $consultant, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
