<?php

use yii\db\Schema;
use yii\db\Migration;

class m150921_123501_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('users',[
            'id'=>'pk',
            'login'=>'string NOT NULL',
            'family'=>'string NOT NULL',
            'name'=>'string NOT NULL',
            'father'=>'string NOT NULL',
            'email'=>'string NOT NULL',
            'pass'=>'string NOT NULL',
            'phone'=>'string NOT NULL',
            'rights'=>'string NOT NULL'
        ]);
    }

    public function down()
    {
        $this->dropTable('users');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
