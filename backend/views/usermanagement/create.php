<?php

use yii\helpers\Html;
use yii\bootstrap5\Modal;

/** @var yii\web\View $this */
/** @var common\models\UserManagement $model */

$this->title = 'Create User Management';
$this->params['breadcrumbs'][] = ['label' => 'User Managements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-management-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    

    <?=
        $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
