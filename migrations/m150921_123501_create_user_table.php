<?php

use yii\db\Schema;
use yii\db\Migration;

class m150921_123501_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('users',[
            'id'=>Schema::TYPE_PK,
            'login'=>Schema::TYPE_STRING.' NOT NULL',
            'family'=>Schema::TYPE_STRING.' NOT NULL',
            'name'=>Schema::TYPE_STRING.' NOT NULL',
            'father'=>Schema::TYPE_STRING.' NOT NULL',
            'email'=>Schema::TYPE_STRING.' NOT NULL',
            'pass'=>Schema::TYPE_STRING.' NOT NULL',
            'phone'=>Schema::TYPE_STRING.' NOT NULL',
            'rights'=>Schema::TYPE_STRING.' NOT NULL',
            'auth_key'=>Schema::TYPE_STRING.'(32) NOT NULL',
            'status'=>Schema::TYPE_SMALLINT.' NOT NULL',
            'created_at'=>Schema::TYPE_INTEGER.' NOT NULL',
            'updated_at'=>Schema::TYPE_INTEGER.' NOT NULL'
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
