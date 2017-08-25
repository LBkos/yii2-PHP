<?php

use yii\db\Migration;

class m170825_063652_balance extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%users}}', 'balance', 'string');
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
        echo "m170825_063652_balance cannot be reverted.\n";

        return false;
    }
    */
}
