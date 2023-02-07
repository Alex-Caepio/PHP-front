<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Contact extends ActiveRecord
{
//    public $name;
//    public $email;
//    public $subject;
//    public $body;
//    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email'], 'required'],
            // email has to be a valid email address
            ['email', 'email']
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    public function beforeSave($insert)
    {
        if ($this->isNewRecord) {
            $this->created_at = date("Y-m-d H:i:s");
        }

        if ($this->isNewRecord) {
            $this->updated_at = date("Y-m-d H:i:s");
        }

        return parent::beforeSave($insert);
    }
}