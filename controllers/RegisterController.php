<?php

namespace app\controllers;

use app\models\SignupForm;
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
        //write code to register user using SignupForm
        $formData = Yii::$app->request->post();
        $user = new User($formData);

//        if ($user->load(Yii::$app->request->post()) && $user->validate()) {
//
//            if ($user->save()) {
//                Yii::$app->getSession()->setFlash('success', 'You have successfully registered');
//            } else {
//                Yii::$app->getSession()->setFlash('error', 'Error');
//            }
//            return $user;
//        }
        $user->save();

        return $this->render('signup', [
            'user' => $user,
        ]);

    }
}