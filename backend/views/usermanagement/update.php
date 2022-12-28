<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UserManagement $model */

$this->title = 'Update User Management: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'User Managements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-management-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
