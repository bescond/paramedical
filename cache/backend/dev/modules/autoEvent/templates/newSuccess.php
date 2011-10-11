<?php use_helper('I18N', 'Date') ?>
<?php include_partial('event/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Event', array(), 'messages') ?></h1>

  <?php include_partial('event/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('event/form_header', array('event' => $event, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('event/form', array('event' => $event, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('event/form_footer', array('event' => $event, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
