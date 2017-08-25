<?php

use yii\db\Migration;

class m170825_064107_bal extends Migration
{
    public function safeUp()
    {
        $this->update('{{%users}}', 'balance', 'default = 100');
    }

    public function safeDown()
    {
        $this->dropColumn('balance');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170825_064107_bal cannot be reverted.\n";

        return false;
    }
    */
}
