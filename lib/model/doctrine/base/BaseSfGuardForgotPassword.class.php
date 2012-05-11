<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SfGuardForgotPassword', 'doctrine');

/**
 * BaseSfGuardForgotPassword
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property string $unique_key
 * @property timestamp $expires_at
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property SfGuardUser $SfGuardUser
 * 
 * @method integer               getId()          Returns the current record's "id" value
 * @method integer               getUserId()      Returns the current record's "user_id" value
 * @method string                getUniqueKey()   Returns the current record's "unique_key" value
 * @method timestamp             getExpiresAt()   Returns the current record's "expires_at" value
 * @method timestamp             getCreatedAt()   Returns the current record's "created_at" value
 * @method timestamp             getUpdatedAt()   Returns the current record's "updated_at" value
 * @method SfGuardUser           getSfGuardUser() Returns the current record's "SfGuardUser" value
 * @method SfGuardForgotPassword setId()          Sets the current record's "id" value
 * @method SfGuardForgotPassword setUserId()      Sets the current record's "user_id" value
 * @method SfGuardForgotPassword setUniqueKey()   Sets the current record's "unique_key" value
 * @method SfGuardForgotPassword setExpiresAt()   Sets the current record's "expires_at" value
 * @method SfGuardForgotPassword setCreatedAt()   Sets the current record's "created_at" value
 * @method SfGuardForgotPassword setUpdatedAt()   Sets the current record's "updated_at" value
 * @method SfGuardForgotPassword setSfGuardUser() Sets the current record's "SfGuardUser" value
 * 
 * @package    paramedical
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSfGuardForgotPassword extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_forgot_password');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('user_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('unique_key', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('expires_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('SfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}