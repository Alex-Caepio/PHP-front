<?php

namespace app\controllers;

use app\models\Contact;
use Yii;
use yii\web\Controller;


class ContactController extends Controller
{
    public function actionIndex()
    {

        $contact = new Contact();
        $formData = Yii::$app->request->post();
        $contact->name = $formData['name'];
        $contact->email = $formData['email'];
        $contact->verifyCode = $formData['verifyCode'];
        $contact->save();
    }


    public function actionRead()
    {
        return Contact::find()->all();
    }


    public function actionUpdate($id)
    {
        $formData = Yii::$app->request->post();
        $contact = Contact::findOne($id);
        $contact->name = $formData['name'];
        $contact->email = $formData['email'];
        $contact->verifyCode = $formData['verifyCode'];
        $contact->save();
    }

    public function actionDelete($id)
    {
        //$formData = Yii::$app->request->post();
        $contact = Contact::findOne($id);
        $contact->delete();
    }
}