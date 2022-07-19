<?php

namespace app\commands;

use Faker\Factory;
use Yii;
use yii\console\Controller;
use app\models\User;
class SeedController extends Controller
{
    /**
     * @throws \yii\base\Exception
     */
    public function actionIndex()
    {
        $faker = Factory::create();
        $user = new User();

        $user->setIsNewRecord(true);

        $user->id = null;
        $user->username = 'user';
        $user->password = \Yii::$app->security->generatePasswordHash('user');
        $user->auth_key = \Yii::$app->security->generateRandomString();
        $user->access_token = \Yii::$app->security->generateRandomString();

        $user->save();
    }
}
