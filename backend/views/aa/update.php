<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Aa $model */

$this->title = 'mHub . AA - Update: ' . $model->aa_id;
$this->params['breadcrumbs'][] = ['label' => 'Aas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aa_id, 'url' => ['view', 'aa_id' => $model->aa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
