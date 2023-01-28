<?php

/** @var app\models\User $user */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="site-signup">
    <?php $form = ActiveForm::begin(); ?>
    <?php $this->registerCsrfMetaTags() ?>
        <?= $form->field($user, 'username') ?>
        <?= $form->field($user, 'email') ?>
        <?= $form->field($user, 'password')->passwordInput() ?>
            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
            </div>
    <?php ActiveForm::end(); ?>
</div>



