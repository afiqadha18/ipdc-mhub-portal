<?php

use common\models\UserManagement;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'User Managements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-management-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Management', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'username',
            'password',
            'fullname',
            'email:email',
            //'role',
            //'group',
            //'status',
            //'create_by',
            //'create_date',
            //'update_by',
            //'update_date',
            //'remark:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UserManagement $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'user_id' => $model->user_id]);
                 }
            ],
        ],
    ]); ?>


</div>
