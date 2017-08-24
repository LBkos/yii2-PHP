<?php

use yii\db\Migration;

class m170824_053013_add extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%users}}', 'created_at', 'string');
        $this->addColumn('{{%users}}', 'updated_at', 'string');
    }

    public function safeDown()
    {
        $this->dropColumn('created_at');
        $this->dropColumn('updated_at');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170824_053013_add cannot be reverted.\n";

        return false;
    }
    */
}
