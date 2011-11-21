<?php
use_helper('I18N');
use_helper('jQuery');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="global">
      <div id="global_header">
        <?php include_partial('global/header'); ?>
      </div>
      <div id="global_content">
        <?php echo $sf_content ?>
      </div>
      <div id="global_footer">
        <?php include_partial('global/footer'); ?>
      </div>
    </div>
  </body>
</html>