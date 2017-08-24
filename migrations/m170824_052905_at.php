<?php

use yii\db\Migration;

class m170824_052905_at extends Migration
{
    public function safeUp()
    {
        $this->dropColumn('{{%users}}', 'created_at', 'string');
        $this->dropColumn('{{%users}}', 'updated_at', 'string');
    }

    public function safeDown()
    {
        $this->create('created_at');
        $this->create('updated_at');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170824_052905_at cannot be reverted.\n";

        return false;
    }
    */
}
