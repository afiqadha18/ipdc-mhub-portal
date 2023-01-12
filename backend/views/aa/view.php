<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Aa $model */

$this->title = $model->aa_id;
$this->params['breadcrumbs'][] = ['label' => 'Aa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'aa_id' => $model->aa_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'aa_id' => $model->aa_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'aa_id',
            'aa_uname',
            'aa_pass',
            'aa_desc',
            'created_by',
            'create_date',
        ],
    ]) ?>

</div>
