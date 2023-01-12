<?php

use common\models\Aa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'mHub . AA';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'aa_id',
            'aa_uname',
            'aa_pass',
            'aa_desc',
            'created_by',
            'create_date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Aa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'aa_id' => $model->aa_id]);
                 }
            ],
        ],
    ]); ?>


</div>
