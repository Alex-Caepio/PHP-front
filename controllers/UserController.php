<?php

namespace app\controllers;

use app\models\User;
use Yii;

use yii\web\Controller;
use function MongoDB\BSON\toJSON;


class UserController extends Controller
{
    public function actionIndex()
    {
        $user = new User();
        $formData = Yii::$app->request->post();
        $user->username = $formData['username'];
        $user->email = $formData['email'];
        $user->password = $formData['password'];
        $user->save();
        return ("You created a user");
    }

    public function actionRead()
    {
        return \yii\helpers\Json::encode(User::find()->asArray()->all());
    }

    public function actionUpdate($id)
    {
        $formData = Yii::$app->request->post();
        $user = User::findOne($id);
        $user->username = $formData['username'];
        $user->email = $formData['email'];
        $user->password = $formData['password'];
        $user->save();
        return ("You updated a user");
    }

    public function actionDelete($id)
    {
        $user = User::findOne($id);
        $user->delete();
        return("You deleted a user");
    }
}