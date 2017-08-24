<?php
use yii\db\Migration;


class m170822_064626_rbac extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $rbac = \Yii::$app->authManager;

        $guest = $rbac->createRole('guest');
        $guest->description = 'Посетитель';
        $rbac->add($guest);
        $user = $rbac->createRole('user');
        $user->description = 'Пользователь';
        $rbac->add($user);

        $admin = $rbac->createRole('admin');
        $admin->description = 'Может всё';
        $rbac->add($admin);
        $rbac->addChild($admin, $user);
        $rbac->addChild($user, $guest);
        $rbac->assign(
            $admin,
            \app\models\User::findOne([
                'username' => 'php'])->id
        );

        $rbac->assign(
            $user,
            \app\models\User::findOne([
                'username' => 'user'])->id
        );

    }
    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $manager = \Yii::$app->authManager;
        $manager->removeAll();
    }

}