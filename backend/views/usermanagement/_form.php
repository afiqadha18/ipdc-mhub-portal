<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\UserManagement $model */
/** @var yii\widgets\ActiveForm $form */

$curr_date = date('H:i:s Y-m-d');
$int_date = strtotime($curr_date);

?>

<div class="user-management-form">

    <?php $form = ActiveForm::begin([

    ]); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <?= $form->field($model, 'username', ['options' => ['autocomplete' => 'off', 'class' => 'form-content']])->textInput(array(
                    'size' => 50,
                    'maxlength' => 50 ,
                    'disabled' => false,
                    'placeholder' => 'ipdc_admin',
                    'class'=>'form-custom form-control',
                )) ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?= $form->field($model, 'password', ['options' => ['autocomplete' => 'off' , 'class' => 'form-content']])->passwordInput(array(
                    'size' => 50,
                    'maxlength' => 50 ,
                    'disabled' => false,
                    'class'=>'form-custom form-control',
                )) ?>
            </div>
            <div class="col">
            <?= $form->field($model, 'password', ['options' => ['autocomplete' => 'off' , 'class' => 'form-content']])->passwordInput(array(
                    'size' => 50,
                    'maxlength' => 50 ,
                    'disabled' => false,
                    'class'=>'form-custom form-control',
                )) ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?= $form->field($model, 'fullname', ['options' => ['autocomplete' => 'off' , 'class' => 'form-content']])->textInput(array(
                    'size' => 50,
                    'maxlength' => 50 ,
                    'disabled' => false,
                    'placeholder' => 'IPDC Admin',
                    'class'=>'form-custom form-control',
                )) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'email', ['options' => ['autocomplete' => 'off' , 'class' => 'form-content']])->textInput(array(
                    'size' => 50,
                    'maxlength' => 50 ,
                    'disabled' => false,
                    'placeholder' => 'admin@ipdc.asia',
                    'class'=>'form-custom form-control',
                )) ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?= $form->field($model, 'role' , ['options' => ['autocomplete' => 'off' , 'class' => 'form-content']])->dropDownList([
                    'Super Admin' => 'Super Admin',
                    'Admin' => 'Admin',
                    'Level 2' => 'Level 2',
                    'Read-only' => 'Read-only',
                    'IPDC System' => 'IPDC System'
                ], [
                    'prompt'=>'Choose User Role',
                    'class'=>'form-custom form-control',
                ])?>
            </div>
            <div class="col">
                <?= $form->field($model, 'group' , ['options' => ['autocomplete' => 'off' , 'class' => 'form-content']])->dropDownList([
                    'System Admin' => 'System Admin',
                    'Engineer' => 'Engineer',
                    'Developer' => 'Developer', 
                    'Management' => 'Management',
                    'System' => 'System',
                    'Others' => 'Others'
                ], [
                    'prompt'=>'Choose User Group',
                    'class'=>'form-custom form-control',
                ])?>
            </div>
            <div class="col">
                <?= $form->field($model, 'status' , ['options' => ['autocomplete' => 'off' , 'class' => 'form-content']])->dropDownList([
                    '1' => 'Active',
                    '0' => 'In-Active'
                ], [
                    'prompt'=>'Choose User Status',
                    'class'=>'form-custom form-control',
                ])?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?= $form->field($model, 'create_by' , ['options' => ['autocomplete' => 'off' , 'class' => 'form-content']])->textInput(array(
                    'size' => 50,
                    'maxlength' => 50 ,
                    'disabled' => false,
                    'value' => Yii::$app->user->identity->username,
                    'class'=>'form-custom-disable form-control',
                )) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'create_date' , ['options' => ['autocomplete' => 'off' , 'class' => 'form-content']])->dropDownList([
                    $int_date => $curr_date
                ], [
                    'class'=>'form-custom-disable-dropdown form-control',
                ])?>
            </div>
        </div>
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
                <?= $form->field($model, 'remark')->textarea(array(
                    'size' => 50,
                    'maxlength' => 50 ,
                    'disabled' => false,
                    'class'=>'form-custom form-control',
                )) ?>
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
