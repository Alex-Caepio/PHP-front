<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;

//    public function rules()
//    {
//        return [
//            // username and password are both required
//            [['username', 'email', 'password'], 'required'],
//            // rememberMe must be a boolean value
//            [['email'], 'email'],
//            // password is validated by validatePassword()
//            //['password'],
//        ];
//    }

//    public function attributeLabels()
//    {
//        return [
//            'username' => 'Username',
//            'email' => 'Email'
//        ];
//    }
}