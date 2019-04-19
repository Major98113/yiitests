<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'username')->textInput(['autofocus' => true]); ?>

    <?=$form->field($model, 'email')->textInput(); ?>

    <?=$form->field($model, 'password')->passwordInput(); ?>

    <div class="form-group">
        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
