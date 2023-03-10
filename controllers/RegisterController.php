<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\base\Exception;
use yii\web\Controller;

class RegisterController extends Controller
{
    /**
     * @throws Exception
     */
    public function actionSignup()
    {
        $user = new User(Yii::$app->request->post('User'));

        if ($user->save()) {
            Yii::$app->getSession()->setFlash('success', 'You have successfully registered');
        } else {
            Yii::$app->getSession()->setFlash('error', 'Error');
        }
        return $this->render('signup', [
            'user' => $user,
        ]);
    }
}