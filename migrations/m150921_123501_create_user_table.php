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
            'father'=>Schema::TYPE_STRING,
            'email'=>Schema::TYPE_STRING.' NOT NULL',
            'password'=>Schema::TYPE_STRING.' NOT NULL',
            'phone'=>Schema::TYPE_STRING,
//            'rights'=>Schema::TYPE_STRING,
//            'auth_key'=>Schema::TYPE_STRING,
//            'status'=>Schema::TYPE_SMALLINT,
//            'created_at'=>Schema::TYPE_INTEGER,
//            'updated_at'=>Schema::TYPE_INTEGER
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
