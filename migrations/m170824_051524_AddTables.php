<?php

use yii\db\Migration;

class m170824_051524_AddTables extends Migration
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
            'created_at' => 'timestamp with time zone NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp with time zone NOT NULL DEFAULT CURRENT_TIMESTAMP',
        ]);

        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'balance' => $this->integer()->defaultValue(100),
            'id_users' => $this->integer()->comment('id for table users'),
        ]);
        $this->addForeignKey('FK_profile_sport', '{{%profile}}', 'id_users', '{{%users}}', 'id');

        $this->createTable('{{%transfer}}',[
            'id' => $this->primaryKey(),
            'transfer' => $this->integer()->comment('перевод'),
            'id_profile' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('FK_transfer_sport', '{{%transfer}}', 'id_profile', '{{%profile}}', 'id');
    }


    public function safeDown()
    {
        $this->dropTable('{{%transfer}}');
        $this->dropTable('{{%profile}}');
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
