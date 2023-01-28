<?php

namespace app\controllers;

use app\models\User;
use Yii;

use yii\web\Controller;


class UserController extends Controller
{
    public function actionSignup()
    {
        //write code to input data from request into database
        $user = new User();
        $formData = Yii::$app->request->post();
        $user->username = $formData['username'];
        $user->email = $formData['email'];
        $user->password = $formData['password'];
        $user->save();
    }

    //write function for reading data from database
    public function actionRead()
    {
        return User::find()->all();
    }
    //write function for updating data in database
    public function actionUpdate()
    {
        $formData = Yii::$app->request->post();
        $user = User::findOne($formData['id']);
        $user->username = $formData['username'];
        $user->email = $formData['email'];
        $user->password = $formData['password'];
        $user->save();
    }
    //write function for deleting data from database
    public function actionDelete()
    {
        $formData = Yii::$app->request->post();
        $user = User::findOne($formData['id']);
        $user->delete();
    }
}