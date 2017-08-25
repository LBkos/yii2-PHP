<?php

use yii\db\Migration;

class m170825_063244_add extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->string(),
            'updated_at' => $this->string()
        ]);

        $this->createTable('{{%transfer}}',[
            'id' => $this->primaryKey(),
            'transfer' => $this->integer()->comment('перевод'),
            'id_users' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('FK_transfer_sport', '{{%transfer}}', 'id_users', '{{%users}}', 'id');
    }


    public function safeDown()
    {
        $this->dropTable('{{%transfer}}');
        $this->dropTable('{{%users}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170805_043904_AddUsersTable cannot be reverted.\n";

        return false;
    }
    */
}
