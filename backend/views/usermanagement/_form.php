<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\UserManagement $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-management-form">

    <?php $form = ActiveForm::begin([
    ]); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <?= $form->field($model, 'username', ['options' => ['autocomplete' => 'off']])->textInput(array('size' => 50, 'maxlength' => 50 , 'disabled' => false, 'placeholder' => 'e.g: ipdc_admin')) ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?= $form->field($model, 'password', ['options' => ['autocomplete' => 'off']])->passwordInput(['maxlength' => true]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'password', ['options' => ['autocomplete' => 'off']])->passwordInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?= $form->field($model, 'fullname')->textInput((array('size' => 50, 'maxlength' => 50 , 'disabled' => false, 'placeholder' => 'e.g: IPDC Admin'))) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'email')->textInput((array('size' => 50, 'maxlength' => 50 , 'disabled' => false, 'placeholder' => 'e.g: admin@ipdc.asia'))) ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?= $form->field($model, 'role')->dropDownList(['Super Admin' => 'Super Admin', 'Admin' => 'Admin', 'Level 2' => 'Level 2', 'Read-only' => 'Read-only']) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'group')->dropDownList(['System Admin' => 'System Admin', 'Engineer' => 'Engineer', 'Developer' => 'Developer', 'Management' => 'Management', 'Others' => 'Others']) ?>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col">
                <?= $form->field($model, 'create_by')->dropDownList([Yii::$app->user->identity->username => Yii::$app->user->identity->username]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'create_date')->dropDownList(['test' => 'test']) ?>
            </div>
        </div> -->
        <!-- <div class="row">
            <div class="col">
                <?= $form->field($model, 'update_by')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'update_date')->textInput() ?>
            </div>
        </div> -->
        <div class="row">
            <div class="col">
                <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>
            </div>
        </div>
    </div>

    <!-- <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Add User', ['class' => 'btn btn-success btn-modal']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
