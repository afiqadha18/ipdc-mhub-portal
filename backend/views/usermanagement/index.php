<?php

use common\models\UserManagement;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap5\Modal;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'mHub . User Management';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-management-index">

    <?php 
        Modal::begin([
            'title' => '<div class="title-main">Create User</div>',
            'id' => 'modalCreateUser',
            'size' => 'modal-xl',
        ]);

        echo "<div id='modalCreateUserContent'></div>";

        Modal::end();

    ?>


    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <div class="title-main">
        User Management
    </div>
    <div class="title-sub">
        View . Updates . Add . Delete
    </div>
    <div class="title-description">
        to be registered the in equipment
        <br>
    </div>

    <div class="row-space"></div>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'user_id',
            'username',
            'password',
            'fullname',
            'email:email',
            'role',
            'group',
            'status',
            'create_by',
            'create_date',
            'update_by',
            'update_date',
            'remark:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UserManagement $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'user_id' => $model->user_id]);
                 }
            ],
        ],
    ]); ?>

    <p>
        <?= Html::button('Create User', ['value' => Url::to('/usermanagement/create'), 'class' => 'btn btn-success', 'id' => 'btnCreateUser']) ?>
        <!-- <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>


</div>
