<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Response;

class AuthController extends Controller
{
//    public function actionLogin($username, $password)
//    {
//        $user = User::find()->where(['username' => $username, 'password' => $password])->one();
//        if ($user) {
//            return true;
//        } else {
//            return false;
//        }
//    }

    public function actionLogin(){
        if (Yii::$app->request->isPost) {
            $username = Yii::$app->request->post('username');
            $password = Yii::$app->request->post('password');
            $user = User::findByUsername($username);
            if ($user && Yii::$app->getSecurity()->validatePassword($password, $user->password_hash)) {
                Yii::$app->user->login($user);
                return $this->goBack();
            }
        }
        return ("You logged in");
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
    }
}