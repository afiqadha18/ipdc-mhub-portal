<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Aa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aa_id')->textInput() ?>

    <?= $form->field($model, 'aa_uname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aa_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aa_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
