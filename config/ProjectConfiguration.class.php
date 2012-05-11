<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony-1.4.2/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfJqueryReloadedPlugin');
    $this->enablePlugins('sfJQueryUIPlugin');
    $this->enablePlugins('sfFormExtraPlugin');

    //sfWidgetFormSchema::setDefaultFormFormatterName('paramedical');
  }

  public function configureDoctrine(Doctrine_Manager $manager)
  {
  	$manager->setCollate('utf8_unicode_ci');
    $manager->setCharset('utf8');
    $manager->setAttribute(Doctrine_Core::ATTR_USE_DQL_CALLBACKS, true);

    Doctrine_Migration_Base::setDefaultTableOptions(
    	array(
			'type'              => 'INNODB',
			'charset'           => 'utf8',
			'collate'           => 'utf8_unicode_ci',
			'use_dql_callbacks' => true,
        )
    );
  }
}
