<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;




$form = ActiveForm::begin(
    [
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
    ]
);

$form->field()->input();


ActiveForm::end();