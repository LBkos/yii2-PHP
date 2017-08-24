<?php

use yii\db\Migration;

class m170824_051156_drop extends Migration
{
    public function safeUp()
    {
        $this->dropTable('transfer');
        $this->dropTable('profile');
        $this->dropTable('users');
    }

    public function safeDown()
    {



        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170824_051156_drop cannot be reverted.\n";

        return false;
    }
    */
}
